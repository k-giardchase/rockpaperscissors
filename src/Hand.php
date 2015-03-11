<?php

    class Hand
    {
        function compareHand($player1, $player2)
        {
            $player1_lower = strtolower($player1);
            $player2_lower = strtolower($player2);

            if($player1_lower =="rock")
            {
                if($player2_lower == "rock")
                {
                    return "Draw";
                }

                elseif ($player2_lower == "scissors")
                {
                    return "Player 1";
                }

                else
                {
                    return "Player 2";
                }
            }

            elseif ($player1_lower == "scissors")
            {
                if($player2_lower == "scissors")
                {
                    return "Draw";
                }

                elseif($player2_lower == "rock")
                {
                    return "Player 2";
                }

                else {
                    return  "Player 1";
                }
            }

            elseif($player1_lower == "paper")
            {
                if($player2_lower == "paper")
                {
                    return "Draw";
                }
                elseif($player2_lower == "rock")
                {
                    return "Player 1";
                }
                else {
                    return "Player 2";
                }
            }

            else {
                return "Please enter either rock, paper, or scissors.";
            }
        }
    }



?>
