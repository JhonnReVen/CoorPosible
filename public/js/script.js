//_______________________________________FUNCIONALIDADES DE LA WEB_______________________________________________________

// Variables para las funciones
let contador = 0;
let contscreen = 0;
let contdrop = 0;
let contopacidad = 0;
var ancho1 = 0; 
let contbuscar = 0;
let contminlugares = 0;
let contminlugar = 0;
let contrestaurar = 0;

  

//Funcion para reconocer click de los dos ultimos botones del menu top
function menumclick2(numero){
  if(numero ==0)
  {
    sessionStorage.setItem('temptopmenu',0)
  }
  else if(numero ==1)
  {
    sessionStorage.setItem('temptopmenu',1)
  }
  else
  {
    sessionStorage.setItem('temptopmenu',-1)
  }
}

//Funcion para mantener seleccionado un boton del menú
$(document).ready(function() {
const currentLocation = location.href;
const menuItem = document.querySelectorAll('.btnbar');
const menuItem2 = document.querySelectorAll('.btn-osm');
const menuLength = menuItem.length;
const menuLength2 = menuItem2.length;
const menuTop = document.querySelectorAll('.btnLinkout');
const menuLength3 = menuTop.length;
// const urlBefore = document.referrer;


// Verificar si existe un menu principal igual al menu actual
function igualMenuLg()
{
  var  verificarmenu = false;

  for (let i=0; i<menuLength; i++){
    
    if(currentLocation.search(menuItem[i].href)!=-1)
    {
      verificarmenu=true;
      break;
    }
 }
  return verificarmenu;
}

function igualMenuMd()
{
  var  verificarmenu = false;

  for (let i=0; i<menuLength2; i++){
      
    

    if(currentLocation.search(menuItem2[i].href)!=-1)
    {
      verificarmenu=true;
      break;
    }
 }
  return verificarmenu;
}

// Verificar si nos encontramos en uno de los menus principales.
// a su vez marcar temporalmente los dos primeros (personas y empresas).
  for (let i=0; i<menuLength; i++){
    if(currentLocation.includes(menuItem[i].href)){ //Previamente encontrar la igualdad se hacia con ===
      if(i == 0)
      {
        // Menu normal
        $(menuItem[i]).addClass('selection');
        sessionStorage.setItem('menucliente', 0);

        // Menu responsive
        $(menuItem2[i]).addClass('active');
        $(menuItem2[1]).removeClass('active');
        $('#pills-personas1').addClass('active show');
        $('#pills-empresas1').removeClass('active show');
        break;
      }
      else if (i == 1)
      {
        // Menu normal
        $(menuItem[0]).removeClass('selection');
        $(menuItem[i]).addClass('selection');
        sessionStorage.setItem('menucliente', 1);

        // Menu responsive
        $(menuItem2[0]).removeClass('active');
        $(menuItem2[i]).addClass('active');
        $('#pills-personas1').removeClass('active show');
        $('#pills-empresas1').addClass('active show');
        break;
      }
      else if (i > 1)
      {
        $(menuItem[0]).removeClass('selection');
        $(menuItem[1]).removeClass('selection');
        $(menuItem[i]).addClass('selection');
        sessionStorage.setItem('menucliente', -1);  
        break;
      }
    }
  }
 //Reconocimiento de click de menu top sin haber dado previamente click a menu principal personas o empresas.
  for (let i=0; i<menuLength3; i++){
    if(currentLocation.includes(menuTop[i].href) && sessionStorage.getItem('menucliente')=='-1' && sessionStorage.getItem('temptopmenu') > -1){   
        $(menuItem[0]).removeClass('selection');
        $(menuItem[1]).removeClass('selection');

        if(sessionStorage.getItem('temptopmenu')=='0')                                                
        {
          $(menuTop[0]).removeClass('select');   
          $(menuTop[i]).addClass('select');   
        }
        else if(sessionStorage.getItem('temptopmenu')=='1')                                                
        {
          $(menuTop[1]).removeClass('select');   
          $(menuTop[i]).addClass('select');   
        }                  
    }
  }
//Navegacion de los articulos
$(document).ready(function(){
	$('ul.tabs li a:first').addClass('active');
	$('.secciones article').hide();
	$('.secciones article:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.secciones article').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});
});

  //Con la marca temporal(empresa o personas) señalar los sub menus a donde se dirija el cliente.
    if(sessionStorage.getItem('menucliente') == '0' && (igualMenuLg() == false || igualMenuMd() == false))
    {    
      // alert("menu personas");
      //menu normal
      $(menuItem[0]).addClass('selection');
      $(menuItem[1]).removeClass('selection');

      //menu responsive
      $(menuItem2[0]).addClass('active');
      $(menuItem2[1]).removeClass('active');
      $('#pills-personas1').addClass('active show');
      $('#pills-empresas1').removeClass('active show');
    }
    else if(sessionStorage.getItem('menucliente') == '1' && (igualMenuLg() == false || igualMenuMd() == false))
    {
      // alert("menu empresas");
      //menu normal
      $(menuItem[0]).removeClass('selection');
      $(menuItem[1]).addClass('selection');

      //menu responsive
      $(menuItem2[0]).removeClass('active');
      $(menuItem2[1]).addClass('active');
      $('#pills-personas1').removeClass('active show');
      $('#pills-empresas1').addClass('active show');
    }

})

