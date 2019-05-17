jQuery(document).ready(($) => {

  imgLiquid()
  home_slider()
  parallax_header()
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

  if(top >= 32) {

    maincontent.css('padding-top','100px')
    header.css('position','fixed')

  } else {

    maincontent.css('padding-top','0px')
    header.css('position','relative')
  }

}

function parallax_header() {

//   jQuery('.page-header').parallax({
//   speed: -.2,
//   sliderSelector: '>.page-header-img',
// })
}
