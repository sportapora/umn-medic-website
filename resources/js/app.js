import './bootstrap';
import 'flowbite';
import "../css/satoshi.css";
import "../css/app.css";
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import persist from "@alpinejs/persist";
import Alpine from 'alpinejs';

Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    if (calendarEl) {
        const calendar = new Calendar(calendarEl, {
            plugins: [dayGridPlugin, interactionPlugin],
            initialView: 'dayGridMonth',
            events: '/contact-us-data',
            eventContent: function (info) {
                return {
                    html: `
                        <p class="font-bold">${info.event.title}</p><br>
                        <i>Status: <span class="font-semibold">${info.event.extendedProps.status}</span></i>
                        <p>${info.event.extendedProps.nama}</p>
                        <p>${info.event.extendedProps.waktu}</p>
                        <p>${info.event.extendedProps.lokasi}</p>
                    `,
                };
            },
            events: function (fetchInfo, successCallback, failureCallback) {
                fetch('/contact-us-data')
                    .then(response => response.json())
                    .then(events => {
                        const mappedEvents = events.map(event => {
                            let eventColor = '';

                            if (event.status === 'Pending') {
                                eventColor = 'gray';
                            } else if (event.status === 'Approve') {
                                eventColor = 'green';
                            } else if (event.status === 'Decline') {
                                eventColor = 'red';
                            }

                            return {
                                ...event,
                                color: eventColor
                            };
                        });

                        successCallback(mappedEvents);
                    });
            }
        });

        calendar.render();
    }
});
// end fullcalendar
