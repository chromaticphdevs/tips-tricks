 //check if the scroll is at the bottom

 $( window ).scroll(function(){

        if($(window).scrollTop() == $(document).height() - $(window).height())
          getProducts();

 })

