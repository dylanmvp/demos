if(typeof jQuery!=="function")
  throw new Error("myDropDown���������jQuery��������ǰ����jQuery")

jQuery.fn.myTabs=function(){
	  this.on("click","[data-toggle=tab]",e=>{
      var $tar=$(e.target);
      if(!$tar.parent().is(".active")){
        $tar.parent().addClass("active")
          .siblings().removeClass("active");
        var id=$tar.attr("href");
        $(id).addClass("active")
          .siblings().removeClass("active");
      }
    })
}

