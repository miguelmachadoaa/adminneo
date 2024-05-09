<form id="formAccountSettings" method="POST" onsubmit="return false" class="fv-plugins-bootstrap5 fv-plugins-framework"
    novalidate="novalidate" data-select2-id="formAccountSettings">
    <div class="row" data-select2-id="12">

        <div class="col-6" style="padding: 0em 2em 1em 2em;">
            <div class="row">
                @include('apps.shared.bar', [
                    'permiso' => $permisos['modalidad'] ?? [],
                ])
            </div>
            <div class="row mt-4">
                <div class="col ">

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-3 col-form-label">Titular</label>
                        <div class="col-md-9">
                            <select class="form-control" name="titular" id="titular">
                                <option value="">Seleccione</option>
                                <option value="re">Rango Etario </option>
                                <option value="re2">Rango Etario 2</option>
                                <option value="re3">Rango Etario 3</option>
                                <option value="unico-afiliado">Unico por afiliado </option>
                                <option value="unico-grupo">Unico por grupo</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-3 col-form-label">Conyuge</label>
                        <div class="col-md-9">
                            <select class="form-control" name="titular" id="titular">
                                <option value="">Seleccione</option>
                                <option value="re">Rango Etario </option>
                                <option value="re2">Rango Etario 2</option>
                                <option value="re3">Rango Etario 3</option>
                                <option value="unico-afiliado">Unico por afiliado </option>
                                <option value="unico-grupo">Unico por grupo</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-3 col-form-label">Padres</label>
                        <div class="col-md-9">
                            <select class="form-control" name="Conyuge" id="Conyuge">
                                <option value="">Seleccione</option>
                                <option value="re">Rango Etario </option>
                                <option value="re2">Rango Etario 2</option>
                                <option value="re3">Rango Etario 3</option>
                                <option value="unico-afiliado">Unico por afiliado </option>
                                <option value="unico-grupo">Unico por grupo</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-3 col-form-label">Hijos</label>
                        <div class="col-md-9">
                            <select class="form-control" name="Padres" id="Padres">
                                <option value="">Seleccione</option>
                                <option value="re">Rango Etario </option>
                                <option value="re2">Rango Etario 2</option>
                                <option value="re3">Rango Etario 3</option>
                                <option value="unico-afiliado">Unico por afiliado </option>
                                <option value="unico-grupo">Unico por grupo</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-3 col-form-label">Hermanos</label>
                        <div class="col-md-9">
                            <select class="form-control" name="Padres" id="Padres">
                                <option value="">Seleccione</option>
                                <option value="re">Rango Etario </option>
                                <option value="re2">Rango Etario 2</option>
                                <option value="re3">Rango Etario 3</option>
                                <option value="unico-afiliado">Unico por afiliado </option>
                                <option value="unico-grupo">Unico por grupo</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-3 col-form-label">Otros</label>
                        <div class="col-md-9">
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

        <div class="col-6" style="padding: 0em 2em 1em 2em;">
            <div class="row">
                @include('apps.shared.bar', [
                    'permiso' => $permisos['escala'] ?? [],
                ])
            </div>
            <div class="row mt-4">

                <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link btn-outline-secondary active" role="tab"
                                data-bs-toggle="tab" data-bs-target="#navs-pills-top-home"
                                aria-controls="navs-pills-top-home" aria-selected="true">Rango Etario 1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link btn-outline-secondary" role="tab"
                                data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile"
                                aria-controls="navs-pills-top-profile" aria-selected="false" tabindex="-1">Rango
                                Etario 2</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link btn-outline-secondary" role="tab"
                                data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages"
                                aria-controls="navs-pills-top-messages" aria-selected="false" tabindex="-1">Rango
                                Etario 3</button>
                        </li>
                    </ul>
                    <div class="tab-content p-0 m-0">
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
        <div class="col-6" style="padding: 0em 2em 1em 2em;">

            <div class="row">
                @include('apps.shared.bar', [
                    'permiso' => $permisos['varios'] ?? [],
                ])
            </div>
            <div class="row mt-4">

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-4 col-form-label">Por Adherente</label>
                    <div class="col-md-8">
                        <input type="number " step="1" min="0" class="form-control" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-4 col-form-label">Por Grupo</label>
                    <div class="col-md-8">
                        <input type="number " step="1" min="0" class="form-control" id="">
                    </div>
                </div>
            </div>

        </div>


        <div class="col-6" style="padding: 0em 2em 1em 2em;">

            <div class="row">
                @include('apps.shared.bar', [
                    'permiso' => $permisos['importe-fijos'] ?? [],
                ])
            </div>
            <div class="row mt-4">

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-4 col-form-label">Capital</label>
                    <div class="col-md-8">
                        <input type="number " step="1" min="0" class="form-control" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-4 col-form-label">Reintegro</label>
                    <div class="col-md-8">
                        <input type="number " step="1" min="0" class="form-control" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-4 col-form-label">Carencia</label>
                    <div class="col-md-8">
                        <input type="number " step="1" min="0" class="form-control" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-4 col-form-label">Desde</label>
                    <div class="col-md-8">
                        <input type="number " step="1" min="0" class="form-control" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-4 col-form-label">Hasta</label>
                    <div class="col-md-8">
                        <input type="number " step="1" min="0" class="form-control" id="">
                    </div>
                </div>


            </div>

        </div>






    </div>
</form>
