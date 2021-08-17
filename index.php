<?php include_once "./base.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veromca's Portfolio</title>
  <link rel="shortcut icon" href="./img/webIcon.png" type="image/x-icon">
  <!-- <link rel="stylesheet" href="./css/port.css"> -->
  <link rel="stylesheet" href="./css/port.css">


  <link rel="preconnect" href="https://fonts.gstatic.com">


  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?
    family=EB+Garamond:ital@1&family=Fuggles&family=Noto+Sans+TC&family=Satisfy&family=Cormorant:wght@300&family=Neucha&display=swap" rel="stylesheet">

  <!-- icon -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />




  <!-- <link rel="stylesheet" href="./bs/bootstrap.min.css"> -->
  <link rel="stylesheet" href="./bs/bootstrap.min.css">
  <link rel="stylesheet" href="./bs/bscustom.css">
  <link rel="stylesheet" href="./bs/">
  <script src="../bs/bootstrap.bundle.min.js"></script>

</head>
<!-- m：margin
p：padding
t：top
r：right
b：bottom
l：left
x：-right和-left
y：-top 和 -bottom
m：margin
mt：margin-top
mr：margin-right
mb：margin-bottom
ml：margin-left
ms：margin-right 和 margin-left
my：margin-top 和 margin-bottom

p：padding
pt：padding-top
pr：padding-right
pb：padding-bottom
pl：padding-left
px：padding-right 和 padding-left
py：padding-top 和 padding-bottom 
X-小	沒有任何	<576 像素
小的	sm	≥576px
中等的	md	≥768px
大	lg	≥992px
特大號	xl	≥1200px
特大號	xxl	≥1400px
-->


