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
        $DirOpen = opendir($Dir);
        while ($CurFile = readdir($DirOpen)) {
            if ((strcmp($CurFile, '.') != 0) &&
            (strcmp($CurFile, '..') != 0))
            echo "<a href=\"HealthBar/" . $CurFile . "\">" .
            $CurFile . "</a><br />\n";
        }
        closedir($DirOpen);
    ?>
</body>
</html>