if(typeof jQuery!=="function")
  throw new Error("myAccordion���������jQuery��������ǰ����jQuery")

jQuery.fn.myAccordion=function(){
		this.on("click",".title",e=>
      $(e.target).next(".content").toggleClass("in")
        .siblings(".content").removeClass("in")
    );
};