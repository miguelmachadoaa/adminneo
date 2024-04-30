<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PermisosRepository;

class PlanDetail extends Controller
{
  public function __construct(
    private readonly PermisosRepository $permisosRepository
  )
    {
    }

  public function index()
  {
    return view('apps.plan.detail', [
      'permisos'=> $this->permisosRepository->all()
    ]);
  }
}
