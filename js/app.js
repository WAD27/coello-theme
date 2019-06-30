jQuery(document).ready(($) => {

  imgLiquid()
  home_slider()
  form_placeholders()
  //
  $(window).on('scroll',()=>{
    header()
  })
  //
})
//funciones
function imgLiquid() {

  jQuery('.imgLiquid.imgLiquidFill').imgLiquid()
  jQuery('.imgLiquid.imgLiquidNoFill').imgLiquid({
    fill: false
  })
  jQuery('.imgLiquid.imgLiquidNoFillLeft').imgLiquid({
    fill: false,
    horizontalAlign: 'left'
  })
}

function home_slider() {
  jQuery('#home-slider').slick({
    arrows: false,
    fade: false,
    mobileFirst: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    speed: 750,
    autoplay: true,
    autolaySpeed: 1000,
    dots: true,
  });
}


function header() {
  var top = jQuery(window).scrollTop()
  var header = jQuery('nav#menu')
  var maincontent = jQuery('#main')

  if(top >= 1) {

    maincontent.css('padding-top','100px')
    header.css('position','fixed')

  } else {

    maincontent.css('padding-top','0px')
    header.css('position','relative')
  }

}

function form_placeholders() {

  let form = document.getElementsByClassName('wpcf7-form')
  let formMobile = document.getElementById('home-form-mobile')
  if (form.length != 0) {
    document.getElementsByName("your-name")[0].placeholder = "Nombre"
    document.getElementsByName("your-email")[0].placeholder = "Correo"
    document.getElementsByName("your-tel")[0].placeholder = "Teléfono"
    document.getElementsByName("your-message")[0].placeholder = "Mensaje"
    //
    if (formMobile != null) {
      document.getElementsByName("your-name")[1].placeholder = "Nombre"
      document.getElementsByName("your-email")[1].placeholder = "Correo"
      document.getElementsByName("your-tel")[1].placeholder = "Teléfono"
      document.getElementsByName("your-message")[1].placeholder = "Mensaje"

    } else {
      console.log("No hay formulario mobil en esta pagina");
    }
    //
  } else {
    console.log("No hay formulario en esta pagina");
  }

}
