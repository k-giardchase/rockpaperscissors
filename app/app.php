<?php

  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Hand.php';

  session_start();

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider, array('twig.path' => __DIR__.'/../views'));

  if (empty($_SESSION['hand_list'])){
      $_SESSION['hand_list'] = array();
  }

  // get input for player1 and player2

  $app->get('/', function() use ($app) {

     return $app['twig']->render('hand.twig');
  });




  return $app;

?>
