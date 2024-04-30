<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PermisosRepository;


class AffiliateDetail extends Controller
{
  public function __construct(
    private readonly PermisosRepository $permisosRepository
  )
    {
    }

  public function index()
  {
    $permisos = $this->permisosRepository->all();

    return view('apps.affiliate.detail', compact('permisos'));
  }
}
