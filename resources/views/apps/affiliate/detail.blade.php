@extends('layouts/layoutMaster')

@section('title', 'Detalle de Afiliados')

@section('vendor-style')
    @vite(['resources/css/app.css', 'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss', 'resources/assets/vendor/libs/select2/select2.scss', 'resources/assets/vendor/libs/@form-validation/form-validation.scss'])
@endsection

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/moment/moment.js', 'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js', 'resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/@form-validation/popular.js', 'resources/assets/vendor/libs/@form-validation/bootstrap5.js', 'resources/assets/vendor/libs/@form-validation/auto-focus.js', 'resources/assets/vendor/libs/cleavejs/cleave.js', 'resources/assets/vendor/libs/cleavejs/cleave-phone.js'])
@endsection

@section('page-script')
    @vite('resources/assets/js/app-user-list.js')
@endsection

@section('content')


    <div class="row">

        <div class="col-sm-9">


            <div class="">
                <div class="card-boy">

                    <div class="nav-align-left mb-4">
                        <ul class="nav nav-tabs" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-cuenta" aria-controls="navs-left-cuenta" tabindex="-1"
                                    aria-selected="true">Cuenta</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-adherentes" aria-controls="navs-left-adherentes"
                                    aria-selected="false" tabindex="-1">Adherentes</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-servicios" aria-controls="navs-left-servicios"
                                    aria-selected="false">Servicios</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-pagos" aria-controls="navs-left-pagos"
                                    aria-selected="false">Pagos</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-historial" aria-controls="navs-left-historial"
                                    aria-selected="false">Historial</button>
                            </li>


                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-notas" aria-controls="navs-left-notas"
                                    aria-selected="false">Notas</button>
                            </li>



                        </ul>
                        <div class="tab-content pt-0 mt-0" style="box-shadow: none; border:none">

                            <div class="tab-pane fade active show" id="navs-left-cuenta" role="tabpanel">

                                <div class="card" style="    border: none;    box-shadow: none;">

                                    <div class="card-header">

                                        @include('apps.shared.bar', ['permiso' => $permisos['cuentas']])
                                    </div>

                                    <div class="card-body">
                                        @include('apps.affiliate.form')
                                    </div>


                                </div>

                            </div>
                            <div class="tab-pane fade" id="navs-left-adherentes" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.shared.bar', [
                                            'permiso' => $permisos['adherentes'],
                                        ])
                                    </div>
                                    <div class="card-body">
                                        @include('apps.affiliate.adherentes')
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="navs-left-servicios" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.shared.bar', [
                                            'permiso' => $permisos['servicios'] ?? [],
                                        ])
                                    </div>
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-left-pagos" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.shared.bar', [
                                            'permiso' => $permisos['pagos'] ?? [],
                                        ])
                                    </div>
                                    <div class="card-body">
                                        @include('apps.affiliate.pagos')
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-left-historial" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.shared.bar', ['titulo' => 'Historial'])
                                    </div>
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-left-notas" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.shared.bar', ['titulo' => 'Notas'])
                                    </div>
                                    <div class="card-body">
                                        @include('apps.affiliate.notas')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-expand-lg bg-secondary" style="border-radius: 6px; height: 2em;">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="javascript:void(0)">Adherentes</a>


                            <div class="collapse navbar-collapse" id="navbar-ex-6">

                                <ul class="navbar-nav ms-lg-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0);"><i
                                                class="tf-icons navbar-icon bx bx-user"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="tf-icons navbar-icon bx bx-cog"></i></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="card-body">

                    <div class="list-group list-group-flush">
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Bear claw cake
                            biscuit</a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Soufflé pastry pie
                            ice</a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Tart tiramisu
                            cake</a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Bonbon toffee
                            muffin</a>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Dragée tootsie
                            roll</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
