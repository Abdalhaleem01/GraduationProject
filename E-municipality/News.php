
<?php

session_start();
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <title>أخبار البلدية</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    

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

    <!--Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
      h5{
        font-family: 'Cairo', sans-serif;
        font-weight: bold;
        text-align: right;
        line-height:30px ;
      }
        p{
          font-family: 'Cairo', sans-serif;
     
          text-align: right;
        }
        .card{
          border-radius: 10px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

    </style>
    
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
                <a href="News.php" class="nav-item nav-link active"> أخبار البلدية</a>
                <a href="About.php" class="nav-item nav-link  ">عن الموقع</a>
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
    <div class="container-fluid bg-primary p-5 hero-news mb-5" >
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">أخبار البلدية</h1>
                <a href="home.php" class="h4 text-white Arabic">الصفحة الرئيسية</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="News.php" class="h4 text-white Arabic">أخبار البلدية</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

   <!--news start-->
 
   <select id="myDropdown"  style="margin-right:45% ;margin-bottom:30px ;padding: 6px;width: 200px; font-size:20px ;"  onchange="showContent()">
 
    <option  value="">اختر بلديتك</option>
    <option value="1">بلدية بيرين</option>
    <option value="2">بلدية الهاشمية</option>
    <option value="3">بلدية الأزرق</option>

  </select>
  
  <div id="content1" class="hidden">
    <!-- Content for Option 1 -->
    <div class="row row-cols-1 row-cols-md-2 g-4 ms-auto me-auto" >
      <div class="col wow fadeInUp" data-wow-delay="0.1s" >
        <div class="card" >
          <img src="img/news1.jpg" class="card-img-top" alt="news 1 photo" >
          <div class="card-body">
            <h5 class="card-title" style="text-align: right;">عطوفة رئيس بلدية بيرين السيد وهبي الزواهرة يبارك بزفاف ولي العهد
              نفرح بالحسين</h5>
          
          
          </div>
        </div>
      </div>
      <div class="col wow fadeInUp" data-wow-delay="0.3s">
        <div class="card">
          <img src="img/news2.jpg" class="card-img-top" alt="news 2 photo">
          <div class="card-body">
            <h5 class="card-title"> يتقدم عطوفة رئيس بلدية بيرين السيد وهبي الزواهرة واعضاء المجلس البلدي وموظفي بلدية بيرين من المهندس كمال الخلايلة مدير الأشغال الهندسية في بلدية بيرين بأحر التعازي والمواساة لوفاة شقيقة الدكتور أحمد عبدالرحيم الخلايلة رحمه الله واسكنه فسيح جناته
              إنا لله وإنا إليه راجعون</h5>
           
          </div>
        </div>
      </div>
      <div class="col wow fadeInUp" data-wow-delay="0.6s">
        <div class="card">
          <div id="myCarousel" class="carousel slide" data-ride="carousel" 
         >
            <!-- Indicators -->
            <ol class="carousel-indicators" >
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Slides -->
            <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
              <div class="carousel-item active" >
                <img src="img/news3.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news5.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news4.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
              </div>
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" >
             <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
             ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div class="card-body">
            <h5 class="card-title">بتوجيهات عطوفة رئيس بلدية بيرين السيد وهبي الزواهرة ابو ثامر تزينت بلدية بيرين بمناسبة الأعياد الوطنية وبمناسبة زفاف سمو ولي العهد الأمير حسين
              أدام الله الأفراح على وطني بقيادة جلالة الملك عبدالله الثاني ابن الحسين
             حيث قامت دائرة الأشغال الهندسية /قسم الصيانة وقسم الحركة بتزين الدوائر الحكومية بالإعلام احتفالا بهذه المناسبات الوطنية</h5>
         
              
          </div>
        </div>
      </div>
      <div class="col wow fadeInUp" data-wow-delay="0.6s">
        <div class="card">
          <img src="img/news6.jpg" class="card-img-top" alt="news 4 photo"   class="carousel-item" style="max-height: 300px;max-width:300px ;margin: 0 auto; ">
          <div class="card-body">
            
            <h5 class="card-title">  يتقدم عطوفة رئيس بلدية بيرين السيد وهبي الزواهرة ابو ثامر وأعضاء المجلس البلدي وموظفي بلدية بيرين بأسمى آيات التهنئة في يوم الاستقلال وتجديد البيعة للقائد المفدى الملك عبدالله الثاني ابن الحسين المعظم وولي عهده الأمين وتلقي التحية على أردن المجد والتاريخ
              كل عام والوطن وقائد الوطن بألف خير 
              كل عام واردننا مستقل ويعانق مجد السماء
              كل عامٍ وانتم بخير</h5>
          
          
          </div>
        </div>
      </div>
    </div> 
    </div>
   
  
  <div id="content2" class="hidden">
    <!-- Content for Option 2 -->
    <div class="row row-cols-1 row-cols-md-2 g-4 ms-auto me-auto" >

      <div class="col wow fadeInUp" data-wow-delay="0.3s">
        <div class="card">
          <div id="myCarousel2" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" >
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Slides -->
            <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
              <div class="carousel-item active" >
                <img src="img/news7.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news8.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news9.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
              </div>
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev" >
             <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
             ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div class="card-body">
            <h5 class="card-title">بتوجيهات عطوفة رئيس بلدية بيرين السيد وهبي الزواهرة ابو ثامر تزينت بلدية بيرين بمناسبة الأعياد الوطنية وبمناسبة زفاف سمو ولي العهد الأمير حسين
              أدام الله الأفراح على وطني بقيادة جلالة الملك عبدالله الثاني ابن الحسين
             حيث قامت دائرة الأشغال الهندسية /قسم الصيانة وقسم الحركة بتزين الدوائر الحكومية بالإعلام احتفالا بهذه المناسبات الوطنية.</h5>
         
              
          </div>
        </div>
      </div>
  
 

    <div class="col wow fadeInUp" data-wow-delay="0.1s" >
      <div class="card" >
        <div id="myCarousel3" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Slides -->
          <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
            <div class="carousel-item active" >
              <img src="img/news10.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news11.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news12.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
            </div>
          </div>
      
          <!-- Controls -->
          <a class="carousel-control-prev" href="#myCarousel3" role="button" data-slide="prev" >
           <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
           ></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel3" role="button" data-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
        <div class="card-body">
          <h5 class="card-title" style="text-align: right;">مندوباً عن رئيس بلدية الهاشمية الجديدة عبدالرحيم القلاب العموش رعى نائبه محمود علي المشاقبة مساء اليوم الاربعاء 2023/5/31 حفل تخريج روضة سنافر الهاشمية .
           
             </h5>
        
        
        </div>
      </div>
    </div>


    <div class="col wow fadeInUp" data-wow-delay="0.6s">
      <div class="card">
        <img src="img/news13.jpg" class="card-img-top" alt="news 4 photo"  class="carousel-item" style="max-height: 300px;max-width:300px ;margin: 0 auto; ">
        <div class="card-body">
          
          <h5 class="card-title"> #نفرح بالحسين
               </h5>
        
        
        </div>
      </div>
    </div>

    <div class="col wow fadeInUp" data-wow-delay="0.6s">
      <div class="card">
        <div id="myCarousel4" class="carousel slide" data-ride="carousel" 
       >
          <!-- Indicators -->
          <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Slides -->
          <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
            <div class="carousel-item active" >
              <img src="img/news14.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news15.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news16.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
            </div>
          </div>
      
          <!-- Controls -->
          <a class="carousel-control-prev" href="#myCarousel4" role="button" data-slide="prev" >
           <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
           ></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel4" role="button" data-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
        <div class="card-body">
          <h5 class="card-title">بمناسبة عيد الاستقلال 77 وتحت رعاية رئيس بلدية الهاشمية الجديدة عبدالرحيم القلاب العموش أقيمت مساء اليوم الخميس 2023/5/25 على ملعب البلدية بمنطقة السخنة مباراة كرة قدم  جمعت فريقي قدامى لواء الهاشمية و قدامى أمانة عمان .
            وفي نهاية اللقاء سلم راعي الحفل الميداليات والكؤوس والدروع على مستحقيها .
          </h5>
       
            
        </div>
      </div>
    </div>








    </div>


<!--end content 2 -->
  </div>
 

  
  <div id="content3" class="hidden">
    <!-- Content for Option 3 -->
    <div class="row row-cols-1 row-cols-md-2 g-4 ms-auto me-auto" >

      <div class="col wow fadeInUp" data-wow-delay="0.3s">
        <div class="card">
          <div id="myCarousel5" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" >
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Slides -->
            <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
              <div class="carousel-item active" >
                <img src="img/news17.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news18.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news19.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
              </div>
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel5" role="button" data-slide="prev" >
             <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
             ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel5" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div class="card-body">
            <h5 class="card-title">بلدية الأزرق تشارك الاردن فرحته

            
             </h5>
         
              
          </div>
        </div>
      </div>
  
 

    

    <div class="col wow fadeInUp" data-wow-delay="0.6s">
      <div class="card">
        <img src="img/news20.jpg" class="card-img-top" alt="news 4 photo"  >
        <div class="card-body">
          
          <h5 class="card-title">اعلان نتيجة الدراسة الفنية لعطاء شراء وتوريد كابسة سعة ١٢م
               </h5>
        
        
        </div>
      </div>
    </div>

  
    <div class="col wow fadeInUp" data-wow-delay="0.6s">
      <div class="card">
        <img src="img/news21.jpg" class="card-img-top" alt="news 4 photo"  class="carousel-item" style="max-height: 300px;max-width:300px ;margin: 0 auto; ">
        <div class="card-body">
          
          <h5 class="card-title">#عيد_الاستقلال 77
               </h5>
        
        
        </div>
      </div>
    </div>


    <div class="col wow fadeInUp" data-wow-delay="0.6s">
      <div class="card">
        <img src="img/news22.jpg" class="card-img-top" alt="news 4 photo"  class="carousel-item" style="max-height: 300px;max-width:300px ;margin: 0 auto; ">
        <div class="card-body">
          
          <h5 class="card-title">تهنئة بمناسبة عيد العمال العالمي
               </h5>
        
        
        </div>
      </div>
    </div>


    </div>






    <!--end content 3-->
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
    <a href="News.php" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!--Javascript -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>