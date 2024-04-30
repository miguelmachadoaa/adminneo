<form id="formAccountSettings" method="POST" onsubmit="return false" class="fv-plugins-bootstrap5 fv-plugins-framework"
    novalidate="novalidate" data-select2-id="formAccountSettings">



    <div class="row mt-4 ">

        <div class="col-sm-6" style="padding: 0em 2em 1em 2em;">
            <div class="row">
                @include('apps.shared.bar', [
                    'permiso' => $permisos['esquema'] ?? [],
                ])
            </div>
            <div class="row">
                <div class="col mt-4">

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">1ro</label>
                        <div class="col-md-5">
                            <select class="form-control" name="" id="">
                                <option value="">Ninguna</option>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <input type="text" value="0" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">2do</label>
                        <div class="col-md-5">
                            <select class="form-control" name="" id="">
                                <option value="">Ninguna</option>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <input type="text" value="0" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">3ro</label>
                        <div class="col-md-5">
                            <select class="form-control" name="" id="">
                                <option value="">Ninguna</option>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <input type="text" value="0" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">4to</label>
                        <div class="col-md-5">
                            <select class="form-control" name="" id="">
                                <option value="">Ninguna</option>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <input type="text" value="0" class="form-control">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">5to</label>
                        <div class="col-md-5">
                            <select class="form-control" name="" id="">
                                <option value="">Ninguna</option>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <input type="text" value="0" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Aplica a todos los planes
                            </label>
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <div class="col-sm-6" style="padding: 0em 2em 1em 2em;">


            <div class="row">
                @include('apps.shared.bar', [
                    'permiso' => $permisos['financiacion'] ?? [],
                ])
            </div>
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-responsive">
                        <tr>
                            <td>Desde</td>
                            <td>Hasta</td>
                            <td>Cuotas</td>
                            <td>Intereses</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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

        </div>




    </div>

</form>
