<!DOCTYPE html>
<html>
    <head>
        <title>
            View Files
        </title>
    </head>
<body>
    <?php
        $Dir = "HealthBar";
        $DirEntries = scandir($Dir);
        foreach ($DirEntries as $Entry) {
         if ((strcmp($Entry, '.') != 0) &&
         (strcmp($Entry, '..') != 0))
         echo "<a href=\"HealthBar/" . $Entry . "\">" .
         $Entry .
         "</a><br />\n";
        }
    ?>
</body>
</html>