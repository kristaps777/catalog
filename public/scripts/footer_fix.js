// A small fix for mobile users to avoid the fixed footer from popping up, when virtual keyboard is activated.
// If the device used is detected as mobile, event listeners are added for input fields to adjust footer
// opacity.
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

hideFooter();
