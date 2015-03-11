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

        function test_rock_paper()
        {
            //Arrange
            $test_rock_paper = new Hand;
            $player1 = 'rock';
            $player2= 'paper';

            //Act
            $result = $test_rock_paper->compareHand($player1, $player2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        //start reversal

        function test_scissors_scissors()
        {
            //Arrange
            $test_scissors_scissors = new Hand;
            $player1 = 'scissors';
            $player2 = 'scissors';

            //Act
            $result = $test_scissors_scissors->compareHand($player1,$player2);

            //Assert
            $this->assertEquals("Draw", $result);
        }


        function test_scissors_rock()
        {
            //Arrange
            $test_scissors_rock = new Hand;
            $player1 = 'scissors';
            $player2 = 'rock';

            //Act
            $result = $test_scissors_rock->compareHand($player1, $player2);
            //Assert
            $this->assertEquals("Player 2", $result);

        }

        function test_scissors_paper()
        {
            //Arrange
            $test_scissors_paper = new Hand;
            $player1 = 'scissors';
            $player2= 'paper';

            //Act
            $result = $test_scissors_paper->compareHand($player1, $player2);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_paper_paper()
        {
            //Arrange
            $test_paper_paper = new Hand;
            $player1 = "paper";
            $player2 = "paper";

            //Act
            $result = $test_paper_paper->compareHand($player1,$player2);

            //Assert
            $this->assertEquals("Draw", $result);
        }

        function test_paper_rock()
        {
            //Arrange
            $test_paper_rock = new Hand;
            $player1 = "paper";
            $player2 = "rock";

            //Act
            $result = $test_paper_rock->compareHand($player1, $player2);

            //Assert
            $this->assertEquals("Player 1", $result);

        }

        function test_paper_scissors()
        {
            //Arrange
            $test_paper_scissors = new Hand;
            $player1 = "paper";
            $player2 = "scissors";

            //Act
            $result = $test_paper_scissors->compareHand($player1, $player2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

    }



?>
