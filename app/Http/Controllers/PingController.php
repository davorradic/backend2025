<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingController extends Controller
{
    public function index()
    {
        $message = 'Pong!';
        $title = 'Ping';
        $description = 'This is a description';
        return view('ping', [
            'message' => $message,
            'title' => $title,
            'description' => $description,
        ]);
    }
}
