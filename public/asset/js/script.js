// document.addEventListener("DOMContentLoaded", function() {
//     // Add the 'active' class to the corresponding link
//     var navLinks = document.getElementById("navLinks").getElementsByTagName("a");
//     for (var i = 0; i < navLinks.length; i++) {
//         var href = navLinks[i].href.split("/").pop();
//         if (['{{ implode("', '", $activePages) }}'].includes(href)) {
//             navLinks[i].classList.add("active");
//         }
//     }
// });


document.addEventListener("DOMContentLoaded", function() {
    // Get the current path
    var path = window.location.pathname;

    // Remove the trailing slash (if any) and get the last part of the path
    var page = path.replace(/\/$/, "").split("/").pop();

    // Add the 'active' class to the corresponding link
    var navLinks = document.getElementById("navLinks").getElementsByTagName("li");
    for (var i = 0; i < navLinks.length; i++) {
        var href = navLinks[i].getElementsByTagName("a")[0].href.split("/").pop();
        if (href === '{{$page}}') {
            navLinks[i].classList.add("active");
        }
    }
});
