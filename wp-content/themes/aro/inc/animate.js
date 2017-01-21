
$(document).ready(function(){
 
    TweenMax.to("#slide", 1, {height:"100vh", ease:Power1.easeOut });
    TweenMax.to("#navigation",1,{left:"0px", ease:Power2.easeOut, delay:1});
    TweenMax.to("#content",1, {top:0,opacity:1, ease:Power2.easeInOut, delay:1.5});
    

    // Navigation Functions
    var $open = $('.open-nav'); // Creative variable for menu icon
    var $nav =  $('#navigation'); // Creative variable for navigation bar
    var $close = $('.close-nav');
    
    function navOpen (){
        TweenMax.to("#blackout", 1, {autoAlpha: 1}); // start the blackout overlay
        TweenMax.to("#navigation",1,{width:"600px",ease:Power2.easeInOut}); // grow out the menu
        TweenMax.to(".open-nav",.1,{autoAlpha:0});
        TweenMax.to(".close-nav",.5,{autoAlpha:1});
        TweenMax.to(".menu-menu-container",.5, {autoAlpha: 1, left:"90px", ease:Power1.easeInOut, delay:.8}); //display the menu
    }
    
    function navClose(){
        TweenMax.to("#blackout", 1, {autoAlpha: 0}); // start the blackout overlay
        TweenMax.to(".menu-menu-container",.4, {autoAlpha: 0, left:"30px", ease:Power1.easeInOut}); //display the menu
        TweenMax.to("#navigation",1,{width:"90px",ease:Power2.easeInOut}); // grow out the menu
        TweenMax.to(".close-nav",.1,{autoAlpha:0});
        TweenMax.to(".open-nav",.5,{autoAlpha:1});
        
    }
    
    $open.click(function() {
         
     navOpen();
         
    });
     
    $close.click(function() {
         
     navClose();
         
    });
    
    // Portfolio Featured Hover Animations
    var $porthover = $('.skinmd');
    
    function featuredPortHover(){
        
        TweenMax.to(".skinmd-img", 10, {scale:"1.1"});
        TweenMax.to(".skinmd h3",.7,{left:"120px", ease:Power1.easeInOut});
        TweenMax.to(".skinmd h4",.7,{left:"120px", ease:Power1.easeInOut});
    
    }
    
    function featuredPortOut(){
        
        TweenMax.to(".skinmd-img", 2, {scale:"1"});
        TweenMax.to(".skinmd h3",.7,{left:"70px",ease:Power1.easeInOut});
        TweenMax.to(".skinmd h4",.7,{left:"70px",ease:Power1.easeInOut});
    
    }
    
    $porthover.mouseover(function(){
        
        featuredPortHover();
        
    })
    
    $porthover.mouseout(function(){
        
        featuredPortOut();
    })
    
    
    // Next Portfolio Navigation
    
     var $nextPortitem = $('#get-next-portfolio');
     
                
     function nextPorthover(){
                    
        TweenMax.to(".blackhover", .6, {opacity:0,ease:Power3.easeInOut});
        TweenMax.to(".next-link h4", .3, {left:"40px",ease:Power1.easeInOut});
        
     }
     
     
    function nextPorthoverOut(){
                    
        TweenMax.to(".blackhover", .6, {opacity:1,ease:Power1.easeInOut});
        TweenMax.to(".next-link h4", .3, {left:"0px"});
        
     }
     
     $nextPortitem.mouseover(function(){
         
         nextPorthover();
         
     })
     
    $nextPortitem.mouseout(function(){
         
         nextPorthoverOut();
         
     })
     
     
     
     // Portoflio list Item Animations
     
     var $PortlistItem = $('.portfolio-list-item');
     
     function portListItemHover(){
         
         
         TweenMax.to(".blackhover", .6, {opacity:1,ease:Power1.easeInOut});
         TweenMax.to(".portfolio-list-item-copy", .3, {left:"40px",ease:Power1.easeInOut});
         
     }
     
     function portListItemHoverOut(){
         
         
         TweenMax.to(".blackhover", .6, {opacity:0,ease:Power1.easeInOut});
         TweenMax.to(".portfolio-list-item-copy", .3, {left:"0px",ease:Power1.easeInOut});
         
     }
     
     
    // $PortlistItem.mouseover(function(){
         
      //   portListItemHover();
    // })
     
     //$PortlistItem.mouseout(function(){
         
       //  portListItemHoverOut();
     //})
     
         
         
         
         
             
    if (top.location.pathname === '/aroldoalvarez.com/user-experience-design-portfolio/')
    
            {
        
                // Load page specific animations
                
                var portlist = new TimelineMax();
                
                portlist.to(".blackhover",.1,{opacity:0}).to("#slide",.1,{backgroundColor:"#22232b"});
                
                
               
                
            } else{
                
                
            }
            

    
    if (top.location.pathname === '/aroldoalvarez.com/portfolio-item/the-skinmd/')
    
            {
        
                // Load page specific animations
                
                var ldSkinmd = new TimelineMax();
                
                ldSkinmd.to("#slide",.1,{backgroundColor:"#3564b6"}).to("#navigation", 1, { backgroundColor:"#28a2c5",borderRightColor:"#28a2c5"}).to(".site-menu",.1, {borderTopColor:"#02769a"}).to(".menu-menu-container ul li a",1,{color:"#ffffff"});
                
                
               
                
            } else{
                
                
            }
            
    if (top.location.pathname === '/aroldoalvarez.com/portfolio-item/goebel-custom-pools/')
    
            {
              
                // Load page specific animations
                
                var ldGoebel = new TimelineMax();
                
                ldGoebel.to("#slide",.1,{backgroundColor:"#4e7f90"}).to("#navigation", 1, { backgroundColor:"#38464f",borderRightColor:"#38464f"}).to(".site-menu",.1, {borderTopColor:"#445e76"}).to(".menu-menu-container ul li a",1,{color:"#ffffff"}).to("#portfolio-end",.1,{backgroundColor:"#1e2832"});
                
                
            } else{
                
                
            }  
            
 if (top.location.pathname === '/aroldoalvarez.com/portfolio-item/northside-world-music/')
    
            {
              
                // Load page specific animations
                
                var ldNswm = new TimelineMax();
                
                ldNswm.to("#slide",.1,{backgroundColor:"#f26422"}).to("#navigation", 1, { backgroundColor:"#d03434",borderRightColor:"#d03434"}).to(".site-menu",.1, {borderTopColor:"#cb6839"}).to(".menu-menu-container ul li a",1,{color:"#ffffff"}).to("#portfolio-end",.1,{backgroundColor:"#f6f6f6"});
                
                
            } else{
                
                
            }     
                
                
                
    if (top.location.pathname === '/aroldoalvarez.com/portfolio-item/baby-education-south-texas/')
    
            {
              
                // Load page specific animations
                
                var ldBest = new TimelineMax();
                
                ldBest.to("#slide",.1,{backgroundColor:"#4e7f90"}).to("#navigation", 1, { backgroundColor:"#38464f",borderRightColor:"#38464f"}).to(".site-menu",.1, {borderTopColor:"#445e76"}).to(".menu-menu-container ul li a",1,{color:"#ffffff"}).to("#portfolio-end",.1,{backgroundColor:"#437386"});
                
                
            } else{
                
                
            }        
                
                
                
    if (top.location.pathname === '/aroldoalvarez.com/portfolio-item/filetime-app/')
    
            {
              
                // Load page specific animations
                
                var ldFiletime = new TimelineMax();
                
                ldFiletime.to("#slide",.1,{backgroundColor:"#5e6a91"}).to("#portfolio-end",.1,{backgroundColor:"#e7e7e7"});
                
                
            } else{
                
                
            }    
            
    if (top.location.pathname === '/aroldoalvarez.com/portfolio-item/watkins-appeals-wordpress-theme/')
    
            {
              
                // Load page specific animations
                
                var ldWatkins = new TimelineMax();
                
                  ldWatkins.to("#slide",.1,{backgroundColor:"#95627b"}).to("#navigation", 1, { backgroundColor:"#7793bd",borderRightColor:"#7793bd"}).to(".site-menu",.1, {borderTopColor:"#445e76"}).to(".menu-menu-container ul li a",1,{color:"#ffffff"}).to("#portfolio-end",.1,{backgroundColor:"#437386"});
                
            } else{
                
                
            } 
            
    if (top.location.pathname === '/aroldoalvarez.com/about-aroldo-alvarez/')
    
            {
              
                // Load page specific animations
                
                var ldAro = new TimelineMax();
                
                 
                
            } else{
                
                
            }             
            
            
            
            
                                
});