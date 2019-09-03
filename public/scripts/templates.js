const dvd_template =
    '<div class="data_input flex flex_align_center">' +
    '<input class="input_background" name="size" id="size" type="number" oninput="this.value=this.value.slice(0,this.maxLength)" spellcheck="false" min="0" step="1"' +
    'minlength="1" maxlength="4" min="0" step="1" autocomplete="off" required>' +
    '<label for="size">Size<span class="asterisk">*️</span></label>' +
    '</div>' +
    '<div class="data_description flex flex_align_center">Please enter a size (in MB); max length = 4 characters, type = number/integer</div>';

const furniture_template =
    '<div class="data_input flex flex_align_center">' +
    '<input class="input_background" name="height" id="height" type="number" oninput="this.value=this.value.slice(0,this.maxLength" spellcheck="false" min="0" step="0.01"' +
    'minlength="1" maxlength="6" autocomplete="off" required>' +
    '<label for="height">Height<span class="asterisk">*️</span></label>' +
    '</div>' +
    '<div class="data_description flex flex_align_center">Please enter a height (in cm); min length = 1 character, max length = 6 characters, decimal separator = ".", type = number/float/2 decimal spaces</div>' +
    '<div class="data_input flex flex_align_center">' +
    '<input class="input_background" name="width" id="width" type="number" oninput="this.value=this.value.slice(0,this.maxLength)" spellcheck="false" min="0" step="0.01"' +
    'minlength="1" maxlength="6" autocomplete="off" required>' +
    '<label for="width">Width<span class="asterisk">*️</span></label>' +
    '</div>' +
    '<div class="data_description flex flex_align_center">Please enter a width (in cm); min length = 1 character, max length = 6 characters, decimal separator = ".", type = number/float/2 decimal spaces</div>' +
    '<div class="data_input flex flex_align_center">' +
    '<input class="input_background" name="length" id="length" type="number" oninput="this.value=this.value.slice(0,this.maxLength)" spellcheck="false" min="0" step="0.01"' +
    'minlength="1" maxlength="6" autocomplete="off" required>' +
    '<label for="length">Length<span class="asterisk">*️</span></label>' +
    '</div>' +
    '<div class="data_description flex flex_align_center">Please enter a length (in cm); min length = 1 character, max length = 6 characters, decimal separator = ".", type = number/float/2 decimal spaces</div>';

const book_template =
    '<div class="data_input flex flex_align_center">' +
    '<input class="input_background" name="weight" id="weight" type="number" oninput="this.value=this.value.slice(0,this.maxLength)" spellcheck="false" min="0" step="0.01"' +
    'minlength="1" maxlength="6" autocomplete="off" required>' +
    '<label for="weight">Weight<span class="asterisk">*️</span></label>' +
    '</div>' +
    '<div class="data_description flex flex_align_center">Please enter a weight (in kg); min length = 1 character, max length = 6 characters, decimal separator = ".", type = number/float/2 decimal spaces</div>';
