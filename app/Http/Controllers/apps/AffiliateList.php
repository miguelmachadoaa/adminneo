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

    $result_code = 0;

    //ejecucion de una funcion 

    //$sucursales = DB::select("select *    from  sucursales.suc_fn_sucursales_lectura()");

    //ejecutar funcion con parametro

    $sucursales = DB::select("select *
    from  afiliados.afi_fn_afiliados_por_cuenta(?)", ['1']);

    //ejecucion de procedimiento almacenado

    //$sucursales = Sucursales::suc_fn_sucursales_lectura();

    dd($sucursales);


    return view('apps.affiliate.list');
  }
}
