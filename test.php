<html>
<head>
  <title>PHP Test</title>
</head>
<body>
  <?php
    $a_bool = true;
    $large_number = 2147483647;
    $b = 1.2e3;

    // bool
    echo var_dump($a_bool) . "<br>";
    echo is_bool($a_bool) . "<br>";
    echo gettype(is_int($a_bool));

    // integer
    echo "size of int ---- " . PHP_INT_SIZE . "<br>";
    echo "max value of int ---- " . PHP_INT_MAX . "<br>";

    echo var_dump($large_number) . "<br>";
    $large_number = $large_number + 3.4;
    echo var_dump($large_number) . "<br>";
    echo (int)$large_number . "<br>";
    echo (int) ( (0.1+0.7) * 10 ) . "<br>";
    echo (int) ( 1.7) . "<br>";

    // float
    echo $b . "<br>";
    echo 7E-10 . "<br>";
    $x = 8 - 6.4;  // which is equal to 1.6
    $y = 1.6;
    var_dump($x == $y); // is not true
    var_dump(0/0); // is not true
  ?>
<!--   <form action="action.php" method="post">
    <input type="text" name="name" />
    <input type="submit">
  </form> -->
</body>
</html>