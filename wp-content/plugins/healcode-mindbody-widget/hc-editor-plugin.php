<?php
if (!class_exists('HealcodeShortcodeContainer')) {
  class HealcodeShortcodeContainer {
    public $shortcodes_container = false;
    public $hc_codesnippets_arr;

    public function __construct() {
      add_action( 'init', array($this, 'init') );
    }

    public function init() {
      if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
        return;
      if (is_admin() && (get_user_option('rich_editing') == 'true')) {
        add_action('media_buttons', array($this, 'get_shortcodes'));
        add_action('media_buttons', array($this, 'add_shortcodes_container'));
        add_action('media_buttons', array($this, 'add_hc_media_button'));
        add_action('wp_enqueue_media', array($this, 'include_hc_media_button_js'));
      }
    }

    public function include_hc_media_button_js() {
      wp_enqueue_script('hc_media_script', plugins_url('/js/healcode-wp-mb-widget.js', __FILE__), array('jquery'), '1.1.17', true);
    }

    public function add_hc_media_button($editor_name) {
      if (count($this->hc_codesnippets_arr)==0) {
        $hc_json = "{}";
      } else {
        $hc_json = json_encode($this->hc_codesnippets_arr);
      }
      printf("<a href=\"#\" class=\"button hc-wp-media-button\" data-editor=\"%s\" data-hc-codes=\"%s\"><i class=\"mce-ico mce-i-icon hc-hmw-own-icon\"></i> MINDBODY</a>", $editor_name, htmlspecialchars($hc_json), 100);
    }

    public function add_shortcodes_container() {
      if ($this->shortcodes_container == false) {
        add_thickbox();
        printf("<div id='healcode-wp-shortcodes-content' style='display:none;'><div class='hc-shortcodes'>%s</div></div>", "Loading", 100);
        $this->shortcodes_container = true;
      }
    }

    public function get_shortcodes() {
      global $wpdb;
      $this->hc_codesnippets_arr = $wpdb->get_results($wpdb->prepare( "SELECT id,title FROM ".$wpdb->prefix."hc_hmw_short_code WHERE status=%d  ORDER BY id DESC",1), ARRAY_A );

      // if(floatval(get_bloginfo('version')) < 3.9) {
      // Might have to treat the content differently if WP version is less than 3.9
      // }
    }

  }
}


if(!isset($HealcodeShortcodeContainer)){
  $HealcodeShortcodeContainer = new HealcodeShortcodeContainer();
}
?>
