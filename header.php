<?php 
/**
 * 
 *This is the template that displays all the <head> section and everything up until main 
 * 
 */
?>
<!doctype html>
<html <?php language_attributes();?>> 
    <head>
    <meta charsets="<?php bloginfo ("charset");?>">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>