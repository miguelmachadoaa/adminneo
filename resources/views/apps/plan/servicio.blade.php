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
                        <label for="html5-text-input" class="col-md-2 col-form-label">Titular</label>
                        <div class="col-md-10">
                            <select class="form-control" name="titular" id="titular">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Conyuge</label>
                        <div class="col-md-10">
                            <select class="form-control" name="titular" id="titular">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Padres</label>
                        <div class="col-md-10">
                            <select class="form-control" name="Conyuge" id="Conyuge">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Hijos</label>
                        <div class="col-md-10">
                            <select class="form-control" name="Padres" id="Padres">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Hermanos</label>
                        <div class="col-md-10">
                            <select class="form-control" name="Padres" id="Padres">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Otros</label>
                        <div class="col-md-10">
                            <select class="form-control" name="Hijos" id="Hijos">
                                <option value="">Seleccione</option>
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
                <table class="table table-responsive">
                    <tr>
                        <td>Desde</td>
                        <td>Hasta</td>
                        <td>Importe</td>
                        <td>Carencia</td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td>18</td>
                        <td>180.00</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>40</td>
                        <td>300.00</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>41</td>
                        <td>55</td>
                        <td>350.00</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>56</td>
                        <td>69</td>
                        <td>400.00</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>70</td>
                        <td>75</td>
                        <td>440.00</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            Agregar:
                        </td>
                    </tr>

                    <tr>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>

                </table>
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
