</main>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>QUNREDA USA</h3>
                <p>The exclusive North American logistics and distribution partner for the world's #1 RC car brand.</p>
                <p>Authorized wholesale distribution for serious business partners.</p>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <p><a href="<?php echo home_url('/about'); ?>">About Us</a></p>
                <p><a href="<?php echo home_url('/products'); ?>">Products</a></p>
                <p><a href="<?php echo home_url('/wholesale'); ?>">Wholesale Partnership</a></p>
                <p><a href="<?php echo home_url('/contact'); ?>">Contact</a></p>
            </div>
            
            <div class="footer-section">
                <h3>Business Resources</h3>
                <p><a href="<?php echo home_url('/privacy'); ?>">Privacy Policy</a></p>
                <p><a href="https://amazon.com/qunreda" target="_blank" rel="noopener">Shop on Amazon</a></p>
                <p><a href="mailto:info@qunredausa.com">info@qunredausa.com</a></p>
            </div>
            
            <div class="footer-section">
                <h3>Connect With Us</h3>
                <p>Ready to become an authorized distributor?</p>
                <a href="<?php echo home_url('/wholesale'); ?>" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> QUNREDA USA, LLC. All rights reserved. | Exclusive North American Distribution Partner</p>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>
// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'block' : 'none';
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Header scroll effect
    const header = document.querySelector('.header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.style.background = 'rgba(15, 23, 42, 0.98)';
            } else {
                header.style.background = 'rgba(15, 23, 42, 0.95)';
            }
        });
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>