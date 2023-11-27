document.addEventListener("DOMContentLoaded", function() {
    // Add the 'active' class to the corresponding link
    var navLinks = document.getElementById("navLinks").getElementsByTagName("a");
    for (var i = 0; i < navLinks.length; i++) {
        var href = navLinks[i].href.split("/").pop();
        if (['{{ implode("', '", $activePages) }}'].includes(href)) {
            navLinks[i].classList.add("active");
        }
    }
});