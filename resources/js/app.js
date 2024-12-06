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
            trigger: ".maskot-title",  
            start: "top 80%",          
            end: "top 30%",            
            scrub: 1,                  
            markers: false,            
        }
    });

    // Animasi untuk gambar maskot
    gsap.to(".maskot-image", {
        opacity: 1,
        scale: 1.1,             
        rotation: 0,            
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".maskot-image",
            start: "top 80%",          
            end: "top 30%",            
            scrub: 1,                  
            markers: false,            
        }
    });
});


document.addEventListener("DOMContentLoaded", () => {
    // Animasi untuk gambar logo
    gsap.to(".about-logo", {
        opacity: 1,
        scale: 1.05,        
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".about-logo",
            start: "top 70%",  
            end: "top 30%",    
            scrub: 1,          
            markers: false,    
        }
    });

    // Animasi untuk judul 'ABOUT UMN MEDICAL CENTER'
    gsap.to(".about-title", {
        opacity: 1,
        y: 0,                  
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".about-title",
            start: "top 80%",    
            end: "top 30%",      
            scrub: 1,            
            markers: false,      
        }
    });

    // Animasi untuk paragraf deskripsi
    gsap.to(".about-description", {
        opacity: 1,
        y: 0,                    
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".about-description", 
            start: "top 80%",              
            end: "top 30%",                
            scrub: 1,                      
            markers: false,                
        }
    });
});


document.addEventListener("DOMContentLoaded", () => {
    // Parallax Effect pada bagian VISI
    gsap.fromTo(".visi-text", {
        y: -100, // Mulai dari posisi di atas
        opacity: 0,
    }, {
        y: 0, // Posisi akhir
        opacity: 1,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".visi-text", // Set trigger untuk elemen yang memiliki kelas visi-text
            start: "top 80%", // Animasi dimulai saat top elemen mencapai 80% viewport
            end: "top 30%", // Animasi selesai saat top elemen mencapai 30% viewport
            scrub: 1, // Menyinkronkan animasi dengan scroll
            markers: false, // Menyembunyikan marker scroll
        }
    });

    // Parallax Effect pada gambar VISI
    gsap.fromTo(".visi-img", {
        y: 100, // Mulai dari bawah
    }, {
        y: 0, // Posisi akhir
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".visi-img", // Set trigger untuk elemen yang memiliki kelas visi-img
            start: "top 80%", 
            end: "top 30%", 
            scrub: 1, 
            markers: false,
        }
    });

    // Parallax Effect pada bagian MISI
    gsap.fromTo(".misi-text", {
        y: -100, 
        opacity: 0,
    }, {
        y: 0, 
        opacity: 1,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".misi-text", 
            start: "top 80%", 
            end: "top 30%", 
            scrub: 1, 
            markers: false,
        }
    });

    // Parallax Effect pada gambar MISI
    gsap.fromTo(".misi-img", {
        y: 150, 
    }, {
        y: 0, 
        duration: 2.0,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".misi-img", 
            start: "top 90%", 
            end: "top 30%", 
            scrub: 1, 
            markers: false,
        }
    });
});
