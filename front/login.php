<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="./img/webIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/port.css">


    <link rel="preconnect" href="https://fonts.gstatic.com">


    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?
    family=EB+Garamond:ital@1&family=Fuggles&family=Noto+Sans+TC&family=Satisfy&family=Cormorant:wght@300&family=Neucha&display=swap" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />




    <link rel="stylesheet" href="../bs/bootstrap.min.css">
    <link rel="stylesheet" href="../bs/bscustom.css">
    <script src="../bs/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
        font-family: serif;
    }
</style>

<body>
    <?php
    if (isset($_SESSION['admin'])) {
        to("backend.php");
    }

    ?>

    <div class="di">
        <!-- style="height:540px; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;" -->
        <!-- <div style="height:32px; display:block;"></div> -->
        <!--正中央-->

        <img src="../img/cover.png" class="d-flex flex-column justify-content-center position-absolute top-0 bottom-0  w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0">

            <form method="post" action="../api/login.php" class="flex-column">

                <p class="t botli" style="font-size: 28px;">管理員登入區</p>

                <div class="d-flex justify-content-center p-2 text-dark">

                    <p class="cent"><i class="fa fa-user text-center m-2 "></i>帳號 ： <input  name="acc" autofocus="" type="text"></p>
                </div>

                <div class="d-flex justify-content-center p-2 text-dark">
                    <p class="cent"><i class="fa fa-lock text-center m-2 "></i>密碼 ： <input  name="pw" type="password"></p>
                </div>


                <div class="d-flex justify-content-center">
                    <p>
                        <input class=" btn btn-light cursor-pointer m-1" value="送出" type="submit">
                        <input class=" btn btn-light cursor-pointer m-1" type="reset" value="清除">
                    </p>
                </div>

            </form>



            <div id="alt">
                <!-- style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;" -->
            </div>
        </div>
    </div>
    <script>
        $(".sswww").hover(
            function() {
                $("#alt").html("" + $(this).children(".all").html() + "").css({
                    "top": $(this).offset().top - 50
                })
                $("#alt").show()
            }
        )
        $(".sswww").mouseout(
            function() {
                $("#alt").hide()
            }
        )
    </script>
</body>

</html>