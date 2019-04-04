function pauseVideo(e)
{
    document.getElementById("vid_intro").pause();
}

$(document).ready(function() {    
    /*  STICKY NAV  */
    $('.js-section--news').waypoint(function(direction) {
        if(direction == "down") 
        {
            $('nav').addClass('sticky');
            document.getElementById("sticky__back").style.visibility = 'visible';
        } 
        else 
        {
            $('nav').removeClass('sticky');
            document.getElementById("sticky__back").style.visibility = 'hidden';
        }
    }, {
        offset: '60px;'
    });
});
