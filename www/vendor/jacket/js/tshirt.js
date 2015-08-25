// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

$(function() {
    // Place any jQuery/helper plugins in here.

    // Fix table script
    function tableFixed (type) {
        var table = $("table.fixed");
        var container = table.parent ();
        var width = 0;

        containerWidth = container.width ();
        tableWidth = table.width ();

        table.children ('thead').children ("tr:first-child").children ('th').each (function (index) {
            if (type == "pixels") width = $(this).width ()  + "px";
            else width = ($(this).width () / table.width () * 100) + "%";

            console.log (width);

            $(this).css ("width", width);
            $(this).append ("<div style='width:" + width + "' />");
            table.children ("tbody").children ("tr:first-child").children ("td").eq(index).css ("width", width);
            table.children ("tbody").children ("tr:first-child").children ("td").eq(index).append ("<div style='width:" + width + "' />");
        });

        table.addClass ("fixed");
        table.children ("thead").css ("height", table.children ("thead").height () + "px");
        table.children ("tbody").css ("margin-top", table.children ("thead").height () + "px");
    }
    // tableFixed ("pixels");


    $(".button.delete").click ( function () {
        $.ajax({
            url:$(this).attr ("href")
        }).done(function(element, status) {
            if ($("#popupOverflow").length == 0) {
                $("body").append ("<div id='popupOverflow' style='display:none'><div id='popupMargin'><div id='popupContent' /'></div></div>");
            }

            $("#popupOverflow").fadeIn (100);
            $("#popupOverflow > div > div").html ($(element));
        });

        return false;
    });

    $("#searchbar").keypress(function(evt){
        if(evt.keyCode == 13){
            evt.preventDefault();

            var findValue = $(this).val();
            var Url = window.location.href.replace(/\?.*/g,"");
            if(findValue.length == 0){
                return;
            }else{
                var finderUrl = Url + '?!search=' + findValue;
            }
            window.location = finderUrl;
        }
    });

    $('.searchArea .arrowDown').click(function(){
        $(this).toggleClass("open");
        $(this).parent().next().slideToggle(100);
    });

    $("#clear").click(function(){
        $("#searchbar").val("");

        var url = window.location.href.replace(/\?.*/g,"");
        window.location = url;
     });

    // $(".tabbarArea").owlCarousel({
    //     itemsCustom : [
    //         [0, 1],
    //         [560, 2],
    //         [860, 3],
    //         [1025, 4],
    //     ],
    //     pagination: false,
    //     navigation: true,
    //     navigationText: [
    //         "<i class='xn xn-angle-left'></i>",
    //         "<i class='xn xn-angle-right'></i>"
    //     ],
    // });

    // var index = $( ".owl-item" ).index($('.tabbarArea .button.active').parents('.owl-item'));
    // $(".tabbarArea").trigger("owl.goTo", index);
});
