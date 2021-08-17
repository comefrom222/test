<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/port.css">
</head>

<body>
    <?php include_once "../base.php";

    $chk = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);

    if ($chk > 0) {
        $_SESSION['admin'] = 1;
        to("../backend.php?do=title");
    } else {
        echo "<script>";
        echo  "alert('帳號密碼錯誤');\n";
        echo "location.href='../index.php?do=login'";
        echo "</script>";
    }

    ?>
</body>

</html>