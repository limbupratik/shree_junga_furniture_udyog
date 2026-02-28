@extends('layouts.frontend')

@section('body')
    {{-- ── Hero ─────────────────────────────────────────────── --}}
    <section id="hero">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <div class="hero-badge">Birtamode, Jhapa, Nepal</div>
            <h1 class="hero-title">Crafting <em>Timeless</em><br>Elegance</h1>
            <p class="hero-sub">Premium Furniture Designed for Modern Living</p>
            <div class="hero-btns">
                <a href="#collections" class="btn-primary">Explore Collection</a>
                <a href="#contact" class="btn-outline">Contact Us</a>
            </div>
        </div>
        <div class="hero-scroll">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    {{-- ── About ────────────────────────────────────────────── --}}
    <section id="about">
        <div class="about-grid">
            <div class="about-img-wrap reveal">
                <div class="about-gold-line"></div>
                <img class="about-img" src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=800&q=80"
                    alt="Furniture craftsmanship" />
                <div class="about-img-accent"></div>
            </div>
            <div class="about-text reveal">
                <div class="section-label">Our Story</div>
                <h2 class="section-title">Rooted in <em>Heritage,</em><br>Built for Today</h2>
                <div class="gold-divider"></div>
                <p>Founded in the heart of Birtamode, Jhapa, Shree Junga Furniture Udyog has been a trusted name in premium
                    furniture manufacturing across Nepal. We bring together generations of craftsmanship knowledge with
                    modern design sensibilities to create pieces that stand the test of time.</p>
                <p>Every piece we create begins with carefully selected, sustainably sourced hardwoods — teak, sheesham, and
                    sal from the finest forests. Our master craftsmen, many with over two decades of experience, hand-shape
                    each curve, joint, and surface with meticulous care.</p>
                <p>From intimate home studies to grand hotel lobbies, our furniture has graced the most discerning spaces in
                    Nepal and beyond. We don't just build furniture — we create legacies.</p>
                <div class="about-stats">
                    <div class="stat-item">
                        <div class="stat-num" data-target="25">0</div>
                        <div class="stat-label">Years of Craft</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num" data-target="2800">0</div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num" data-target="5000">0</div>
                        <div class="stat-label">Projects Done</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── Collections ──────────────────────────────────────── --}}
    <section id="collections">
        <div class="collections-header reveal">
            <div class="section-label">Our Collections</div>
            <h2 class="section-title">Furniture That<br>Tells <em>Your Story</em></h2>
            <div class="gold-divider"></div>
        </div>
        <div class="collections-grid">
            <div class="collection-card reveal" onclick="openModal('living')">
                <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800&q=80" alt="Living Room" />
                <div class="collection-overlay">
                    <div class="collection-tag">01 — Collection</div>
                    <div class="collection-name">Living Room<br>Furniture</div>
                    <button class="collection-hover-btn">View Details</button>
                </div>
            </div>
            <div class="collection-card reveal" onclick="openModal('bedroom')">
                <img src="https://images.unsplash.com/photo-1588046130717-0eb0c9a3ba15?w=800&q=80" alt="Bedroom" />
                <div class="collection-overlay">
                    <div class="collection-tag">02 — Collection</div>
                    <div class="collection-name">Bedroom Furniture</div>
                    <button class="collection-hover-btn">View Details</button>
                </div>
            </div>
            <div class="collection-card reveal" onclick="openModal('dining')">
                <img src="https://images.unsplash.com/photo-1617806118233-18e1de247200?w=800&q=80" alt="Dining" />
                <div class="collection-overlay">
                    <div class="collection-tag">03 — Collection</div>
                    <div class="collection-name">Dining Sets</div>
                    <button class="collection-hover-btn">View Details</button>
                </div>
            </div>
            <div class="collection-card reveal" onclick="openModal('office')">
                <img src="https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=800&q=80" alt="Office" />
                <div class="collection-overlay">
                    <div class="collection-tag">04 — Collection</div>
                    <div class="collection-name">Office Furniture</div>
                    <button class="collection-hover-btn">View Details</button>
                </div>
            </div>
            <div class="collection-card reveal" onclick="openModal('custom')">
                <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=800&q=80" alt="Custom" />
                <div class="collection-overlay">
                    <div class="collection-tag">05 — Collection</div>
                    <div class="collection-name">Custom-Made<br>Furniture</div>
                    <button class="collection-hover-btn">View Details</button>
                </div>
            </div>
        </div>
    </section>

    {{-- ── Why Choose Us ─────────────────────────────────────── --}}
    <section id="why">
        <div class="why-header reveal">
            <div class="section-label">Why Choose Us</div>
            <h2 class="section-title" style="color:var(--walnut)">The Shree Junga<br><em>Difference</em></h2>
            <div class="gold-divider" style="margin-left:auto;margin-right:auto;"></div>
        </div>
        <div class="why-grid">
            <div class="why-card reveal">
                <span class="why-icon">🪵</span>
                <div class="why-title">Premium Quality Materials</div>
                <p class="why-desc">Only the finest hardwoods, veneers and fabrics sourced from trusted suppliers — crafted
                    to last generations.</p>
            </div>
            <div class="why-card reveal">
                <span class="why-icon">🛠️</span>
                <div class="why-title">Skilled Craftsmanship</div>
                <p class="why-desc">Our master carpenters bring decades of expertise, blending traditional joinery with
                    modern precision techniques.</p>
            </div>
            <div class="why-card reveal">
                <span class="why-icon">✏️</span>
                <div class="why-title">Custom Design Options</div>
                <p class="why-desc">Every home is unique. We offer fully bespoke furniture tailored to your exact
                    dimensions, finish, and style vision.</p>
            </div>
            <div class="why-card reveal">
                <span class="why-icon">💎</span>
                <div class="why-title">Affordable Luxury</div>
                <p class="why-desc">Experience hotel-grade quality at prices accessible for Nepali homes and businesses.
                    Premium need not be prohibitive.</p>
            </div>
            <div class="why-card reveal">
                <span class="why-icon">🚚</span>
                <div class="why-title">Timely Delivery</div>
                <p class="why-desc">We respect your timelines. Our streamlined production and logistics ensure on-time
                    delivery across Nepal.</p>
            </div>
        </div>
    </section>

    {{-- ── Gallery ───────────────────────────────────────────── --}}
    <section id="gallery">
        <div class="gallery-header reveal">
            <div class="section-label" style="color:var(--gold)">Our Gallery</div>
            <h2 class="section-title" style="color:var(--cream)">Craftsmanship <em>Unveiled</em></h2>
            <div class="gold-divider" style="margin-left:auto;margin-right:auto;"></div>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=600&q=80" alt="Sofa" />
                <div class="gallery-zoom">⊕</div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?w=600&q=80" alt="Bedroom" />
                <div class="gallery-zoom">⊕</div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1449247709967-d4461a6a6103?w=600&q=80" alt="Dining" />
                <div class="gallery-zoom">⊕</div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=600&q=80" alt="Detail" />
                <div class="gallery-zoom">⊕</div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=600&q=80" alt="Wood detail" />
                <div class="gallery-zoom">⊕</div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?w=600&q=80" alt="Chair" />
                <div class="gallery-zoom">⊕</div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1631679706909-1844bbd07221?w=600&q=80" alt="Cabinet" />
                <div class="gallery-zoom">⊕</div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80" alt="Table" />
                <div class="gallery-zoom">⊕</div>
            </div>
        </div>
    </section>

    {{-- ── Testimonials ──────────────────────────────────────── --}}
    <section id="testimonials">
        <div class="testimonials-header reveal">
            <div class="section-label">Client Testimonials</div>
            <h2 class="section-title">Words from Our<br><em>Valued Clients</em></h2>
            <div class="gold-divider" style="margin-left:auto;margin-right:auto;"></div>
        </div>
        <div class="testimonials-track">
            <div class="testimonial-card reveal">
                <div class="stars">★★★★★</div>
                <p class="testimonial-text">"The bedroom set we commissioned exceeded every expectation. The joinery is
                    impeccable and the finish is absolutely flawless. Our home feels like a luxury resort now."</p>
                <div class="testimonial-author">
                    <div class="author-avatar"
                        style="background:#d4a574;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.2rem;">
                        🧑</div>
                    <div>
                        <div class="author-name">Ramesh Sharma</div>
                        <div class="author-loc">Kathmandu, Nepal</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card reveal">
                <div class="stars">★★★★★</div>
                <p class="testimonial-text">"As an interior designer, I recommend Shree Junga to all my premium clients.
                    Their custom work is consistently beautiful and delivered on schedule. Exceptional quality."</p>
                <div class="testimonial-author">
                    <div class="author-avatar"
                        style="background:#8b7355;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.2rem;">
                        👩</div>
                    <div>
                        <div class="author-name">Priya Acharya</div>
                        <div class="author-loc">Interior Designer, Pokhara</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card reveal">
                <div class="stars">★★★★★</div>
                <p class="testimonial-text">"We furnished our entire hotel lobby and 40 rooms through Shree Junga. The
                    quality is remarkable, pricing is fair, and the team's professionalism made the entire process
                    seamless."</p>
                <div class="testimonial-author">
                    <div class="author-avatar"
                        style="background:#6b4c2a;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.2rem;">
                        🧔</div>
                    <div>
                        <div class="author-name">Bikash Thapa</div>
                        <div class="author-loc">Hotel Owner, Biratnagar</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── Contact ───────────────────────────────────────────── --}}
    <section id="contact">
        <div class="contact-grid">
            <div class="contact-info reveal">
                <div class="section-label">Get in Touch</div>
                <h2 class="section-title">Let's Create<br><em>Something Beautiful</em></h2>
                <div class="gold-divider"></div>
                <p>Whether you're furnishing a new home, designing a luxury hotel, or looking for a bespoke piece — we'd
                    love to hear from you. Visit our showroom or reach out directly.</p>
                <div class="contact-details">
                    <div class="contact-detail">
                        <span class="detail-icon">📍</span>
                        <div>
                            <div class="detail-label">Address</div>
                            <div class="detail-value">Birtamode, Jhapa, Province 1, Nepal</div>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <span class="detail-icon">📞</span>
                        <div>
                            <div class="detail-label">Phone</div>
                            <div class="detail-value">+977 9800-000000</div>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <span class="detail-icon">✉️</span>
                        <div>
                            <div class="detail-label">Email</div>
                            <div class="detail-value">info@shreejungafurniture.com.np</div>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <span class="detail-icon">🕐</span>
                        <div>
                            <div class="detail-label">Showroom Hours</div>
                            <div class="detail-value">Sunday – Friday: 9:00 AM – 6:00 PM</div>
                        </div>
                    </div>
                </div>
                <iframe class="map-embed"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28554.30975059977!2d87.95939!3d26.64621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e58c0c9c4e5d91%3A0x12345678abcde!2sBirtamode%2C%20Jhapa%2C%20Nepal!5e0!3m2!1sen!2snp!4v1234567890"
                    frameborder="0" allowfullscreen loading="lazy" title="Birtamode Map"></iframe>
            </div>

            <div class="reveal">
                <div class="section-label" style="color:var(--gold);margin-bottom:30px;">Send an Enquiry</div>
                <form class="contact-form" onsubmit="handleSubmit(event)">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" placeholder="Your full name" required />
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" placeholder="+977 98XXXXXXXX" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="your@email.com" />
                    </div>
                    <div class="form-group">
                        <label>Interested In</label>
                        <select>
                            <option value="">Select a collection...</option>
                            <option>Living Room Furniture</option>
                            <option>Bedroom Furniture</option>
                            <option>Dining Sets</option>
                            <option>Office Furniture</option>
                            <option>Custom-Made Furniture</option>
                            <option>Complete Home Package</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Your Message</label>
                        <textarea placeholder="Describe your project, requirements, or any questions..."></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Send Enquiry →</button>
                </form>
            </div>
        </div>
    </section>
@endsection
