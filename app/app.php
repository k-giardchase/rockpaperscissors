<?php

  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Hand.php';


  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider, array('twig.path' => __DIR__.'/../views'));

  // get user choice for single or multi-player game

  $app->get('/', function() use ($app) {

     return $app['twig']->render('choose.twig');

  });

// redirect to get input from user from single person form

  $app->get('/single_person_form', function() use ($app)
  {
      return $app['twig']->render('single_person_form.twig');
  });

//generate computer value randomly to act as player 2 and run compareHand method

  $app->get('/create_single_hand', function() use ($app)
  {
      $new_hand = new Hand;

      $computer_number = rand(1, 3);

      if($computer_number <= 1)
      {
          $player2 = "rock";
      }
      elseif ($computer_number >1 && $computer_number < 2)
      {
          $player2 = "scissors";
      }
      else
      {
          $player2 = "paper";
      }

      $run_comparison = $new_hand->compareHand($_GET['single_hand_input'], $player2);

      return $app['twig']->render('hand_result.twig', array('winner' => $run_comparison));

  });

  //redirect to multiperson form to grab users inputs

  $app->get('/multi_person_form', function() use ($app)
  {
      return $app['twig']->render('two_players.twig');
  });

  $app->get('/create_multi_hands', function() use ($app)
  {
     $new_hand = new Hand;

     $run_comparison = $new_hand->compareHand($_GET['player1'], $_GET['player2']);

     return $app['twig']->render('hand_result.twig', array('winner' => $run_comparison));

  });

  return $app;

?>
