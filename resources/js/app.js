require('./bootstrap');

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

import Choices from 'choices.js';

// Create multiselect element
window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 3,
        removeItemButton: true,
    });
}
