document.addEventListener("DOMContentLoaded", function () {
    // Get the current path
    const path = window.location.pathname;

    // Remove the trailing slash (if any) and get the last part of the path
    const page = path.replace(/\/$/, "").split("/").pop();

    // Add the 'active' class to the corresponding link
    const navLinks = document
        .getElementById("navLinks")
        .getElementsByTagName("li");

    for (let i = 0; i < navLinks.length; i++) {
        const href = navLinks[i]
            .getElementsByTagName("a")[0]
            .href.split("/")
            .pop();

        if (href === page) {
            navLinks[i].classList.add("active");
        }
    }
});
