<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php wp_head(); ?>

</head>

<body id="top" <?php body_class(); ?>>


<section class="s-pageheader <?php if(is_home()){
  echo "s-pageheader--home";
} ?>">
  <header class="header">
    <div class="header__content row">
      <div class="header__logo">
        <a class="logo" href="<?php echo home_url(); ?>">
          <?php
            if(has_custom_logo()){
              the_custom_logo();
            }else{
              echo "<h1 style='color: white;'>". get_bloginfo("name") ."</h1>";
            }
          ?>
        </a>
      </div>
      <ul class="header__social">
        <li>
          <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        </li>
      </ul>
      <a class="header__search-trigger" href="#0"></a>
      <div class="header__search">
        <?php
          get_search_form();
        ?>
        <a href="#0" title="Close Search" class="header__overlay-close"><?php _e( "Close", "philosophy" ); ?></a>
      </div>
      
      <?php get_template_part("template-parts/common/navigation"); ?>

    </div>
  </header>

  <?php
  if(is_home()){
    get_template_part("template-parts/blog-home/featured");
  }
  ?>

</section>