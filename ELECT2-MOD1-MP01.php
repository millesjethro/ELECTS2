<!DOCTYPE hmtl>
<html>
<head>
    <title>
        INFORMATION BLOCK
    </title>
</head>
<body>
<h1></h1>
<h2>PERSONAL INFORMATION</h2>
<?php
    $Names = array(
        "Milles Jethro D Del Rosario",
        "Lanie D Del Rosario",
        "Alexander M. Del Rosario",
        "Mark Lawrence D Del Rosairo",
        "Mary Cristine D Del Rosario"
    );
    $Schools = array(
        "Concepcion South Elementary School",
        "Tarlac West Central Elementary School",
        "Tarlac National High School",
        "Benigno Simeon Aquino National High School",
        "University of Baguio",
        "Angeles Unniversity Foundation"
    );
    $Dates = array(
        "2013",
        "2017",
        "2019"
    );
    $Course = "BSCOE";
    $OtherInfo = array(
        "January 16, 2001",
        "Male",
        "#12 Sto. Cristo Concepcion Tarlac",
        "milles.jethro16@gmail.com"
    );
    $Ffoods = array(
        "Donuts",
        "Churos",
        "Burger",
        "Pizza",
        "Breads"
    );
    $Fmovies = array(
        "Marvels",
        "Dark Comics",
        "RED NOTICE",
        "John Wick",
        "X-men"
    );
    $Fsongs = array(
        "House of memories",
        "House if gold",
        "Miss wanna die",
        "Boulevard of broken dreams",
        "Welcome to my life"
    );
?>
<?php 
    echo "Name: ","$Names[0]<br />";
    echo "Birthday: ","$OtherInfo[0]<br />";
    echo "Gender: ","$OtherInfo[1]<br />";
    echo "Home Address: ","$OtherInfo[2]<br />";
    echo "Email Address: ","$OtherInfo[3]<br />";
?>

<h2>FAMILY BACKGROUND</h2>

<?php
    echo "Father's Name: ","$Names[2]<br />";
    echo "Mother's Name: ","$Names[1]<br />";
    echo "Sibling's 1 Name: ","$Names[3]<br />";
    echo "Sibling's 2 Name: ","$Names[4]<br />";
?>

<h2>EDUCATIONAL BACKGROUND</h2>

<?php
    echo "Primary School: ","$Schools[0], ","$Schools[1] <br />";
    echo "Date Graduated: ","$Dates[0]<br />";
    echo "Junior High School: ","$Schools[2], ","$Schools[3] <br />";
    echo "Date Graduated: ","$Dates[1]<br />";
    echo "Primary School: ","$Schools[4]<br />";
    echo "Date Graduated: ","$Dates[2]<br />";
    echo "Course: ","$Course<br />";
?>
<h2>FAVORITE FOODS</h2>
<?php 
    echo "1. ","$Ffoods[0]<br />";
    echo "2. ","$Ffoods[1]<br />";
    echo "3. ","$Ffoods[2]<br />";
    echo "4. ","$Ffoods[3]<br />";
    echo "5. ","$Ffoods[4]<br />";
?>
<h2>FAVORITE MOVIES</h2>
<?php 
    echo "1. ","$Fmovies[0]<br />";
    echo "2. ","$Fmovies[1]<br />";
    echo "3. ","$Fmovies[2]<br />";
    echo "4. ","$Fmovies[3]<br />";
    echo "5. ","$Fmovies[4]<br />";
?>
<h2>FAVORITE SONGS</h2>
<?php 
    echo "1. ","$Fsongs[0]<br />";
    echo "2. ","$Fsongs[1]<br />";
    echo "3. ","$Fsongs[2]<br />";
    echo "4. ","$Fsongs[3]<br />";
    echo "5. ","$Fsongs[4]<br />";
?>

</body>
</html>
