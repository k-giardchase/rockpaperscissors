<?php

    class Hand
    {
        function compareHand($player1, $player2)
        {

            if(strtolower($player1) =="rock")
            {
                if( strtolower($player2) == "rock")
                {
                    return "Draw";
                }

                elseif (strtolower($player2) == "scissors")
                {
                    return "Player 1";
                }

                else
                {
                    return "Player 2";
                }
            } elseif (strtolower($player1) == "scissors")
            {
                if(strtolower($player2) == "scissors")
                {
                    return "Draw";
                }

                elseif(strtolower($player2) == "rock")
                {
                    return "Player 2";
                }
            }
        }
    }



?>
