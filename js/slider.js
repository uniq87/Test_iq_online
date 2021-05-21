$(document).ready(function()
{
    $("#datepicker").datepicker();
    $("#slider1, #slider2").slider({
        range: "max",
        min: 1000,
        max: 3000000,
        value: 1000000,
        slide: function( event, ui ) {
        $( "#amount" ).val( ui.value );
      } 
    });
});