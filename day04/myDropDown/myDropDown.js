if(typeof jQuery!=="function")
  throw new Error("myDropDown���������jQuery��������ǰ����jQuery")

jQuery.fn.myDropDown=function(){
  //this->$(dropdown�ĸ�Ԫ��)
  this.hover(
    function(){
      $(this)
        .children(".dropdown-menu")
        .toggleClass("in")
    })
}
//$(dropdown�ĸ�Ԫ��).myDropDown();