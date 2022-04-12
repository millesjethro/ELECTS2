<!DOCTYPE html>
<html>
    <head>
        <title>
            Scholarship Form
        </title>
    </head>
<body>
    <?php
        
        function displayRequired($fieldName) {
            echo "The field \"$fieldName\" is required.<br />n";
        }

        function validateInput($data, $fieldName) {
            global $errorCount;
            if (empty($data)) {
            displayRequired($fieldName);
            ++$errorCount;
            $retval = "";
            } else { // Only clean up the input if it isn't 
            // empty
                $retval = trim($data);
                $retval = stripslashes($retval);
            }
              return($retval);
            
        }
        $errorCount = 0;

        $firstName = validateInput($_POST['fName'], "First name");
        $lastName = validateInput($_POST['lName'], "Last name");
        

        if ($errorCount>0) {
            echo "Please re-enter the information below.<br />\n";
            redisplayForm($firstName, $lastName);
           }
        else
            echo "Thank you for filling out the scholarship 
                      form, " . $firstName . " " . $lastName . ".";
        
        function redisplayForm($firstName, $lastName) {
            ?>
                <h2 style = "text-align:center">Scholarship Form</h2>
                <form name="scholarship" action="act2-mod4-process_scholarship.php" method="post">
                        
                <p>First Name: <input type="text" name="fName" value="<?php echo $firstName; ?>" /></p>
                <p>Last Name: <input type="text" name="lName" value="<?php echo $lastName; ?>" /></p>
                <p><input type="reset" value="Clear Form" />&nbsp; &nbsp;<input type="submit" name="Submit" value="Send Form" />
                </form>
            <?php
        }              
    ?>
</body>
</html>