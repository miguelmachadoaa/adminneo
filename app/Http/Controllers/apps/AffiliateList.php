<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Afiliados;
use App\Models\Sucursales;
use DB;

class AffiliateList extends Controller
{
  public function index()
  {

    return view('apps.affiliate.list');
    
  }
}
