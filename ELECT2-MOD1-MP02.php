<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Functions
        </title>
    </head>
<body>
    <h1>Check Student Grade</h1>
<?php 
    function grade($grades){
       if($grades<75){
            echo "Failed";
       }
       elseif($grades>=75 && $grades<=85){
           echo "Good";
       }
       elseif($grades>=86){
           echo "Excellent";
       }
    }

    $CurrentGrade = 76;
    echo "Grade : $CurrentGrade <br />";
    echo "This grade is ";
    grade($CurrentGrade);
?>
</body>
</html>