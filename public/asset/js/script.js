// to make the underline stay on a particular page you navigate to

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


//to make the icon button change to an input when clicked on shop page

const searchIcon = document.getElementById('searchIcon');
const searchInput = document.getElementById('searchInput');

searchIcon.addEventListener('click', function () {
    searchInput.classList.toggle('active');
});


// to toggle visibility on registration page
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";

    } else {
        passwordInput.type = "password";
    }
}