//Funcion para reposicionar en la parte superior a la cabecera superior de la pagina
$(function(){
  // var scroll= $(document).scrollTop();
  var navHeight= $('nav').outerHeight();

  $(window).scroll(function(){
    var scrolled = $(document).scrollTop();

    if(scrolled > navHeight){
      $('.fixed-top').addClass('sticky');
      $('.bloque').addClass('sticky');
      $('.bloque1').addClass('sticky');
      $('.bloque2').addClass('sticky');
      $('.bloqmnav').addClass('sticky');
      $('.icono').addClass('sticky');
      $('.imagenlogo').addClass('sticky');
      $('.dropdown-content').addClass('sticky');
      $('.font-buscar').addClass('scroll');
      $('nav').removeClass('animate');


    }else{
      $('.fixed-top').removeClass('sticky');
      $('.icono').removeClass('sticky');
      $('.bloque').removeClass('sticky');
      $('.bloque1').removeClass('sticky');
      $('.bloque2').removeClass('sticky');
      $('.bloqmnav').removeClass('sticky');
      $('.imagenlogo').removeClass('sticky');
      $('.dropdown-content').removeClass('sticky');
      $('.font-buscar').removeClass('scroll');
      // $('nav a').removeClass('sticky');
      $('nav').addClass('animate');
      }

    scroll= $(document).scrollTop();
  });
});


//Funcion para hover de submenu

let opacidad = document.getElementById("dropdownid");
let opacidad2 = document.getElementById("dropdownid2");

opacidad.addEventListener("mouseover",function(){
      $('.opacidad').addClass('sticky');
      $('.opacidad2').addClass('sticky');

})
opacidad.addEventListener("mouseout",function(){
    $('.opacidad').removeClass('sticky');
    $('.opacidad2').removeClass('sticky');

})
opacidad2.addEventListener("mouseover",function(){
  $('.opacidad').addClass('sticky');
  $('.opacidad2').addClass('sticky');

})
opacidad2.addEventListener("mouseout",function(){
$('.opacidad').removeClass('sticky');
$('.opacidad2').removeClass('sticky');

})

// Funciones para abrir el buscador y enfocar el puntero por defecto en este
// function focusBusqueda(){
//   document.getElementById("busqueda").focus();
// }
function focusBusqueda() {          
  document.getElementById("busqueda").focus();
}
function limpiarBusqueda() {
  document.getElementById("busqueda").value="";
}

let btnbuscar = document.getElementById("idbtn-buscar");
btnbuscar.addEventListener("click",function(){

  if(contbuscar == 0){ 

    $('body').addClass('sticky');
    $('.font-buscar').addClass('sticky');
    $('.btn-buscar').addClass('sticky');
    contbuscar=1;
    }
    
  else if(contbuscar == 1){

    $('body').removeClass('sticky');
    $('.font-buscar').removeClass('sticky');
    $('.btn-buscar').removeClass('sticky');
    limpiarBusqueda();
    contbuscar = 0;    
  }    

  setTimeout(function(){
    if($("#idfontbuscar").is(':visible')){
      focusBusqueda();
    }
  },500);

})


