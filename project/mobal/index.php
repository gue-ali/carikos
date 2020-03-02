<!doctype html>
<html lang="en">

  <head>
    <title>CARIKOS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php">CARIKOS</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="about.php" class="nav-link">About</a></li>
                  <li><a href="contact.php" class="nav-link">Contact</a></li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Login
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="penyewa.php">Penyewa</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="daftarpemilik.php">Pemilik</a>
                      </div>
                  </li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/bg.jpeg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-2">Bingung mau cari kos di Jember?</h1>
              <p>Dapatkan info kos murah serta info kos lainnya di Carikos</p>
              <p><a href="property.php" class="btn btn-primary text-white px-4 py-3">Yuk cari kosmu sekarang!</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

    <form action="">
      <div class="realestate-filter">
        <div class="container">
          <div class="realestate-filter-wrap nav">
            <a href="#for-rent" class="active" data-toggle="tab" id="rent-tab" aria-controls="rent" aria-selected="true">Kategori</a>
            <a href="#for-sale" class="" data-toggle="tab" id="sale-tab" aria-controls="sale" aria-selected="false">Lainnya</a>
          </div>
        </div>
      </div>
      
      <div class="realestate-tabpane pb-5">
        <div class="container tab-content">
           <div class="tab-pane active" id="for-rent" role="tabpanel" aria-labelledby="rent-tab">

             <div class="row">
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Gender</option>
                   <option value="">Laki-laki</option>
                   <option value="">Perempuan</option>
                 </select>
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Jarak</option>
                   <option value="">Universitas Negeri Jember</option>
                   <option value="">Politeknik Negeri Jember</option>
                   <option value="">Universitas Muhammadiyah Jember</option>
                 </select>
               </div>
             </div>

             <div class="row">
              <div class="col-md-4 form-group">
                <select name="" id="" class="form-control w-100">
                  <option value="">Harga</option>
                  <option value="">Tinggi</option>
                  <option value="">Rendah</option>
                </select>
              </div>
            </div>
             <div class="row">
               <div class="col-md-4">
                 <input type="submit" class="btn btn-black py-3 btn-block" value="Cari">
               </div>
             </div>

           </div>
           
           <div class="tab-pane" id="for-sale" role="tabpanel" aria-labelledby="sale-tab">
      
           <div class="container">
            <ul class="cxbx">
              <li><input type="checkbox" id="checkboxOne" value="Kasur"><label for="checkboxOne">Kamar</label></li>
              <li><input type="checkbox" id="checkboxTwo" value="Kursi"><label for="checkboxTwo">Kursi</label></li>
              <li><input type="checkbox" id="checkboxThree" value="Lemari"><label for="checkboxThree">Lemari</label></li>
              <li><input type="checkbox" id="checkboxFour" value="Meja Belajar"><label for="checkboxFour">Meja Belajar</label></li>
              <li><input type="checkbox" id="checkboxFive" value="Wi-Fi"><label for="checkboxFive">Wi-Fi</label></li>
              <li><input type="checkbox" id="checkboxSix" value="Kamar Mandi Luar"><label for="checkboxSix">Kamar Mandi Luar</label></li>
              <li><input type="checkbox" id="checkboxSeven" value="Kamar Mandi Dalam"><label for="checkboxSeven">Kamar Mandi Dalam</label></li>
              <li><input type="checkbox" id="checkboxEight" value="Ruang Tamu"><label for="checkboxEight">Ruang Tamu</label></li>
              <li><input type="checkbox" id="checkboxNine" value="Dapur"><label for="checkboxNine">Dapur</label></li>
              <li><input type="checkbox" id="checkboxTen" value="Parkir Motor"><label for="checkboxTen">Parkir Motor</label></li>
              <li><input type="checkbox" id="checkboxTwelve" value="Televisi"><label for="checkboxTwelve">Televisi</label></li>
            </ul>
          </div>
             <div class="row">
               <div class="col-md-4">
                 <input type="submit" class="btn btn-black py-3 btn-block" value="Cari">
               </div>
             </div>
            </div>
        </div>
      </div>
    </form>

    <div class="site-section bg-black block-14">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="heading-29201 text-center text-white">Rekomendasi untuk anda</h3>
            
          </div>
        </div>
        <br>
        

        <div class="owl-carousel nonloop-block-14">
          <div class="media-38289">
            <a href="property-single.php" class="d-block"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
            <div class="text">
              <div class="d-flex justify-content-between mb-3">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
              </div>
              <h3 class="mb-3"><a href="#">$570,000</a></h3>
              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
            </div>
          </div>

          <div class="media-38289">
            <a href="property-single.php" class="d-block"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="text">
              <div class="d-flex justify-content-between mb-3">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
              </div>
              <h3 class="mb-3"><a href="#">$1,570,000</a></h3>
              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
            </div>
          </div>

          <div class="media-38289">
              <a href="property-single.php" class="d-block"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="text">
                <div class="d-flex justify-content-between mb-3">
                  <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
                </div>
                <h3 class="mb-3"><a href="#">$980,000</a></h3>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
              </div>
            </div>


          <div class="media-38289">
            <a href="property-single.php" class="d-block"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
            <div class="text">
              <div class="d-flex justify-content-between mb-3">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
              </div>
              <h3 class="mb-3"><a href="#">Rp. 300.000</a></h3>
              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
            </div>
          </div>

          <div class="media-38289">
            <a href="property-single.php" class="d-block"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="text">
              <div class="d-flex justify-content-between mb-3">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
              </div>
              <h3 class="mb-3"><a href="#">Rp. 450.000</a></h3>
              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
            </div>
          </div>

          <div class="media-38289">
              <a href="property-single.php" class="d-block"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="text">
                <div class="d-flex justify-content-between mb-3">
                  <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
                </div>
                <h3 class="mb-3"><a href="#">Rp. 350.000</a></h3>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-primary">
      <div class="container block-13">
        <div class="nonloop-block-13 owl-carousel">
          

          <div class="testimonial-38920 d-flex align-items-start">
            <div class="pic mr-4"><img src="images/person_2.jpg" alt=""></div>
            <div>
              <span class="meta">Business Woman</span>
              <h3 class="mb-4">Jean Doe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic quos nihil nulla veritatis!</p>
              <div class="mt-4">
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
              </div>
            </div>
          </div>

          <div class="testimonial-38920 d-flex align-items-start">
            <div class="pic mr-4"><img src="images/person_3.jpg" alt=""></div>
            <div>
              <span class="meta">Business Woman</span>
              <h3 class="mb-4">Jean Doe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic quos nihil nulla veritatis!</p>
              <div class="mt-4">
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bawah">
      <div class="container">
         <div class="col-md-6">
        <h4>Carikos</h4>
        <p> MAMIKOS menyajikan informasi Kamar kosan, lengkap dengan fasilitas kost, harga kost, dan dekorasi kamar beserta foto desain kamar yang disesuaikan dengan kondisi sebenarnya. Setiap Rumah Kost yang ada di MAMIKOS benar-benar kami datangi, kami verifikasi, kami seleksi dan kami ambil data langsung, termasuk kost yang didaftarkan oleh pemilik atau umum. Informasi ketersediaan kamar kost dan harga kost kami update max setiap 2 minggu sekali untuk memastikan info kost kami akurat dan bermanfaat untuk anak kost. Saat ini kami memiliki lebih dari 10.000+ info kost dan masih terus bertambah di Indonesia. Data Kamar kosan yang kami miliki telah mencakup kost di depok, kost jakarta, kost Jogja, hingga Kost Bandung dan Kost di Surabaya. Pengembangan data kosan masih terus kami usahakan. Namun demikian, kamu dapat request penambahan info kosan di seputar area yang kamu inginkan dengan mengisi data di Form Komplain. Kamu juga dapat menambahkan masukan, saran dan kritikan untuk mamikos di form tersebut. Dukungan kamu, akan mempercepat pengembangan data kosan yang kami miliki.

Jika kamu ingin mendapatkan inspirasi desain kamar minimalis atau kamar kost minimalis kamu bisa cek kost eksklusif yang ada di Mamikos. Dengan luas ruangan yang hampir sama, kebanyakan Kamar kost eksklusif hanya diberikan desain kamar atau dekorasi kamar yang lebih menarik, ditambah tempat tidur beserta atributnya dan kamar mandi dalam plus AC, dengan tambahan internet. kosan ini tentunya dapat menjadi alternatif untuk kamu anak kost yang ingin mendesain kamar kost minimalis namun tetap eksklusif. Di Mamikos kini juga telah ditambahkan berbagai info kosan dengan harga murah ataupun beberapa tipe kosan lain sesuai masukan dari pengguna Mamikos. </p>
         </div>
      </div>
    </div>

  </div>
    <footer class="site-footer">
      <div class="container">
        
        
          <div class="col-md-4">
            <h3 class="text-white h5 mb-3">CARIKOS</h3>
            <p>Dapatkan "info kost murah" hanya di MamiKos </p>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

