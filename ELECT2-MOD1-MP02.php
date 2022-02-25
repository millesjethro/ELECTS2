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
    echo "If marks are less than 75% , student will be Failed<br />
        If marks are between 75% to 85%, student status will be Good.<br />
        If marks are between 86% to 100% , student will be Excellent.<br /><br />";
    echo "Grade: $CurrentGrade <br />";
    echo "This grade is ";
    grade($CurrentGrade);
?>
</body>
</html>