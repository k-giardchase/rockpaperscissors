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

  $app->get('/create_hand', function() use ($app)
   {
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

     else
     {
         $run_comparison =   $new_hand->compareHand($_GET['player1'], $_GET['player2']);

         return $app['twig']->render('hand_result.twig', array('winner' => $run_comparison));
     }



  });




  return $app;

?>
