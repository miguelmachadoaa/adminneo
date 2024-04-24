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

        <div class="col-sm-12">


            <div class="">
                <div class="card-boy">

                    <div class="nav-align-left mb-4">
                        <ul class="nav nav-tabs" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-datos" aria-controls="navs-left-datos" tabindex="-1"
                                    aria-selected="true">Datos</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-sericio-sepelio" aria-controls="navs-left-sericio-sepelio"
                                    aria-selected="false" tabindex="-1">Sevicio de sepelio</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-seguro-vida" aria-controls="navs-left-seguro-vida"
                                    aria-selected="false">Seguro de Vida</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-cuota-social" aria-controls="navs-left-cuota-social"
                                    aria-selected="false">Cuota social</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-adicionales" aria-controls="navs-adicionales"
                                    aria-selected="false">Adicionales</button>
                            </li>


                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-carencias" aria-controls="navs-left-carencias"
                                    aria-selected="false">Carencias</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-aumentos" aria-controls="navs-left-aumentos"
                                    aria-selected="false">Aumentos</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-especiales" aria-controls="navs-left-especiales"
                                    aria-selected="false">Especiales</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-deudas" aria-controls="navs-left-deudas"
                                    aria-selected="false">Deudas</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-left-pago-diferencial" aria-controls="navs-left-pago-diferencial"
                                    aria-selected="false">Pago diferencial</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-0 mt-0" style="box-shadow: none; border:none">

                            <div class="tab-pane fade active show" id="navs-left-datos" role="tabpanel">

                                <div class="card" style="    border: none;    box-shadow: none;">

                                    <div class="card-header">

                                        @include('apps.affiliate.bar', ['titulo' => 'Datos del Plan'])
                                    </div>

                                    <div class="card-body">
                                        @include('apps.plan.datos')
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-left-sericio-sepelio" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.affiliate.bar', ['titulo' => 'Servicio de sepelio'])
                                    </div>
                                    <div class="card-body">
                                        @include('apps.plan.servicio')
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="navs-left-seguro-vida" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.affiliate.bar', ['titulo' => 'Seguro de Vida'])
                                    </div>
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-left-cuota-social" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.affiliate.bar', ['titulo' => 'Cuota social'])
                                    </div>
                                    <div class="card-body">
                                        @include('apps.plan.social')

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-adicionales" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.affiliate.bar', ['titulo' => 'Adicionales'])
                                    </div>
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-left-carencias" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.affiliate.bar', ['titulo' => 'Carencias'])
                                    </div>
                                    <div class="card-body">
                                        @include('apps.plan.carencias')
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="navs-left-aumentos" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.affiliate.bar', ['titulo' => 'Aumentos'])
                                    </div>
                                    <div class="card-body">
                                        @include('apps.plan.aumentos')
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-left-especiales" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.affiliate.bar', ['titulo' => 'Deudas'])
                                    </div>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-left-deudas" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.affiliate.bar', ['titulo' => 'Pago Diferencial'])
                                    </div>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navs-left-pago-diferencial" role="tabpanel">
                                <div class="card" style="    border: none;    box-shadow: none;">
                                    <div class="card-header">
                                        @include('apps.affiliate.bar', ['titulo' => 'Notas'])
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


    </div>


@endsection
