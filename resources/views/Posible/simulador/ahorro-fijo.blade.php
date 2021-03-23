<div class="row contenedor-simul pb-5">
    <div class="col-md-6 container ">
        <div class="contenedor-item  p-4">
            <h3 class="text-center">AHORROS PLAZO FIJO</h3>
            <form class="pt-4">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputState">Tipo de Ahorro</label>
                        <select id="inputState" class="form-control">
                            <option selected>Ahorro a plazo fijo</option>
                            <option>Ahorro a plazo movil</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Moneda</label>
                        <select id="inputState" class="form-control">
                            <option selected>Sol</option>
                            <option>Dolar</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress2">Monto</label>
                        <input type="number" class="form-control" id="inputAddress2" placeholder="Monto de Apertura">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Modalidad de Pago</label>
                        <select id="inputState" class="form-control">
                            <option selected>Retiro</option>
                            <option>Egreso</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputZip">Fecha de Apertuta</label>
                        <input type="date" class="form-control" id="inputZip">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Plazo a Depósito</label>
                        <select id="inputState" class="form-control">
                            <option selected>1 mes</option>
                            <option>2 meses</option>
                            <option>3 meses</option>
                            <option>6 meses</option>
                            <option>1 año</option>
                            <option>2 años</option>
                        </select>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Calcular</button>
            </form>
        </div>

    </div>
    <div class="col-md-6 container result">
        <div class=" contenedor-item  p-4">
            <h3 class="text-center pb-4" style="color:#f00; font-weight: bolder"> RESULTADOS</h3>
            <div class="total-interes">
                <div class="total">
                    <div>
                        <h4 style="color: #fff; font-weight: bolder ">Pago total</h4>
                    </div>
                    <div>
                        <h3 style="color: #fff; font-weight: bolder "> S/. 5,159<small>.942</small></h3>
                    </div>
                </div>
                <div class="interes text-right mx-1">
                    <p style="color: #fff; font-size: 14px ">Tasa de Interes <span>3.199 %</span></p>
                </div>
            </div>
            <div class="barra-ganado">
                <div class="d-flex">
                    <p class="m-0">Monto de Apertura</p>
                    <p class="m-0" style="padding-left: 43%">Interes Ganado</p>
                </div>

                <div class=" progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100" style="background-color: #1A4088">
                        <h5>5000</h5>
                    </div>
                    <div class="progress-bar interes-color" role="progressbar" style="width: 20%" aria-valuenow="20"
                        aria-valuemin="0" aria-valuemax="100">
                        <h5>159.942</h5>
                    </div>
                </div>
            </div>

            <div class="dia">
                <p class="text-center pt-3 m-0">180 días</p>
                <div class="barra ">
                    <div class="circle"></div>
                    <div class="line"></div>
                    {{-- <svg>
            <line x1="30" y1="65" x2="220" y2="65" style="stroke:#5cb85c;stroke-width:5; stroke-linecap: round"></line>
          </svg> --}}

                    <div class="circle"></div>
                </div>
                <div class="fechas">
                    <p>20/03/2021</p>
                    <p>16/09/2021</p>
                </div>

            </div>
            <div class="text-center">
                <button class="btn btn-cronograma"> CRONOGRAMA </button>
            </div>
        </div>
    </div>
</div>