//Funcion para abrir el menu en modo responsive
var clickmenum = null;
function menumclick(numero){
  // alert("numero de clic: " + numero);

  if(numero == 0){
    sessionStorage.setItem('menucliente', 0);
  }
  else if (numero ==1)
  {
    sessionStorage.setItem('menucliente', 1);
  }
  clickmenum=numero;
}

let boton = document.getElementById("icon");
boton.addEventListener("click",function(){
  if(contador == 0){   
    $('.bloque').removeClass('min');
    $('.bloque').addClass('max');
    $('body').addClass('sticky');

     contador = 1;
  }
  else{       
      $('.bloque').addClass('min');      
      $('.bloque').removeClass('max');
      $('body').removeClass('sticky');

     contador = 0;

      if(clickmenum == 0)
      {
        window.open("\index.php","_top");
      }
      else if (clickmenum == 1)
      {
        // alert(clickmenum);
        window.open("\empresas.php","_top");
      }
  }
})




//Funcionamiento para detectar la resolución estática
  var ancho = window.innerWidth;
  if(ancho>991){
    $('.bloque').removeClass('min'); 
    $('.bloque').removeClass('display'); 
  }
  else if(ancho<992){
    $('.bloque').addClass('display');    
    $('.bloque').addClass('min');    
  }


//Funcionamiento para detectar la resolución dinámica
var anchoi =0;
  window.addEventListener('resize', function(){
    // var anchoi = e.target.outerWidth;
     anchoi = window.innerWidth;

    if((anchoi>991) && (contscreen == 0)){

      $('.bloque').removeClass('max');            
      $('.bloque').removeClass('min');    
      $('.bloque1').removeClass('min');
      $('.bloquem').removeClass('max');  
      $('body').removeClass('sticky');
      contador = 0;
      contscreen=1;
    }
    else if((anchoi<992) && (contscreen == 1) && ((contador == 0) || (contador == 1))){
      $('.bloque').addClass('display');    
      $('.bloque').addClass('min');
      $('body').removeClass('sticky');
      contscreen=0;
    }
  })


// Carousel
$('.owl-one').owlCarousel({
  
  loop:true,
  margin:10,
  nav:false,
  // center:true,
  // autoplay:1000,
  responsive:{
      0:{
          margin:0,
          items:1,
          autoplay:1000,
          nav:true
      },
      600:{
          // margin:0,
          items:2,
          autoplay:1000,
          nav:true
      },
      893:{
          items:3,
      }
      // },
      // 1000:{
      //     items:3,
      //     nav:false

      // }
  }
})

//Carousel productos
$('.owl-two').owlCarousel({
  
  loop:true,
  margin:0,    
  slideBy: 2,
  nav:true,
  autoplay:1500,
  URLhashListener:true,
  startPosition: 'URLHash',
  autoplayHoverPause:true,

  responsive:{
      0:{
          items:1,
      },
      720:{
          items:2, 

      },
      1000:{
        items:2,     
               
      }
      
  }
})

$('.owl-two').on('changed.owl.carousel', function(event) {
  var current = event.item.index;
  var hash = $(event.target).find(".owl-item").eq(current).find(".item").attr('data-hash');
  if(hash.includes('creditos'))
  {
    $('.btn-selectpro').addClass('sticky');
    $('.btn-selectpro1').removeClass('sticky');

  }
  else if(hash.includes('ahorros'))
  {
    $('.btn-selectpro').removeClass('active');
    $('.btn-selectpro').removeClass('sticky');
    $('.btn-selectpro1').addClass('sticky');
  }
  // $('.'+hash).addClass('active');
  // alert('hay un cambio en el carousel'+hash);
});

//Carousel clientes
$('.owl-three').owlCarousel({
  
  items:1,
  loop:true,
  margin:0,    
  nav:true,
  autoplay:2800,
  URLhashListener:true,
  startPosition: 'URLHash',
  autoplayHoverPause:true

  // responsive:{
  //     0:{
  //     },
  //     720:{

  //     },
  //     1000:{
               
  //     }
      
  // }
})

