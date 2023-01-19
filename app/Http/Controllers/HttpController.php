<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    public function index()
    {

        $http = Http::get('http://api.alquran.cloud/v1/quran/en.asad');

        return view('http', ['http' => $http['data']['surahs']]);
    }

    // public function surah(){
    //     $surah = Http::get('http://api.alquran.cloud/v1/quran/en.asad');

    //     return view('surah', ['surah' => $surah['data']['surahs']]);
    // }
}
