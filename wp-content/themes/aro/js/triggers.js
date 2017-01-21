

$(window).on('load', function() {
  

// Trigger Aro Intro on Home Page

if ( $('.intro').length ) {
// it exists


    var inview = new Waypoint.Inview({
       
          element: $('.intro')[0],
          enter: function(direction) {
            
            TweenMax.to(".lines", 1.3, {top:-200, opacity:1});
            $('#intro-title').addClass("animated fadeInUp");
            $('.intro-summary').addClass("animated fadeIn");
            
          }
          
    });
    
    
} else{
    
    
}
  
  
// Trigger Animation on Featured Portfolio items on home page
  
if ( $('#featured-portfolio').length ) {
// it exists
    
     var featureItems = new Waypoint.Inview({
       
          element: $('#featured-portfolio')[0],
          enter: function(direction) {
            
            $('.skinmd-img').addClass("animated fadeIn");
            $('.skinmd h3').addClass("animated fadeInUp").css({"color":"white"});
            $('.skinmd h4').addClass("animated fadeIn").css({"color":"white"});
            $('.watkins img').addClass("animated fadeIn");
            $('.watkins h3').addClass("animated fadeInUp").css({"color":"white"});
            $('.watkins h4').addClass("animated fadeIn").css({"color":"white"});
            $('.goebel img').addClass("animated fadeIn");
            $('.goebel h3').addClass("animated fadeInUp").css({"color":"white"});
            $('.goebel h4').addClass("animated fadeIn").css({"color":"white"});
            $('.nswm img').addClass("animated fadeIn");
            $('.nswm h3').addClass("animated fadeInUp").css({"color":"white"});
            $('.nswm h4').addClass("animated fadeIn").css({"color":"white"});
         
          }
      
    });
    
}else {
    
    
}


// Trigger Portfolio Intro Animation


if ($('#portfolio-intro').length){
    
    
    var PortIntro = new Waypoint.Inview({
       
       element: $('#portfolio-intro')[0],
      enter: function(down){
        
        $('#portfolio-intro h2').addClass("animated fadeInUp");   
        $('#portfolio-intro p').addClass("animated fadeIn");   
           
       }
    });
    
    
}else{
    
    
}



// Trigger UX Process Intro Animation


if ($('#ux-process').length){
    
    var UXIntro = new Waypoint.Inview({
       
           element: $('#ux-process')[0],
           enter: function(down){
            
            $('#ux-process h2').addClass("animated fadeInUp");   
            $('#ux-process p').addClass("animated fadeIn");   
               
           }
    });
    
    
}else{
    
    
}




// Trigger Animation on Portfolio Single Page on Elements Area    
      
if ( $('#elements-area').length ) {
  
  var PortItem = new Waypoint.Inview({
       
          element: $('#elements-area')[0],
          enter: function(down) {
            
           $('#element1').addClass("animated fadeIn");
           $('#element2').addClass("animated fadeIn");
           $('#element3').addClass("animated fadeIn");
           $('#element4').addClass("animated fadeIn");
            
          }
    });
    


}else {
    
    
}




// Trigger Animation on Portfolio Single Page on Elements Area    
      
if ( $('#portfolio-board').length ) {
  
  var PortItem = new Waypoint.Inview({
       
          element: $('#portfolio-board')[0],
          enter: function(down) {
            
           $('#portfolio-board img').addClass("animated fadeIn");
            
          }
    });
    


}else {
    
    
}





if ( $('#about-aro').length ) {
// it exists


    var inview = new Waypoint.Inview({
       
          element: $('#about-aro')[0],
          enter: function(direction) {
            
            TweenMax.to(".lines", 1.3, {top:-200, opacity:1});
            $('#about-aro h2').addClass("animated fadeInUp");
            $('#about-aro p').addClass("animated fadeIn");
            
          }
          
    });
    
    
} else{
    
    
}






});