$('.owl-three').on('changed.owl.carousel', function(event) {
  var current = event.item.index;
  var hash = $(event.target).find(".owl-item").eq(current).find(".item").attr('data-hash');
  if(hash.includes('skids'))
  {
    $('.btn-selectclie').addClass('sticky');
    $('.btn-selectclie1').removeClass('sticky');
    $('.btn-selectclie2').removeClass('sticky');
  }
  else if(hash.includes('suniversitario'))
  {
    $('.btn-selectclie').removeClass('active');
    $('.btn-selectclie').removeClass('sticky');
    $('.btn-selectclie1').addClass('sticky');
    $('.btn-selectclie2').removeClass('sticky');
  }
  else if(hash.includes('smamapapa'))
  {
    $('.btn-selectclie').removeClass('active');
    $('.btn-selectclie').removeClass('sticky');
    $('.btn-selectclie1').removeClass('sticky');
    $('.btn-selectclie2').addClass('sticky');
  }
  // $('.'+hash).addClass('active');
  // alert('hay un cambio en el carousel'+hash);
});

// Carousel agencias
$('.owl-lugares').owlCarousel({
  items:3,
  // loop:true,
  margin:0,    
  nav:true,
  // autoplay:2800
  responsive:{
      414:{
          items:4
          // margin:-30    
      }
      
  }
})


// Carousel socios - empresas relacionadas
$('.owl-socios').owlCarousel({
  // center:true,
  loop:true,
  margin:0,
  nav:true,
  autoplay:2800,
  responsive:{
      0:{
          items : 1,
          margin : 0
      },
      370:{
          items : 2,
          margin : 0
      },
      // 486:{
      //     items : 3,
      //     margin : 0
      // },
      650:{
          items:3,
      },      
      // 768:{
          // items:3
          // margin:-30    
      // },      
      1000:{
          items:4
          // margin:-30    
      }      
  }
})

// Carousel historia
$('.owl-historia').owlCarousel({
  animateOut: 'fadeOut',
  items:1,
  loop:true,
  margin:0,
  nav:true,
  lazyLoad: true,
  autoplaySpeed: 10,
  autoplayHoverPause: true,
  autoplay:false,
  autoplayTimeout:10000

  // responsive:{
  //   0:{
  //     items:1,
  //     margin : 0
  //   }
  // }
});
$('#btn-play').on('click',function(){
  $('.owl-historia').trigger('play.owl.autoplay',[10000]);
  $('#btn-play').addClass('active');
  $('#btn-stop').removeClass('active');
});
$('#btn-stop').on('click',function(){
  $('.owl-historia').trigger('stop.owl.autoplay');
  $('#btn-play').removeClass('active');
  $('#btn-stop').addClass('active');
});
// Funcion para insertar elemento información de mapas

// Carousel gruposocios
$('.owl-grsocios').owlCarousel({
  // animateOut: 'fadeOut',
  loop:true,
  margin:10,
  nav:true,
  // lazyLoad: true,
  // autoplaySpeed: 10,
  // autoplayHoverPause: true,
  autoplay:true,
  autoplayTimeout:8000,

  responsive:{
    0:{
      items:1
    },
    630:{
      items:2
    },
    // 750:{
    //   items:2
    // },
    992:{
      items:3
    }
  }
});

// if(ljuliaca.l !=)


// function divisionChange() {

  // if (lugar.value) {
  //   alert('esta lleno');
  // } else {
  //   alert('esta vacio');
  // }


    // let ljuliaca = document.getElementsByClassName('juliaca');
    // let lhuamachuco = document.getElementById("huamachuco");
    // let lputina = document.getElementById("putina");
    // let lyunguyo = document.getElementById("yunguyo");
    // let lhuancane = document.getElementById("huancane");
    // let lchimbote = document.getElementById("chimbote");

// document.onclick = function(e) {   

  // let lugarseleccionado = 0;
// 
  // if (window.event) {
      // e = event.srcElement;           
  // }
  // else {
      // e = e.target;                   
  // }
// var sel = e.className.selectedIndex;
    // alert(sel);

  // if (e.className && e.className.indexOf('selectlugar') != -1) {
    
    


        // $(e.className + ' .lugar').addClass('show');
        
  //    for (let i=0; i<e.length; i++){
  //   if(menuItem[i].href === currentLocation){
  //     $(menuItem[i]).addClass('selection');
  //   }
  // }


  // }

// }


