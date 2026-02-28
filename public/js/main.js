// Nav scroll
const navbar = document.getElementById("navbar");
window.addEventListener("scroll", () => {
    navbar.classList.toggle("scrolled", window.scrollY > 60);
});

// Mobile menu
const hamburger = document.getElementById("hamburger");
const mobileMenu = document.getElementById("mobileMenu");

if (hamburger) {
    hamburger.addEventListener("click", () => {
        const isOpen = hamburger.classList.toggle("open");
        mobileMenu.classList.toggle("open");
        hamburger.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
}
function closeMobile() {
    hamburger.classList.remove("open");
    mobileMenu.classList.remove("open");
    hamburger.setAttribute("aria-expanded", "false");
}
window.closeMobile = closeMobile; // make available to inline handlers

// Reveal on scroll
const reveals = document.querySelectorAll(".reveal");
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((e) => {
            if (e.isIntersecting)
                setTimeout(() => e.target.classList.add("visible"), 100);
        });
    },
    { threshold: 0.1 },
);
reveals.forEach((r) => observer.observe(r));

// Stats counter
const stats = document.querySelectorAll(".stat-num");
const statsObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((e) => {
            if (e.isIntersecting && !e.target.dataset.done) {
                e.target.dataset.done = 1;
                const target = +e.target.dataset.target;
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;
                const timer = setInterval(() => {
                    current = Math.min(current + step, target);
                    e.target.textContent =
                        Math.floor(current).toLocaleString() + "+";
                    if (current >= target) clearInterval(timer);
                }, 16);
            }
        });
    },
    { threshold: 0.5 },
);
stats.forEach((s) => statsObserver.observe(s));

// Lightbox
function openLightbox(el) {
    const src = el.querySelector("img").src;
    document.getElementById("lightboxImg").src = src;
    document.getElementById("lightbox").classList.add("open");
}
function closeLightbox() {
    document.getElementById("lightbox").classList.remove("open");
}
window.openLightbox = openLightbox;
window.closeLightbox = closeLightbox;

// Collection modal data
const modalData = {
    living: {
        tag: "01 — Living Room",
        title: "Living Room Furniture",
        desc: "Transform your living space into a haven of elegance. Our living room collection features handcrafted sofas, coffee tables, entertainment units, and accent pieces — designed to anchor your home with warmth and sophistication.",
        features: [
            "Solid Hardwood Frames",
            "Premium Upholstery",
            "Custom Sizes",
            "Multiple Finishes",
            "Storage Options",
        ],
    },
    bedroom: {
        tag: "02 — Bedroom",
        title: "Bedroom Furniture",
        desc: "Create a sanctuary of rest and luxury. Our bedroom sets — from carved bed frames to bespoke wardrobes and bedside tables — are crafted for comfort, style, and durability that lasts decades.",
        features: [
            "King / Queen / Single Sizes",
            "Built-in Storage",
            "Custom Headboards",
            "Matching Sets",
            "Solid Teak & Sheesham",
        ],
    },
    dining: {
        tag: "03 — Dining",
        title: "Dining Sets",
        desc: "Elevate every meal into an occasion. Our dining sets combine sculptural table bases, hand-turned legs, and ergonomically designed chairs to create spaces where families gather and memories are made.",
        features: [
            "4 to 12 Seater Options",
            "Extendable Tables",
            "Matched Chair Sets",
            "Glass & Wood Tops",
            "Indoor & Outdoor",
        ],
    },
    office: {
        tag: "04 — Office",
        title: "Office Furniture",
        desc: "Command your workspace with authority. Our executive desks, bookshelves, conference tables, and ergonomic seating are built for the professional who demands both performance and prestige.",
        features: [
            "Executive Desks",
            "Conference Tables",
            "Ergonomic Chairs",
            "Filing Cabinets",
            "Open-Plan Solutions",
        ],
    },
    custom: {
        tag: "05 — Bespoke",
        title: "Custom-Made Furniture",
        desc: "Have a vision? We bring it to life. Our bespoke service allows you to work directly with our master craftsmen — choosing your wood, dimensions, joinery, finish, and design details from the ground up.",
        features: [
            "3D Design Preview",
            "Any Dimension",
            "Choice of Wood Species",
            "Hand-Carved Details",
            "60-Day Delivery",
        ],
    },
};

function openModal(type) {
    const d = modalData[type];
    if (!d) return;
    document.getElementById("modal-tag").textContent = d.tag;
    document.getElementById("modal-title").textContent = d.title;
    document.getElementById("modal-desc").textContent = d.desc;
    const feats = document.getElementById("modal-features");
    feats.innerHTML = d.features
        .map((f) => `<span class="modal-feature">${f}</span>`)
        .join("");
    document.getElementById("modal").classList.add("open");
}
function closeModal() {
    document.getElementById("modal").classList.remove("open");
}
window.openModal = openModal;
window.closeModal = closeModal;

document.getElementById("modal")?.addEventListener("click", function (e) {
    if (e.target === this) closeModal();
});

// Form submit (demo)
function handleSubmit(e) {
    e.preventDefault();
    const btn = e.target.querySelector(".btn-submit");
    btn.textContent = "Enquiry Sent ✓";
    btn.style.background = "#2d6a4f";
    btn.style.color = "#fff";
    setTimeout(() => {
        btn.textContent = "Send Enquiry →";
        btn.style.background = "";
        btn.style.color = "";
    }, 3000);
}
window.handleSubmit = handleSubmit;
