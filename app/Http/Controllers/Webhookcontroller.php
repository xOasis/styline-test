<?php

namespace App\Http\Controllers;

use App\GitCommit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class WebhookController extends Controller
{
    public function webhookPost(Request $request) {

        foreach ($request->commits as $tempCommit) {
            $commit = new GitCommit();
            $commit->commit_id = $tempCommit['id'];
            $commit->pusher = $tempCommit['committer']['username'];
            $commit->message = $tempCommit['message'];
            try{
                $commit->save();
            } catch (\Exception $exception){
                Log::error('Commit Exception: '. $exception->getMessage());
                return response('error')->setStatusCode(500);
            }
        }
        return response('success')->setStatusCode(201);
    }

    public function showHooks(Request $request) {
        $hooks = GitCommit::all();
        return view('hooks.hooks', compact('hooks'));
    }
}
