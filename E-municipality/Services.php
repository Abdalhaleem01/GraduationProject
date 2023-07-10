<?php

session_start();
?>

<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <title>الخدمات</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


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

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

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
                <a href="About.php" class="nav-item nav-link  ">عن الموقع</a>
                <a href="Services.php" class="nav-item nav-link active">الخدمات</a>
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
    <div class="container-fluid bg-primary p-5 hero-header-services mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">خدماتنا</h1>
                <a href="home.php" class="h4 text-white Arabic">الصفحة الرئيسية</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="Services.php" class="h4 text-white Arabic">خدماتنا</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Services Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" >خدماتنا</h5>
                <h1 class="display-5 mb-0">ملتزمون بخدمة مجتمعنا بكل فخر</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class=" d-block display-1 fw-normal text-secondary mb-3"><img src="img/services-photo3.png" width="140px" height="140px" alt=""></i>
                            <h5 class="text-primary mb-2">تقديم شكوى</h5>
                            <h3 class="mb-3">حفريات مخالفة</h3>
                            
                            <?php
       if (isset($_SESSION['C_ID']) && isset($_SESSION['C_email'])) {
        ?>
                        <a href="report form.php">تقديم التقرير<i class="bi bi-arrow-right me-2"></i></a>
                        <?php }else{ ?>
                            <a href="login.php">تقديم التقرير<i class="bi bi-arrow-right me-2"></i></a>
                            <?php }
    ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="flaticon-garbage d-block display-1 fw-normal text-secondary mb-3"><img src="img/services-photo2.png" width="140px" height="140px" alt=""></i>
                            <h5 class="text-primary mb-2">تقديم شكوى</h5>
                            <h3 class="mb-3">تراكم النفايات</h3>
                            
                           
                            <?php
       if (isset($_SESSION['C_ID']) && isset($_SESSION['C_email'])) {
        ?>
                        <a href="report form.php">تقديم التقرير<i class="bi bi-arrow-right me-2"></i></a>
                        <?php }else{ ?>
                            <a href="login.php">تقديم التقرير<i class="bi bi-arrow-right me-2"></i></a>
                            <?php }
    ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="flaticon d-block display-1 fw-normal text-secondary mb-3"><img src="img/services-photo4.png" width="140px" height="140px" alt=""></i>
                            <h5 class="text-primary mb-2">تقديم شكوى</h5>
                            <h3 class="mb-3">مشكلة أخرى</h3>
                            
                            <?php
       if (isset($_SESSION['C_ID']) && isset($_SESSION['C_email'])) {
        ?>
                        <a href="report form.php">تقديم التقرير<i class="bi bi-arrow-right me-2"></i></a>
                        <?php }else{ ?>
                            <a href="login.php">تقديم التقرير<i class="bi bi-arrow-right me-2"></i></a>
                            <?php }
    ?>
                        </div>
                    </div>
                </div>
             
              
                
            </div>
        </div>
    </div>
    <!-- Services End -->



    <!-- Citizens' opinions Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" >آراء المواطنين</h5>
                <h1 class="display-5 mb-0">آراء المواطنين بخدماتنا</h1>
            </div>
            <div class="owl-carousel testimonial-carousel " style="direction: ltr;">
                <div class="text-center pb-4 " >
                    
                    <div class="testimonial-text bg-light rounded-3 p-4" style="margin-top:80px ;">
                        <p class="mt-3">شكرا للبلدية على استجابتها السريعة وفتح الطريق المغلق. لقد جعل حياتي أسهل ووفر لي الكثير من الوقت والجهد 
                        </p>
                        <h4 class="text-truncate pb-1">محمد علي</h4>
                      
                    </div>
                </div>
                <div class="text-center  pb-4">
                   
                    <div class="testimonial-text bg-light rounded-3 p-4" style="margin-top:80px ;">
                        <p class="mt-3">طلبت تجديد رخصة البناء من البلدية ، وتم إنجاز المعاملة بشكل سريع وفعال. كانت العملية سهلة وسلسة ، وأنا ممتن لاهتمام البلدية بتلبية احتياجات المواطنين
                        </p>
                        <h4 class="text-truncate">محمود عمر</h4>
                      
                    </div>
                </div>
                <div class="text-center  pb-4">
                   
                    <div class="testimonial-text bg-light rounded-3 p-4" style="margin-top:80px ;">
                        <p class="mt-3">طلبت خدمة إزالة القمامة من منزلي ، وسارعت البلدية في الاستجابة للطلب وتنفيذه. أنا سعيد جدًا بالخدمة المقدمة والمستوى العالي من الاحتراف الذي يقدمه الموظفون 
                        </p>
                        <h4 class="text-truncate">عبدالله محمود</h4>
                      
                    </div>
                </div>
                <div class="text-center  pb-4">
                   
                    <div class="testimonial-text bg-light rounded-3 p-4" style="margin-top:80px ;">
                        <p class="mt-3">لقد تأثرت بمهنية عمال البلدية الذين عملوا على فتح الطريق. لم يستغرق الأمر وقتاً طويلاً وقدموا خدمة ممتازة بكل احترافهم
                        </p>
                        <h4 class="text-truncate">سارة حسين</h4>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Citizens' opinions End -->
    

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
<a href="Services.php" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>