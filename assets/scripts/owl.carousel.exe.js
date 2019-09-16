$(document).ready(function() {
    $("#owl-umclick").owlCarousel({ 
        navegation:false,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay:5000,
        pagination:false,
        //Mouse Events
        mouseDrag : true,
        touchDrag : true,    
    });
    
    var owl = $("#owl-umclick");
 
    owl.owlCarousel();
   
    // Custom Navigation Events
    $(".next").click(function(){
      owl.trigger('owl.next');
    })
    $(".prev").click(function(){
      owl.trigger('owl.prev');
    })
});