jQuery(document).ready(($) => {

  imgLiquid()
  home_slider()

})
//funciones
function imgLiquid() {

  jQuery('.imgLiquid.imgLiquidFill').imgLiquid()
  jQuery('.imgLiquid.imgLiquidNoFill').imgLiquid({
    fill: false
  })
}

function home_slider() {
  jQuery('#home-slider').slick({
    autoPlay: true,
    arrows: false,
    fade: true,
    mobileFirst: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    speed: 500,

  });
}
