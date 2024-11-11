$(document).ready( function() {
   
    $("#software").click(function(){
        $("#card").load('software')
    })

    $("#hardware").click(function(){
        $("#card").load('hardware')
    })

    $("#mg").click(function(){
        $("#card").load('mensagem')
    })
})