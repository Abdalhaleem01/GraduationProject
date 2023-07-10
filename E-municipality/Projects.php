<?php

session_start();
?>


<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <title>المشاريع</title>
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
                <a href="News.php" class="nav-item nav-link"> أخبار البلدية</a>
                <a href="About.php" class="nav-item nav-link  ">عن الموقع</a>
                <a href="Services.php" class="nav-item nav-link">الخدمات</a>
                <a href="Projects.php" class="nav-item nav-link active">المشاريع</a>
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
    <div class="container-fluid bg-primary p-5 hero-projects mb-5" >
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">مشاريعنا</h1>
                <a href="home.php" class="h4 text-white Arabic">الصفحة الرئيسية</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="Projects.php" class="h4 text-white Arabic">مشاريعنا</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

   <!--Projects start-->

   <select id="myDropdown"  style="margin-right:45% ;margin-bottom:30px ;padding: 6px;width: 200px; font-size:20px ;"  onchange="showContent()">
 
    <option value="">اختر بلديتك</option>
    <option value="1">بلدية بيرين</option>
    <option value="2">بلدية الهاشمية</option>
    <option value="3">بلدية الأزرق</option>

  </select>
  
  <div id="content1" class="hidden">
    <!-- Content for Option 1 -->
    <div class="row row-cols-1 row-cols-md-2 g-4 ms-auto me-auto" >

     
      <div class="col wow fadeInUp" data-wow-delay="0.6s">
        <div class="card">
          <div id="myCarousel6" class="carousel slide" data-ride="carousel" 
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
                <img src="img/news23.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news24.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news25.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
              </div>
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel6" role="button" data-slide="prev" >
             <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
             ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel6" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div class="card-body">
            <h5 class="card-title">اغلاق طريق "مرحب - مدخل الرياض"
              بتوجيهات من عطوفة رئيس بلدية بيرين السيد وهبي الزواهرة قامت كوادر دائرة الأشغال الهندسية / قسم الصيانة والحركة بالتعامل مع الحالة الجوية التي نتج عنها انهيارات وجمعات للمياه حيث تم ابعاد مسار المياه عن طريق مرحب _ مدخل الرياض باتجاه العبارة وتنظيف الطرق بواسطة كوادر البلدية الأشاوس بالإضافة لتنظيف الاتربة والحجارة وإبعاد المياه عن جانب أحد البيوت في منطقة الرياض  </h5>
              <p style="font-size:17px ;">29/5/2023</p>
              
          </div>
        </div>
      </div>
      <div class="col wow fadeInUp" data-wow-delay="0.6s">
        <div class="card">
          <div id="myCarousel7" class="carousel slide" data-ride="carousel" 
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
                <img src="img/news26.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news27.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news28.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
              </div>
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel7" role="button" data-slide="prev" >
             <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
             ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel7" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            
            <h5 class="card-title"> نظمت عمادة شؤون الطلبة في جامعة الزرقاء/ شعبة النشاط الثقافي والفني والهيئات الطلابية- نادي اللغة العربية ومجلس الطلبة، حملة نظافة وطنية تحت شعار: "بسواعدنا.. نحمي بيئتنا" تهدف إلى المحافظة على البيئة، بالتعاون مع بلدية بيرين، وذلك يوم الاثنين الموافق (2023/5/22)، شارك فيها مجموعة من طلبة الجامعة، برفقة مشرفين من عمادة شؤون الطلبة.
              بدأت بزيارة إلى بلدية بيرين، وقد كان في استقبالهم عطوفة رئيس البلدية وهبي الزواهرة حيث رحّب بهم وأشاد باندفاعهم وحماسهم وحرصهم على نظافة بيئتهم، كما أشاد بجهود جامعة الزرقاء واهتمامها الدائم بمثل هذه الحملات، برعاية رئيس مجلس شركة الزرقاء للتعليم والاستثمار الدكتور محمود أبو شعيرة، ورئيس الجامعة الأستاذ الدكتور نضال الرمحي. 
              وقال عميد شؤون الطلبة الأستاذ الدكتور ماجد مساعده إن هذه الحملة تأتي في إطار الخطة الوطنية للتوعية البيئية التي أطلقتها وزارة البيئة، وتعزيز مبدأ التشاركية مع الجهات المعنية في المحافظة على البيئة للحد من ظاهرة الإلقاء العشوائي للنفايات، وأكد على أن العمادة تدعم الأنشطة اللامنهجية المختلفة باستمرار، وتشجع الطلبة على المشاركة فيها، إذ إنها تنمي روح التعاون والعمل الجماعي لديهم، وتعزز الانتماء للوطن.
              ثم توجه الطلبة المشاركون إلى منتزه الأمير هاشم ، وبدأوا بحملة نظافة واسعة، حيث أمّنت لهم بلدية بيرين الوسائل والأدوات والمعدات اللازمة، وتعاونوا على إعادة النظافة إلى المنتزه وتجميله، وأبدوا سعادتهم واستعدادهم دومًا للقيام بمثل هذه المبادرات الوطنية.
             </h5>
          
             <p style="font-size:17px ;">24/5/2023</p>
          </div>
        </div>
      </div>


      <div class="col wow fadeInUp" data-wow-delay="0.3s">
        <div class="card">
          <div id="myCarousel8" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" >
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Slides -->
            <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
              <div class="carousel-item active" >
                <img src="img/news29.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news30.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news31.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
              </div>
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel8" role="button" data-slide="prev" >
             <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
             ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel8" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div class="card-body">
            <h5 class="card-title">بايعاز من عطوفة رئيس بلدية بيرين السيد وهبي الزواهرة وبإشراف مباشر من عطوفته تم بناء ودهان حجر كندرين الجزر الوسطية ودوار ابو خشيبة من قبل ( مديرية الأشغال الهندسية - قسم الصيانة ) بالإضافة للتنسيق مع عضو مجلس بلدي صروت وآراء المجتمع المحلي في منطقة صروت</h5>
            <p style="font-size:17px ;">20/3/2023</p>
              
          </div>
        </div>
      </div>
  
      <div class="col wow fadeInUp" data-wow-delay="0.3s">
        <div class="card">
          <div id="myCarousel9" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" >
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Slides -->
            <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
              <div class="carousel-item active" >
                <img src="img/news32.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news33.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news34.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
              </div>
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel9" role="button" data-slide="prev" >
             <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
             ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel9" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div class="card-body">
            <h5 class="card-title">بإيعاز من عطوفة رئيس بلدية بيرين السيد وهبي الزواهرة
              تم دهان الجدران الاسمنتية والاطاريف من قبل ( مديرية الأشغال الهندسية - قسم الصيانة )
              بعد العبث وكتابة كلمات غير لائقه
              كما نتمى من الاخوه الكرام المحافظة على نظافة الجزر والاطاريف وعدم الكتابه عليها لنكون مثالا يحتذى به </h5>
         
              <p style="font-size:17px ;">27/2/2023</p>
          </div>
        </div>
      </div>
  




    </div> 



    <!--end con 1-->
    </div>
   
  
  <div id="content2" class="hidden">
    <!-- Content for Option 2 -->
    <div class="row row-cols-1 row-cols-md-2 g-4 ms-auto me-auto" >


    <div class="col wow fadeInUp" data-wow-delay="0.1s" >
      <div class="card" >
        <div id="myCarousel10" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Slides -->
          <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
            <div class="carousel-item active" >
              <img src="img/news35.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news36.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news37.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
            </div>
          </div>
      
          <!-- Controls -->
          <a class="carousel-control-prev" href="#myCarousel10" role="button" data-slide="prev" >
           <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
           ></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel10" role="button" data-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
        <div class="card-body">
          <h5 class="card-title" style="text-align: right;"> لليوم الرابع على التوالي تستمر كوادر بلدية الهاشمية الجديدة بتنظيف مجاري الاودية والعبارات وجوانب الطرق في منطقة ابو الزيغان ودوقرة وام الصليح وغريسا .
           
             </h5>

             <p style="font-size:17px ;">1/6/2023</p>
        
        
        </div>
      </div>
    </div>


    <div class="col wow fadeInUp" data-wow-delay="0.1s" >
      <div class="card" >
        <div id="myCarousel11" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Slides -->
          <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
            <div class="carousel-item active" >
              <img src="img/news38.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news39.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news40.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
            </div>
          </div>
      
          <!-- Controls -->
          <a class="carousel-control-prev" href="#myCarousel11" role="button" data-slide="prev" >
           <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
           ></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel11" role="button" data-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
        <div class="card-body">
          <h5 class="card-title" style="text-align: right;"> بتوجيهات من رئيس بلدية الهاشمية الجديدة عبدالرحيم القلاب العموش نفذت كوادر البلدية بمنطقة ام الصليح وغريسا أعمال تنظيف وازالة الانقاض للمنطقة المحيطة بمقبرة غريسا ، فضلاً عن استمرار تنظيف مجاري الاودية والعبارات ولليوم الثالث على التوالي نتيجة الاحوال الجوية الاخيرة بمناطق ابو الزيغان والسخنة وام الصليح وغريسا .
           
             </h5>
        
             <p style="font-size:17px ;">31/5/2023</p>
        </div>
      </div>
    </div>

    
    <div class="col wow fadeInUp" data-wow-delay="0.1s" >
      <div class="card" >
        <div id="myCarousel12" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Slides -->
          <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
            <div class="carousel-item active" >
              <img src="img/news41.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news42.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news43.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
            </div>
          </div>
      
          <!-- Controls -->
          <a class="carousel-control-prev" href="#myCarousel12" role="button" data-slide="prev" >
           <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
           ></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel12" role="button" data-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
        <div class="card-body">
          <h5 class="card-title" style="text-align: right;"> بدأت كوادر قسم الصيانة في بلدية الهاشمية الجديدة بتنفذ اعمال دهان لاطاريف الشارع الرئيسي، بايعاز من رئيس البلدية عبدالرحيم القلاب العموش.
            وبين العموش ان هذا العمل يأتي ضمن استدامة صيانة هذا الشارع الذي يشهد حركة سير كثيفة، ما يتطلب عمل دائم بإدخال التحسينات عليه.
           
             </h5>
             <p style="font-size:17px ;">22/5/2023</p>
        
        </div>
      </div>
    </div>

   
    <div class="col wow fadeInUp" data-wow-delay="0.1s" >
      <div class="card" >
        <div id="myCarousel13" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Slides -->
          <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
            <div class="carousel-item active" >
              <img src="img/news44.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news45.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
            </div>
            <div class="carousel-item">
              <img src="img/news46.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
            </div>
          </div>
      
          <!-- Controls -->
          <a class="carousel-control-prev" href="#myCarousel13" role="button" data-slide="prev" >
           <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
           ></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel13" role="button" data-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
        <div class="card-body">
          <h5 class="card-title" style="text-align: right;"> أوعز رئيس بلدية الهاشمية الجديدة عبدالرحيم القلاب العموش إلى الكوادر المختصة بتنفذ حملة رش دخاني وسائل واسعة مع دخول فصل الصيف .
            ووجه العموش كوادر  البلدية إلى استعمال كافة الآليات اللازمة لحملة الرش الدخاني في مختلف مناطق وأحياء البلدية وبما يضمن الحد من انتشار الناموس والحشرات .
            وتستمر الحملة وبشكل يومي لتغطي جميع الاحياء والتجمعات السكانية .
           
             </h5>
             <p style="font-size:17px ;">15/5/2023</p>
        
        
        </div>
      </div>
    </div>





    </div>


