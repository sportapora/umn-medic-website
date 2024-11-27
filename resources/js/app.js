import './bootstrap';
import 'flowbite';
import "../css/satoshi.css";
import "../css/app.css";

import persist from "@alpinejs/persist";

import Alpine from 'alpinejs';

Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();
