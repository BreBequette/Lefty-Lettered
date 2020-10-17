function hamburgerNav() {
    var nav = document.getElementById("navigation");
    if (nav.className === "navbar") {
        nav.className += " responsive";
    } else {
        nav.className = "navbar"
    }

    var logo = document.getElementById("logo");
    if (logo.className === "logo") {
        logo.className += " responsive";
    } else {
        logo.className = "logo"
    }

}