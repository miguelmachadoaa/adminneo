<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AffiliateList extends Controller
{
  public function index()
  {
    return view('apps.affiliate.list');
  }
}