var temp = 0;
const wpEdit = document.getElementsByClassName('selectlugar');
for(let i = 0; i < wpEdit.length; i++){
  wpEdit[i].addEventListener('click',function(){
    // funciones generales al hacer click
      contminlugar=1;
      // contminlugares=1;
   if(i>=1)
    {
      $('.infoagencias').addClass('max');
      $('#btninfoagencias').addClass('sticky');
      $('#btninfoagencias').addClass('show');
      $('#btnmaxagencias').addClass('bellow');
    }
    // Condicion para mapa lugar segun btn
    if(i==0 || i==7){
      $('.lugar').removeClass('show');
      $('.selectlugar').removeClass('active');
      $('.infoagencias').removeClass('max');
      $('#btninfoagencias').removeClass('show');
      $('#btnmaxagencias').removeClass('bellow');
      // $('#btninfoagencias').addClass('show');

      // $('#v-pills-juliaca-tab').addClass('active');
    
      $('.seleccionmapa').removeClass('show active');
      $('#v-pills-inicio').addClass('show active');
    }
    else if(i==1 || i==8){
    $('.lugar').removeClass('show');
    $('#juliaca').addClass('show');
    $('#juliaca1').addClass('show');
    
    $('.selectlugar').removeClass('active');
    $('#v-pills-juliaca-tab').addClass('active');
    $('#v-pills-juliaca-tab1').addClass('active');

     $('.seleccionmapa').removeClass('show active');
    $('#v-pills-juliaca').addClass('show active');    
    
      temp=i;
    }
    else if(i==2 || i==9)
    {
      $('.lugar').removeClass('show');
      $('#huamachuco').addClass('show');
      $('#huamachuco2').addClass('show');

      $('.selectlugar').removeClass('active');
      $('#v-pills-huamachuco-tab').addClass('active');
      $('#v-pills-huamachuco-tab1').addClass('active');

      $('.seleccionmapa').removeClass('show active');
      $('#v-pills-huamachuco').addClass('show active');
      temp=i;
    }
    else if(i==3 || i==10)
    {
      $('.lugar').removeClass('show');
      $('#putina').addClass('show');
      $('#putina3').addClass('show');

      $('.selectlugar').removeClass('active');
      $('#v-pills-putina-tab').addClass('active');
      $('#v-pills-putina-tab1').addClass('active');

      $('.seleccionmapa').removeClass('show active');
      $('#v-pills-putina').addClass('show active');
    }
    else if(i==4 || i==11)
    {
      $('.lugar').removeClass('show');
      $('#yunguyo').addClass('show');
      $('#yunguyo4').addClass('show');

      $('.selectlugar').removeClass('active');
      $('#v-pills-yunguyo-tab').addClass('active');
      $('#v-pills-yunguyo-tab1').addClass('active');

      $('.seleccionmapa').removeClass('show active');
      $('#v-pills-yunguyo').addClass('show active');
    }
    else if(i==5 || i==12)
    {
      $('.lugar').removeClass('show');
      $('#huancane').addClass('show');
      $('#huancane5').addClass('show');

      $('.selectlugar').removeClass('active');
      $('#v-pills-huancane-tab').addClass('active');
      $('#v-pills-huancane-tab1').addClass('active');

      $('.seleccionmapa').removeClass('show active');
      $('#v-pills-huancane').addClass('show active');
    }
    else if(i==6 || i==13)
    {
      $('.lugar').removeClass('show');
      $('#chimbote').addClass('show');
      $('#chimbote6').addClass('show');

      $('.selectlugar').removeClass('active');
      $('#v-pills-chimbote-tab').addClass('active');
      $('#v-pills-chimbote-tab1').addClass('active');

      $('.seleccionmapa').removeClass('show active');
      $('#v-pills-chimbote').addClass('show active');
    }
  });
}


//funcion para ocultar contenedor de seleccion de lugares
let btnverlugares = document.getElementById("btnverlugares");

btnverlugares.addEventListener("click",function(){
  if(contminlugares == 0){ 

    $('.contenedoragecias').addClass('min');
    $('#btnverlugares').addClass('sticky');

    contminlugares=1;
    }
    
  else if(contminlugares == 1){

    $('.contenedoragecias').removeClass('min');
    $('#btnverlugares').removeClass('sticky');

    contminlugares = 0;    
  }    
})

let btnminlugares = document.getElementById("btnminlugares");

