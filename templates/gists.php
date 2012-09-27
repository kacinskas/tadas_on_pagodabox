<?php

require_once dirname(__FILE__) . '/../lib/github-api3-php/lib/vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';

/**
 * Configure the autoloader
 *
 * The Symfony ClassLoader Component is used, but could easy be substituted for
 * another autoloader.
 *
 * @link https://github.com/symfony/ClassLoader
 * @link http://symfony.com/doc/current/cookbook/tools/autoloader.html
 */
$loader = new Symfony\Component\ClassLoader\UniversalClassLoader();
// Register the location of the GitHub namespace
$loader->registerNamespaces(array(
    'Buzz'              => __DIR__.'/../lib/vendor/Buzz/lib',
    'GitHub'            => __DIR__.'/../lib'
));
$loader->register();


use GitHub\API\Authentication;
use GitHub\API\User\User;
use GitHub\API\AuthenticationException;
use GitHub\API\Gist\Gist;

    $gist = new Gist();
    $response = $gist->all('kacinskas');

// Lets access the User API
$user = new User();

/**
 * Perform operations that require no authentication
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
     List of gists
    </title>
    <meta name="description" content="">
    <meta content='Authur Name' name='Author'/> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <h1><a class="brand" href="<?Php echo $global['prefix'];?>/">Me and <?Php echo $global['site.name'];?></a></h1>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="content">
        <div class="row">
          <div class="span13 post">
            <p>Hi There</p>
            <p></p>
            <h3>Gists</h3>
            <p>Add gists here...</p>
          </div>
        </div>
      </div>

      <footer>
        <p>Powered by <a href="http://textpress.shameerc.com" target="_blank">TextPress</a></p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
