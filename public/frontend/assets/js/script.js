/* =========================
   PAGE LOADER
========================= */
// (function () {
//     const loader = document.getElementById('pageLoader');
//     if (!loader) return;

//     // Hide loader when page is fully loaded
//     window.addEventListener('load', () => {
//         setTimeout(() => {
//             loader.classList.add('hidden');
//         }, 800);
//     });

//     // Also hide after timeout in case load event doesn't fire
//     setTimeout(() => {
//         loader.classList.add('hidden');
//     }, 3000);
// })();


window.addEventListener("load", function () {
    const loader = document.getElementById("pageLoader");
    loader.classList.add("hidden");
});


/* =========================
   NAVBAR SCROLL EFFECT
========================= */
const navbar = document.querySelector('.custom-navbar');

if (navbar) {
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });
}


/* =========================
   HIGHLIGHT TODAY'S SCHEDULE
========================= */
const days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
const todayName = days[new Date().getDay()];

document.querySelectorAll('.schedule-card').forEach(card => {
    const dayEl = card.querySelector('.day');
    if (dayEl && dayEl.innerText.trim() === todayName) {
        card.classList.add('active');
    }
});


/* =========================
   MOBILE OFF-CANVAS MENU
========================= */
(function () {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('mobile-menu-overlay');
    const closeBtn = document.getElementById('mobile-menu-close');
    const body = document.body;

    if (!btn || !menu || !overlay) return;

    function openMenu() {
        btn.setAttribute('aria-expanded', 'true');
        btn.querySelector('i').className = 'bi bi-x fs-4';
        menu.style.display = 'flex';            // make sure element participates in layout
        menu.classList.add('open');
        overlay.style.display = 'block';       // overlay always covers viewport
        overlay.classList.add('open');
        menu.setAttribute('aria-hidden', 'false');
        body.classList.add('no-scroll');
    }

    function closeMenu() {
        btn.setAttribute('aria-expanded', 'false');
        btn.querySelector('i').className = 'bi bi-list fs-4';
        menu.classList.remove('open');
        overlay.classList.remove('open');
        menu.setAttribute('aria-hidden', 'true');
        body.classList.remove('no-scroll');
        menu.style.display = 'none';           // hide completely
        overlay.style.display = 'none';
    }

    btn.addEventListener('click', () => {
        menu.classList.contains('open') ? closeMenu() : openMenu();
    });

    overlay.addEventListener('click', closeMenu);
    closeBtn && closeBtn.addEventListener('click', closeMenu);

    menu.addEventListener('click', e => {
        if (e.target.classList.contains('mobile-link')) closeMenu();
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 992) closeMenu();
    });

    window.addEventListener('keydown', e => {
        if (e.key === 'Escape' && menu.classList.contains('open')) closeMenu();
    });
})();


/* =========================
   SCHEDULE OPENING STATUS
========================= */
// (function () {

//     const now = new Date();
//     const today = now.getDay(); // 0=Sun, 2=Tue, 5=Fri

//     // Tuesday & Friday → closed
//     if (today === 2 || today === 5) {
//         document.querySelectorAll('.schedule-card').forEach(card => {
//             const status = card.querySelector('.status');
//             card.classList.add('closed');
//             if (status) {
//                 status.classList.add('closed');
//                 status.innerText = 'Closed Today';
//             }
//         });
//         return;
//     }

//     const currentMinutes = now.getHours() * 60 + now.getMinutes();

//     document.querySelectorAll('.schedule-card[data-start]').forEach(card => {
//         const status = card.querySelector('.status');
//         if (!status) return;

//         const [sh, sm] = card.dataset.start.split(':').map(Number);
//         const [eh, em] = card.dataset.end.split(':').map(Number);

//         const startMin = sh * 60 + sm;
//         const endMin   = eh * 60 + em;

//         if (currentMinutes >= startMin && currentMinutes < endMin) {
//             status.innerText = 'Open Now';
//             status.classList.add('available');
//         } else {
//             status.innerText = `Opens at ${formatTime(card.dataset.start)}`;
//             status.classList.add('closed');
//         }
//     });

//     function formatTime(time24) {
//         let [h, m] = time24.split(':').map(Number);
//         const ampm = h >= 12 ? 'PM' : 'AM';
//         h = h % 12 || 12;
//         return `${h}:${m} ${ampm}`;
//     }

// })();





/* =========================
   HERO SECTION LIVE CALENDAR
========================= */
const monthEl = document.getElementById('calendar-month');
    const datesEl = document.getElementById('calendar-dates');

    const today = new Date();
    const year = today.getFullYear();
    const month = today.getMonth();
    const day = today.getDate();

    // Month name
    const monthName = today.toLocaleString('default', { month: 'long' });
    monthEl.innerText = `${monthName}, ${year}`;

    // Days in current month
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    // Show only nearby dates (today ± 3 days)
    for (let i = day - 3; i <= day + 3; i++) {
        if (i > 0 && i <= daysInMonth) {
            const span = document.createElement('span');
            span.innerText = i;

            if (i === day) {
                span.classList.add('active');
            }

            datesEl.appendChild(span);
        }
    }


/* =========================
   VIDEO FILTER FUNCTIONALITY
========================= */
(function () {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const videoCards = document.querySelectorAll('.video-card');

    if (filterButtons.length === 0 || videoCards.length === 0) return;

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const selectedFilter = button.getAttribute('data-filter');

            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            // Filter videos
            videoCards.forEach(card => {
                const cardFilter = card.getAttribute('data-filter');

                if (selectedFilter === 'all' || cardFilter === selectedFilter) {
                    // Show card with animation
                    card.classList.remove('hidden');
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                    card.style.visibility = 'visible';
                } else {
                    // Hide card with animation
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    card.classList.add('hidden');
                }
            });
        });
    });
})();












const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-links .nav-link");

    window.addEventListener("scroll", () => {
        let current = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120;
            if (scrollY >= sectionTop) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href") === "#" + current) {
                link.classList.add("active");
            }
        });
    });