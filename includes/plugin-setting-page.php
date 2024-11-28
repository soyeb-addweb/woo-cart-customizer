<?php

/**
 * Restricting user to access this file directly (Security Purpose).
 **/
if (! defined('ABSPATH')) {
  die("Sorry You Don't Have Permission To Access This Page");
  exit;
}

/********* Plugin Setting Template ********/

if (isset($_GET['settings-updated'])) {
?>
  <div class="updated settings-error notice is-dismissible" id="setting-error-settings_updated">
    <p><strong>Settings saved.</strong></p><?php esc_html_e('Dismiss this notice.', 'woo-cart-customizer'); ?></span></button>
  </div><?php } ?>

<div class="pt-wrap">
  <h2><?php esc_html_e('Simple Customization of Add to Cart Button', 'woo-cart-customizer'); ?></h2>
  <h4><?php esc_html_e('Simple Customization of Add to Cart Button plugin is used for change the cart name, message and notice text and also the button text of product by its type.', 'woo-cart-customizer'); ?></h4>
  <p>
    <?php esc_html_e('Go to ', 'woo-cart-customizer'); ?><b><?php esc_html_e('WooCommerce &gt;&gt; Settings &gt;&gt; Integration &gt;&gt; Simple Customization of Add to Cart Button', 'woo-cart-customizer'); ?>
    </b>
  </p>
  <div class="fa-plugin-setting config-wrap">
    <div id="pt-about">

      <?php
      $arrAddwebPlugins = array(
        'woo-cart-customizer' => 'Simple Customization of Add to Cart Button',
        'aws-cookies-popup' => 'AWS Cookies Popup',
        'addweb-google-popular-post' => 'Traffic Post Page Views',
        'post-timer' => 'Post Timer',
        'wc-past-orders' => 'Track Order History for WooCommerce',
        'widget-social-share' => 'WSS: Widget Social Share'

      ); ?>
      <div class="advertise">
        <h2><?php esc_html_e('Visit Our Other Plugins:', 'woo-cart-customizer'); ?></h2>
        <div class="ad-content"><?php
                                foreach ($arrAddwebPlugins as $slug => $name) { ?>
            <div class="ad-detail">
              <div class="ad-inner">
                <a href="https://wordpress.org/plugins/<?php echo esc_attr($slug); ?>" target="_blank"><img height="160" src="<?php echo esc_url(ADDWEBWC_PLUGIN_URL . 'assets/images/' . esc_attr($slug)); ?>.svg"></a>
                <a href="https://wordpress.org/plugins/<?php echo esc_attr($slug); ?>" class="ad-link" target="_blank"><b><?php echo esc_attr($name); ?></b></a>
              </div>
            </div><?php
                                } ?>
        </div>
      </div>

      <div style="margin:5px 0;width:100%;text-align: center;">
        <a href="http://www.wewp.io" style="outline: hidden;" target="_blank"><img src="<?php echo  esc_url(ADDWEBWC_PLUGIN_URL . '/assets/images/wewp-logo.png'); ?>" alt="WeWp" height="150px" width="100%"></a>
      </div>
      <div style="margin:5px 0;width:100%;text-align: center;">
        <h3>Developed with <img decoding="async" src="<?php echo esc_url(ADDWEBWC_PLUGIN_URL . '/assets/images/Heart-yellow.svg'); ?>" alt="AddwebSolution"> By <a href="http://www.addwebsolution.com" style="outline: hidden;" target="_blank"><?php esc_html_e('ADDWEB SOLUTIONS', 'woo-cart-customizer'); ?></a></h3>
      </div>
    </div>
  </div>
  <?php $plugin_basename = plugin_basename(plugin_dir_path(__FILE__)); ?>
</div>