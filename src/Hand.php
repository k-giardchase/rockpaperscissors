<?php

    class Hand
    {
        function compareHand($player1, $player2)
        {
            if( strtolower($player1) == 'rock' && strtolower($player2) == 'rock')
            {
                return 'Draw';
            }
        }
    }



?>
