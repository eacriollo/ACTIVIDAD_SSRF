<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SsrfController extends Controller
{
    // Endpoint vulnerable SSRF
    public function checkService(Request $request)
    {
        $url = $request->input('endpoint');

        $response = Http::get($url);

        return response()->json([
            'requested_url' => $url,
            'response' => $response->body()
        ]);
    }

    // 🛡PROTEGIDO
    public function checkServiceSafe(Request $request)
    {
        $url = $request->input('endpoint');

        // Bloqueo básico SSRF
        if (
            str_contains($url, '127.0.0.1') ||
            str_contains($url, 'localhost') ||
            str_contains($url, '.test')
        ) {
            return response()->json([
                'error' => 'Internal services blocked'
            ], 403);
        }

        $response = Http::get($url);

        return response()->json([
            'requested_url' => $url,
            'response' => $response->body()
        ]);
    }
}
