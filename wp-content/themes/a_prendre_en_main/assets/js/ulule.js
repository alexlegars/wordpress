(function() {
    var ululeAPI = "https://api.ulule.com/v1/projects/10-days-10-songs";
    $.getJSON( ululeAPI, {
        format: "json"
    })
        .done(function( data ) {
                $( "<img>" ).attr( "src", data.amount_raised ).appendTo( "#caca" );
        });
})(jQuery);