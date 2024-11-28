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
            eventClick: function(info) {
                const title = info.event.title;
                const startDate = info.event.start.toISOString().split('T')[0];
                const status = info.event.extendedProps.status;
                const description = info.event.extendedProps.description || 'Tidak ada deskripsi';

                document.getElementById('modalEventTitle').textContent = title;
                document.getElementById('modalEventDate').textContent = startDate;
                document.getElementById('modalEventStatus').textContent = status;
                document.getElementById('modalEventDescription').textContent = description;

                const modal = new window.Flowbite.Modal(document.getElementById('eventDetailModal'));
                modal.show();
            },
            events: function(fetchInfo, successCallback, failureCallback) {
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

import persist from "@alpinejs/persist";

import Alpine from 'alpinejs';

Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();
