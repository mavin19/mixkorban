


$(document).ready(function(){
    // each filter click 
    var filter_li = $('#filter li');
    
    // prevent input from clicking at the same time
    $(filter_li.find('input')).click(function(e){
        $(this).trigger('click');
    })

    filter_li.mouseup(function(){
        $(this).find('input').trigger('click');
        $(this).parent().parent().find('button').css('visibility','unset')
    })

})