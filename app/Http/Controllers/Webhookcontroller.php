<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class WebhookController extends Controller
{
    //

    public function webhookPost(Request $request) {
        //return $request->all();
        //Log::info('message', $request->all());

        Storage::put('attempt1.txt', $request->all());
        return $request->all();
    }
}
