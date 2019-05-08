jQuery(document).ready(($) => {

  imgLiquid()

})
//funciones
  function imgLiquid() {

    $('.imgLiquid.imgLiquidFill').imgLiquid()
    $('.imgLiquid.imgLiquidNoFill').imgLiquid({
      fill: false
    })
  }
