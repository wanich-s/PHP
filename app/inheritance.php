<?php
    class chef {
        function makeChicken() {
            echo "The chef makes chicken <br>";
        }
        function makeSalad() {
            echo "The chef makes salad <br>";
        }
        function makeSpecialDish() {
            echo "The chef makes bbq rids <br>";
        }
    }

    class ItalianChef extends chef {
        function makePasta() {
            echo "The chef makes pasta";
        }
        function makeSpecialDish()
        {
            echo "The chef makes chicken parm";
        }
    }
    $chef = new Chef;
    $chef->makeChicken();
    $chef->makeSpecialDish();
    
    $italianchef = new ItalianChef;
    $italianchef->makeChicken();
    $italianchef->makeSpecialDish();
?>