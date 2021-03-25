<div class="contenedor-simul pb-5">
    <h3 class="text-center">AHORRO MOVIL</h3>
    <div class="present2"></div>

    <button class="btn btn-danger" onclick="volver()">Volver</button>
    <div class="row ">
        <div class="col-md-4 container ">
            <div class="contenedor-item  p-4">
                <form class="pt-4" action="">

                    <div class="form-group">
                        <label for="inputAddress2">Ubicacion</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Ingresar Ubicacion">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha de Apertuta</label>
                        <input type="date" class="form-control" id="fecha">
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="monto">Monto</label>
                            <input type="number" class="form-control" id="monto" placeholder="Monto de Apertura">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipoOperacio">Tipo de Operacion</label>
                            <select id="tipoOperacion" class="form-control">
                                <option selected>Retiro</option>
                                <option>Egreso</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Agregar</button>
                </form>
            </div>

        </div>
        <div class="col-md-8 container result">
            <div class=" contenedor-item  p-4">
                <h3 class="text-center pb-4" style="color:#f00; font-weight: bolder"> Datos</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">N</th>
                            <th scope="col">Ubicacion</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Monto</th>
                            <th scope="col">Tipo de Retiro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Holi</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@fat</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <button class=" btn btn-cronograma"> Calcular </button>
                </div>
            </div>
        </div>
    </div>
</div>