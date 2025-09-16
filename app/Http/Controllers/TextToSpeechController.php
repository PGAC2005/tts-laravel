<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextToSpeechController extends Controller
{
    public function index() {
        return view('welcome');
    }

public function speak(Request $request)
{
    $text = $request->input('text');

    // Montar a URL da API de TTS do Google (idioma pt-BR)
    $url = "https://translate.google.com/translate_tts?ie=UTF-8&tl=pt-BR&client=tw-ob&q=" . urlencode($text);

    // Salvar o áudio em public/audio.mp3
    $audioPath = public_path('audio.mp3');
    file_put_contents($audioPath, file_get_contents($url));

    return view('welcome', [
        'text' => $text,
        'audio' => asset('audio.mp3')
    ]);
}
}