btnminlugares.addEventListener("click",function(){
  if(contminlugares == 0){ 

    $('.contenedoragecias').addClass('min');
    $('#btnminlugares').addClass('sticky');    
    contminlugares=1;
    }
    
  else if(contminlugares == 1){

    $('.contenedoragecias').removeClass('min');
    $('#btnminlugares').removeClass('sticky');

    contminlugares = 0;    
  }    
})

let btninfoagencias = document.getElementById("btninfoagencias");

btninfoagencias.addEventListener("click",function(){
  if(contminlugar == 0){ 

    $('#btnmaxagencias').addClass('bellow');
    $('.infoagencias').addClass('max');
    $('#btninfoagencias').addClass('sticky');

    contminlugar=1;
    }
    
  else if(contminlugar == 1){

    $('#btnmaxagencias').removeClass('bellow');
    $('.infoagencias').removeClass('max');
    $('#btninfoagencias').removeClass('sticky');

    contminlugar = 0;    
  }    
})

// let btnmaxagencias = document.getElementById("btnmaxagencias");
// btnmaxagencias.addEventListener("click",function(){

  $('#btnmaxagencias').on('click', function(){
    // if already full screen; exit
    // else go fullscreen
    if (
      document.fullscreenElement ||
      document.webkitFullscreenElement ||
      document.mozFullScreenElement ||
      document.msFullscreenElement
    ) {
      if (document.exitFullscreen) {
        document.exitFullscreen();
        // $('#agencias').removeClass('max');
      // $('.mapas iframe').removeClass('max');
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
        // $('#agencias').removeClass('max');
      // $('.mapas iframe').removeClass('max');
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
        // $('#agencias').removeClass('max');
      // $('.mapas iframe').removeClass('max');
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
        // $('#agencias').removeClass('max');
        // $('.mapas iframe').removeClass('max');
      }
      $('#agencias').removeClass('max');
      $('.mapas iframe').removeClass('max');

    } else { 

      $('#agencias').addClass('max');
      $('.mapas iframe').addClass('max');

      element = $('#agencias').get(0);
      if (element.requestFullscreen) {
        element.requestFullscreen();
      } else if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
      } else if (element.webkitRequestFullscreen) {
        element.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
      } else if (element.msRequestFullscreen) {
        element.msRequestFullscreen();
      }
               
    }
  });
/*Simulador de credito
function calculacredito(){
  formcredito=document.forms[0];
  if(formcredito.capital.value>5000){
    plazo=(formcredito.plazo[0].checked)?formcredito.plazo[0].value:formcredito.plazo[1].value;
  interesMensual=parseFloat(formcredito.intereses.value)/parseInt(plazo);
  pagoTotal=parseFloat(formcredito.capital.value)+parseFloat(formcredito.capital.value*formcredito.cuotas.value*interesMensual/100);
   
  }
  codigo="<table border=1>";
  codigo+="<tr>";
  codigo+="<td>Cuota nº</td>";
  codigo+="<td>Cuota</td>";
  codigo+="<td>Amortización</td>";
  codigo+="<td>Interés</td>";
  codigo+="<td>Falta por pagar</td>";
  
  falta=pagoTotal;
  
  for(a=1;a<=formcredito.cuotas.value;a++){
  
  cuota=Math.ceil(pagoTotal/formcredito.cuotas.value*100)/100;
  amortizacion=parseInt(formcredito.capital.value/formcredito.cuotas.value*100)/100;
  interes=parseInt(100*(cuota-amortizacion))/100;
  falta=parseInt(100*(falta-cuota))/100;
  
  codigo+="<tr>";
  codigo+="<td>"+a+"</td>";
  codigo+="<td>";
  if(a==formcredito.cuotas.value){cuota=parseInt(100*(cuota+falta))/100;falta=0}
  codigo+=cuota
  codigo+="</td>";
  codigo+="<td>";
  codigo+=amortizacion
  codigo+="</td>";
  codigo+="<td>";
  codigo+=interes;
  codigo+="</td>";
  codigo+="<td>";
  codigo+=falta;
  codigo+="</td>";
  codigo+="</tr>";
  }
  codigo+="</table>";
  table.innerHTML=codigo;
  }
  function desenfoque(esto){
  esto.value=esto.value.split(',').join('.');
  if(isNaN(esto.value)||esto.value<0){
  esto.value=''
  }
  }*/
  //Simulador de ahorro
