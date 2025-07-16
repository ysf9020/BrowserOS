/**
 * QUNREDA USA Theme JavaScript
 * Main functionality for forms and interactions
 */

(function($) {
    'use strict';

    // Document ready
    $(document).ready(function() {
        
        // Initialize all functions
        initMobileMenu();
        initSmoothScrolling();
        initFormHandling();
        initHeaderScroll();
        initAnimations();
        
    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const mobileMenuToggle = $('.mobile-menu-toggle');
        const mobileMenu = $('.mobile-menu');
        const mobileNavMenu = $('.mobile-nav-menu');

        if (mobileMenuToggle.length && mobileMenu.length) {
            mobileMenuToggle.on('click', function() {
                mobileMenu.slideToggle(300);
                $(this).toggleClass('active');
            });

            // Close mobile menu when clicking on a link
            mobileNavMenu.find('a').on('click', function() {
                mobileMenu.slideUp(300);
                mobileMenuToggle.removeClass('active');
            });

            // Close mobile menu when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('.header, .mobile-menu').length) {
                    mobileMenu.slideUp(300);
                    mobileMenuToggle.removeClass('active');
                }
            });
        }
    }

    /**
     * Smooth Scrolling for Anchor Links
     */
    function initSmoothScrolling() {
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            
            const target = $(this.getAttribute('href'));
            if (target.length) {
                const offsetTop = target.offset().top - 80; // Account for fixed header
                
                $('html, body').animate({
                    scrollTop: offsetTop
                }, 800, 'easeInOutQuart');
            }
        });
    }

    /**
     * Form Handling
     */
    function initFormHandling() {
        
        // Wholesale Application Form
        $('.wholesale-form').on('submit', function(e) {
            e.preventDefault();
            
            const form = $(this);
            const submitBtn = form.find('button[type="submit"]');
            const originalText = submitBtn.text();
            
            // Show loading state
            submitBtn.text('Submitting...').prop('disabled', true);
            
            // Collect form data
            const formData = new FormData(this);
            formData.append('action', 'wholesale_application');
            formData.append('nonce', qunreda_usa_ajax.nonce);
            
            // Submit via AJAX
            $.ajax({
                url: qunreda_usa_ajax.ajax_url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        showNotification(response.data, 'success');
                        form[0].reset();
                    } else {
                        showNotification(response.data, 'error');
                    }
                },
                error: function() {
                    showNotification('An error occurred. Please try again.', 'error');
                },
                complete: function() {
                    submitBtn.text(originalText).prop('disabled', false);
                }
            });
        });

        // Contact Form
        $('.contact-form').on('submit', function(e) {
            e.preventDefault();
            
            const form = $(this);
            const submitBtn = form.find('button[type="submit"]');
            const originalText = submitBtn.text();
            
            // Show loading state
            submitBtn.text('Sending...').prop('disabled', true);
            
            // Collect form data
            const formData = new FormData(this);
            formData.append('action', 'contact_form');
            formData.append('nonce', qunreda_usa_ajax.nonce);
            
            // Submit via AJAX
            $.ajax({
                url: qunreda_usa_ajax.ajax_url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        showNotification(response.data, 'success');
                        form[0].reset();
                    } else {
                        showNotification(response.data, 'error');
                    }
                },
                error: function() {
                    showNotification('An error occurred. Please try again.', 'error');
                },
                complete: function() {
                    submitBtn.text(originalText).prop('disabled', false);
                }
            });
        });
    }

    /**
     * Header Scroll Effect
     */
    function initHeaderScroll() {
        const header = $('.header');
        
        if (header.length) {
            $(window).on('scroll', function() {
                const scrollTop = $(window).scrollTop();
                
                if (scrollTop > 100) {
                    header.addClass('scrolled');
                } else {
                    header.removeClass('scrolled');
                }
            });
        }
    }

    /**
     * Animations and Effects
     */
    function initAnimations() {
        
        // Intersection Observer for fade-in animations
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            $('.card, .product-card, .section-title').each(function() {
                observer.observe(this);
            });
        }

        // Parallax effect for hero section
        const hero = $('.hero');
        if (hero.length) {
            $(window).on('scroll', function() {
                const scrolled = $(window).scrollTop();
                const rate = scrolled * -0.5;
                hero.css('transform', 'translateY(' + rate + 'px)');
            });
        }

        // Button hover effects
        $('.btn').on('mouseenter', function() {
            $(this).addClass('hover');
        }).on('mouseleave', function() {
            $(this).removeClass('hover');
        });

        // Card hover effects
        $('.card, .product-card').on('mouseenter', function() {
            $(this).addClass('hover');
        }).on('mouseleave', function() {
            $(this).removeClass('hover');
        });
    }

    /**
     * Show Notification
     */
    function showNotification(message, type = 'info') {
        // Remove existing notifications
        $('.notification').remove();
        
        // Create notification element
        const notification = $('<div class="notification notification-' + type + '">' + message + '</div>');
        
        // Add to body
        $('body').append(notification);
        
        // Show notification
        setTimeout(function() {
            notification.addClass('show');
        }, 100);
        
        // Auto hide after 5 seconds
        setTimeout(function() {
            notification.removeClass('show');
            setTimeout(function() {
                notification.remove();
            }, 300);
        }, 5000);
        
        // Click to dismiss
        notification.on('click', function() {
            $(this).removeClass('show');
            setTimeout(function() {
                $(this).remove();
            }, 300);
        });
    }

    /**
     * Utility Functions
     */
    
    // Debounce function
    function debounce(func, wait, immediate) {
        let timeout;
        return function() {
            const context = this, args = arguments;
            const later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }

    // Throttle function
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    // Add CSS for notifications
    const notificationCSS = `
        <style>
            .notification {
                position: fixed;
                top: 20px;
                right: 20px;
                padding: 15px 20px;
                border-radius: 8px;
                color: white;
                font-weight: 500;
                z-index: 10000;
                transform: translateX(100%);
                transition: transform 0.3s ease;
                cursor: pointer;
                max-width: 400px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            }
            
            .notification.show {
                transform: translateX(0);
            }
            
            .notification-success {
                background: #10B981;
            }
            
            .notification-error {
                background: #EF4444;
            }
            
            .notification-info {
                background: #3B82F6;
            }
            
            .notification-warning {
                background: #F59E0B;
            }
            
            /* Animation classes */
            .animate-in {
                animation: fadeInUp 0.6s ease-out forwards;
            }
            
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            /* Header scroll effect */
            .header.scrolled {
                background: rgba(15, 23, 42, 0.98) !important;
                box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            }
            
            /* Button hover effects */
            .btn.hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(251, 191, 36, 0.3);
            }
            
            /* Card hover effects */
            .card.hover,
            .product-card.hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            }
            
            /* Mobile menu active state */
            .mobile-menu-toggle.active {
                background: var(--color-accent);
                color: var(--color-primary);
            }
        </style>
    `;
    
    // Inject CSS
    $('head').append(notificationCSS);

})(jQuery);