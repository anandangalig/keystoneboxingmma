<?php 
$sc_jdt = get_option('seedprod_comingsoon_options'); 
global $seedprod_comingsoon;
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php
    bloginfo( 'name' );
    $site_description = get_bloginfo( 'description' );
    ?></title>
  <meta name="description" content="<?php echo esc_attr($site_description);?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if(substr($sc_jdt['comingsoon_body_font'], 0, 1) != '_'): ?>
  <link href='//fonts.googleapis.com/css?family=<?php echo $sc_jdt['comingsoon_body_font'] ?>&v1' rel='stylesheet' type='text/css'>
  <?php endif;?>
  <?php if(substr($sc_jdt['comingsoon_headline_font'], 0, 1) != '_'): ?>
  <link href='//fonts.googleapis.com/css?family=<?php echo $sc_jdt['comingsoon_headline_font'] ?>&v1' rel='stylesheet' type='text/css'>
  <?php endif;?>
  <?php  do_action( 'sc_head'); ?>

  <link rel="stylesheet" href="<?php echo plugins_url('template/style.css',dirname(__FILE__)); ?>">
  
  <?php
  if(isset($sc_jdt['comingsoon_background_noise_effect']) && $sc_jdt['comingsoon_background_noise_effect'] == 'on' ){
    $noise = plugins_url('template/images/bg.png',dirname(__FILE__));
  }else{
    $noise = '';
  }
  ?>
  <style type="text/css">
    body{
        background: <?php echo $sc_jdt['comingsoon_custom_bg_color'];?> url('<?php echo (empty($sc_jdt['comingsoon_custom_bg_image']) ? $noise : $sc_jdt['comingsoon_custom_bg_image']); ?>') repeat;
        <?php if(!empty($sc_jdt['comingsoon_background_strech'])):?>
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: top center;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        <?php endif;?>
    }
    <?php if(!empty($sc_jdt['comingsoon_body_font']) && $sc_jdt['comingsoon_body_font'] != 'empty_0'):?>
    #coming-soon-container{
        font-family:<?php echo $seedprod_comingsoon->font_families($sc_jdt['comingsoon_body_font']); ?>;
    }
    <?php endif;?>
    <?php if(!empty($sc_jdt['comingsoon_headline_font']) && $sc_jdt['comingsoon_headline_font'] != 'empty_0'):?>
    #teaser-headline{
        font-family:<?php echo $seedprod_comingsoon->font_families($sc_jdt['comingsoon_headline_font']); ?>;
    }
    <?php endif;?>

    <?php if($sc_jdt['comingsoon_font_color'] == 'white'):?>
    #coming-soon-container, #coming-soon-footer{
        color:#fff;
        <?php if(isset($sc_jdt['comingsoon_text_shadow_effect']) && $sc_jdt['comingsoon_text_shadow_effect'] == 'on'){ ?>
        text-shadow: #333 1px 1px 0px;
        <?php } ?>
    }
    <?php elseif($sc_jdt['comingsoon_font_color'] == 'gray'):?>
    #coming-soon-container, #coming-soon-footer{
        color:#666;
        <?php if(isset($sc_jdt['comingsoon_text_shadow_effect']) && $sc_jdt['comingsoon_text_shadow_effect'] == 'on'){ ?>
        text-shadow: #fff 1px 1px 0px;
        <?php } ?>
    }
    <?php elseif($sc_jdt['comingsoon_font_color'] == 'black'):?>
    #coming-soon-container, #coming-soon-footer{
        color:#000;
        <?php if(isset($sc_jdt['comingsoon_text_shadow_effect']) && $sc_jdt['comingsoon_text_shadow_effect'] == 'on'){ ?>
        text-shadow: #fff 1px 1px 0px;
        <?php } ?>
    }
    <?php endif;?>
    <?php echo $sc_jdt['comingsoon_custom_css'];?>
  </style>
</head>

<body id="coming-soon-page">

    <div id="wrapper" style="margin:auto;padding:2%;width:96%;max-width:920px;">

        <header style="margin: 0;
    padding: 0;"><div class="main" style="margin:30px auto;padding:0;background:linear-gradient(to bottom,  #ffffff 0%,#a8a8a8 100%);-webkit-box-shadow:1px 2px 9px 1px rgba(0, 0, 0, 0.35);-moz-box-shadow:1px 2px 9px 1px rgba(0, 0, 0, 0.35);box-shadow:1px 2px 9px 1px rgba(0, 0, 0, 0.35);position:relative;border:2px solid #fff;width:100%;max width:965px;height:100%;min height:361px;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;">
                <h1 style="margin:0;padding:40px 35px 20px 35px;font-family:'Lato', sans-serif;color:#444444;font-size:44px;font-weight:900;line-height:normal;text-align:center;">COMING SOON</h1>
                <h3 style="margin:0;padding:0;font-family:'Lato', sans-serif;color:#555555;font-size:32px;font-weight:900;text-align:center;line-height:normal;padding-bottom:25px;padding-right:35px;padding-left:35px;">This site is currently under construction
                </h3>
                <p style="margin:0;padding:0;font-family:'Lato', sans-serif;color:#777777;font-size:22px;font-weight:900;line-height:normal;text-align:center;padding-bottom:55px;padding-right:35px;padding-left:35px;">Come back soon to see our new professionally designed website. <br style="margin: 0;
    padding: 0;"> Find up to date information about our company and our business. <br style="margin: 0;
    padding: 0;"><br style="margin: 0;
    padding: 0;"> We look forward to your visit, and seeing how we can work for you!</p>




            </div>

        </header>
    </div>
</body>
</html>

<?php exit(); ?>