function calcular(){
  //Obtienes el valor
  var valor = document.getElementById("valor").value;
  
  if (document.getElementById('3Mes').checked) {
      
      if (valor>=500 && valor<4999) {
        var interes= 1.348; }
      if (valor>5000 && valor<9999) {
        var interes= 1.587; }
      if (valor>10000 && valor<14999) {
        var interes= 1.706; }
      if (valor>15000 && valor<19999) {
        var interes= 1.777; }
      if (valor>20000 && valor<39999) {
        var interes= 1.824; }
      if (valor>31000 && valor<40999) {
        var interes= 1.895; }
      if (valor>41000 && valor<60999) {
        var interes= 1.943; }
      if (valor>61000 && valor<80999) {
        var interes= 2.013; }
      if (valor>100000 ) {
        var interes= 2.107; }              
    }
    if (document.getElementById('6Mes').checked) {
      
      if (valor>=500 && valor<4999) {
        var interes= 2.713; }
      if (valor>5000 && valor<9999) {
        var interes= 3.199; }
      if (valor>10000 && valor<14999) {
        var interes= 3.441; }
      if (valor>15000 && valor<19999) {
        var interes= 3.586; }
      if (valor>20000 && valor<39999) {
        var interes= 3.682; }
      if (valor>31000 && valor<40999) {
        var interes= 3.827; }
      if (valor>41000 && valor<60999) {
        var interes= 3.923; }
      if (valor>61000 && valor<80999) {
        var interes= 4.067; }
      if (valor>100000 ) {
        var interes= 4.259; }              
    }
    if (document.getElementById('12Mes').checked) {
      
      if (valor>=500 && valor<4999) {
        var interes= 5.500; }
      if (valor>5000 && valor<9999) {
        var interes= 6.500; }
      if (valor>10000 && valor<14999) {
        var interes= 7.000; }
      if (valor>15000 && valor<19999) {
        var interes= 7.300; }
      if (valor>20000 && valor<39999) {
        var interes= 7.500; }
      if (valor>31000 && valor<40999) {
        var interes= 7.800; }
      if (valor>41000 && valor<60999) {
        var interes= 8.000; }
      if (valor>61000 && valor<80999) {
        var interes= 8.300; }
      if (valor>100000 ) {
        var interes= 8.700; }              
    }
    if (document.getElementById('18Mes').checked) {
      
      if (valor>=500 && valor<4999) {
        var interes= 8.362; }
      if (valor>5000 && valor<9999) {
        var interes= 9.907; }
      if (valor>10000 && valor<14999) {
        var interes= 10.682; }
      if (valor>15000 && valor<19999) {
        var interes= 11.147; }
      if (valor>20000 && valor<39999) {
        var interes= 11.458; }
      if (valor>31000 && valor<40999) {
        var interes= 11.925; }
      if (valor>41000 && valor<60999) {
        var interes= 12.237; }
      if (valor>61000 && valor<80999) {
        var interes= 12.705; }
      if (valor>100000 ) {
        var interes= 13.330; }              
    }
    if (document.getElementById('12Mes').checked) {
      
      if (valor>=500 && valor<4999) {
        var interes= 11.303; }
      if (valor>5000 && valor<9999) {
        var interes= 13.423; }
      if (valor>10000 && valor<14999) {
        var interes= 14.490; }
      if (valor>15000 && valor<19999) {
        var interes= 15.133; }
      if (valor>20000 && valor<39999) {
        var interes= 15.563; }
      if (valor>31000 && valor<40999) {
        var interes= 16.208; }
      if (valor>41000 && valor<60999) {
        var interes= 16.640; }
      if (valor>61000 && valor<80999) {
        var interes= 17.289; }
      if (valor>100000 ) {
        var interes= 18.157; }              
    }

  var intereses=document.getElementById('intereses');
  var result= document.getElementById('result');
  var total= document.getElementById('total');
 
  //Sacamos el incremento
  var incrementomensual = parseInt(valor)*(interes)/100;
  var totalanual = parseInt(valor) * 365;
  //agrega los resultados al DOM
  intereses.innerHTML= 'Con un interes del: '+interes +'% usted'
  result.innerHTML = 'Ganará:  '+ incrementomensual +' '+' soles';
  total.innerHTML =  'Al culminar el plazo tendrás un total de:     $' + (parseInt(valor)+incrementomensual);



  
}