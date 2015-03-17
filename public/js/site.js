$(function() {
	$(window).load(function() {
  

	  $('.flexslider').flexslider({
	    animation: "slide"
	  });


	});

	 function initialize() {
                var mapOptions = {
                  center: { lat: -36.872840, lng:174.628188},
                  zoom: 17,
                     disableDefaultUI: true
                };
                var map = new google.maps.Map(document.getElementById('map'),
                    mapOptions);
                var image = '/images/marker.png';
                var myLatLng = new google.maps.LatLng(-36.872840, 174.628188);
                var beachMarker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  icon: image
                });
                }
            

      google.maps.event.addDomListener(window, 'load', initialize);



      $('#left-slider').click(function(e){
         e.preventDefault();
      $('.flexslider').flexslider("prev");

    });
    $('#right-slider').click(function(e){
       e.preventDefault();
      $('.flexslider').flexslider("next");

    });



    // init
      $('.service--property').hide();
      $('.service--court').hide();
      $('.service--family').hide();
      $('.service--business').show();

    $('#service--business').click(function(e) {
      /* Act on the event */
      e.preventDefault();
      
      $('.page--service .active').removeClass('active');
      $('#service--business').addClass('active');


      if($('#service--business').attr('class')=='active'){
        $('.service--property').hide();
        $('.service--court').hide();
        $('.service--family').hide();
        $('.service--business').show();


    }

    });
    $('#service--property').click(function(e) {
      /* Act on the event */
      e.preventDefault();
      
      $('.page--service .active').removeClass('active');
      $('#service--property').addClass('active');

       if($('#service--property').attr('class')=='active'){
        $('.service--business').hide();
        $('.service--court').hide();
        $('.service--family').hide();
        $('.service--property').show();

    } 

    });
    $('#service--court').click(function(e) {
      /* Act on the event */
      e.preventDefault();
      
      $('.page--service .active').removeClass('active');
      $('#service--court').addClass('active');


      if($('#service--court').attr('class')=='active'){
        $('.service--property').hide();
        $('.service--business').hide();
        $('.service--family').hide();
        $('.service--court').show();

    } 

    });
    $('#service--family').click(function(e) {
      /* Act on the event */
      e.preventDefault();
    
      $('.page--service .active').removeClass('active');
        $('#service--family').addClass('active');
        if($('#service--family').attr('class')=='active'){
        $('.service--property').hide();
        $('.service--court').hide();
        $('.service--business').hide();
        $('.service--family').show();


    }



    });



    
   
    
    

});
