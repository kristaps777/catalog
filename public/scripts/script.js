let attribute_type = document.getElementById('attribute_type');
let attribute_stats = document.getElementById('attribute_stats');

attribute_type.addEventListener("change", function () {
    switch (true) {
        case attribute_type.selectedIndex == 1:
            attribute_stats.innerHTML = dvd_template;
            break;

        case attribute_type.selectedIndex == 2:
            attribute_stats.innerHTML = book_template;
            break;

        case attribute_type.selectedIndex == 3:
            attribute_stats.innerHTML = furniture_template;
            break;
    }
})
