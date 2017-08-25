if(typeof jQuery!=="function")
  throw new Error("myDropDown插件依赖于jQuery，必须提前引入jQuery")

jQuery.fn.myDropDown=function(){
  //this->$(dropdown的父元素)
  this.hover(
    function(){
      $(this)
        .children(".dropdown-menu")
        .toggleClass("in")
    })
}
//$(dropdown的父元素).myDropDown();