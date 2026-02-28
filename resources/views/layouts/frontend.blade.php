<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shree Junga Furniture Udyog — Crafting Timeless Elegance | Birtamode, Nepal</title>
    <meta name="description"
        content="Premium furniture manufacturing in Birtamode, Jhapa, Nepal. Custom-designed living room, bedroom, dining, and office furniture crafted with excellence." />
    <meta name="keywords"
        content="furniture Nepal, premium furniture Birtamode, custom furniture Jhapa, luxury furniture manufacturer Nepal" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap"
        rel="stylesheet" />

    <style>
        :root {
            --walnut: #3d2314;
            --walnut-mid: #5c3a22;
            --walnut-light: #8b5e3c;
            --gold: #c9a96e;
            --gold-light: #e8d5b0;
            --cream: #faf6f0;
            --beige: #f0e8dc;
            --black: #0d0a08;
            --charcoal: #1a1410;
            --muted: #7a6a5a;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Jost', sans-serif;
            background: var(--cream);
            color: var(--charcoal);
            overflow-x: hidden;
        }

        /* ── Scrollbar ─────────────────────────────────────── */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--black);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gold);
            border-radius: 3px;
        }

        /* ── Nav ───────────────────────────────────────────── */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
            padding: 20px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.5s ease;
            background: transparent;
        }

        nav.scrolled {
            background: rgba(10, 7, 4, 0.96);
            padding: 14px 60px;
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(201, 169, 110, 0.15);
        }

        .nav-logo {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .nav-logo-main {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--gold);
            letter-spacing: 2px;
            line-height: 1;
        }

        .nav-logo-sub {
            font-size: 0.6rem;
            letter-spacing: 4px;
            color: var(--gold-light);
            text-transform: uppercase;
            font-weight: 300;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            list-style: none;
        }

        .nav-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.78rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 400;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--gold);
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-cta {
            background: transparent;
            border: 1px solid var(--gold);
            color: var(--gold) !important;
            padding: 8px 24px !important;
        }

        .nav-cta:hover {
            background: var(--gold) !important;
            color: var(--black) !important;
        }

        .nav-cta::after {
            display: none !important;
        }

        /* Hamburger */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            z-index: 1000;
        }

        .hamburger span {
            width: 26px;
            height: 1.5px;
            background: var(--gold);
            transition: all 0.3s;
            display: block;
        }

        .hamburger.open span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger.open span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.open span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        /* Mobile menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 75%;
            height: 100vh;
            background: var(--black);
            z-index: 998;
            padding: 100px 40px 40px;
            transition: right 0.4s ease;
            border-left: 1px solid rgba(201, 169, 110, 0.2);
        }

        .mobile-menu.open {
            right: 0;
        }

        .mobile-menu ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .mobile-menu a {
            color: var(--cream);
            text-decoration: none;
            font-size: 1.1rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-weight: 300;
            transition: color 0.3s;
        }

        .mobile-menu a:hover {
            color: var(--gold);
        }

        /* ── Section Common ────────────────────────────────── */
        section {
            padding: 120px 60px;
        }

        .section-label {
            font-size: 0.65rem;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 16px;
            font-weight: 500;
        }

        .section-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2.2rem, 4vw, 3.8rem);
            font-weight: 300;
            line-height: 1.15;
            color: var(--walnut);
        }

        .section-title em {
            font-style: italic;
            color: var(--walnut-light);
        }

        .gold-divider {
            width: 60px;
            height: 1px;
            background: var(--gold);
            margin: 24px 0 40px;
        }

        .center {
            text-align: center;
        }

        .center .gold-divider {
            margin-left: auto;
            margin-right: auto;
        }

        /* ── Hero ──────────────────────────────────────────── */
        #hero {
            height: 100vh;
            min-height: 700px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(135deg, rgba(13, 10, 8, 0.85) 0%, rgba(61, 35, 20, 0.6) 50%, rgba(13, 10, 8, 0.9) 100%),
                url('https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=1920&q=80') center/cover no-repeat;
            transform: scale(1.05);
            animation: heroZoom 20s ease-in-out infinite alternate;
        }

        @keyframes heroZoom {
            from {
                transform: scale(1.05);
            }

            to {
                transform: scale(1.12);
            }
        }

        .hero-bg::after {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='400' height='400' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 0 20px;
            animation: heroFade 1.2s ease forwards;
        }

        @keyframes heroFade {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-badge {
            display: inline-block;
            border: 1px solid var(--gold);
            color: var(--gold);
            font-size: 0.65rem;
            letter-spacing: 5px;
            text-transform: uppercase;
            padding: 6px 20px;
            margin-bottom: 30px;
            animation: heroFade 1.2s 0.2s ease both;
        }

        .hero-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(3rem, 7vw, 7rem);
            color: var(--white);
            font-weight: 300;
            line-height: 1.05;
            letter-spacing: -1px;
            margin-bottom: 20px;
            animation: heroFade 1.2s 0.4s ease both;
        }

        .hero-title em {
            color: var(--gold);
            font-style: italic;
        }

        .hero-sub {
            font-size: clamp(0.9rem, 1.5vw, 1.1rem);
            color: rgba(255, 255, 255, 0.65);
            letter-spacing: 3px;
            text-transform: uppercase;
            font-weight: 300;
            margin-bottom: 50px;
            animation: heroFade 1.2s 0.6s ease both;
        }

        .hero-btns {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            animation: heroFade 1.2s 0.8s ease both;
        }

        .btn-primary {
            background: var(--gold);
            color: var(--black);
            padding: 16px 42px;
            font-size: 0.75rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--gold-light);
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 1px solid rgba(255, 255, 255, 0.5);
            color: var(--white);
            padding: 16px 42px;
            font-size: 0.75rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-decoration: none;
            font-weight: 300;
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            border-color: var(--gold);
            color: var(--gold);
            transform: translateY(-2px);
        }

        .hero-scroll {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            animation: heroFade 1.2s 1.2s ease both;
        }

        .hero-scroll span {
            font-size: 0.6rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.4);
        }

        .scroll-line {
            width: 1px;
            height: 50px;
            background: linear-gradient(to bottom, var(--gold), transparent);
            animation: scrollPulse 2s ease-in-out infinite;
        }

        @keyframes scrollPulse {

            0%,
            100% {
                opacity: 0.4;
                transform: scaleY(1);
            }

            50% {
                opacity: 1;
                transform: scaleY(1.2);
            }
        }

        /* ── About ─────────────────────────────────────────── */
        #about {
            background: var(--black);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            max-width: 1300px;
            margin: 0 auto;
        }

        .about-img-wrap {
            position: relative;
        }

        .about-img {
            width: 100%;
            aspect-ratio: 4/5;
            object-fit: cover;
            filter: sepia(15%) contrast(1.05);
        }

        .about-img-accent {
            position: absolute;
            bottom: -30px;
            right: -30px;
            width: 200px;
            height: 200px;
            background: url('https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=400&q=80') center/cover;
            border: 6px solid var(--black);
        }

        .about-gold-line {
            position: absolute;
            top: -20px;
            left: -20px;
            width: 80px;
            height: 80px;
            border-top: 2px solid var(--gold);
            border-left: 2px solid var(--gold);
        }

        .about-text .section-title {
            color: var(--cream);
        }

        .about-text .section-label {
            color: var(--gold);
        }

        .about-text p {
            color: rgba(255, 255, 255, 0.55);
            line-height: 1.9;
            font-size: 0.95rem;
            font-weight: 300;
            margin-bottom: 20px;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .stat-item {
            border-top: 1px solid rgba(201, 169, 110, 0.3);
            padding-top: 20px;
        }

        .stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.8rem;
            color: var(--gold);
            font-weight: 300;
            line-height: 1;
        }

        .stat-label {
            font-size: 0.7rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.4);
            margin-top: 6px;
        }

        /* ── Collections ───────────────────────────────────── */
        #collections {
            background: var(--cream);
        }

        .collections-header {
            max-width: 600px;
            margin-bottom: 70px;
        }

        .collections-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .collection-card {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            aspect-ratio: 3/4;
        }

        .collection-card:first-child {
            grid-row: span 2;
            aspect-ratio: auto;
        }

        .collection-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
            filter: brightness(0.85);
        }

        .collection-card:hover img {
            transform: scale(1.08);
            filter: brightness(0.7);
        }

        .collection-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(13, 10, 8, 0.9) 0%, transparent 60%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
        }

        .collection-tag {
            font-size: 0.6rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 8px;
        }

        .collection-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            color: var(--white);
            font-weight: 300;
        }

        .collection-hover-btn {
            display: inline-block;
            margin-top: 12px;
            border: 1px solid var(--gold);
            color: var(--gold);
            padding: 8px 20px;
            font-size: 0.65rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.4s ease;
            cursor: pointer;
            text-align: center;
            background: transparent;
        }

        .collection-card:hover .collection-hover-btn {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── Why ───────────────────────────────────────────── */
        #why {
            background: var(--beige);
            position: relative;
            overflow: hidden;
        }

        #why::before {
            content: 'EXCELLENCE';
            position: absolute;
            top: 50%;
            left: -5%;
            transform: translateY(-50%);
            font-family: 'Cormorant Garamond', serif;
            font-size: 20rem;
            font-weight: 600;
            color: rgba(61, 35, 20, 0.04);
            pointer-events: none;
            white-space: nowrap;
            letter-spacing: -10px;
        }

        .why-header {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 80px;
        }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 2px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .why-card {
            background: var(--white);
            padding: 50px 30px;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .why-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--gold);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .why-card:hover {
            background: var(--walnut);
        }

        .why-card:hover::after {
            transform: scaleX(1);
        }

        .why-icon {
            font-size: 2.2rem;
            margin-bottom: 20px;
            display: block;
            transition: transform 0.4s ease;
        }

        .why-card:hover .why-icon {
            transform: scale(1.2);
        }

        .why-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.3rem;
            font-weight: 400;
            color: var(--walnut);
            margin-bottom: 12px;
            transition: color 0.4s;
        }

        .why-card:hover .why-title {
            color: var(--gold);
        }

        .why-desc {
            font-size: 0.8rem;
            color: var(--muted);
            line-height: 1.7;
            font-weight: 300;
            transition: color 0.4s;
        }

        .why-card:hover .why-desc {
            color: rgba(255, 255, 255, 0.5);
        }

        /* ── Gallery ───────────────────────────────────────── */
        #gallery {
            background: var(--charcoal);
        }

        .gallery-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .gallery-header .section-title {
            color: var(--cream);
        }

        .gallery-grid {
            columns: 4;
            gap: 4px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .gallery-item {
            break-inside: avoid;
            margin-bottom: 4px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            display: block;
            transition: transform 0.6s ease;
            filter: brightness(0.9);
        }

        .gallery-item::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(13, 10, 8, 0);
            transition: background 0.4s ease;
        }

        .gallery-item:hover::after {
            background: rgba(13, 10, 8, 0.4);
        }

        .gallery-item:hover img {
            transform: scale(1.06);
        }

        .gallery-zoom {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            z-index: 2;
            color: var(--gold);
            font-size: 1.5rem;
            transition: transform 0.4s ease;
            pointer-events: none;
        }

        .gallery-item:hover .gallery-zoom {
            transform: translate(-50%, -50%) scale(1);
        }

        /* Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.95);
            align-items: center;
            justify-content: center;
        }

        .lightbox.open {
            display: flex;
        }

        .lightbox img {
            max-width: 90vw;
            max-height: 90vh;
            object-fit: contain;
            border: 1px solid rgba(201, 169, 110, 0.2);
        }

        .lightbox-close {
            position: absolute;
            top: 30px;
            right: 40px;
            color: var(--gold);
            font-size: 2rem;
            cursor: pointer;
            background: none;
            border: none;
        }

        /* ── Testimonials ──────────────────────────────────── */
        #testimonials {
            background: var(--cream);
        }

        .testimonials-header {
            text-align: center;
            margin-bottom: 70px;
        }

        .testimonials-track {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .testimonial-card {
            background: var(--white);
            padding: 50px 40px;
            border-bottom: 3px solid transparent;
            transition: all 0.4s ease;
            position: relative;
        }

        .testimonial-card::before {
            content: '\201C';
            font-family: 'Cormorant Garamond', serif;
            font-size: 6rem;
            color: var(--gold-light);
            line-height: 0.5;
            position: absolute;
            top: 30px;
            left: 30px;
            pointer-events: none;
        }

        .testimonial-card:hover {
            border-bottom-color: var(--gold);
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(61, 35, 20, 0.1);
        }

        .stars {
            color: var(--gold);
            font-size: 0.8rem;
            letter-spacing: 3px;
            margin-bottom: 20px;
            padding-top: 30px;
        }

        .testimonial-text {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.1rem;
            color: var(--walnut-mid);
            line-height: 1.8;
            font-style: italic;
            margin-bottom: 30px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--beige);
            object-fit: cover;
            border: 2px solid var(--gold-light);
        }

        .author-name {
            font-weight: 600;
            font-size: 0.85rem;
            color: var(--walnut);
            letter-spacing: 1px;
        }

        .author-loc {
            font-size: 0.7rem;
            color: var(--muted);
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* ── Contact ───────────────────────────────────────── */
        #contact {
            background: var(--black);
            padding: 120px 60px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 100px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .contact-info .section-title {
            color: var(--cream);
        }

        .contact-info p {
            color: rgba(255, 255, 255, 0.5);
            line-height: 1.9;
            font-size: 0.9rem;
            font-weight: 300;
            margin-bottom: 40px;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 25px;
            margin-bottom: 40px;
        }

        .contact-detail {
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .detail-icon {
            font-size: 1.1rem;
            color: var(--gold);
            margin-top: 2px;
            flex-shrink: 0;
        }

        .detail-label {
            font-size: 0.65rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 4px;
        }

        .detail-value {
            color: rgba(255, 255, 255, 0.65);
            font-size: 0.9rem;
            font-weight: 300;
        }

        .map-embed {
            width: 100%;
            height: 220px;
            border: 1px solid rgba(201, 169, 110, 0.2);
            filter: grayscale(80%) invert(90%) contrast(0.8);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-size: 0.65rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(201, 169, 110, 0.2);
            color: var(--cream);
            padding: 14px 18px;
            font-family: 'Jost', sans-serif;
            font-size: 0.85rem;
            font-weight: 300;
            outline: none;
            transition: border-color 0.3s;
            width: 100%;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--gold);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.25);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 130px;
        }

        .form-group select option {
            background: var(--black);
        }

        .btn-submit {
            background: var(--gold);
            color: var(--black);
            border: none;
            padding: 16px 40px;
            font-family: 'Jost', sans-serif;
            font-size: 0.75rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            align-self: flex-start;
        }

        .btn-submit:hover {
            background: var(--gold-light);
            transform: translateY(-2px);
        }

        /* ── Footer ────────────────────────────────────────── */
        footer {
            background: var(--charcoal);
            padding: 80px 60px 30px;
            border-top: 1px solid rgba(201, 169, 110, 0.1);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 60px;
            max-width: 1300px;
            margin: 0 auto 60px;
        }

        .footer-brand-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.6rem;
            color: var(--gold);
            letter-spacing: 2px;
            margin-bottom: 6px;
        }

        .footer-brand-sub {
            font-size: 0.6rem;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.3);
            margin-bottom: 20px;
        }

        .footer-desc {
            color: rgba(255, 255, 255, 0.35);
            font-size: 0.82rem;
            line-height: 1.8;
            font-weight: 300;
            max-width: 260px;
        }

        .footer-socials {
            display: flex;
            gap: 14px;
            margin-top: 25px;
        }

        .social-btn {
            width: 38px;
            height: 38px;
            border: 1px solid rgba(201, 169, 110, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.8rem;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 600;
        }

        .social-btn:hover {
            border-color: var(--gold);
            color: var(--gold);
        }

        .footer-heading {
            font-size: 0.65rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 24px;
            font-weight: 500;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.35);
            text-decoration: none;
            font-size: 0.82rem;
            font-weight: 300;
            transition: color 0.3s;
            letter-spacing: 1px;
        }

        .footer-links a:hover {
            color: var(--gold);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            padding-top: 30px;
            text-align: center;
            max-width: 1300px;
            margin: 0 auto;
            color: rgba(255, 255, 255, 0.2);
            font-size: 0.75rem;
            letter-spacing: 2px;
        }

        /* ── WhatsApp ──────────────────────────────────────── */
        .whatsapp-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #25d366;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.4rem;
            text-decoration: none;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
            transition: all 0.3s;
            animation: waPulse 3s ease-in-out infinite;
        }

        .whatsapp-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 30px rgba(37, 211, 102, 0.6);
        }

        @keyframes waPulse {

            0%,
            100% {
                box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
            }

            50% {
                box-shadow: 0 4px 30px rgba(37, 211, 102, 0.7), 0 0 0 8px rgba(37, 211, 102, 0.1);
            }
        }

        /* ── Modal ─────────────────────────────────────────── */
        .modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9998;
            background: rgba(0, 0, 0, 0.85);
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal.open {
            display: flex;
        }

        .modal-box {
            background: var(--black);
            max-width: 700px;
            width: 100%;
            border: 1px solid rgba(201, 169, 110, 0.2);
            padding: 60px;
            position: relative;
            animation: modalIn 0.4s ease;
        }

        @keyframes modalIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 25px;
            background: none;
            border: none;
            color: var(--gold);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .modal-tag {
            font-size: 0.6rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: var(--gold);
        }

        .modal-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            color: var(--cream);
            margin: 12px 0 20px;
        }

        .modal-desc {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.85rem;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .modal-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .modal-feature {
            border: 1px solid rgba(201, 169, 110, 0.3);
            color: var(--gold-light);
            font-size: 0.7rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 6px 14px;
        }

        /* ── Animations ────────────────────────────────────── */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── Responsive ────────────────────────────────────── */
        @media (max-width: 1100px) {
            .why-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .collections-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .collection-card:first-child {
                grid-row: span 1;
                aspect-ratio: 3/4;
            }

            .gallery-grid {
                columns: 3;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }
        }

        @media (max-width: 900px) {
            section {
                padding: 80px 30px;
            }

            nav {
                padding: 18px 30px;
            }

            nav.scrolled {
                padding: 12px 30px;
            }

            .nav-links {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 60px;
            }

            .about-img-accent {
                display: none;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 60px;
            }

            .testimonials-track {
                grid-template-columns: 1fr;
            }

            .why-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery-grid {
                columns: 2;
            }
        }

        @media (max-width: 600px) {
            section {
                padding: 70px 20px;
            }

            nav {
                padding: 16px 20px;
            }

            .hero-btns {
                flex-direction: column;
                align-items: center;
            }

            .about-stats {
                grid-template-columns: 1fr 1fr;
            }

            .why-grid {
                grid-template-columns: 1fr;
            }

            .collections-grid {
                grid-template-columns: 1fr;
            }

            .gallery-grid {
                columns: 1;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            footer {
                padding: 60px 20px 24px;
            }

            .modal-box {
                padding: 40px 24px;
            }
        }
    </style>
</head>

<body>

    {{-- ── Navigation ─────────────────────────────────────── --}}
    <nav id="navbar">
        <div class="nav-logo">
            <div class="nav-logo-main">Shree Junga</div>
            <div class="nav-logo-sub">Furniture Udyog · Est. Nepal</div>
        </div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#collections">Collections</a></li>
            <li><a href="#why">Quality</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#testimonials">Reviews</a></li>
            <li><a href="#contact" class="nav-cta">Contact Us</a></li>
        </ul>
        <div class="hamburger" id="hamburger">
            <span></span><span></span><span></span>
        </div>
    </nav>

    {{-- ── Mobile Menu ──────────────────────────────────────── --}}
    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li><a href="#about" onclick="closeMobile()">About</a></li>
            <li><a href="#collections" onclick="closeMobile()">Collections</a></li>
            <li><a href="#why" onclick="closeMobile()">Quality</a></li>
            <li><a href="#gallery" onclick="closeMobile()">Gallery</a></li>
            <li><a href="#testimonials" onclick="closeMobile()">Reviews</a></li>
            <li><a href="#contact" onclick="closeMobile()">Contact</a></li>
        </ul>
    </div>

    {{-- ── Page Content ─────────────────────────────────────── --}}
    @yield('body')

    {{-- ── Footer ───────────────────────────────────────────── --}}
    <footer>
        <div class="footer-grid">
            <div>
                <div class="footer-brand-name">Shree Junga Furniture</div>
                <div class="footer-brand-sub">Udyog · Birtamode, Nepal</div>
                <p class="footer-desc">Crafting premium, handcrafted furniture for homes, offices, and hospitality
                    spaces across Nepal since the beginning. Where tradition meets modern elegance.</p>
                <div class="footer-socials">
                    <a href="#" class="social-btn" title="Facebook">f</a>
                    <a href="#" class="social-btn" title="Instagram">in</a>
                    <a href="#" class="social-btn" title="TikTok">tt</a>
                    <a href="#" class="social-btn" title="YouTube">yt</a>
                </div>
            </div>
            <div>
                <div class="footer-heading">Quick Links</div>
                <ul class="footer-links">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#collections">Collections</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-heading">Collections</div>
                <ul class="footer-links">
                    <li><a href="#collections">Living Room</a></li>
                    <li><a href="#collections">Bedroom</a></li>
                    <li><a href="#collections">Dining Sets</a></li>
                    <li><a href="#collections">Office Furniture</a></li>
                    <li><a href="#collections">Custom Orders</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-heading">Contact</div>
                <ul class="footer-links">
                    <li><a href="#">Birtamode, Jhapa, Nepal</a></li>
                    <li><a href="tel:+9779800000000">+977 9800-000000</a></li>
                    <li><a href="mailto:info@shreejungafurniture.com.np">info@shreejunga.com.np</a></li>
                    <li><a href="#">Open: Sun–Fri, 9AM–6PM</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© {{ date('Y') }} Shree Junga Furniture Udyog, Birtamode, Jhapa, Nepal. All rights reserved.
                &nbsp;·&nbsp; Crafted with ♥ in Nepal</p>
        </div>
    </footer>

    {{-- ── WhatsApp Button ─────────────────────────────────── --}}
    <a href="https://wa.me/9779800000000?text=Hello%2C%20I%20am%20interested%20in%20your%20furniture%20collection."
        class="whatsapp-btn" target="_blank" title="Chat on WhatsApp" aria-label="WhatsApp">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="white">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
        </svg>
    </a>

    {{-- ── Lightbox ─────────────────────────────────────────── --}}
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <button class="lightbox-close" onclick="closeLightbox()">✕</button>
        <img id="lightboxImg" src="" alt="Gallery" />
    </div>

    {{-- ── Collection Modal ─────────────────────────────────── --}}
    <div class="modal" id="modal">
        <div class="modal-box">
            <button class="modal-close" onclick="closeModal()">✕</button>
            <div class="modal-tag" id="modal-tag"></div>
            <div class="modal-title" id="modal-title"></div>
            <p class="modal-desc" id="modal-desc"></p>
            <div class="modal-features" id="modal-features"></div>
        </div>
    </div>

    {{-- ── Scripts ──────────────────────────────────────────── --}}
    <script>
        // Nav scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 60);
        });

        // Hamburger / mobile menu
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('open');
            mobileMenu.classList.toggle('open');
        });

        function closeMobile() {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
        }

        // Scroll reveal
        const reveals = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) setTimeout(() => e.target.classList.add('visible'), 100);
            });
        }, {
            threshold: 0.1
        });
        reveals.forEach(r => revealObserver.observe(r));

        // Stats counter
        const stats = document.querySelectorAll('.stat-num');
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting && !e.target.dataset.done) {
                    e.target.dataset.done = 1;
                    const target = +e.target.dataset.target;
                    const step = target / (2000 / 16);
                    let current = 0;
                    const timer = setInterval(() => {
                        current = Math.min(current + step, target);
                        e.target.textContent = Math.floor(current).toLocaleString() + '+';
                        if (current >= target) clearInterval(timer);
                    }, 16);
                }
            });
        }, {
            threshold: 0.5
        });
        stats.forEach(s => statsObserver.observe(s));

        // Lightbox
        function openLightbox(el) {
            document.getElementById('lightboxImg').src = el.querySelector('img').src;
            document.getElementById('lightbox').classList.add('open');
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.remove('open');
        }

        // Collection modal data
        const modalData = {
            living: {
                tag: '01 — Living Room',
                title: 'Living Room Furniture',
                desc: 'Transform your living space into a haven of elegance. Our living room collection features handcrafted sofas, coffee tables, entertainment units, and accent pieces.',
                features: ['Solid Hardwood Frames', 'Premium Upholstery', 'Custom Sizes', 'Multiple Finishes',
                    'Storage Options'
                ]
            },
            bedroom: {
                tag: '02 — Bedroom',
                title: 'Bedroom Furniture',
                desc: 'Create a sanctuary of rest and luxury. Our bedroom sets — from carved bed frames to bespoke wardrobes — are crafted for comfort and durability.',
                features: ['King / Queen / Single Sizes', 'Built-in Storage', 'Custom Headboards', 'Matching Sets',
                    'Solid Teak & Sheesham'
                ]
            },
            dining: {
                tag: '03 — Dining',
                title: 'Dining Sets',
                desc: 'Elevate every meal into an occasion. Our dining sets combine sculptural table bases, hand-turned legs, and ergonomically designed chairs.',
                features: ['4 to 12 Seater Options', 'Extendable Tables', 'Matched Chair Sets', 'Glass & Wood Tops',
                    'Indoor & Outdoor'
                ]
            },
            office: {
                tag: '04 — Office',
                title: 'Office Furniture',
                desc: 'Command your workspace with authority. Our executive desks, bookshelves, conference tables, and ergonomic seating are built for professionals.',
                features: ['Executive Desks', 'Conference Tables', 'Ergonomic Chairs', 'Filing Cabinets',
                    'Open-Plan Solutions'
                ]
            },
            custom: {
                tag: '05 — Bespoke',
                title: 'Custom-Made Furniture',
                desc: 'Have a vision? We bring it to life. Work directly with our master craftsmen — choosing your wood, dimensions, joinery, and finish from the ground up.',
                features: ['3D Design Preview', 'Any Dimension', 'Choice of Wood Species', 'Hand-Carved Details',
                    '60-Day Delivery'
                ]
            }
        };

        function openModal(type) {
            const d = modalData[type];
            document.getElementById('modal-tag').textContent = d.tag;
            document.getElementById('modal-title').textContent = d.title;
            document.getElementById('modal-desc').textContent = d.desc;
            document.getElementById('modal-features').innerHTML =
                d.features.map(f => `<span class="modal-feature">${f}</span>`).join('');
            document.getElementById('modal').classList.add('open');
        }

        function closeModal() {
            document.getElementById('modal').classList.remove('open');
        }
        document.getElementById('modal').addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });

        // Form submit feedback
        function handleSubmit(e) {
            e.preventDefault();
            const btn = e.target.querySelector('.btn-submit');
            btn.textContent = 'Enquiry Sent ✓';
            btn.style.background = '#2d6a4f';
            btn.style.color = '#fff';
            setTimeout(() => {
                btn.textContent = 'Send Enquiry →';
                btn.style.background = '';
                btn.style.color = '';
            }, 3000);
        }
    </script>

</body>

</html>
