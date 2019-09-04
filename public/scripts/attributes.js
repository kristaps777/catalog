// I am using an event listener on the <select> tag that has all the available 
// product types and a switch statement to replace the content of the target <section>
// based on the selectedIndex of the attribute.
// The content of the target <section> tag is replaced with a prepared template from templates.js
hideFooter();
let attribute_type = document.getElementById('attribute_type');
let attribute_stats = document.getElementById('attribute_stats');

attribute_type.addEventListener("change", function () {
    switch (true) {
        case attribute_type.selectedIndex == 1:
            attribute_stats.innerHTML = dvd_template;
            hideFooter();
            break;

        case attribute_type.selectedIndex == 2:
            attribute_stats.innerHTML = book_template;
            hideFooter();
            break;

        case attribute_type.selectedIndex == 3:
            attribute_stats.innerHTML = furniture_template;
            hideFooter();
            break;
    }
});

function hideFooter() {
    $(document).ready(function () {
        var isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

        if (isMobile) {
            let footer = document.querySelector("footer");
            let inputs = document.querySelectorAll("input");
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener("blur", function () {
                    footer.style.opacity = 1;
                })
                inputs[i].addEventListener("focus", function () {
                    footer.style.opacity = 0;
                })
            }
        }
    });
};
