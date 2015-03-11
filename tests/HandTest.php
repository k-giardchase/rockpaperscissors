<?php

    require_once __DIR__."/../src/Hand.php";

    class HandTest extends PHPUnit_Framework_TestCase
    {
        function test_rock_rock()
        {
            //Arrange
            $test_rock_rock = new Hand;
            $player1 = 'rock';
            $player2 = 'rock';

            //Act
            $result = $test_rock_rock->compareHand($player1,$player2);

            //Assert
            $this->assertEquals("Draw", $result);
        }


        function test_rock_scissors()
        {
            //Arrange
            $test_rock_scissors = new Hand;
            $player1 = 'rock';
            $player2 = 'scissors';

            //Act
            $result = $test_rock_scissors->compareHand($player1, $player2);
            //Assert
            $this->assertEquals("Player 1", $result);

        }


    }



?>
