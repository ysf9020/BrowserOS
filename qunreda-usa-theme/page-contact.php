<?php get_header(); ?>

<!-- Page Header -->
<section class="section" style="background: var(--color-secondary); padding-top: 120px;">
    <div class="container">
        <div class="text-center">
            <h1>Contact QUNREDA USA</h1>
            <p class="mb-xl">Get in touch with our team for partnership opportunities, product inquiries, or general questions</p>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="section">
    <div class="container">
        <div class="grid-2">
            <div>
                <h2>Get In Touch</h2>
                <p>We're here to help you succeed with QUNREDA products. Whether you're interested in becoming a distributor, need product information, or have questions about our services, our team is ready to assist you.</p>
                
                <div style="margin-top: var(--spacing-xl);">
                    <div style="display: flex; align-items: center; margin-bottom: var(--spacing-lg);">
                        <svg style="width: 24px; height: 24px; color: var(--color-accent); margin-right: var(--spacing-md);" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <div>
                            <h4 style="margin-bottom: var(--spacing-xs);">Email</h4>
                            <p style="margin-bottom: 0;"><a href="mailto:info@qunredausa.com">info@qunredausa.com</a></p>
                            <p style="margin-bottom: 0; color: var(--color-text-muted);">For general inquiries</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: center; margin-bottom: var(--spacing-lg);">
                        <svg style="width: 24px; height: 24px; color: var(--color-accent); margin-right: var(--spacing-md);" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <div>
                            <h4 style="margin-bottom: var(--spacing-xs);">Phone</h4>
                            <p style="margin-bottom: 0;"><a href="tel:+1-555-123-4567">+1 (555) 123-4567</a></p>
                            <p style="margin-bottom: 0; color: var(--color-text-muted);">Monday - Friday, 9 AM - 6 PM EST</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: center; margin-bottom: var(--spacing-lg);">
                        <svg style="width: 24px; height: 24px; color: var(--color-accent); margin-right: var(--spacing-md);" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h4 style="margin-bottom: var(--spacing-xs);">Address</h4>
                            <p style="margin-bottom: 0;">QUNREDA USA, LLC</p>
                            <p style="margin-bottom: 0;">123 Business District</p>
                            <p style="margin-bottom: 0;">Suite 456</p>
                            <p style="margin-bottom: 0;">New York, NY 10001</p>
                            <p style="margin-bottom: 0; color: var(--color-text-muted);">United States</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-office.jpg" alt="QUNREDA USA Office" class="w-full rounded-lg">
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="section" style="background: var(--color-secondary);">
    <div class="container">
        <div class="section-title">
            <h2>Send Us a Message</h2>
            <p>Fill out the form below and we'll get back to you within 24 hours</p>
        </div>
        
        <div style="max-width: 600px; margin: 0 auto;">
            <form class="contact-form" method="post" action="">
                <div class="grid-2">
                    <div class="form-group">
                        <label for="first_name" class="form-label">First Name *</label>
                        <input type="text" id="first_name" name="first_name" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="form-label">Last Name *</label>
                        <input type="text" id="last_name" name="last_name" class="form-input" required>
                    </div>
                </div>
                
                <div class="grid-2">
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-input">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="company" class="form-label">Company Name</label>
                    <input type="text" id="company" name="company" class="form-input">
                </div>
                
                <div class="form-group">
                    <label for="subject" class="form-label">Subject *</label>
                    <select id="subject" name="subject" class="form-select" required>
                        <option value="">Select a subject</option>
                        <option value="wholesale_inquiry">Wholesale Partnership Inquiry</option>
                        <option value="product_information">Product Information Request</option>
                        <option value="technical_support">Technical Support</option>
                        <option value="general_inquiry">General Inquiry</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message" class="form-label">Message *</label>
                    <textarea id="message" name="message" class="form-textarea" placeholder="Please provide details about your inquiry..." required></textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Business Hours -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Business Hours</h2>
            <p>When you can reach our team</p>
        </div>
        <div style="max-width: 600px; margin: 0 auto;">
            <div class="card">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-lg);">
                    <div>
                        <h3 style="color: var(--color-accent); margin-bottom: var(--spacing-md);">Weekdays</h3>
                        <p style="margin-bottom: var(--spacing-sm);"><strong>Monday - Friday:</strong></p>
                        <p style="margin-bottom: var(--spacing-sm);">9:00 AM - 6:00 PM EST</p>
                        <p style="color: var(--color-text-muted);">Available for calls, emails, and meetings</p>
                    </div>
                    <div>
                        <h3 style="color: var(--color-accent); margin-bottom: var(--spacing-md);">Weekends</h3>
                        <p style="margin-bottom: var(--spacing-sm);"><strong>Saturday - Sunday:</strong></p>
                        <p style="margin-bottom: var(--spacing-sm);">10:00 AM - 4:00 PM EST</p>
                        <p style="color: var(--color-text-muted);">Limited support available</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section" style="background: var(--color-secondary);">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="card mb-lg">
                <h3>How quickly do you respond to inquiries?</h3>
                <p>We typically respond to all inquiries within 24 hours during business days. For urgent wholesale partnership inquiries, we often respond within 4-6 hours.</p>
            </div>
            <div class="card mb-lg">
                <h3>Do you offer international shipping?</h3>
                <p>Currently, we focus on the North American market (US and Canada). For international inquiries, we can connect you with our global partners.</p>
            </div>
            <div class="card mb-lg">
                <h3>Can I schedule a meeting with your team?</h3>
                <p>Absolutely! We welcome meetings with potential partners. Please use the contact form above or email us directly to schedule a consultation.</p>
            </div>
            <div class="card">
                <h3>What information should I include in my inquiry?</h3>
                <p>For wholesale inquiries, please include your company name, business type, target markets, and expected order volumes. For general inquiries, just let us know how we can help!</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <h2>Ready to Start Your Partnership?</h2>
            <p class="mb-xl">Join our network of successful distributors and start offering the world's most popular RC cars to your customers.</p>
            <a href="/wholesale" class="btn btn-primary btn-lg">Apply for Partnership</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>