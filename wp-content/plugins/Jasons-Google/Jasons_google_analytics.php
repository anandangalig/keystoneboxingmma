<?php
/*
Plugin Name: Jason's Simple Google Analytics Plugin
Plugin URI: http://deluxe.com
Description: Adds a Google Analytics tracking code to the <head> of your theme, by hooking to wp_head code. 
Author: Jason Pawloski
Version: 1.01
 */
?>
<?php
function Jasons_google_analytics() { ?>
         <script>
			    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-101131085-1', 'auto');
  ga('send', 'pageview');
 
</script>
<?php }
add_action( 'wp_head', 'Jasons_google_analytics', 10 );