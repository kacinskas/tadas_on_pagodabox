<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
      <?php 
        $title= (isset($global['title'])) ? $global['title'] : $global['site.title'];
        echo $global['site.name'] .' | '. $title;
      ?>
    </title>
    <meta name="description" content="TextView test site">
    <meta content='Author Name' name='Tadas'/> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="<?php echo $global['base.directory'];?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $global['base.directory'];?>/assets/css/main.css" rel="stylesheet">
    <style type="text/css">
      
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <?php if($global['google.analytics']){?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '<?php echo $global['google.analytics']; ?>']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>
  <?php }?>
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <h1><a class="brand" href="<?Php echo $global['prefix'];?>/"><?Php echo $global['site.name'];?></a></h1>
          <ul class="nav">
            <li><a href="https://github.com/shameerc/TextPress" target="_blank">Source</a>
            <li><a href="<?Php echo $global['prefix'];?>/archives">Archives</a></li>
            <li><a href="<?Php echo $global['prefix'];?>/about">About</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="row">
          <div class="span13">
            <?php echo $content; ?>
          </div>
        </div>
      </div>

      <footer>
        <p>Powered by <a href="http://textpress.shameerc.com" target="_blank">TextPress</a></p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
