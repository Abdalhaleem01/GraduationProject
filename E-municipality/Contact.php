<?php

session_start();
?>




<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <title> اتصل بنا</title>
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
                <a href="Services.php" class="nav-item nav-link">الخدمات</a>
                <a href="Projects.php" class="nav-item nav-link ">المشاريع</a>
                <a href="Feedback.php" class="nav-item nav-link">رأيك يهمنا</a>
                <a href="Contact.php" class="nav-item nav-link active">اتصل بنا</a>
                    
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


    <!-- Contact Start -->

    <select id="myDropdown"  style="margin-right:45% ;margin-bottom:30px ;padding: 6px;width: 200px; font-size:20px ;"  onchange="showContent()">
 
        <option  value="">اختر بلديتك</option>
        <option value="1">بلدية بيرين</option>
        <option value="2">بلدية الهاشمية</option>
        <option value="3">بلدية الأزرق</option>
    
      </select>
     


                <!--contact 1 start-->
                <div id="content1" class="hidden">
                    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="container">
                            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                                <h5 class="text-primary text-uppercase" >اتصل بنا</h5>
                                <h1 class="display-5 mb-0">لا تتردد في الاتصال بنا</h1>
                            </div>
                            <div class="row g-5">
                                <div class="col-lg-7 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="bg-light rounded p-5">
                                        <form action="" method="POST">
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <input id="name" type="text" class="form-control border-0 px-4" placeholder="الاسم" style="height: 55px;">
                                                </div>
                                                <div class="col-6">
                                                    <input id="email" type="email" class="form-control border-0 px-4" placeholder="بريدك الإلكتروني" style="height: 55px;">
                                                </div>
                                                <div class="col-12">
                                                    <input id="subject" type="text" class="form-control border-0 px-4" placeholder="الموضوع" style="height: 55px;">
                                                </div>
                                                <div class="col-12">
                                                    <textarea id="message" class="form-control border-0 px-4 py-3" rows="8" placeholder="الرسالة"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 py-3" type="submit" value="submit">أرسل</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>  
                
                
                <div class="col-lg-5 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded p-5">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                           
                                <h5 class="mb-1 ms-2">موقع البلدية</h5>
                                <span><a href="https://goo.gl/maps/Wc5x84Aesa2GoURL6" style="text-decoration:none ;color:inherit">الأردن ,الزرقاء , شارع شفا بدران , بيرين  </a></span>
                            
                        
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                           
                                <h5 class="mb-1 me-2">البريد الإلكتروني</h5>

                                <a href="mailto:info@zm.gov.jo" style="color:inherit ;margin-right: 10px;" ><span>info@zm.gov.jo</span></a>
                           
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        
                                <h5 class="mb-1 me-3">اتصل بنا</h5>
                                <span style="margin-right:10px ;direction: ltr;">3910021</span>
                           
                        </div>
                        <div>
                            <iframe class="position-relative w-100"
                             src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13519.808168045905!2d35.9567309!3d32.0975818!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b62fdd7f8b441%3A0x7fce6e5af9fedbf0!2z2KjZhNiv2YrYqSDYqNmK2LHZitmGINin2YTYrNiv2YrYr9ip!5e0!3m2!1sar!2sjo!4v1685742078839!5m2!1sar!2sjo" 
                                frameborder="0" style="height: 230px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact 1 End -->
    </div>

  <!--contact 2 start-->
  <div id="content2" class="hidden">
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" >اتصل بنا</h5>
                <h1 class="display-5 mb-0">لا تتردد في الاتصال بنا</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded p-5">
                        <form action="" method="POST">
                            <div class="row g-3">
                                <div class="col-6">
                                    <input id="name" type="text" class="form-control border-0 px-4" placeholder="الاسم" style="height: 55px;">
                                </div>
                                <div class="col-6">
                                    <input id="email" type="email" class="form-control border-0 px-4" placeholder="بريدك الإلكتروني" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input id="subject" type="text" class="form-control border-0 px-4" placeholder="الموضوع" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea id="message" class="form-control border-0 px-4 py-3" rows="8" placeholder="الرسالة"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" value="submit">أرسل</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  


    <div class="col-lg-5 wow slideInUp" data-wow-delay="0.6s">
        <div class="bg-light rounded p-5">
            <div class="d-flex align-items-center mb-2">
                <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
               
                    <h5 class="mb-1 me-2">موقع البلدية</h5>
                    <span><a href="https://goo.gl/maps/LVVeohFSBbVtqZte6" style="text-decoration:none ;color:inherit;margin-right: 13px;">الأردن ,الزرقاء ,الهاشمية </a></span>
                
            
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
               
                    <h5 class="mb-1 me-2">البريد الإلكتروني</h5>

                    <a href="mailto:suggest@ hm.gov.jo" style="color:inherit ;margin-right: 10px;" ><span>suggest@ hm.gov.jo</span></a>
               
            </div>
            <div class="d-flex align-items-center mb-4">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
            
                    <h5 class="mb-1 me-3">اتصل بنا</h5>
                    <span style="margin-right:10px ;direction: ltr;">(05) 381 3268</span>
               
            </div>
            <div>
                <iframe class="position-relative w-100"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4575.830886540338!2d36.11839245622818!3d32.12726642979417!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b70ecfd3aa0bb%3A0x7c9d71d188f3867a!2z2KjZhNiv2YrYqSDYp9mE2YfYp9i02YXZitipINin2YTYrNiv2YrYr9ip!5e0!3m2!1sar!2sjo!4v1685742446970!5m2!1sar!2sjo" 
                    frameborder="0" style="height: 230px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
