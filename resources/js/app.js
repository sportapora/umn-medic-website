import './bootstrap';
import 'flowbite';
import "../css/satoshi.css";
import "../css/app.css";
import {Calendar} from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import persist from "@alpinejs/persist";
import Alpine from 'alpinejs';
import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

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
            events: function (fetchInfo, successCallback) {
                fetch('/contact-us-data')
                    .then(response => response.json())
                    .then(events => {
                        const mappedEvents = events.map(event => {
                            let eventColor = '';

                            if (event.status === 'Pending') {
                                eventColor = 'gray';
                            } else if (event.status === 'On Progress') {
                                eventColor = 'blue';
                            } else if (event.status === 'Canceled') {
                                eventColor = 'red';
                            } else if (event.status === 'Completed') {
                                eventColor = 'green';
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
    // end fullcalendar

});

// Animasi
document.addEventListener("DOMContentLoaded", () => {
    // Animasi untuk elemen dengan kelas .tagline
    gsap.to(".tagline", {
        opacity: 1,
        y: 0,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".tagline",
            start: "top 70%",      
            end: "top 30%",        
            scrub: 1,              
        }
    });

    // Animasi untuk elemen dengan kelas .quote
    gsap.to(".quote", {
        opacity: 1,
        y: 0,
        duration: 1.5,
        ease: "power3.out",
        delay: 0.5,
        scrollTrigger: {
            trigger: ".quote",
            start: "top 70%",
            end: "top 30%",
            scrub: 1,
        }
    });

    gsap.to(".star-icon", {
        rotation: 360,
        repeat: -1,
        duration: 10,
        ease: "none",
    });
});

document.addEventListener("DOMContentLoaded", () => {
    // Animasi untuk judul 'Maskot'
    gsap.to(".maskot-title", {
        opacity: 1,
        y: 0,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".maskot-title",  // Elemen yang memicu animasi
            start: "top 80%",          // Mulai animasi saat elemen mencapai 80% dari viewport
            end: "top 30%",            // Selesai saat elemen mencapai 30% dari viewport
            scrub: 1,                  // Sinkronkan animasi dengan scroll
            markers: false,            // Nonaktifkan marker setelah uji coba
        }
    });

    // Animasi untuk gambar maskot
    gsap.to(".maskot-image", {
        opacity: 1,
        scale: 1.1,              // Membesarkan gambar sedikit untuk efek dinamis
        rotation: 0,            // Memberikan sedikit rotasi untuk animasi
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".maskot-image", // Elemen yang memicu animasi
            start: "top 80%",          // Mulai animasi saat elemen mencapai 80% dari viewport
            end: "top 30%",            // Selesai saat elemen mencapai 30% dari viewport
            scrub: 1,                  // Sinkronkan animasi dengan scroll
            markers: false,            // Nonaktifkan marker setelah uji coba
        }
    });
});