<?php

session_start();
?>



<!DOCTYPE html>
<html dir="rtl">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title> FeedbackRES</title>


    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/report.css" rel="stylesheet" media="all">
    
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
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

  <!-- Template Stylesheet -->
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
                <a href="About.php" class="nav-item nav-link ">عن الموقع</a>
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

    <div class="page-wrapper  bg-white p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680 shadow-sm">
            <div class="card card-1 ms-3 " style="text-align: center;">
                <div class="card-heading-feedback-rec"></div>
                <div class="card-body" >
                    <h2 class="title" style="color:rgb(70, 249, 88)" >شكرا لك على تقييمك!</h2>
                    <h6>نحن نقدر لك الوقت الذي قضيته في موافاتنا بتعليقاتك.
                    <br><br>
                  
                    سنراجع ملاحظاتك ونأخذها في الاعتبار لتحسين خدماتنا.
                        <br><br>
                    </h6>
                    <div style="text-align:center ;">
                    <a href="home.php" class="btn btn-primary py-md-3 px-md-5 animated fadeInUp">الصفحة الرئيسية</a>
                </div>
                </div>
            </div>
        </div>
    </div>
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
<a href="FeedbackRES.php" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- Jquery JS-->
    <script src="vendor/jquery/report.jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
<!-- end document-->
