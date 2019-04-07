function pauseVideo(e)
{
    document.getElementById("vid_intro").pause();
}

function toggleDropdown(e)
{
//    function $('input[type=checkbox]').click();
    
    var checkBoxes = $("input[type=checkbox]");
    checkBoxes.prop("checked", !checkBoxes.prop("checked"));
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
