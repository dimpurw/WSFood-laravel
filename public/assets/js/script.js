const text =
    "This is a modified jumbotron that occupies the entire horizontal space of its parent.";

let index = 0;

function writeText() {
    document.getElementById("write-text").innerText = text.slice(0, index);

    index++;

    if (index > text.length) {
        index = 0;
    }
}

setInterval(writeText, 100);

// parallax
$(window).scroll(function () {
    var wScroll = $(this).scrollTop();

    // jumbotron
    $(".jumbotron h1").css({
        transform: "translate(0px, " + wScroll / 2 + "%)",
    });

    $(".jumbotron p").css({
        transform: "translate(0px, " + wScroll / 1.2 + "%)",
    });

    // card
    if (wScroll > $(".card").offset().top - 250) {
        $(".card").addClass("muncul");
    }
});
