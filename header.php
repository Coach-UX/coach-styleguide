<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Coach
 * @subpackage Coach Styleguide
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title>Coach Styleguide<?php wp_title('/', true, 'left'); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory'); ?>/css/theme.css" rel="stylesheet">
<link rel="shortcut icon" href="/favicon.png" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
