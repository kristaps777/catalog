// I am using an event listener on the <select> tag that has all the available 
// product types and a switch statement to replace the content of the target <section>
// based on the selectedIndex of the attribute.
// The content of the target <section> tag is replaced with a prepared template from templates.js
let attribute_type = document.getElementById('attribute_type');
let attribute_stats = document.getElementById('attribute_stats');

// hideFooter() is also run after each switch, because initially the extra input fields are not present
// on the page.
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
