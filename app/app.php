<?php

  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Hand.php';

  session_start();

  $app = new Silex\Application();
  $app['debug'] = true;

  $app->register(new Silex\Provider\TwigServiceProvider, array('twig.path' => __DIR__.'/../views'));

  if (empty($_SESSION['hand_list'])){
      $_SESSION['hand_list'] = array();
  }

  // get input for player1 and player2

  $app->get('/', function() use ($app) {

     return $app['twig']->render('hand.twig');

  });

  $app->get('/create_hand', function() use ($app) {
     $new_hand = new Hand;

     $run_comparison = $new_hand->compareHand($_GET['player1'], $_GET['player2']);

     return $app['twig']->render('hand_result.twig', array('winner' => $run_comparison));

  });




  return $app;

?>
