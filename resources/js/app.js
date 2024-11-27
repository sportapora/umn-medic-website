import './bootstrap';
import 'flowbite';
import "../css/satoshi.css";
import "../css/app.css";

// full calendar
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';


document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    if (calendarEl) {
        const calendar = new Calendar(calendarEl, {
            plugins: [dayGridPlugin],
            initialView: 'dayGridMonth',
            events: '/contact-us-data',
            eventContent: function (info) {
                return {
                    html: `
                        <b>${info.event.title}</b><br>
                        <i>Status: ${info.event.extendedProps.status}</i>
                    `,
                };
            },
        });

        calendar.render();
    }
});
// end fullcalendar

import persist from "@alpinejs/persist";

import Alpine from 'alpinejs';

Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();
