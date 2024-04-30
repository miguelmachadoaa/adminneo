<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Afiliados;
use App\Models\Sucursales;
use DB;

class Affiliate extends Controller
{
  public function getAll(Request $request)
  {

    $parametros = $request->all();

    $term = $parametros['search']['value']?$parametros['search']['value']:null;

    $afiliados = null;

    if($term){

     $afiliados = DB::select("select *  from  afiliados.afi_fn_afiliados_search_multisucursal(?)", [$term]);

    }

    return json_encode(['data'=>$afiliados]);
    
  }
}
