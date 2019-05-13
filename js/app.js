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
