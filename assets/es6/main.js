import mask from "./blocks/mask";
import scrolling from "./blocks/scrolling";
import other from "./blocks/other";

'use strict';

window.addEventListener('DOMContentLoaded', () => {
    mask('input[type="tel"]');
    scrolling();
    other();
});