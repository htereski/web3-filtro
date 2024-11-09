import './bootstrap';
import Inputmask from "inputmask";
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function() {
    Inputmask({"mask": "(99) 99999-9999"}).mask(document.querySelectorAll("[data-mask-telefone]"));

    Inputmask({"mask": "999.999.999-99"}).mask(document.querySelectorAll("[data-mask-cpf]"));
});
