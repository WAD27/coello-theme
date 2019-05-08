jQuery(document).ready(($)=>{

  imgLiquid()

})
//funciones
(function($) {
  function imgLiquid() {

    $('.imgLiquid.imgLiquidFill').imgLiquid()
    $('.imgLiquid.imgLiquidNoFill').imgLiquid({
      fill: false
    })
  }
}(jQuery))
