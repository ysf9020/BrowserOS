<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="QUNREDA USA - Exclusive North American logistics and distribution partner for the world's #1 RC car brand. Authorized wholesale distribution for serious business partners.">
    <meta name="keywords" content="QUNREDA, RC cars, wholesale, distribution, Amazon, logistics, North America">
    <meta name="author" content="QUNREDA USA, LLC">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="QUNREDA USA - Exclusive North American Distribution Partner">
    <meta property="og:description" content="The exclusive North American logistics and distribution partner for the brand that dominates the Amazon charts.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/og-image.jpg">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="QUNREDA USA - Exclusive North American Distribution Partner">
    <meta name="twitter:description" content="The exclusive North American logistics and distribution partner for the brand that dominates the Amazon charts.">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/og-image.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<header class="header">
    <div class="container">
        <div class="header-content">
            <!-- Logo -->
            <a href="<?php echo home_url(); ?>" class="logo">
                QUNREDA USA
            </a>
            
            <!-- Navigation Menu -->
            <nav>
                <ul class="nav-menu">
                    <li><a href="<?php echo home_url('/about'); ?>">About Us</a></li>
                    <li><a href="<?php echo home_url('/products'); ?>">Products</a></li>
                    <li><a href="<?php echo home_url('/wholesale'); ?>">Wholesale</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                    <li class="nav-cta">
                        <a href="<?php echo home_url('/wholesale'); ?>" class="btn btn-primary">Become a Distributor</a>
                    </li>
                </ul>
            </nav>
            
            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle mobile menu">
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu" style="display: none;">
    <div class="container">
        <ul class="mobile-nav-menu">
            <li><a href="<?php echo home_url('/about'); ?>">About Us</a></li>
            <li><a href="<?php echo home_url('/products'); ?>">Products</a></li>
            <li><a href="<?php echo home_url('/wholesale'); ?>">Wholesale</a></li>
            <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
            <li>
                <a href="<?php echo home_url('/wholesale'); ?>" class="btn btn-primary w-full">Become a Distributor</a>
            </li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<main id="main" class="site-main">