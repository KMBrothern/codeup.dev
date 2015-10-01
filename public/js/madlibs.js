$(function () {
    console.log("whee!")
    // hide the story from view on initial load
    $("#story").hide();

    //event handler for submit button on form

    $("#btn-click").click(function(e){
        //grab the value from the input box after the submit button is clicked
        // grab the values from the input boxes, then append them to the DOM
    $(".noun").empty().append($("input.noun").val());
    $(".adjective").empty().append($("input.adjective").val());
    $(".noun2").empty().append($("input.noun2").val());
    $(".insect").empty().append($("input.insect").val());
    $(".noun3").empty().append($("input.plural-noun").val());
    $(".verb").empty().append($("input.verb").val());

    // show the story when called for
    $("#story").show();

    //empty out all values entered after they're used in story
    $(':input').val('');

    // hide the questions
    $('#questions').hide();

  });
// play button to replay mad libs 
    $("#play-btn").click(function(e) {
        $("#questions").show();
        $("#story").hide();
    });

});