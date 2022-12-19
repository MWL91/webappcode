<!DOCTYPE html>
<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <?php
    $birthday = 1991;
    $currentYear = date("Y");
    $yearsOld = $currentYear - $birthday;

    $tellHowOldIAm = "I'm " . $yearsOld . " years old";
    ?>
    <h1>This is my first PHP page</h1>
    <h2><?php echo $tellHowOldIAm; ?></h2>
</body>

</html>