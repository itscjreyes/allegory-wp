<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="icon" type="image/png" href="/wp-content/uploads/2019/02/favicon.png">
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
    <div class="container">
        <a href="/" class="headerLogo"><img src="/wp-content/uploads/2019/02/logo-white.png" alt="Allegory Insurance"></a>
        <nav>
            <ul>
                <li><a href="/#how-it-works">How It Works</a></li>
                <li><a href="/#why-allegory">Why Allegory</a></li>
                <li><a href="/#faqs">FAQs</a></li>
                <li class="navCTA"><a href="/get-a-quote" class="btn btnYellow">Get a Quote</a></li>
            </ul>
        </nav>
        <button class="mobileTrigger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

