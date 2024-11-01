import mask from "./blocks/mask";
import scrolling from "./blocks/scrolling";
import sliders from "./blocks/sliders";
import forms from "./blocks/forms";
import other from "./blocks/other";

'use strict';

window.addEventListener('DOMContentLoaded', () => {
    mask('input[type="tel"]');
    scrolling();
    sliders();
    forms();
    other();
});