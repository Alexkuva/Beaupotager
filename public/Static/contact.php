<?php
// check if a form was submitted
if( !empty( $_POST ) ){

// convert form data to json format
    $postArray = array(
      "nom" => $_POST['nom'],
      "email" => $_POST['email'],
      "phone" => $_POST['phone'],
      "type" => $_POST['type']
    );

$json = json_encode( $postArray );
// make sure there were no problems
//if( json_last_error() != JSON_ERROR_NONE ){
    //exit;  // do your error handling here instead of exiting
// }
$file = 'contact.json';
// write to file
//   note: _server_ path, NOT "web address (url)"!
file_put_contents( $file, $json, FILE_APPEND);
} 

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" /><![endif]-->

    <title>Beaupotager</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner" >
        
        <div class="masthead clearfix">
          <div class="inner">
            <h3 class="masthead-brand"><a href="index.html"><img src="images/logobeaupotager.png"/></a></h3>
            <nav>
              <ul class="nav masthead-nav">
                <!--<li><a href="#"class="active">Inscription</a></li>-->
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Connexion</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="cover-container">
          <div class="inner cover">
            <h1 class="cover-heading">Merci pour votre visite, un espace personnel dédié à votre activité maraîchère vous sera bientôt proposé.</h1>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Suivez-nous sur <a href="https://www.facebook.com/beaupotager/?fref=ts" target='_blank'>Facebook</a> et <a href="https://twitter.com/Beaupotager" target='_blank'>Twitter</a>.</p>
              <p>N'hésitez pas à nous contacter sur: <span style="color:#fff">beaupotager@gmail.com</span></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>