jQuery(document).ready(($) => {

  imgLiquid()
  home_slider()
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
    autoPlay: true,
    arrows: false,
    fade: false,
    mobileFirst: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    speed: 750,
    autoPlaySpeed: 1000

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
