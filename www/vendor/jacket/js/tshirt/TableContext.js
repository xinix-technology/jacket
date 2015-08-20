// Table select for actions
$(function() {
    $("table tr").click (function () {
        if ($(this).hasClass ("selected")) {
            $(this).removeClass ("selected").attr("data-selected", "");
        } else {
            $(this).addClass ("selected").attr("data-selected", "true");
        }

        if ($("[data-selected='true']").length > 0) {
            $(".read").addClass ("contextual");
            $(".navbar-bottom").removeClass("hidden");
        } else {
            $(".read").removeClass ("contextual");
            $(".navbar-bottom").addClass("hidden");
        }
    });
});