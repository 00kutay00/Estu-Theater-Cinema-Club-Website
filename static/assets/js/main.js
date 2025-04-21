$("#searchbar-pc").keyup(function () {
    let q = $("#searchbar-pc").val();

    $.ajax({
        type: "POST",
        url: "/app/utils/search.php",
        data: { type: 1, q:q },
        success: function (html) {
            $("#search-video-result-pc").html(html);
        }
    });
});

$("#searchbar-mobile").keyup(function () {
    let q = $("#searchbar-mobile").val();
    
    $.ajax({
        type: "POST",
        url: "/app/utils/search.php",
        data: { type: 2, q:q },
        success: function (html) {
            $("#search-video-result-mobile").html(html);
        }
    });
});
