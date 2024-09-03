<form id="formAccountSettings" method="POST" onsubmit="return false" class="fv-plugins-bootstrap5 fv-plugins-framework"
    novalidate="novalidate" data-select2-id="formAccountSettings">
    <div class="row" data-select2-id="12">

        <div class="col-5" style="padding: 0em 1.2em 1em 1em;">
            <div class="row">
                @include('apps.shared.bar', [
                    'permiso' => $permisos['modalidad'] ?? [],
                ])
            </div>
            <div class="row mt-4">
                <div class="col ">

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-4 col-form-label">Capital Asegurado </label>
                        <div class="col-md-4">
                            <select class="form-control" name="titular" id="titular">
                                <option value="">Seleccione</option>
                                <option value="re">1000 </option>
                                <option value="re">2000 </option>
                                <option value="re">3000 </option>
                                <option value="re">4000 </option>
                                <option value="re">5000 </option>
                                <option value="re">6000 </option>
                                <option value="re">7000 </option>
                                <option value="re">8000 </option>
                                <option value="re">9000 </option>
                                <option value="re">10000 </option>
                            </select>


                        </div>

                        <div class="col-md-4">
                            <select class="form-control" name="Hijos" id="Hijos">
                                <option value="">Seleccione</option>
                                <option value="re">Rango Etario </option>
                                <option value="re2">Rango Etario 2</option>
                                <option value="re3">Rango Etario 3</option>
                                <option value="unico-afiliado">Unico por afiliado </option>
                                <option value="unico-grupo">Unico por grupo</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-7" style="padding: 0em 1em 1em 1.2em;">
            <div class="row">
                @include('apps.shared.bar', [
                    'permiso' => $permisos['escala'] ?? [],
                ])
            </div>
            <div class="row mt-4">

                <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button style="font-size: 0.8em; padding: 0.6em;" type="button"
                                class="nav-link btn-outline-secondary active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
                                aria-selected="true">Rango Etario 1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button style="font-size: 0.8em; padding: 0.6em;" type="button"
                                class="nav-link btn-outline-secondary" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                                aria-selected="false" tabindex="-1">Rango
                                Etario 2</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button style="font-size: 0.8em; padding: 0.6em;" type="button"
                                class="nav-link btn-outline-secondary" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages"
                                aria-selected="false" tabindex="-1">Rango
                                Etario 3</button>
                        </li>
                    </ul>
                    <div class="tab-content p-0 m-0" style="box-shadow: none;">
                        <div class="tab-pane fade active show" id="navs-pills-top-home" role="tabpanel">
                            @include('apps.plan.re', ['class' => 're_1_'])
                        </div>
                        <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                            @include('apps.plan.re', ['class' => 're_2_'])
                        </div>
                        <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                            @include('apps.plan.re', ['class' => 're_3_'])
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</form>