<!--end content 2 -->
  </div>
 

  
  <div id="content3" class="hidden">
    <!-- Content for Option 3 -->
    <div class="row row-cols-1 row-cols-md-2 g-4 ms-auto me-auto" >
 
      <div class="col wow fadeInUp" data-wow-delay="0.1s" >
        <div class="card" >
          <div id="myCarousel14" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" >
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Slides -->
            <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
              <div class="carousel-item active" >
                <img src="img/news47.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news48.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news49.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
              </div>
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel14" role="button" data-slide="prev" >
             <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
             ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel14" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div class="card-body">
            <h5 class="card-title" style="text-align: right;"> بناء على توجيهات معالي نائب رئيس الوزراء ووزير الادارة المحلية توفيق باشا كريشان قام كل من عطوفة المهندس حسين مهيدات الأمين العام للشؤون الفنية وعطوفة الدكتور نضال العدوان الأمين العام للشؤون المالية والادارية بزيارة تفقدية إلى بلدية الأزرق حيث كان في استقبالهم سعادة رئيس البلدية يحيى زين الدين  وعضو المجلس البلدي السيد أنور سويد وفريق غرفة الطوارئ في البلدية وجاءت هذه الزيارة بعد ان داهمت السيول منطقة الازرق مساء الأمس نظرا لتأثر المنطقة بالمنخفض الجوي .
              حيث طالب رئيس البلدية بدعم فوري من الوزارة ليتسنى للبلدية تجاوز هذه المرحلة ومن جهته ابدى كل من الأمناء العامين للوزارة دعمهم للبلدية .
             
               </h5>
               <p style="font-size:17px ;">26/3/2023</p>
          
          
          </div>
        </div>
      </div>
  
 

    
      <div class="col wow fadeInUp" data-wow-delay="0.1s" >
        <div class="card" >
          <div id="myCarousel15" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" >
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Slides -->
            <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
              <div class="carousel-item active" >
                <img src="img/news50.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news51.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news52.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
              </div>
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel15" role="button" data-slide="prev" >
             <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
             ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel15" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div class="card-body">
            <h5 class="card-title" style="text-align: right;"> بامر من رئيس بلدية الأزرق وضمن خطة الطوارئ التي تم اعدادها سابقا للبلدية بالتعامل مع المنخفضات الجوية وتوفير الاليات لمساعدة المواطنين التي تقطعت بهم سبل السير على الطرق شاركت كوادر بلدية الازرق وبالتعاون مع مركز دفاع مدني الأزرق بأنقاض المواطنين الذين تأثروا بمداهمة المياه لمنازلهم بالاضافة إلى تجمع المياه على الطرق الداخلية والخارجية .
              علما ان رئيس البلدية وبتوجيه مباشر إلى رئيس غرفة الطوارئ في البلدية على تقديم العون والمساعدة الى كافة المواطنين في المنطقة والاستجابة إلى كافة المكالمات والملاحظات  الواردة إلى غرف الطوارئ التابعة للبلدية .
              وحذر رئيس البلدية السيد يحيى زين الدين كافة الاخوة المواطنين من عدم الاقتراب من مجاري السيول والأودية وذلك حفاظا على سلامة الجميع .
             
               </h5>
               <p style="font-size:17px ;">25/3/2023</p>
          
          
          </div>
        </div>
      </div>
  
 

  
      <div class="col wow fadeInUp" data-wow-delay="0.1s" >
        <div class="card" >
          <div id="myCarousel16" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" >
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Slides -->
            <div class="carousel-inner" style=" text-align: center;" style=" max-height: 300px;margin: 0 auto;">
              <div class="carousel-item active" >
                <img src="img/news53.jpg" alt="Photo 1" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news54.jpg" alt="Photo 2" style=" max-height: 300px;margin: 0 auto;">
              </div>
              <div class="carousel-item">
                <img src="img/news55.jpg" alt="Photo 3" style=" max-height: 300px;margin: 0 auto;">
              </div>
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel16" role="button" data-slide="prev" >
             <span class="carousel-control-prev-icon" aria-hidden="true"style="  width: 30px;background-color:  rgb(49, 131, 225); " 
             ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel16" role="button" data-slide="next" >
              <span class="carousel-control-next-icon" aria-hidden="true" style="  width: 30px;background-color:  rgb(49, 131, 225); "></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div class="card-body">
            <h5 class="card-title" style="text-align: right;">من خلال اعلان سعادة رئيس بلدية الأزرق الجديدة السيد يحيى زين الدين فتح غرفة الطوارئ بسبب تأثر المملكة بالمنخفض الجوي فقد تعاملت كوادر بلدية الازرق في غرفة الطوارئ مع كافة الملاحظات والطلبات الواردة إليها ومن جهة اخرى فقد اصدر  رئيس البلدية تعليماته إلى غرفة الطوارئ في البلدية بعدم التواني عن تقديم اي طلب مساعدة من اي اتصال وارد لهم  وفتح مركز ايواء لمن تقطع بهم السبل . وحذرت البلدية بضرورة  الابتعاد عن مجاري السيول والاودية وعدم الاقتراب من السدود والمناطق المنخفضة . ونأمل السلامة للجميع 
               </h5>
               <p style="font-size:17px ;">14/3/2023</p>
          
          
          </div>
        </div>
      </div>
  
 




    </div>






    <!--end content 3-->
  </div>
  

  
   <!--projects end-->

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
    <a href="Projects.php" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

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