</div>
</div>





<!--contact 2 end-->
    </div>

    <!--contact 3 start-->
  <div id="content3" class="hidden">

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" >اتصل بنا</h5>
                <h1 class="display-5 mb-0">لا تتردد في الاتصال بنا</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded p-5">
                        <form action="" method="POST">
                            <div class="row g-3">
                                <div class="col-6">
                                    <input id="name" type="text" class="form-control border-0 px-4" placeholder="الاسم" style="height: 55px;">
                                </div>
                                <div class="col-6">
                                    <input id="email" type="email" class="form-control border-0 px-4" placeholder="بريدك الإلكتروني" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input id="subject" type="text" class="form-control border-0 px-4" placeholder="الموضوع" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea id="message" class="form-control border-0 px-4 py-3" rows="8" placeholder="الرسالة"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" value="submit">أرسل</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  


    <div class="col-lg-5 wow slideInUp" data-wow-delay="0.6s">
        <div class="bg-light rounded p-5">
            <div class="d-flex align-items-center mb-2">
                <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
               
                    <h5 class="mb-1 me-2">موقع البلدية</h5>
                    <span><a href="https://goo.gl/maps/Fewe3d4TPvuf6F4DA" style="text-decoration:none ;color:inherit">الأردن ,الزرقاء , الأزرق الشمالي  </a></span>
                
            
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
               
                    <h5 class="mb-1 me-2 ms-1">البريد الإلكتروني</h5>

                    <a href="mailto:newazraqmunicipality@gmail.com" style="color:inherit ;" ><span>newazraqmunicipality@gmail.com</span></a>
               
            </div>
            <div class="d-flex align-items-center mb-4">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
            
                    <h5 class="mb-1 me-3">اتصل بنا</h5>
                    <span style="margin-right:10px ;direction: ltr;">(05) 383 4577
                        </span>
               
            </div>
            <div>
                <iframe class="position-relative w-100"
             src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d16232.63818915391!2d36.85553196691909!3d31.881009522428013!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151af1a994bcb6ed%3A0x5b0d2a3487d1a228!2z2KjZhNiv2YrYqSDYp9mE2KPYstix2YI!5e0!3m2!1sar!2sjo!4v1685742725968!5m2!1sar!2sjo" 
                    frameborder="0" style="height: 230px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
</div>
</div>



<!--contact 3 end-->

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
    <a href="Contact.php" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!--  Javascript -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>