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

                <table class="table table-responsive tableRE">
                    <tr class=" ">
                        <td>Desde</td>
                        <td>Hasta</td>
                        <td>Importe</td>
                        <td>Carencia</td>
                        <td></td>
                    </tr>
                    <tr class="rowTable ">
                        <td class="tdDesde">0</td>
                        <td class="tdHasta">18</td>
                        <td class="tdImporte">180.00</td>
                        <td class="tdCarencia">0</td>
                        <td><i class="bx bx-trash delRE"></i> <i class="bx bx-edit editRE"></i></td>
                    </tr>
                    <tr class="rowTable ">
                        <td class="tdDesde">19</td>
                        <td class="tdHasta">40</td>
                        <td class="tdImporte">300.00</td>
                        <td class="tdDesde">0</td>
                        <td class=""><i class="bx bx-trash delRE"></i> <i class="bx bx-edit editRE"></i></td>

                    </tr>
                    <tr class="rowTable ">
                        <td class="tdDesde">41</td>
                        <td class="tdHasta">55</td>
                        <td class="tdImporte">350.00</td>
                        <td class="tdCarencia">0</td>
                        <td class=""><i class="bx bx-trash delRE"></i> <i class="bx bx-edit editRE"></i></td>

                    </tr>
                    <tr class="rowTable ">
                        <td class="tdDesde">56</td>
                        <td class="tdHasta">69</>
                        <td class="tdImporte">400.00</td>
                        <td class="tdCarencia">0</td>
                        <td class=""><i class="bx bx-trash delRE"></i> <i class="bx bx-edit editRE"></i></td>
                    </tr>
                    <tr class="rowTable ">
                        <td class="tdDesde">70</td>
                        <td class="tdHasta">75</td>
                        <td class="tdImporte">440.00</td>
                        <td class="tdCarencia">0</td>
                        <td class=""><i class="bx bx-trash delRE"></i> <i class="bx bx-edit editRE"></i></td>

                    </tr>
                </table>
                <table>
                    <tr class="rowTable ">
                        <td colspan="4">
                            Agregar:
                        </td>
                    </tr>

                    <tr class="rowTable ">
                        <td><input type="number" step="0.01" min="0" id="desde" name="desde"
                                class="form-control"></td>
                        <td><input type="number" step="0.01" min="0" id="hasta" name="hasta"
                                class="form-control"></td>
                        <td><input type="number" step="0.01" min="0" id="importe" name="importe"
                                class="form-control"></td>
                        <td><input type="number" step="0.01" min="0" id="carencia" name="carencia"
                                class="form-control"></td>
                        <td><button class="btn btn-primary btnSaveNewRE"><i class="bx bx-save "></i></button></td>

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
