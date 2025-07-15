<?php get_header(); ?>

<!-- Page Header -->
<section class="section" style="background: var(--color-secondary); padding-top: 120px;">
    <div class="container">
        <div class="text-center">
            <h1>QUNREDA Product Catalog</h1>
            <p class="mb-xl">Discover the complete range of high-performance RC cars that are dominating the global market</p>
        </div>
    </div>
</section>

<!-- Product Categories -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Product Categories</h2>
            <p>Comprehensive range for every RC enthusiast and market segment</p>
        </div>
        <div class="grid-4">
            <div class="card text-center">
                <svg class="card-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"></path>
                </svg>
                <h3>High-Speed Racing</h3>
                <p>Ultra-fast RC cars designed for competitive racing and speed enthusiasts.</p>
            </div>
            <div class="card text-center">
                <svg class="card-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                </svg>
                <h3>Off-Road Adventure</h3>
                <p>All-terrain vehicles built for rugged outdoor adventures and extreme conditions.</p>
            </div>
            <div class="card text-center">
                <svg class="card-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3>Beginner Friendly</h3>
                <p>Easy-to-use RC cars perfect for newcomers to the hobby.</p>
            </div>
            <div class="card text-center">
                <svg class="card-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                </svg>
                <h3>Professional Grade</h3>
                <p>Advanced models with premium features for serious enthusiasts and professionals.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="section" style="background: var(--color-secondary);">
    <div class="container">
        <div class="section-title">
            <h2>Featured Products</h2>
            <p>Our best-selling models that are driving the RC car revolution</p>
        </div>
        <div class="grid-3">
            <div class="product-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-x1-pro.jpg" alt="QUNREDA X1 Pro" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">QUNREDA X1 Pro</h3>
                    <p class="product-sku">SKU: QUN-X1-PRO</p>
                    <p class="product-description">High-performance RC car with advanced brushless motor technology. Features precision steering, adjustable suspension, and waterproof electronics. Perfect for both beginners and experienced enthusiasts.</p>
                    <div style="margin-bottom: var(--spacing-md);">
                        <span style="background: var(--color-accent); color: var(--color-primary); padding: 4px 8px; border-radius: var(--radius-sm); font-size: var(--font-size-sm); font-weight: 600;">Best Seller</span>
                    </div>
                    <div class="product-buttons">
                        <a href="https://amazon.com/qunreda-x1-pro" target="_blank" rel="noopener" class="btn btn-secondary">View on Amazon</a>
                        <a href="/wholesale" class="btn btn-primary">Request Wholesale Info</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-s2-speed.jpg" alt="QUNREDA S2 Speed" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">QUNREDA S2 Speed</h3>
                    <p class="product-sku">SKU: QUN-S2-SPEED</p>
                    <p class="product-description">Ultra-fast racing RC car designed for competitive use. Features aerodynamic design, high-torque motor, and advanced ESC system. Capable of reaching speeds up to 45+ mph.</p>
                    <div style="margin-bottom: var(--spacing-md);">
                        <span style="background: var(--color-accent); color: var(--color-primary); padding: 4px 8px; border-radius: var(--radius-sm); font-size: var(--font-size-sm); font-weight: 600;">Speed Champion</span>
                    </div>
                    <div class="product-buttons">
                        <a href="https://amazon.com/qunreda-s2-speed" target="_blank" rel="noopener" class="btn btn-secondary">View on Amazon</a>
                        <a href="/wholesale" class="btn btn-primary">Request Wholesale Info</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-t3-terrain.jpg" alt="QUNREDA T3 Terrain" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">QUNREDA T3 Terrain</h3>
                    <p class="product-sku">SKU: QUN-T3-TERRAIN</p>
                    <p class="product-description">All-terrain RC vehicle built for off-road adventures. Features robust construction, waterproof electronics, and high-clearance suspension. Conquers any terrain with ease.</p>
                    <div style="margin-bottom: var(--spacing-md);">
                        <span style="background: var(--color-accent); color: var(--color-primary); padding: 4px 8px; border-radius: var(--radius-sm); font-size: var(--font-size-sm); font-weight: 600;">Off-Road King</span>
                    </div>
                    <div class="product-buttons">
                        <a href="https://amazon.com/qunreda-t3-terrain" target="_blank" rel="noopener" class="btn btn-secondary">View on Amazon</a>
                        <a href="/wholesale" class="btn btn-primary">Request Wholesale Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Complete Product Line -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Complete Product Line</h2>
            <p>Explore our full range of QUNREDA RC vehicles</p>
        </div>
        <div class="grid-3">
            <div class="product-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-beginner-1.jpg" alt="QUNREDA Beginner RC" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">QUNREDA Starter Pack</h3>
                    <p class="product-sku">SKU: QUN-STARTER-PACK</p>
                    <p class="product-description">Perfect entry-level RC car with everything included. Ready-to-run with controller, battery, and charger. Ideal for first-time RC enthusiasts.</p>
                    <div class="product-buttons">
                        <a href="https://amazon.com/qunreda-starter-pack" target="_blank" rel="noopener" class="btn btn-secondary">View on Amazon</a>
                        <a href="/wholesale" class="btn btn-primary">Request Wholesale Info</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-racing-1.jpg" alt="QUNREDA Racing RC" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">QUNREDA R1 Racer</h3>
                    <p class="product-sku">SKU: QUN-R1-RACER</p>
                    <p class="product-description">Professional racing RC car with competition-grade components. Features adjustable suspension, multiple speed modes, and precision handling.</p>
                    <div class="product-buttons">
                        <a href="https://amazon.com/qunreda-r1-racer" target="_blank" rel="noopener" class="btn btn-secondary">View on Amazon</a>
                        <a href="/wholesale" class="btn btn-primary">Request Wholesale Info</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-crawler-1.jpg" alt="QUNREDA Crawler RC" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">QUNREDA C1 Crawler</h3>
                    <p class="product-sku">SKU: QUN-C1-CRAWLER</p>
                    <p class="product-description">Rock crawling specialist with extreme articulation and low-speed control. Perfect for technical terrain and obstacle courses.</p>
                    <div class="product-buttons">
                        <a href="https://amazon.com/qunreda-c1-crawler" target="_blank" rel="noopener" class="btn btn-secondary">View on Amazon</a>
                        <a href="/wholesale" class="btn btn-primary">Request Wholesale Info</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-drift-1.jpg" alt="QUNREDA Drift RC" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">QUNREDA D1 Drift</h3>
                    <p class="product-sku">SKU: QUN-D1-DRIFT</p>
                    <p class="product-description">Specialized drift RC car with smooth handling and realistic drift capabilities. Features special tires and tuned suspension for perfect slides.</p>
                    <div class="product-buttons">
                        <a href="https://amazon.com/qunreda-d1-drift" target="_blank" rel="noopener" class="btn btn-secondary">View on Amazon</a>
                        <a href="/wholesale" class="btn btn-primary">Request Wholesale Info</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-monster-1.jpg" alt="QUNREDA Monster Truck RC" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">QUNREDA M1 Monster</h3>
                    <p class="product-sku">SKU: QUN-M1-MONSTER</p>
                    <p class="product-description">Monster truck with massive wheels and high clearance. Built for jumping, stunts, and extreme off-road performance.</p>
                    <div class="product-buttons">
                        <a href="https://amazon.com/qunreda-m1-monster" target="_blank" rel="noopener" class="btn btn-secondary">View on Amazon</a>
                        <a href="/wholesale" class="btn btn-primary">Request Wholesale Info</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-buggy-1.jpg" alt="QUNREDA Buggy RC" class="product-image">
                <div class="product-content">
                    <h3 class="product-title">QUNREDA B1 Buggy</h3>
                    <p class="product-sku">SKU: QUN-B1-BUGGY</p>
                    <p class="product-description">Desert buggy designed for high-speed off-road racing. Features lightweight construction and aerodynamic design for maximum performance.</p>
                    <div class="product-buttons">
                        <a href="https://amazon.com/qunreda-b1-buggy" target="_blank" rel="noopener" class="btn btn-secondary">View on Amazon</a>
                        <a href="/wholesale" class="btn btn-primary">Request Wholesale Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Features -->
<section class="section" style="background: var(--color-secondary);">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose QUNREDA?</h2>
            <p>Superior engineering and quality that sets us apart</p>
        </div>
        <div class="grid-4">
            <div class="card text-center">
                <svg class="card-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <h3>Premium Quality</h3>
                <p>Built with high-grade materials and precision engineering for durability and performance.</p>
            </div>
            <div class="card text-center">
                <svg class="card-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3>Proven Performance</h3>
                <p>Tested and proven in real-world conditions by RC enthusiasts worldwide.</p>
            </div>
            <div class="card text-center">
                <svg class="card-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                </svg>
                <h3>Innovative Technology</h3>
                <p>Advanced features like brushless motors, waterproof electronics, and smart controllers.</p>
            </div>
            <div class="card text-center">
                <svg class="card-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                </svg>
                <h3>Wide Range</h3>
                <p>From beginner-friendly models to professional-grade racing machines.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section">
    <div class="container">
        <div class="text-center">
            <h2>Ready to Stock QUNREDA Products?</h2>
            <p class="mb-xl">Join our network of authorized distributors and start offering the world's most popular RC cars to your customers.</p>
            <a href="/wholesale" class="btn btn-primary btn-lg">Apply for Partnership</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>