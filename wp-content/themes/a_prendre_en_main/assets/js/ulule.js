(function() {
    var ululeAPI = "c";
    $.getJSON( ululeAPI, {
        format: "json"
    })
        .done(function( data ) {
                $( "<img>" ).attr( "src", data.amount_raised ).appendTo( "#caca" );
        });
})(jQuery);