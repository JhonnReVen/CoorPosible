
let contentAhorro = document.getElementsByClassName('contenedor-tipoahorro');
let afijo = document.getElementsByClassName('ahorro-fijo');
let amovil = document.getElementsByClassName('ahorro-movil');

let selectahorro = document.getElementById('select-ahorro');
let present1 = document.querySelector('.present1')
let present2 = document.querySelector('.present2')

function opena() {
    let nombre = document.getElementById('nombreSimu').value;
    let ubicacion = document.getElementById('ubicacion').value;

    let selectOpction = selectahorro.value;


    if (selectOpction == 'afijo') {
        afijo[0].classList.add("d-block");
        amovil[0].classList.remove("d-block");
        contentAhorro[0].classList.add('d-none')
        present1.innerHTML = `<h5 class="text-center py-2"> Hola <span style="font-weight: bolder; color: #1a4088">${nombre}</span>, ingresa los
            datos en el formulario y
            simularemos tu ahorro.
        </h5>`;

    } else if (selectOpction == 'amovil') {
        amovil[0].classList.add("d-block");
        afijo[0].classList.remove("d-block");
        contentAhorro[0].classList.add('d-none')
        present2.innerHTML = `<h5 class="text-center py-2"> Hola <span style="font-weight: bolder; color: #1a4088">${nombre}</span>, ingresa los
            datos en el formulario y
            simularemos tu ahorro.
        </h5>`;
    }

}

function volver() {
    contentAhorro[0].classList.remove('d-none')
    amovil[0].classList.remove("d-block");
    afijo[0].classList.remove("d-block");
}


function selectTipoPago() {
    let tipoPago = document.getElementById('tipoPago').value;

    let tiempoPago = document.getElementsByClassName('tiempoPago');
    if (tipoPago == 2) {
        tiempoPago[0].classList.remove("d-none");
        tiempoPago[0].classList.add("d-block");
    } else if (tipoPago == 1) {
        tiempoPago[0].classList.remove("d-block");
        tiempoPago[0].classList.add("d-none");
    }

}


const selectTiempoPago = () => {
    let tiempoP = document.querySelector('#tiempoPago')
    let plazo = document.getElementById('plazo').value;

    if (plazo == 3) {
        tiempoP.innerHTML = `   <option value="1" selected>Mensual</option>
                                <option value="2">Trimiste</option>
                              `


    } else if (plazo == 6) {
        console.log(plazo);
        tiempoP.innerHTML = `  <option value="1" selected>Mensual</option>
                                <option value="2">Trimiste</option>
                                <option value="3">Semestre</option>
                               `

    } else if (plazo >= 12) {
        tiempoP.innerHTML = `    <option value="1" selected>Mensual</option>
                                <option value="2">Trimiste</option>
                                <option value="3">Semestre</option>
                                <option value="4">Anual</option>`

    }
    let monto = document.getElementById('monto').value;
    console.log(monto)
}

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

const validarFormulario = () => {

    evento.preventDefault();
    let monto = document.getElementById('monto').value;
    console.log(monto)
    if (monto < 500) {
        alert1 = document.getElementById('alert1');
        alert('ingreso')
        alter1.value = 'Ingrese un monto superior a los 500 soles'
        return 0;
    }
    this.submit()
}

