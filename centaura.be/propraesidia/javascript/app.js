
$(document).ready(init);


function init(){

$("#anderekeuzelink").hover(function(){

    $("#anderjaar").slideDown();
},function(){

        $("#anderjaar").mouseleave(function(){
                    $("#anderjaar").slideUp();
                })


})





}
