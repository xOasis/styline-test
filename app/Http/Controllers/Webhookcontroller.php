<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    //

    public function webhookPost(Request $request) {
        //return $request->all();
        Log::info('message', $request->all());

        return $request->all();
    }
}