<body>
  <!-- 導覽列 -->
  <nav id="veromcaMenu" class="navbar fixed-top navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Portfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#veromcaNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="veromcaNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link " href="#veromcaAboutMe"> <i class="fas fa-user-graduate me-2"></i></i>About me</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#veromcaExperience"><i class="fas fa-envelope-open-text me-2"></i></i>Experience</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#veromcaProject"><i class="far fa-image me-2"></i>Project</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#veromcaSkill"><i class="fas fa-laptop me-2"></i></i>Skills</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#veromcaContact"><i class="fas fa-phone me-2"></i>Contact me</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " target="_parent" href="./front/login.php"><i class="fas fa-user me-2"></i>Log in</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>

  <!-- Slider -->
  <section id="veromcaSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <img src="./img/cover.png" class="d-block w-100 h-100"> -->
        <img src="./img/cover.png" class="d-block w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center position-absolute top-0 bottom-0 ">
          <h1>Veromca's Portfolio</h1>
          <p class="d-none d-md-block">2016-2021</p>
        </div>
      </div>
  </section>

  <!-- AboutMe -->
  <section id="veromcaAboutMe" class="py-5">
    <div class="container text-light">
      <div class="row gy-4">
        <header class="text-center h1 text-decoration-underline py-5 m-0">About Me</header>
        <!-- 個人資料區 -->
        <div class="col-12 col-lg-4 p-0 m-0">
          <div class="row gy-4 p-0 m-0">
            <div class="py-5 m-2 d-none d-xl-block"></div> <!-- 空白的div-->
            <h5 class="col-sm-12 p-3 ml-3 my-0"><em><span class="h2 "> <span style="font-size: 42px;">V</span>eromca Chen </span> /
                陳嘉筠</em></h5>

                
            <!-- 這邊是用後台編輯文字 -->
            <p class="col-sm-12 p-3 ml-3 my-0">
              <?php
              $myself = $Ad->all(['sh' => 1]);
              foreach ($myself as $my) {
              ?>
                <li class="m-0"> <?= $my['text']; ?></li>
              <?php
              }
              ?>
            </p>


          </div>
        </div>
        <!-- 頭貼區 -->
        <div class="col-12 col-lg-8 p-0 m-0">
          <div class="row gy-4 p-0 m-0">
            <img src="./img/<?= $Title->find(['sh' => 1])['img']; ?>" id="veromcaPortfolioImg" class="col-sm-12 p-3 m-0" width="900px" style="overflow: hidden;">

            <!-- <img src="./img/portfolioImg2.jpg" id="veromcaPortfolioImg" class="col-sm-12 p-3 m-0" width="900px" style="overflow: hidden;"> -->
          </div>
        </div>
      </div>

      <div class="row gy-4 py-2">
        <!-- 空白的div 要擠空間用的 在小於lg會不見 -->
        <div class="col-12 col-lg-4 p-0 m-0">
          <div class="row gy-4 p-0 m-0 d-none d-lg-block">
            <div class="col-sm-12 p-3 m-0"></div>
          </div>
        </div>
        <!-- media icon -->
        <div id="veromcaMediaIcon" class="col-12 col-lg-8 p-0 m-0 ">
          <div class="row gy-4 p-0 m-0 ">
            <div class="col-sm-12 p-0 m-3">
              <a href="https://github.com/comefrom222" target="_blank" class="px-2">
                <img src="./img/githubLogo.png" style="width: 30px;">
              </a>
              <a href="https://codepen.io/comefrom222" target="_blank" class="px-2">
                <img src="./img/codepenLogo.png" style="width: 30px;">
              </a>
              <a href="https://www.instagram.com/comefrom_drawing/?igshid=e2h5cfkkhk2j" target="_blank" class="px-2">
                <img src="./img/instagramLogo.png" style="width: 30px;">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Experience -->
  <section id="veromcaExperience" class="py-5">
    <div class="container-fluid">
      <header class="text-center h1 text-decoration-underline py-5 m-0">Experience</header>

      <!-- 第一段 -->
      <div class="row">
        <div class="col-2 d-none d-lg-block px-2"></div> <!-- md消失 -->
        <div class="col-4 col-lg-3  p-2 m-0 text-end " id="verticleLine">
          <h6 class="fw-bold mt-2 text-nowrap">109/6 - 110/02</h6>
          <small>設計助理</small>
        </div>


        <div class="col-8 col-lg-6  p-2 m-0 " id="verticleLine2">

          <!--小圓點-->
          <img id="experiencePoint" src="https://img.icons8.com/small/16/000000/filled-circle.png" class="d-none d-lg-block" />

          <strong>鼎侑工程顧問有限公司</strong>
          <div class="mt-1">
            <small>協助系辦行政相關事宜，完成主管交代之任務、輔導同學完成課業上的問題</small>
          </div>
        </div>
        <div class="col-1 d-none d-lg-block px-2"></div><!-- md消失 -->
      </div>


      <!-- 第二段 -->
      <div class="row">
        <div class="col-2 d-none d-lg-block px-2"></div> <!-- md消失 -->
        <div class="col-4 col-lg-3  p-2 m-0 text-end " id="verticleLine">
          <ul class="list-inline ">
            <h6 class="fw-bold mt-2 text-nowrap">108/3 - 109/06</h6>
            <small>​行政助理</small>
        </div>
        <div class="col-8 col-lg-6  p-2 m-0 " id="verticleLine2">
          <!--小圓點-->
          <img id="experiencePoint" src="https://img.icons8.com/small/16/000000/filled-circle.png" class="d-none d-lg-block" />

          <strong>朝陽科技大學</strong>
          <div class="mt-1">
            <small>協助系辦行政相關事宜，完成主管交代之任務、輔導同學完成課業上的問題。</small>
          </div>
        </div>
        <div class="col-1 d-none d-lg-block px-2"></div><!-- md消失 -->
      </div>

      <!-- 第三段 -->
      <div class="row">
        <div class="col-2 d-none d-lg-block px-2"></div> <!-- md消失 -->
        <div class="col-4 col-lg-3  p-2 m-0 text-end " id="verticleLine">
          <h6 class="fw-bold mt-2 text-nowrap">107/7 - 107/10</h6>
          <small>​設計助理</small>
        </div>
        <div class="col-8 col-lg-6  p-2 m-0 " id="verticleLine2">
          <!--小圓點-->
          <img id="experiencePoint" src="https://img.icons8.com/small/16/000000/filled-circle.png" class="d-none d-lg-block" />

          <strong>廣州台清之家</strong>
          <div class="mt-1">
            <small>位於廣州，協助同仁完成設計相關職務。</small>
          </div>
          <div class="col-1 d-none d-lg-block px-2"></div><!-- md消失 -->
        </div>
      </div>

      <!-- 第四段 -->
      <div class="row">
        <div class="col-2 d-none d-lg-block px-2"></div> <!-- md消失 -->
        <div class="col-4 col-lg-3  p-2 m-0 text-end " id="verticleLine">
          <h6 class="fw-bold mt-2 text-nowrap">107/7 - 107/10</h6>
          <small>​設計助理</small>
        </div>
        <div class="col-8 col-lg-6  p-2 m-0 " id="verticleLine2">
          <!--小圓點-->
          <img id="experiencePoint" src="https://img.icons8.com/small/16/000000/filled-circle.png" class="d-none d-lg-block" />

          <strong>家教</strong>
          <div class="mt-1">
            <small>教導、輔助學生使用繪圖軟體；如Adobe系列的Photoshop、Illustrator。</small>
          </div>
          <div class="col-1 d-none d-lg-block px-2"></div><!-- md消失 -->
        </div>
      </div>

    </div>
  </section>


  <!-- Project -->
  <section id="veromcaProject">

    <div class="container-fluid">

      <!--這是一個大row-->
      <div class="row">

        <!--row裡面拿col-3-->
        <div class="col-2" id="projectImg">
          <!-- <img src="./img/footerBg.png"> -->
        </div>


        <!------- 第一組卡片 ------->
        <!--row裡面拿col-9-->
        <div class="col-10 d-flex flex-column" id="projectCard">
          <header class="text-center h1 text-decoration-underline py-5 m-0">Project</header>

          <div class="d-flex align-items-start flex-column">
            <div class="card bg-transparent m-0 p-2" style="max-width: 540px;">
              <div class="row g-0">
                <!-- 圖片區 -->
                <div class="col col-md-4">
                  <img src="..." alt="...">
                </div>
                <!-- 文字區 -->
                <div class="col col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                      additional
                      content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted text-end">Go >>></small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!------- 第二組卡片 ------->
          <div class="d-flex align-items-end flex-column" id="ProjectCardSecondSection">
            <div class="card bg-transparent m-0 p-2" style="max-width: 540px; ">
              <div class="row g-0">
                <!-- 圖片區 -->
                <div class="col col-md-4">
                  <img src="..." alt="...">
                </div>
                <!-- 文字區 -->
                <div class="col col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                      additional
                      content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted text-end">Go >>></small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!------- 第三組卡片 ------->
          <div class="d-flex align-items-start flex-column">
            <div class="card bg-transparent m-0 p-2" style="max-width: 540px;">
              <div class="row g-0">
                <!-- 圖片區 -->
                <div class="col col-md-4">
                  <img src="..." alt="...">
                </div>
                <!-- 文字區 -->
                <div class="col col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                      additional
                      content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted text-end">Go >>></small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
  </section>



  <!-- Skill -->
  <section id="veromcaSkill" class="py-5">
    <div class="container py-5">
      <header class="text-center h1 text-decoration-underline py-5 m-0">Skills</header>

      <div class="row ">
        <div class="col-12 text-center p-4">
          <h3 class="p-2 m-0">Soft</h3>
          <img src="https://img.icons8.com/material-outlined/96/000000/html.png" />
          <img src="https://img.icons8.com/material-outlined/96/000000/css.png" />
          <img src="https://img.icons8.com/material-outlined/96/000000/php.png" />
          <img src="https://img.icons8.com/windows/96/000000/bootstrap.png" />
          <img src="https://img.icons8.com/windows/96/000000/github-squared.png" />
        </div>
        <div class="col-12 text-center p-4">
          <h3 class="p-2 m-0">3D</h3>
          <img src="https://img.icons8.com/ios/100/000000/3ds-max.png" />
          <img src="https://img.icons8.com/ios-filled/100/000000/google-sketchup.png" />
          <img src="https://img.icons8.com/ios/100/000000/autodesk-autocad.png" />
          <img src="https://img.icons8.com/ios-glyphs/100/000000/rhinoceros.png" />
          <img src="https://img.icons8.com/ios-filled/100/000000/3d-scale.png" />
          <img src="https://img.icons8.com/material-outlined/96/000000/keyshot-logo.png" />
          <img src="https://img.icons8.com/wired/64/000000/lumion.png" />
        </div>
        <div class="col-12 text-center p-4">
          <h3 class="p-2 m-0">Illustration</h3>
          <img src="https://img.icons8.com/windows/96/000000/adobe-photoshop.png" />
          <img src="https://img.icons8.com/windows/96/000000/adobe-illustrator.png" />
          <img src="https://img.icons8.com/windows/96/000000/adobe-after-effects.png" />
          <img src="https://img.icons8.com/wired/64/000000/clip-studio-paint.png" />
        </div>
        <div class="col-12 text-center p-4">
          <h3 class="p-2 m-0">Instrument</h3>
          <img src="https://img.icons8.com/material-outlined/96/000000/ms-excel--v2.png" />
          <img src="https://img.icons8.com/fluency-systems-regular/96/000000/word.png" />
        </div>
      </div>
    </div>
  </section>


  <!-- Contact -->
  <section id="veromcaContact">

  </section>

  <!-- Footer -->
  <footer>
    <section id="veromcaFooter" class="py-5">
      <div class="container text-light">
        <h1 class="col-12 text-center my-3">contact me</h1>
        <div class="row py-5 gy-4">

          <div class="col-12 col-md-3 mt-0">
            <p class="m-0 px-1"> Veromca-Chen</p>
            <div class="d-flex align-items-stretch">
              <img src="./img/footerSquar.png" class="m-1" style="width: 50px; height: 50px;">
              <img src="./img/footerSquar.png" class="m-1" style="width: 50px; height: 50px;">
              <img src="./img/footerSquar.png" class="m-1" style="width: 50px; height: 50px;">
            </div>
          </div>

          <div class="col-12 col-md-6 text-center ">
            <textarea class="form-control" name="dataMsg" id="dataMsg" rows="3" placeholder="Write your mesage..."></textarea>
          </div>

          <div class="col-12 col-md-3 text-start">
            <div class="d-md-flex justify-content-md-end ">
              <p>
                TEL/0989769839 <br>
                MAIL/comefrom222@gmail.com<br>
                ADDRESS/Taipei,Taiwan<br>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <button type="button" class=" btn btn-outline-light">submit</button>
        </div>
      </div>
    </section>

    <!-- 做回頁首的按鈕 -->
    <div id="veromcaArrow" class="position-fixed">
      <a href="#">
        <img src="./img/topIcon.png" width="50">
      </a>
  </footer>
</body>

</html>