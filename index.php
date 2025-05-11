<?php

$db = mysqli_connect("localhost","u714131570_admin","Sadmin2626","u714131570_tiptopdresses");

if(mysqli_connect_error())
	{
	echo"Cannot Connect";
	}
else{
	//echo"connected";
}
?>
<?php	
	if(isset($_POST['submit'])){
    if(isset($_POST['edit']) && $_POST['edit'] != ''){
        $sql = 'UPDATE contects set 
				fname="'.$_POST['fname'].'" ,
				number="'.$_POST['number'].'" , 
				 subject ="'.$_POST[' subject '].'" , 
				message="'.$_POST['message'].'"
				 where sno = '.$_POST['edit'];
			// echo $sql;		 
				mysqli_query($db, $sql);
				if(mysqli_errno($db)){
					echo "Updation failed: ".mysqli_errno($db).mysqli_error($db);
				}
				else{
					echo "Successfully updated";
				}
			}
		else{
				$sql = 'INSERT INTO contects(fname, number, subject, message, time) 
					values("'.$_POST['fname'].'",
					"'.$_POST['number'].'",
					"'.$_POST['subject'].'",
					"'.$_POST['message'].'",
					"'.date("d-m-y").'")';
			//echo $sql;

				mysqli_query($db,$sql);
				if(mysqli_errno($db)){
					echo "Insertion failed: ".mysqli_errno($db).mysqli_error($db);
				}
				else{
					echo "Data inserted";
				}
			}
	}
	
	if(isset($_GET['del'])){
		$sql = 'delete from contects where sno="'.$_GET['del'].'"';
		mysqli_query($db, $sql);
		if(mysqli_error($db)){
			$msg .= '<h3 style="color:red;">Error in deleting . '.mysqli_error($db).' >> '.$sql.'</h3>';
		}
		else{
			$msg .= '<h3 style="color:red;">Deleted</h3>';
		}
	}
	
	if(isset($_GET['edit'])){
	$sql = 'select * from contects where sno = '.$_GET['edit'];
	$qry = mysqli_query($db, $sql);
	$res = mysqli_fetch_assoc($qry);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

    <title>Tip Top Dresses</title>
    <meta content="description" name="Discover a world of elegance and style at Tip Top Dresses. Our curated collection of exquisite dresses caters to fashion-forward individuals seeking top-notch fashion. From glamorous evening wear to casual chic, find the perfect outfit to express your unique style. With a rich history spanning over five decades, our commitment to quality and timeless beauty is unmatched. Explore our wide range of premium dresses. Experience the legacy of Tip Top Dresses and elevate your wardrobe with sophistication. Shop now for the finest selection of fashionable attire that is sure to turn heads."/>
    <meta content="keywords" name="Dresses, Fashion, Clothing. Women's wear, Designer dresses, Elegant dresses, Trendy outfits, Formal wear, Casual dresses, Stylish apparel, Fashion boutique, High-quality garments, Fashion-forward clothing, Affordable dresses, Exclusive designs, Tiptopdresses, tiptopdresses, TipTopDresses, Tip Top Dresses, Tip Top, tip top, dress, tip top dresses robertsganj, Tip Top Dresses Robertsganj, Top top dresses robertsganj, Robertsganj, robertsganj, Sonbhadra, Sonbhadra"/>

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon"/>
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"/>

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"/>
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"/>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet"/>
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"/>
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"/>

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet"/>
    <link href="assets/css/custom.css" rel="stylesheet"/>
	
	<!-- Form Submition Alert -->
	<script>
    function submitForm() {
      // Perform form submission logic here

      // Show an alert after the form is submitted
      alert("Contact Form submitted successfully!");
    }
  </script>
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-lg-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img loading="lazy" src="assets/img/logo.png" alt="" /> -->
          <h1 style="color:red;font-size: 35px;">Tip Top Dresses<span></span></h1>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About</a></li>
			<li><a href="#menu">Our Partner</a></li>
            <li><a href="#brands">Our Brands</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#Team">Our Owners</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
        <!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
      <div class="container">
        <div class="row justify-content-between gy-5">
          <div
            class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
            <h2 data-aos="fade-up">
              Dress to impress ?<br />
              <span> Tip Top Dresses</span> Knows Best
            </h2>
            <p data-aos="fade-up" data-aos-delay="100">
              Discover fashion that speaks to your soul. Express yourself
              through our curated collection, designed to empower and inspire
              your unique sense of style.
            </p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#contact" class="btn-book-a-table">Contact Us</a>
              <a href="https://youtu.be/yadkuocEbGE" class="glightbox btn-watch-video d-flex align-items-center">
                  <i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 text-center text-lg-start">
            <img loading="lazy" src="assets/img/gallery/17.jpg" class="img-fluid shadowss borderradius" alt="Hero Section Img"
              data-aos="zoom-out" data-aos-delay="300" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>About Us</h2>
            <p>Learn More <span class="radish">About Us</span></p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-7 position-relative about-img shadowss borderradius"
              style="background-image: url(assets/img/gallery/4.jpeg)"
              data-aos="fade-up"
              data-aos-delay="150"
            >
              <!-- <div class="call-us position-absolute">
                <h4>Book a Table</h4>
                <p>+1 5589 55488 55</p>
              </div> -->
            </div>
            <div
              class="col-lg-5 d-flex align-items-end"
              data-aos="fade-up"
              data-aos-delay="300">
              <div class="content ps-0 ps-lg-5">
                   <div class="position-relative mt-6 shadowss borderradius">
                  <img loading="lazy" src="assets/img/gallery/21.JPG" class="img-fluid" alt="img"/>
                </div><br>
                <p class="fst-italic">
                Welcome to our clothing business, founded in <strong style="color: #ce1212"> 1970 </strong>by the <strong style="color: #ce1212"> late Shree Ram Pratap Agrawal</strong>. With a strong vision to deliver top-notch fashion, we take pride in curating exceptional clothing for individuals. Our commitment to quality and style has been unwavering since day one. With a rich history spanning over five decades, we have built a reputation for offering exquisite garments that reflect elegance and sophistication.
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check2-all"></i> Thoughtfully curated
                    collection offering a wide variety of dresses to suit
                    different styles and body types.
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i> Exceptional emphasis on
                    quality, with meticulously sourced fabrics from trusted
                    suppliers
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i>Dedicated and friendly staff
                    providing personalized and attentive customer service
                    experience
                  </li>
				  <li>
                    <i class="bi bi-check2-all"></i>Our commitment to customer satisfaction is at the heart of everything we do
                  </li>
                </ul>
                <p>
                  At <span style="color: #ce1212">Tip Top Dresses</span> , we
                  carefully select our collection to suit various styles and
                  body types. Our focus on quality means we source fabrics from
                  trusted suppliers. Plus, our friendly staff is here to provide
                  exceptional customer service, ensuring a pleasant and
                  enjoyable shopping experience for you.
                </p>
                <p>
                  At our store, we believe in empowering individuals to express their unique style through our carefully selected collections. Discover timeless fashion that stands out from the crowd and experience the legacy of our founder.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->
	  
	  <!-- ======= Why Us Section Tip Top ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="why-box">
                <h3 style="text-align: center">
                  Why Choose <br />
                  Tip Top Dresses?
                </h3>
                <p>
                  Choose <b>Tip Top Dresses</b> for unmatched style, flawless fit, and
                  premium quality. Our diverse collection of elegant and
                  on-trend designs ensures you'll find the perfect dress to
                  accentuate your best features. Elevate your fashion game and
                  experience the difference with Tip Top Dresses.
                </p>
                <!--<div class="text-center">
                  <a href="#" class="more-btn"
                    >Learn More <i class="bx bx-chevron-right"></i
                  ></a>
                </div> -->
              </div>
            </div>
            <!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-center">
              <div class="row gy-4">
                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Unparalleled Style</h4>
                    <p>
                      Explore our collection of elegant and on-trend dresses
                      that will make you stand out.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-gem"></i>
                    <h4>Flawless Fit</h4>
                    <p>
                      Our dresses are designed with careful consideration for
                      different body types, ensuring a flattering and
                      comfortable fit.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-inboxes"></i>
                    <h4>Premium Quality</h4>
                    <p>
                      Unmatched style, fit, and quality. Experience luxury with
                      lasting beauty. Choose excellence for your wardrobe.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section Tip Top -->
	  
	  <!-- ======= Partner Section ======= -->
      <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Partners</h2>
            <p>Check Our <span>Partners</span></p>
          </div>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade active show" id="menu-starters">
              <div class="tab-header text-center">
              </div>
              <div class="row m-0">
                <div class="col">
                  <img loading="lazy" src="assets\img\gallery\16.jpg" alt="Shivam clothes House" class="img-fluid shadowss">
                </div>
              </div>
          </div>
        </div>
      </section>
      <!-- End Menu Section -->
	  
	  	  <!-- ======= Why Us Section shivam cloths house ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="why-box">
                <h3 style="text-align: center">
                  Why Choose <br/>
                  Shivam Cloth House?
                </h3>
                <p>
				  Choose <b>Shivam Cloth House</b> for premier destination for exquisite ethnic clothing and accessories. With a passion for celebrating the rich heritage of Indian fashion, we offer a diverse collection of sarees, lehengas, salwar suits, etc.
                </p>
                <!--<div class="text-center">
                  <a href="#" class="more-btn"
                    >Learn More <i class="bx bx-chevron-right"></i
                  ></a>
                </div> -->
              </div>
            </div>
            <!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-center">
              <div class="row gy-4">
                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Exquisite Collection</h4>
                    <p>
                     Discover a diverse range of impeccably crafted sarees and traditional attire that exude elegance and charm.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-gem"></i>
                    <h4>Personalized Service</h4>
                    <p>
                     Experience exceptional customer care, with knowledgeable staff dedicated to helping you find your perfect ensemble.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-inboxes"></i>
                    <h4>Quality and Authenticity</h4>
                    <p>
                      Trust in our commitment to providing high-quality garments that showcase the finest and authentic designs.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section Tip Top -->

      <!-- ======= Stats Counter Section ======= -->
      <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="zoom-out">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="20"
                  data-purecounter-duration="1"
                  class="purecounter addplus"
                ></span>
                <p>brands</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-4 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="50"
                  data-purecounter-duration="1"
                  class="purecounter addplus"
                ></span>
                <p>Experience</p>
              </div>
            </div>
            
            <!-- End Stats Item -->

            <div class="col-lg-4 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="20"
                  data-purecounter-duration="1"
                  class="purecounter addplus"
                ></span> 
                <p>Workers</p>
              </div>
            </div>
            <!-- End Stats Item -->
          </div>
        </div>
      </section>
      <!-- End Stats Counter Section -->

      <!-- Our Brands  -->
      <section id="brands" class="brands stats-counter">
        <div class="">
          <h2 class="brands-head">
            <span class="theme_blue">Our </span>
            <span class="theme_orange"> brands</span>
          </h2>
        </div>
        <div class="container" data-aos="zoom-in">
          <div class="row">
            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img
                src="assets/img/Brands/adidas.jpg" class="img-fluid" alt="adidas"/>
            </div>

            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets/img/Brands/duke.jpg" class="img-fluid" alt="duke"/>
            </div>

            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets/img/Brands/levis.png" class="img-fluid" alt="levis"/>
            </div>
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets/img/Brands/killer.png" class="img-fluid" alt="killer"/>
            </div>

            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img
                src="assets//img/Brands/jockey.png" class="img-fluid" alt="jockey"/>
            </div>

            <div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/mufti.jpeg" class="img-fluid" alt="mufti"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/john players.jpg" class="img-fluid" alt="john players"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/pan america.jpeg" class="img-fluid" alt="pan america"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/zola.png" class="img-fluid" alt="zola"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/stride.png" class="img-fluid" alt="stride"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/raymond.png" class="img-fluid" alt="Raymond"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/siyaram.jpeg" class="img-fluid" alt="siyaram"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/likshmipati.png" class="img-fluid" alt="lakshmipati"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/linen club.png" class="img-fluid" alt="linen club"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/crimsoune.png" class="img-fluid" alt="crimsoune"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/bombay.png" class="img-fluid" alt="bombay"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/birla.png" class="img-fluid" alt="birls"/>
            </div>
			
			<div
              class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img loading="lazy" src="assets//img/Brands/vishal.jpeg" class="img-fluid" alt="vishal"/>
            </div>
          </div>
        </div>
      </section>
      <!-- End brands Section -->
	  
	  <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>gallery</h2>
            <p>Check <span>Our Gallery</span></p>
          </div>

          <div class="gallery-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/2.jpeg">
                    <img loading="lazy" src="assets/img/gallery/2.jpeg" class="img-fluid" alt="img"/>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/3.jpeg">
                    <img loading="lazy" src="assets/img/gallery/3.jpeg" class="img-fluid" alt="img"/>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/6.jpeg">
                    <img loading="lazy" src="assets/img/gallery/6.jpeg" class="img-fluid" alt="img"/>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/8.jpeg">
                    <img loading="lazy" src="assets/img/gallery/8.jpeg" class="img-fluid" alt="img"/>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/9.jpeg">
                    <img loading="lazy" src="assets/img/gallery/9.jpeg" class="img-fluid" alt="img"/>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/12.jpeg">
                    <img loading="lazy" src="assets/img/gallery/12.jpeg" class="img-fluid" alt="img"/>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/19.jpg">
                    <img loading="lazy" src="assets/img/gallery/19.jpg" class="img-fluid" alt="img"/>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/23.jpg">
                    <img loading="lazy" src="assets/img/gallery/23.jpg" class="img-fluid" alt="img"/>
                </a>
              </div>
			  <div class="swiper-slide">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/24.jpg">
                    <img loading="lazy" src="assets/img/gallery/24.jpg" class="img-fluid" alt="img"/>
                </a>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Gallery Section -->

      <!-- ======= Teams Section ======= -->
      <section id="Team" class="Team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Owners</h2>
            <p>Our <span>Owners</span></p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="chef-member">
                <div class="member-img">
                  <img loading="lazy" src="assets/img/gallery/18.jpg" class="img-fluid shadowss borderradius" alt="img"/>
                  <div class="social">
                    <a href="tel:7607972072"><i class="bi bi-telephone-fill"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Sanjay Agrawal</h4>
                  <span>Store Owner</span>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="chef-member">
                <div class="member-img">
                  <img loading="lazy" src="assets/img/gallery/20.jpg" class="img-fluid shadowss borderradius" alt="img"/>
                  <div class="social">
                    <a href="tel:9839425430"><i class="bi bi-telephone-fill"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Subodh Agrawal</h4>
                  <span>Store Owner</span>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="chef-member">
                <div class="member-img">
                  <img loading="lazy" src="assets/img/gallery/14.jpg" class="img-fluid shadowss borderradius" alt="img"/>
                  <div class="social">
                    <a href="tel:9450815481"><i class="bi bi-telephone-fill"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Harsh Agrawal</h4>
                  <span>Store Owner</span>
                </div>
              </div>
            </div>
            <!-- End Team Member -->
          </div>
        </div>
      </section>
      <!-- End Team Section -->
	  
	   <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header mt-md-5">
            <h2>Testimonials</h2>
            <p>What Are They <span>Saying About Us</span></p>
          </div>

          <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                          <h3>Mudit</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <h3>Must Visit !!</h3>
                          <i class="bi bi-quote quote-icon-left"></i>
                         	A Complete Family Shop in affordable prices
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    <!--<div class="col-lg-2 text-center">
                      <img
                        src="assets/img/testimonials/testimonials-1.jpg"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>-->
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                          <h3>Alok Maurya</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <h3>You must have to visit.❤</h3>
                          <i class="bi bi-quote quote-icon-left"></i>
                         	Great Service and best product in affordable price.❤❤
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    <!--<div class="col-lg-2 text-center">
                      <img
                        src="assets/img/testimonials/testimonials-1.jpg"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>-->
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                          <h3>Apoorva Srivastava</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <h3>Affordable Price</h3>
                          <i class="bi bi-quote quote-icon-left"></i>
                         	The Awesome Cloths with affordable prices❤
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    <!--<div class="col-lg-2 text-center">
                      <img
                        src="assets/img/testimonials/testimonials-1.jpg"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>-->
                  </div>
                </div>
              </div>
              <!-- End testimonial item --

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Tip Top Dresses is a hidden gem. Their collection is
                          curated with a great eye for fashion, and the variety
                          of styles is impressive. The dresses I've purchased
                          have become my favorites, and I love the compliments I
                          receive. Tip Top Dresses is my secret to looking
                          fabulous!
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Neha Malhotra</h3>
                        <!-- <h4>Entrepreneur</h4> --
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img
                        src="assets/img/testimonials/testimonials-4.jpg"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Contact</h2>
            <p>Need Help? <span>Contact Us</span></p>
          </div>

          <div class="mb-3">
            <iframe
              class="gmap_iframe"
              style="border: 0; width: 100%; height: 350px"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d453.13918784337613!2d83.06447563080927!3d24.68862467804186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398ef917fb6d0047%3A0x39444f13f3afcf55!2sTip%20Top%20Dresses!5e0!3m2!1sen!2sin!4v1688921465224!5m2!1sen!2sin"
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>
          <!-- End Google Maps -->

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-map flex-shrink-0"></i>
                <div>
                  <h3>Our Address</h3>
                  <p><a href= "https://www.google.com/maps/place/Tip+Top+Dresses/@24.688625,83.064798,19z/data=!4m6!3m5!1s0x398ef917fb6d0047:0x39444f13f3afcf55!8m2!3d24.6886247!4d83.0647975!16s%2Fg%2F11sv_ffkq0?hl=en&entry=ttu">Main Market, Kamarhi, Robertsganj, Uttar Pradesh 231216</a></p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p><strong>Email:</strong><a href="mailto:customerservice@tiptopdresses.in">customerservice@tiptopdresses.in</a></p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p><strong>Phone:</strong><a href="tel:9839425430">+919839425430</a><br/>
                  <strong>Phone:</strong><a href="tel:9450815481">+919450815481</a><br/>
                  <strong>Phone:</strong><a href="tel:7607972072">+917607972072</a><br/></p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-share flex-shrink-0"></i>
                <div>
                  <h3>Opening Hours</h3>
                  <div>
                    <strong>Mon-Sun:</strong> 9:30AM - 9:30PM;
                  </div>
                </div>
              </div>
            </div>
            <!-- End Info Item -->
          </div>
			<!-- ======= Contact Form Start ======= -->
		  <form action="<?php echo $_SERVER['PHP_SELF']?>" class="php-email-form p-3 p-md-4" name=""  enctype="multipart/form-data" method="POST" onSubmit="" autocomplete="off">
            <div class="row">
              <div class="col-xl-6 form-group">
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Your Name" required />
              </div>
              <div class="col-xl-6 form-group">
                <input type="number" class="form-control" name="number" id="number" placeholder="Your Number" required />
                <div id="emailHelp" class="form-text" ><span style="color:red;">*</span>We'll never share your contact details with anyone else.
              </div>
              </div>
              
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary " name="submit" value="" onclick="submitForm()">Send Massage</button>
            </div>
          </form>
          <!--End Contact Form -->
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Address</h4>
              <p>
                <a href= "https://www.google.com/maps/place/Tip+Top+Dresses/@24.688625,83.064798,19z/data=!4m6!3m5!1s0x398ef917fb6d0047:0x39444f13f3afcf55!8m2!3d24.6886247!4d83.0647975!16s%2Fg%2F11sv_ffkq0?hl=en&entry=ttu">Main Market, Kamarhi, Robertsganj, Uttar Pradesh 231216</a>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Contact Us</h4>
              <p>
                <strong>Phone:</strong><a href="tel:9839425430">+919839425430</a><br/>
                <strong>Email:</strong><a href="mailto:customerservice@tiptopdresses.in">customerservice@tiptopdresses.in</a>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Sun: </strong>9:30AM - 9:30PM<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="https://g.co/kgs/DGQed8" class="google"><i class="bi bi-google"></i></a>
              <a href="https://www.youtube.com/@TIPTOPDRESSES1970" class="youtube"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Tip Top Dresses</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="#">ITechnosis Group</a></div>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

   <div id="preloader"></div> 

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>