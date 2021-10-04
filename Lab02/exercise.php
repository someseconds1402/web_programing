<html>

<head>
    <title>Receiving Input</title>
</head>

<body>
    <font size=5>Thank you: Got your input.</font>
    <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $school = $_POST["school"];
    $class = $_POST["class"];
    // $hobby1 = $_POST["hobby1"];
    // $hobby2 = $_POST["hobby2"];
    // $hobby2 = $_POST["hobby2"];
    // $hobby3 = $_POST["hobby3"];
    // $hobby4 = $_POST["hobby4"];
    // $hobby5 = $_POST["hobby5"];
    // $hobby6 = $_POST["hobby6"];

    $count = 1;
    $count++;
    function getHobby($hobby)
    {
        echo "$_POST[$hobby]";
        if (!$_POST[$hobby])
            return $_POST[$hobby];
    }

    print "<br>Name: $name";
    print "<br>Email: $email";
    print "<br>Age: $age";
    print "<br>School: $school";
    print "<br>Class: $class";
    print "<br>Hobby: ";
    // getHobby("name");
    ?>
</body>

</html>