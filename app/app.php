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

     return $app['twig']->render('choose.twig');

  });

  $app->get('/single_person_form', function() use ($app)
   {
      return $app['twig']->render('single_person_form.twig');
  });

  $app->get('/create_single_hand', function() use ($app) {

      $new_hand = new Hand;

          $computer_number = rand(1, 3);
          if($computer_number <= 1)
          {
              $player2 = "rock";
         //     return $player2;
          } elseif ($computer_number >1 && $computer_number < 2)
          {
              $player2 = "scissors";
         //     return $player2;
          }
          else
           {
              $player2 = "paper";
     //         return $player2;
          }

          $run_comparison =   $new_hand->compareHand($_GET['single_hand_input'], $player2);
     return $app['twig']->render('hand_result.twig', array('winner' => $run_comparison));

  });

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

$app->get('/single_person', function() use ($app) {
    $new_hand = new Hand;

    $plyr1=$_GET['player1'];
    $plyr2=$_GET['player2'];

    if(empty($plyr2))
    {
        $computer_number = rand(1, 3);
        if($computer_number <= 1)
        {
            $player2 = "rock";
       //     return $player2;
        } elseif ($computer_number >1 && $computer_number < 2)
        {
            $player2 = "scissors";
       //     return $player2;
        }
        else
         {
            $player2 = "paper";
    //         return $player2;
        }

        $run_comparison =   $new_hand->compareHand($_GET['player1'], $player2);

        return $app['twig']->render('hand_result.twig', array('winner' => $run_comparison));
    }

});



  return $app;

?>
