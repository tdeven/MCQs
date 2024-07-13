<?php

namespace App\Http\Controllers\examination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibraryBasic extends Controller
{
  public function index()
  {
    return view('content.examination.library');
  }
}
