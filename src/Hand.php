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
            }
        }
    }



?>
