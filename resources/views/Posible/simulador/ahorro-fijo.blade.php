<div class="contenedor-simul pb-5">
    <h3 class="text-center">AHORROS PLAZO FIJO</h3>
    <div class="present1"></div>
    <div id="total1"></div>
    <button class="btn btn-danger" onclick="volver()">Volver</button>
    <div class="row ">
        <div class="col-md-6 container ">
            <div class="contenedor-item  p-4">
                <form class="pt-4" action="{{route('calculadora.ahorro')}}" method="POST" id="formulario">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="moneda">Tipp de Moneda</label>
                            <select id="moneda" name="moneda" class="form-control">
                                <option value="266" selected>Sol</option>
                                <option value="188">Dolar</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazo">Plazo a Depósito</label>
                            <select id="plazo" name="plazo" class="form-control" onclick="selectTiempoPago()">
                                <option value="3" selected>3 meses</option>
                                <option value="6">6 meses</option>
                                <option value="12">12 meses</option>
                                <option value="18">18 meses</option>
                                <option value="24">24 meses</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="monto">Monto</label> <span style="color:#f00; font-size:12px"
                                id="alert1">hola</span>
                            <input type="number" name="monto" class="form-control" id="monto"
                                placeholder="Monto de Apertura">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha">Fecha de Apertuta</label>
                            <input type="date" name="fecha" class="form-control" id="fecha">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tipoPago">Modalidad de Pago</label>
                            <select id="tipoPago" name="tipoPago" class="form-control" onclick="selectTipoPago()">
                                <option value="1" selected>Al vencimiento</option>
                                <option value="2">Periodicamente</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 d-none tiempoPago">
                            <label for="tiempoPago">Tiempo de Pago</label>
                            <select id="tiempoPago" name="tiempoPago" class="form-control">
                                <option value="1" selected>Mensual</option>
                            </select>
                        </div>

                    </div>

                    <button type="button" class="btn btn-primary" onclick="enviarAhorroFijo()">Calcular</button>
                </form>
            </div>
        </div>
        <div class="col-md-6 container result d-none">
            <div class=" contenedor-item  p-4">

                <h3 class="text-center pb-4" style="color:#f00; font-weight: bolder"> RESULTADOS</h3>
                <div class="total-interes">

                    <div class="total">
                        <div>
                            <h4 style="color: #fff; font-weight: bolder ">Pago total</h4>
                        </div>
                        <div>
                            <h3 style="color: #fff; font-weight: bolder "> <span class="totalIngreso"></span>
                            </h3>
                        </div>
                    </div>
                    <div class="interes text-right mx-1">
                        <p style="color: #fff; font-size: 14px ">Tasa de Interes <span class="interesaf">0 %</span>
                        </p>
                    </div>
                </div>
                <div class="barra-ganado">
                    <div class="d-flex">
                        <p class="m-0">Monto de Apertura</p>
                        <p class="m-0" style="padding-left: 43%">Interes Ganado</p>
                    </div>

                    <div class=" progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="background-color: #1A4088">
                            <h5><span class="montoApertura"> </span> </h5>
                        </div>
                        <div class="progress-bar interes-color" role="progressbar" style="width: 30%" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100">
                            <h5><span class="interesGanado"></span> </h5>
                        </div>
                    </div>
                </div>

                <div class="dia">
                    <p class="plazoDeposito text-center pt-3 m-0" style="font-size: 16px">0 días</p>
                    <div class="barra ">
                        <div class="circle"></div>
                        <div class="line"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="fechas">
                        <p class="fechaApertura">20/03/2021</p>
                        <p class="fechaVencimiento">16/09/2021</p>
                    </div>

                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        class="btn btn-cronograma"> CRONOGRAMA </button>
                </div>
            </div>
        </div>


        <div class="col-md-6 container resultNone">
            <div class=" contenedor-item  p-4">
                <h4 class="text-center pb-4" style="color:rgb(53, 53, 53); "> Ingresa los datos en Formulario
                    para mostrar tus ganancias</h4>
                <div class="text-center">
                    <img src="{{asset('img/svg/undraw_Publish.svg')}}" alt="" style="max-width: 50%;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script>
    const enviarAhorroFijo= () =>{
        let moneda = $('#moneda').val();
        let plazo = $('#plazo').val() * 30;
        let monto = $('#monto').val();
        let fecha = $('#fecha').val().split('-').reverse().join('/');
        let tipoPago = $('#tipoPago').val();
        let tiempoPago = $('#tiempoPago').val();

        $.ajax({
            type:'POST',
            url:'{{ route('calculadora.ahorro') }}',
            data:{_token: '{{ csrf_token() }}',moneda:moneda,plazo:plazo, monto:monto, fecha:fecha, tipoPago:tipoPago, tiempoPago:tiempoPago},
            success:function(data){
                alert('Se envio');
                tipoResultMoneda(data.r.tasaInteres,data.r.plazoDeposito,data.r.fechaApertura,data.r.fechaVencimiento,data.r.pagoTotal,data.r.montoApertura,data.r.interesGanado);
        },
            error:function (error) {
                var message = JSON.parse(error.responseText);
               alert('error');
                console.log(message.errors.email);

        }
        });
}
    
</script>