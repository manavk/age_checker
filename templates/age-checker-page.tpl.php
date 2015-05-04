<?php
/**
 * @file
 * Theme implementation to display age checker on a single Drupal page.
 *
 * Available variables:
 * - $age_cheker_background_img: This variable has the background image of the page.
 * - $age_cheker_logo : This variable has the logo image of the page.
 * - $age_checker_footer_links: This variable is an array having all the values in key value pair.
 * - $age_checker_copyright : Copyright text for the footer of the age gate.
 */
?>

<div id="age_checker">
  <div class="age-checker-bg">
    <?php print $age_cheker_background_img; ?>
  </div>
  <div class="logo">
    <?php print $age_cheker_logo; ?>
  </div>

  <div class="agegate-container">
    <?php print render($page['content']); ?>
  </div>

  <div class="site-footer">
    <div class="region region-footer">
      <ul class="menu">
        <?php foreach ($age_checker_footer_links as $key => $value) { 
          if (end($age_checker_footer_links) == $value) { ?>
            <li class="leaf last">
              <a href="<?php print $value ?>"> <?php print $key ?> </a>
            </li>
          <?php }
          else { ?>
            <li class="leaf">
              <a href="<?php print $value ?>"> <?php print $key ?> </a> |
            </li>
          <?php }
        } ?>
      </ul>
      <div class="footer_copyright_text">
        <?php print render($age_checker_copyright); ?>
      </div>
    </div>
  </div>
</div>

