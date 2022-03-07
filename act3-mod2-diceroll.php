<!DOCTYPE html>
<html>
    <head>
        <title>
            DICE ROLLING
        </title>
    </head>
<body>

<?php
    $FacesNamesSingular = array("one","two","three","Four","Five","Six");
    $FacesNamesPlural = array("ones","twos","threes","Fours","Fives","Sixes");

    function CheckForDoubles($Die1, $Die2){
        global $FacesNamesSingular;
        global $FacesNamesPlural;
        $ReturnValue = false;
        if($Die1 == $Die2){
            echo "The Roll was Double ", $FacesNamesPlural[$Die1-1],"<br />";
            $ReturnValue = true;
        }
        else {
            echo "The Roll was a ", $FacesNamesPlural[$Die1-1]," and a ",$FacesNamesSingular[$Die2-1],"<br />";
            $ReturnValue = false;
        }
        return $ReturnValue;
        
    }
    function DisplayScoreText($Score, $Doubles){
        if($Doubles){
            if($Score == 2){
                echo "You rolled a snake eyes!";
            }
            if($Score == 12){
                echo "You rolled a boxcar!";
            }
        }
        else{
            if($Score == 3){
                echo "You rolled a loose deuce!";
            }
            if($Score == 5){
                echo "You rolled a fever five!";
            }
            if($Score == 7){
                echo "You rolled a natural!";
            }
            if($Score == 9){
                echo "You rolled a nina!";
            }
            if($Score == 11){
                echo "You rolled a yo!";
            }
        }
    }

    $Dice = array();
    $Dice[0] = rand(1,6);
    $Dice[1] = rand(1,6);
    $Score = $Dice[0] + $Dice[1];
    
    echo "<p>";
    echo "The total score for two roll was: ", $Score,"<br />"; 

    $Doubles = CheckForDoubles($Dice[0],$Dice[1]);
    DisplayScoreText($Score, $Doubles);
    echo "<p>"


?>



</body>
</html>