<?php

 /**
 	Template Name: Home Page
 */
 
 
get_header(); ?>


  <?php get_template_part('content','hero'); ?>
  <?php get_template_part('content','opt'); ?>
  <?php get_template_part('content','welcome'); ?>
  <?php get_template_part('content','welcomechapel'); ?>
  <?php get_template_part('content','biblequote'); ?>
  <?php get_template_part('content','latestsermon'); ?>

<?php get_footer(); ?>
