<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DoanWeb-LandingPage</title>
    <link rel="stylesheet" href="./public/css/landingpage.css?v=<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" href="./public/css/aos.css?v=<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=<?php echo time(); ?>" type="text/css">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css?v=<?php echo time(); ?>">
    
</head> 
<body>
    <header>
        <nav class="global-nav navbar navbar-expand-sm bg-dark text-white-50 flex-center">
            <div class="container">
                    <div class="left">
                            <a class="navbar-brand"><h2 class="logo display2">BRAND</h2></a>
                    </div>
                    <div class="right">
                        <ul class="utility-items nav">
                            <li class="nav-item">
                                    <!--điều hướng đến trang đăng nhập-->
                                    <a href="login.php" class="nav-link login">Tài khoản của tôi</a>
                            </li>
                           
                        </ul>
                    </div> 
            </div>
        </nav>
        <div class="main-nav navbar navbar-expand-md bg-transparent navbar-dark flex-center">
            <div class="container">
                <div class="left">
                        <div class="menu-toggle">
                             <div class="hamburger">
                             </div>
                             
                        </div>
                </div>
                <div class="right">
                    <div class="icon-search">
                            <div class="btn btn-search">
                                    <span class="fa fa-search"></span>
                            </div>
                            <div class="btn btn-close">
                                    <span class="fa fa-times"></span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!--carousel-->
        <div id="myCarousel" class="carousel slide border" data-ride="carousel">
          <!-- Indicators -->
          <!--
                   <ol class="carousel-indicators">
             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
             <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          -->
   
          <div class="carousel-inner">
             <div class="carousel-item active">
                <img class="d-block w-100" src="./public/css/image-folder/home-banner-1.png.imgw.1888.1888.jpeg" alt="Cat">
             </div>
             <div class="carousel-item">
                <img class="d-block w-100" src="./public/css/image-folder/home-hpb1-desktop.png.imgw.1888.1888.jpeg" alt="Lion">
             </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="./public/css/image-folder/dewey-pro-x-hpb-desktop.jpg.imgw.1888.1888.jpeg" alt="Lion">
             </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="./public/css/image-folder/hpb-hero-mice-desktop-alt.jpg.imgw.1888.1888.jpeg" alt="Lion">
             </div>
          <!-- Controls -->
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
       </div>
       <!--list ultilities-->
       <div class="list-ultility container-fluid">
         <div class="container flex-column">
           <div class="title flex-center">
             <h2 class="main-title">
                WEBSITE CHUYÊN VỀ CÁC PHỤ KIỆN ĐIỆN TỬ   
             </h2>
             <h5 class="sub-title ">
               Luôn mang lại cho khách hàng những sản phẩm chất lượng nhất.
             </h5> 
           </div>
              <div class="col-md-12 ">
                          <div id="product-utilities">
                              <div class="col-3 full-size">
                                  <div class="product-items mouse-item contain-img full-size">
                                      <a href="#" class="full-size"> 
                                        <p class="product-item-name">ÂM THANH TRÒ CHƠI</p>
                                        <img src="./public/css/image-folder/home-product-swatch-3.png.imgw.342.342.jpeg" alt="1">
                                        <button id="btn-muasam" class="btn-muasam-tainghe">MUA SẮM TAI NGHE</button>
                                        </a>
                                  </div>                               
                                </div>
                                <div class="col-3 full-size">
                                    <div class="product-items mouse-item contain-img full-size">
                                        <a href="#" class="full-size"> 
                                            <p class="product-item-name">CHUỘT CHƠI GAME</p>
                                            <img src="./public/css/image-folder/home-product-swatch-2.png.imgw.342.342.jpeg" alt="2">
                                            <button id="btn-muasam" class="btn-muasam-chuot">MUA SẮM CHUỘT</button>
                                          </a>
                                    </div>                               
                                  </div>
                                  <div class="col-3 full-size">
                                      <div class="product-items mouse-item contain-img full-size">
                                          <a href="#" class="full-size"> 
                                              <p class="product-item-name">BÀN PHÍM CHUYÊN DỤNG</p>
                                              <img src="./public/css/image-folder/home-product-swatch-1.png.imgw.342.342.jpeg" alt="3">
                                              <button id="btn-muasam" class="btn-muasam-banphim">MUA SẮM BÀN PHÍM</button>
                                            </a>
                                      </div>                               
                                  </div>
                                  <div class="col-3 full-size">
                                      <div class="product-items mouse-item contain-img full-size">
                                          <a href="#" class="full-size"> 
                                              <p class="product-item-name">LOA CHUYÊN DỤNG</p>
                                              <img src="./public/css/image-folder/speakers-483813_640.jpg" alt="4">
                                            </a>
                                            <button id="btn-muasam" class="btn-muasam-loa">MUA SẮM LOA</button>
                                      </div>                               
                                  </div>
                          </div>                        
                          </div>                                              
                    </div>
               </div>     
             </div>          
       </div>
       <div id="khoangtrang"></div>
     
       <section id="introduction">
        <div class="intro intro-headphone">
          <div class="headphone-content position" data-aos="fade-down">
            <h1 class="headphone-title">ÂM THANH TRÒ CHƠI</h1>
            <p class="headphone-subtitle">Mang đến cho người dùng những trải nghiệm chân thực, sống động vượt trội.</p>
            <a href="#">Mua sắm tất cả thiết bị âm thanh</a>
          </div>
        </div>
       </section>
       <section id="introduction">
        <div class="intro intro-mouse">
          <div class="mouse-content position" data-aos="fade-right">
            <h1 class="mouse-title">CHUỘT CHƠI GAME</h1>
            <p class="mouse-subtitle">Dẫn đầu xu hướng với thiết kế hiện đại từ kiểu dáng đến cảm ứng.</p>
            <a href="#">Mua sắm tất cả chuôt</a>
          </div>
        </div>
       </section>
       <section id="introduction">
        <div class="intro intro-keyboard">
          <div class="keyboard-content position" data-aos="fade-down-right">
            <h1 class="keyboard-title">BÀN PHÍM CHUYÊN DỤNG</h1>
            <p class="keyboard-subtitle"> Tốc độ-Độ chính xác-Độ bền được thiết kế hoàn hảo và có khả năng tùy chỉnh mạnh mẽ.</p>
            <a href="#">Mua sắm tất cả bàn phím</a>
          </div>
        </div>
       </section>
       <section id="introduction">
        <div class="intro intro-speaker">
          <div class="speaker-content position" data-aos="fade-left">
            <h1 class="speaker-title">LOA CHUYÊN DỤNG</h1>
            <p class="speaker-subtitle"> Tốc độ-Độ chính xác-Độ bền được thiết kế hoàn hảo và có khả năng tùy chỉnh mạnh mẽ.</p>
            <a href="#">Mua sắm tất cả loa</a>
          </div>
        </div>
       </section>
 
    </main>
    <footer>
      <div class="container-fluid">
        <div class="row bg-white ">
          <div class="col-md-4 text-dark">
            <h5 class="display5">
              Đồ án môn Phát Triển Ứng Dụng Web 
            </h5>
            <hr class="bg-dark">
            <p>
              Tên đề tài : Web bán thiết bị điện tử. 
            </p>
            <p>
              Số lượng thành viên nhóm : 2
            </p>
            <p>
              Giáo viên hướng dẫn : Thầy Vũ Minh Sang
            </p>
            <img src="https://img.icons8.com/doodle/48/000000/facebook-new.png">
            <img src="https://img.icons8.com/dusk/48/000000/instagram-new.png">
            <img src="https://img.icons8.com/dusk/48/000000/email.png">
            <img src="https://img.icons8.com/doodle/64/000000/skype.png">
          </div>
          <div class="col-md-4">
            <hr class="bg-dark">
            <h6 class="display6">
              Thành viên 1 
            </h6>
            <hr class="bg-dark">
            <p>
              Tên : Nguyễn Sỹ Cảnh Hưng
            </p>
            <p>
              MSSV : 17520545
            </p>
            <p>
              Nhóm Trưởng
            </p>          
          </div>
          <div class="col-md-4">
              <hr class="bg-dark">
              <h6 class="display6">
                Thành viên 2 
              </h6>
              <hr class="bg-dark">
              <p>
                Tên : Nguyễn Tấn Tài
              </p>
              <p>
                MSSV : 17520999
              </p>             
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="./public/js/aos.js"></script>
    <script type="text/javascript">
      AOS.init();
    </script>
</body>
</html>