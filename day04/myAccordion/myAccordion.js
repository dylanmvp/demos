if(typeof jQuery!=="function")
  throw new Error("myAccordion插件依赖于jQuery，必须提前引入jQuery")

jQuery.fn.myAccordion=function(){
		this.on("click",".title",e=>
      $(e.target).next(".content").toggleClass("in")
        .siblings(".content").removeClass("in")
    );
};