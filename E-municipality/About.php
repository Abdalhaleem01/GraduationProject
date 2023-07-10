<?php

session_start();
?>


<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <title>عن الموقع</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <style>
        .card {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>



    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body>


      <!-- Navbar Start -->
    
     
      <nav class="navbar mx-auto navbar-expand-lg  bg-white navbar-light  py-3 py-lg-0 px-3 px-lg-0"  style="margin-bottom:10px ;" >
        <div class="collapse navbar-collapse  ms-auto">
        <a href="home.php" class="navbar-brand ms-auto px-4">
            <h1 class="display-5 text-primary" style="float:left ;position: relative ;left: 90px; z-index: 1 ;margin-right:40px ;margin-left:-100px ; "><span>بلديتك</span></h1>
            <img src="img/logo1.png" height="70px" width="70px"  style=" z-index:0 ;padding-bottom:-50px ; overflow: hidden;margin-left:30px ;position: relative;left:30px"/>

        </a>
        </div>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="home.php" class="nav-item nav-link ">الصفحة الرئيسية</a>
                <a href="News.php" class="nav-item nav-link"> أخبار البلدية</a>
                <a href="About.php" class="nav-item nav-link active ">عن الموقع</a>
                <a href="Services.php" class="nav-item nav-link">الخدمات</a>
                <a href="Projects.php" class="nav-item nav-link">المشاريع</a>
                <a href="Feedback.php" class="nav-item nav-link">رأيك يهمنا</a>
                <a href="Contact.php" class="nav-item nav-link">اتصل بنا</a>
                    
        </div>
        <!--login and signup buttons-->

     
<?php
       if (isset($_SESSION['C_ID']) && isset($_SESSION['C_email'])) {
        ?>
    <a href="profile.php"><button type="button" class="btn btn-danger regbtn btn-lg m-1 " > <i class='fas fa-user-alt' style='font-size:24px;margin-left:2px;'></i>الحساب الشخصي </button></a>
        <a href="logout.php"><button type="button" class="btn btn-danger regbtn btn-lg m-1" >تسجيل خروج </button></a>


<?php }else{ ?>
   
    <a href="login.php"><button type="button" class="btn btn-danger regbtn btn-lg m-1" >تسجيل دخول </button></a>
        <a href="Signup.php"><button type="button" class="btn btn-danger regbtn btn-lg m-1" >إنشاء حساب</button></a>
        <?php }
    ?>
   
  
    
      



       
    
    </div>
    </nav>

<!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn mb-4">عن الموقع</h1>
                <a href="home.php" class="h4 text-white Arabic"> الصفحة الرئيسية</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="About.php" class="h4 text-white Arabic">عن الموقع</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s"
                            src="img/About-us-photo2.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h4 class="text-primary text-uppercase">بلديتك</h4>
                        <h1 class="display-5 mb-0">يعد موقعنا مرجعًا رئيسيًا للمواطنين والمقيمين في عدة بلديات، حيث يوفر خدمات متنوعة تلبي احتياجات الجميع.


                        </h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">رسالتنا</h4>
                    <p class="mb-4">
                        توفير منصة شاملة وموثوقة تربط المواطنين والمقيمين بعدة بلديات، بهدف تعزيز التواصل وتحسين جودة الحياة في هذه البلديات.</p>
                    <div class="row g-3">
                       
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s" style="margin-right:160px ; ">
                            <div class="bg-secondary d-flex flex-column justify-content-center text-center  "
                                style="height: 200px;">
                                <img src="img/logo2.jpeg" width="400px" height="250px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

        <!-- About Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                    <h5 class="text-primary text-uppercase" >عن الموقع</h5>
                    <h1 class="display-5 mb-0">التعريف بوقعنا</h1>
                </div>
                <div class="card slideInUp" style="width: 1300px;position: relative;align-items: center;box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);border-radius: 10px;">
                 
                    <div class="card-body" style="background-color:white ;border-radius:0px 0px 10px 10px ; ">
                      <p class="card-text" style="color: black;">يعد موقعنا مرجعًا رئيسيًا للمواطنين والمقيمين في عدة بلديات، حيث يوفر خدمات متنوعة تلبي احتياجات الجميع. من خلال الموقع، يمكن للمستخدمين الوصول إلى معلومات حول مشاريع البلديات المختلفة، مثل مشاريع البنية التحتية وتطوير المناطق السكنية وتحسين الخدمات العامة.
<br><br>
                        بالإضافة إلى ذلك، يمكن للمستخدمين استكشاف مجموعة واسعة من الخدمات التي يقدمها الموقع. تتضمن هذه الخدمات إدارة المخلفات والنظافة العامة، وإصلاح الطرقات وغيرها من الخدمات.
                        و يهدف الموقع إلى تسهيل حياة المستخدمين وتحسين جودة الحياة في هذه البلديات من خلال توفير هذه الخدمات.
                        <br> <br>                       
                        بالنسبة لتقييم خدمات البلديات، يتيح الموقع للمستخدمين تقديم تعليقاتهم وآرائهم حول الخدمات المقدمة. يمكن للمستخدمين تقديم ملاحظاتهم بشأن جودة الخدمات والمشاكل التي يواجهونها، وذلك من خلال نظام تعليقات سهل الاستخدام.
                        <br><br>       
                        بالإضافة إلى ذلك، يوفر الموقع أدوات للتواصل المباشر مع البلديات. يمكن للمستخدمين الاتصال بالبلديات عن طريق البريد الإلكتروني أو عن طريق رقم الهاتف، بالإضافة إلى معرفة موقع مكتب البلدية باستخدام خرائط جوجل.</p>
                    </div>
                  </div>
            </div>
        </div>
        <!-- About End -->
      
    <!--List of Polices start-->

    <div style="margin-right:30% ;">
        <a href="ListOfPolicies.php" class="btn btn-primary py-md-3 px-md-5"
            style="border-radius: 30px; ">سياسة الخصوصية

        </a>


        <a href="Terms.php"
            class="btn btn-primary py-md-3 px-md-5 ms-auto" style="border-radius: 30px; ">الشروط والأحكام</a>

        <a href="Q&A.php" class="btn btn-primary py-md-3 px-md-5 ms-auto ml-5"
            style="border-radius: 30px; ">الاسئلة المتكررة </a>
    </div>
    <!--List of Polices end-->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">روابط سريعة</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="home.php"><i
                                class="bi bi-arrow-left text-primary ms-2"></i>الصفحة الرئيسية</a>
                        <a class="text-light mb-2" href="About.php"><i
                                class="bi bi-arrow-left text-primary ms-2"></i>عن الموقع</a>
                        <a class="text-light mb-2" href="Services.php"><i
                                class="bi bi-arrow-left text-primary ms-2"></i>خدماتنا</a>
                     <a class="text-light mb-2" href="Projects.php"><i
                                class="bi bi-arrow-left text-primary ms-2"></i>مشاريعنا</a>
                        <a class="text-light mb-2" href="Contact.php"><i
                                class="bi bi-arrow-left text-primary ms-2"></i>اتصل بنا</a>
                        <a class="text-light mb-2" href="Feedback.php"><i
                                class="bi bi-arrow-left text-primary ms-2"></i>رأيك يهمنا</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">راوبط مهمة</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="home.php"><i
                                class="bi bi-arrow-left text-primary ms-2"></i>الصفحة الرئيسية</a>
                        <a class="text-light mb-2" href="About.php"><i
                                class="bi bi-arrow-left text-primary ms-2"></i>عن الموقع</a>
                        <a class="text-light mb-2" href="Services.php"><i
                                class="bi bi-arrow-left text-primary ms-2"></i>خدماتنا</a>
                        <a class="text-light mb-2" href="Projects.php"><i
                                class="bi bi-arrow-left text-primary ms-2"></i>مشاريعنا</a>
                                <a class="text-light mb-2" href="News.php"><i
                                    class="bi bi-arrow-left text-primary ms-2"></i>أخبار البلدية</a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">طرق التواصل</h3>
                    
                    <a class="text-light mb-2" href="Contact.html"><i
                        class="bi bi-arrow-left text-primary ms-2"></i>اتصل بنا</a>
           
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">لتبقى على تواصل</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2"
                            href="#"><i
                                class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2"
                            href="https://www.facebook.com/thamer.zawahra/"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2"
                            href="#"><i
                                class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2"
                            href="#"><i
                                class="fab fa-instagram fw-normal "></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-light py-4">
        <div class="container">
            <div class="row g-5">
                <div>
                    <p class="mb-md-0 Arabic" style="text-align: center;">&copy; <a class="text-white border-bottom ms-2"
                            href="home.php">بلديتك</a>جميع الحقوق محفوظة. </p>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="About.php" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!--Javascript -->

    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>