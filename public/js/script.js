$(document).ready(function() {
    
    /*  Sticky nav  */
    $('.js-section--news').waypoint(function(direction) {
        
        if(direction == "down") 
        {
            $('nav').addClass('sticky');
        } 
        else
        {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '60px;'
    });
});