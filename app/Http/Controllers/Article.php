<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Article extends Controller
{
  function list(){
    $data = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
    return view('article',['data' => $data]);
  }
}

// 'https://newsapi.org/v2/everything?q=bitcoin&apiKey=27576b4ecdd547d792f8345ed0432ffd'
