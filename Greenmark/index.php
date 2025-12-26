<?php

if (isset($_GET['utm_source'])) { $utm_source = $_GET['utm_source'];}
else { $utm_source = ''; }

if (isset($_GET['utm_medium'])) { $utm_medium = $_GET['utm_medium']; }
else { $utm_medium = ''; }

if (isset($_GET['utm_campaign'])) { $utm_campaign = $_GET['utm_campaign']; }
else { $utm_campaign = ''; }

if (isset($_GET['utm_term'])) { $utm_term = $_GET['utm_term']; }
else { $utm_term = ''; }

if (isset($_GET['keyword'])) { $keyword = $_GET['keyword']; }
else { $keyword = ''; }

if (isset($_GET['matchtype'])) { $matchtype = $_GET['matchtype']; }
else { $matchtype = ''; }

if (isset($_GET['device'])) { $device = $_GET['device']; }
else { $device = ''; }


$fullurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Greenmark Developers is Top builders in Hyderabad creating luxurious, nature-friendly homes with quality, transparency & on-time delivery.">
<meta name="keywords" content="Real Estate Developers in Hyderabad, Real Estate Builders in Hyderabad">
<meta name="google-site-verification" content="tvQjbS4INDkTWstIMa5nF2-9vXqU84BQMeNLgM1yO6Y">

<title>Best Builders and Delevopers in Hyderabad | Greenmarkdevelopers</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.webp">
<link rel="canonical" href="https://greenmarkdevelopers.com/">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- font awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer"  >
<!-- Aos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer"  media="print" onload="this.media='all'">

<!--Preload-->
<link rel="preload" as="image" href="assets/img/bg.webp" fetchpriority="high">
<link rel="preload" href="assets/font/Montserrat-Regular.ttf" as="font" type="font/ttf" crossorigin>
<link rel="preload" as="font" href="assets/font/InriaSerif-Regular.ttf" type="font/ttf" crossorigin>
<link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" onload="this.onload=null;this.rel='stylesheet'">

<!-- slick -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" media="print" onload="this.media='all'">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" >

<!-- fancybox -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" media="print" onload="this.media='all'">

<!-- stylesheet -->
<link rel="stylesheet" href="assets/css/style.css" >



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HDFJXYKPF5"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-HDFJXYKPF5');
</script>

<style>
#read-m{display: none;}
#lk1{display: none;}
</style>

</head>
<body>

<?php include_once('header.php') ?>

<div class="section top" id="slide1">

<video class="desk" src="assets/videos/banner-desk.mp4" autoplay muted loop playsinline ></video>
<video class="mobile" src="assets/videos/banner-mbl.mp4" autoplay muted loop playsinline></video>
</div>

<div class="dark">

<section class="secb">
<div class="container">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="row">

<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" data-aos="slide-up" data-aos-duration="2000" data-aos-easing="ease-in-out">

<div class="secb-img">
<div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

<!-- The slideshow/carousel -->
<div class="carousel-inner">
<div class="carousel-item active">
<img src="assets/img/project/mayfair-sunrise.webp" alt="Los Angeles" class="d-block" style="width:100%"  fetchpriority="high" >
</div>
<div class="carousel-item">
<img src="assets/img/project/mayfair-supreme.webp" alt="Chicago" class="d-block" style="width:100%"  >
</div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>


<div class="secb-sub1-txt">
<span>19+</span>
<p>Years of Experience</p>
</div>

</div>
</div>

<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 align" data-aos="slide-up" data-aos-duration="2000" data-aos-easing="ease-in-out">

<div class="secb-sub2" id="sub2">
<h1>Leafy Beauties For <span>Every Space</span></h1>

<p>At Greenmark Developers, we believe that a home is much more than just four walls and a roof. It’s where life unfolds, memories are created, and a sense of belonging takes root. Since our inception in 2006, we’ve consistently aimed to go beyond conventional construction. Our mission has always been clear—to design and deliver premium residential spaces that blend the comforts of modern living with the serenity of nature.</p>

<p>We are proud to be recognized as one of the top real estate companies in Hyderabad, known for crafting gated communities that are thoughtfully planned, vastu-compliant, and eco-conscious. Whether it’s a villa nestled in lush greenery or a smartly designed apartment within a vibrant community, every Greenmark home is designed with purpose and passion.</p>

<p>As one of the best real estate companies in Hyderabad, our projects reflect timeless aesthetics, solid construction, and practical layouts that cater to today’s urban lifestyle. From the materials we choose to the technologies we use, we pay attention to every detail. This commitment to excellence has helped us earn our place among the best construction companies in Hyderabad.</p>
</div>

</div>

</div>
</div>
</div>
</section>


<section class="secc">
<div class="container">
<div class="row">
<h3 style="display:none;">Content will display soon</h3>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="row secc-sub">
<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 secc-sub2" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-easing="ease-in-out">
<span class="counter" data-target="5">0</span> <span>+</span>
<p>Million Sq Ft Constructed</p>
</div>
<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 secc-sub3" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-easing="ease-in-out">
<span class="counter" data-target="10">0</span> <span>+</span>
<p>Million Sq Ft Planning</p>
</div>
<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 secc-sub4" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-easing="ease-in-out">
<span class="counter" data-target="3">0</span> <span>+</span>
<p>Million Sq Ft Under Construction</p>
</div>
</div>
</div>

</div>
</div>
</section>


<section class="proj-sec">
<div class="container">
<div class="portfolio-section">

<!-- Nav Tabs Full Width -->
<ul class="nav nav-tabs w-100 d-flex" id="myTab" role="tablist">
<li class="nav-item flex-fill" role="presentation">
<button class="nav-link active w-100" id="ongoing-tab" data-bs-toggle="tab" data-bs-target="#ongoing" type="button" role="tab" aria-controls="ongoing" aria-selected="true">
Ongoing Projects
</button>
</li>
<li class="nav-item flex-fill" role="presentation">
<button class="nav-link w-100" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab" aria-controls="completed" aria-selected="false">
Completed Projects
</button>
</li>
</ul>

<!-- Tab Content -->
<div class="tab-content mt-4" id="myTabContent">

<!-- Ongoing Projects-->
<div class="tab-pane fade show active" id="ongoing" role="tabpanel" aria-labelledby="ongoing-tab">
<div id="ongoingCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
<div class="carousel-inner">
<div class="carousel-item active">
<a href="https://greenmarkdevelopers.com/mayfairsunrise/">
<img src="assets/img/project/mayfair-sunrise.webp" class="d-block" alt="Mayfair Sunrise">
<div class="text-center car-cap"><h3>Mayfair Sunrise - Hyderabad</h3></div>
</a>
</div>
<div class="carousel-item">
<a href="https://greenmarkdevelopers.com/mayfairsupreme/">
<img src="assets/img/project/mayfair-supreme.webp" class="d-block" alt="Mayfair Supreme">
<div class="text-center car-cap"><h3>Mayfair Supreme - Tirupati</h3></div>
</a>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#ongoingCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#ongoingCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>
</div>

</div>
</div>

<!-- completed projects -->
<div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">
<div class="swiper mySwiper">
<div class="swiper-wrapper">

<div class="swiper-slide">
<a data-fancybox="gallery" href="assets/img/project/mayfair-apartments.png" target="_blank" data-caption="Mayfair Apartments">
<img src="assets/img/project/mayfair-apartments.png" alt="Mayfair Apartments" class="d-block" style="width:100%" title="image">
<div class="text-center car-cap">
<h3>Mayfair Apartments</h3>
</div>
</a>
</div>

<div class="swiper-slide">
<a data-fancybox="gallery" href="assets/img/project/mayfair-visista.png" target="_blank" data-caption="Mayfair Visista">
<img src="assets/img/project/mayfair-visista.png" alt="Mayfair Visista" class="d-block" style="width:100%" title="image">
<div class="text-center car-cap">
<h3>Mayfair Visista</h3>
</div>
</a>
</div>

<div class="swiper-slide">
<a data-fancybox="gallery" href="assets/img/project/mayfair-villas.png" target="_blank" data-caption="Mayfair Villas">
<img src="assets/img/project/mayfair-villas.png" alt="Mayfair Villas" class="d-block" style="width:100%" title="image">
<div class="text-center car-cap">
<h3>Mayfair Villas</h3>
</div>
</a>
</div>

<div class="swiper-slide">
<a data-fancybox="gallery" href="assets/img/project/galaxy-apartments.png" target="_blank" data-caption="Galaxy Apartments">
<img src="assets/img/project/galaxy-apartments.png" alt="Galaxy Apartments" class="d-block" style="width:100%" title="image">
<div class="text-center car-cap">
<h3>Galaxy Apartments</h3>
</div>
</a>
</div>

<div class="swiper-slide">
<a data-fancybox="gallery" href="assets/img/project/the-nest.png" target="_blank" data-caption="The Nest">
<img src="assets/img/project/the-nest.png" alt="The Nest" class="d-block" style="width:100%" title="image">
<div class="text-center car-cap">
<h3>The Nest</h3>
</div>
</a>
</div>
<div class="swiper-slide">
<a data-fancybox="gallery" href="assets/img/project/shree-convention.png" target="_blank" data-caption="Shree Convention">
<img src="assets/img/project/shree-convention.png" alt="Shree Convention" class="d-block" style="width:100%" title="image">
<div class="text-center car-cap">
<h3>Shree Convention</h3>
</div>
</a>
</div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</div>

</div>
</div>
</div>
</section>


<section class="sece">
<div class="container">

<div class="row mb-5">
<div class="col-md-12">
<h1 class="text-center" data-aos="fade-right" data-aos-duration="2000" data-aos-easing="ease-in-out">Why Choose Us</h1>
</div>
</div>

<div class="row mb-5 card-effects">

<div class="col-md-4">
<div class="cef">
<div class="card card-effect p-0 h-100">
<div class="card-img">
<div class="img-hover">
<img class="rounded-top img-fluid" src="assets/img/personalized.webp" alt="...">
</div>
</div>
<div class="card-body position-relative pt-0 px-1-9 pb-1-9">
<div class="pt-6">
<div class="h4 mb-3 mt-4 text-center">
<a class="text-decoration-none text-uppercase text-tb-lines" href="javascript:void(0);">Personalized Service</a>
</div>
<p class="text-card-why">From your very first inquiry to the moment you receive your keys, we provide a tailored experience just for you. We recognize that every homebuyer has unique needs, and we make your journey smooth, comfortable, and personal.</p>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="cef">
<div class="card card-effect p-0 h-100">
<div class="card-img">
<div class="img-hover">
<img class="rounded-top img-fluid" src="assets/img/proven.webp" alt="...">
</div>
</div>
<div class="card-body position-relative pt-0 px-1-9 pb-1-9">
<div class="pt-6">
<div class="h4 mb-3 mt-4 text-center">
<a class="text-decoration-none text-uppercase text-tb-lines" href="javascript:void(0);">Proven History</a>
</div>
<p class="text-card-why">With over 5 million sq. ft. delivered and millions more in progress, we are a major player among the top construction companies in Hyderabad. With a proven track record of quality and customer satisfaction, we stand among the top construction companies in Hyderabad.</p>
</div>
</div>
</div>
</div>
</div>


<div class="col-md-4">
<div class="cef">
<div class="card card-effect p-0 h-100">

<div class="card-img">
<div class="img-hover">
<img class="rounded-top img-fluid" src="assets/img/price.webp" alt="...">
</div>
</div>

<div class="card-body position-relative pt-0 px-1-9 pb-1-9">
<div class="pt-6">
<div class="h4 mb-3 mt-4 text-center">
<a class="text-decoration-none text-uppercase text-tb-lines" href="javascript:void(0);">Price Made Simple</a>
</div>
<p class="text-card-why">We believe in transparent, value-driven pricing without confusing terms or hidden costs. Our pricing is straightforward and designed to offer you the best value while keeping your budget in mind.</p>
</div>
</div>
</div>
</div>
</div>

</div>

</div>
</section>


<section class="secf">
<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

<h1 class="text-center">Awards</h1>
<p class="text-center">Awarded as</p>

<div class="owl-carousel owl-theme" id="owl-carousel">

<div class="item">
<div class="t2">
<img class="img-fluid" src="assets/img/award.webp" alt="">
</div>
<p class="maintext">Villa Project of the Year - Mayfair Sunrise</p>
<p class="subtext">Realty + Excellence Awards - 2024, Hyderabad</p>
</div>

<div class="item">
<div class="t2">
<img class="img-fluid" src="assets/img/award.webp" alt="">
</div>
<p class="maintext">Developer of the Year - Luxury</p>
<p class="subtext">Realty + Excellence Awards - 2024, Hyderabad</p>
</div>

<div class="item">
<div class="t2">
<img class="img-fluid" src="assets/img/award.webp" alt="">
</div>
<p class="maintext">Real Estate Thought Leader 2023</p>
<p class="subtext">The Business Awards Hyderabad</p>
</div>

<div class="item">
<div class="t2">
<img class="img-fluid" src="assets/img/award.webp" alt="">
</div>
<p class="maintext">Best Luxury Villas(Ongoing) 2023</p>
<p class="subtext">The Business Awards Hyderabad</p>
</div>

<div class="item">
<div class="t2">
<img class="img-fluid" src="assets/img/award.webp" alt="">
</div>
<p class="maintext">Certificate of Achievement - 2020</p>
<p class="subtext">India Property Common Floor Realty</p>
</div>

<div class="item">
<div class="t2">
<img class="img-fluid" src="assets/img/award.webp" alt="">
</div>
<p class="maintext">Certificate of Excellence - 2019</p>
<p class="subtext">Create Telangana(CREDAI)</p>
</div>

</div>

</div>
</div>
</div>
</section>


<section class="sec-cont">
<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

<div class="cont-form-div">

<h2>Enquire Now</h2>

<form action="mail.php" method="POST">
<div class="row">
<div class="form-group col-md-6 mb-4">
<input type="text" name="name" class="form-control" id="name" placeholder="Name" required >
<div class="help-block with-errors"></div>
</div>

<div class="form-group col-md-6 mb-4">
<input type="email" name="email" class="form-control" id="email" placeholder="Email" required >
<div class="help-block with-errors"></div>
</div>

<div class="form-group col-md-6 mb-4">
<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required >
<div class="help-block with-errors"></div>
</div>

<div class="form-group col-md-6 mb-4">
<select class="form-select" id="interestedin" name="interestedin" required>
<option value="" disabled selected hidden>Select Project</option>
<option value="Mayfair Sunrise">Mayfair Sunrise</option>
<option value="Shree Convention">Mayfair Supreme</option>
<option value="Upcoming Projects">Upcoming Projects</option>
</select>
<div class="help-block with-errors"></div>
</div>

<div class="form-group col-md-12 mb-4">
<textarea name="message" class="form-control" id="msg" rows="4" placeholder="Write a Message"></textarea>
<div class="help-block with-errors"></div>
</div>

<div class="col-md-12 col-12">
<div class="form-group mtb-5 d-flex">
<input type="checkbox" id="disclaimer1" name="check"  class="form-check-input" checked required> 
<label class="dis" for="disclaimer1">Disclaimer: I authorize Greenmark Developers Pvt Ltd and its representatives to call, SMS, Email, or WhatsApp me about its products and offers. This consent overrides any registration for DND / NDNC.</label>
</div>
</div>

<input type="hidden" id="token1" name="token">

<input type="hidden" name="utm_source" value="">
<input type="hidden" name="utm_medium" value="">
<input type="hidden" name="utm_campaign" value="">
<input type="hidden" name="utm_term" value="">
<input type="hidden" name="keyword" value="">
<input type="hidden" name="matchtype" value="">
<input type="hidden" name="device" value="">
<input type="hidden" name="fullurl" value="">

<div class="col-md-12 text-center">
<button type="submit" class="btn-default">Submit Now</button>
</div>

</div>
</form>
</div>

</div>
</div>
</div>
</section>


<?php include_once('footer.php')?>

</div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- aos -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script> AOS.init(); </script>

<!-- wow -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
new WOW().init();
</script>

<!-- slick -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
$(document).ready(function(){
$('#slider').slick({
slidesToShow: 3,
slidesToScroll: 1,
centerMode: true,
centerPadding: '0px',
arrows: true,
autoplay: true,
autoplaySpeed: 2500,
focusOnSelect: true,
prevArrow: '<button type="button" class="slick-prev"></button>',
nextArrow: '<button type="button" class="slick-next"></button>'
});
});
</script>


<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function(){
$("#owl-carousel").owlCarousel({
items: 3,
loop: true,
margin: 20,
nav: true,
dots: false,
center: true,
autoplay: true,
autoplayTimeout: 5000,
responsive: {
0: {
items: 1
},
768: {
items: 2
},
992: {
items: 3
}
}
});
});
</script>


<!-- secd script -->
<script>
const links = document.querySelectorAll('.content-link')
const info = document.querySelectorAll('.content-info')

links.forEach(link =>{
link.addEventListener('click', function(e){
e.preventDefault();
info.forEach(info => info.classList.remove('active')); //this code hide all content
links.forEach(link => link.classList.remove('active')); //this code  remove active class from all link
const target = document.querySelector(this.dataset.target);
if (target) {
target.classList.add('active');
}
this.classList.add('active');
});
});
</script>

<!-- aos -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script> AOS.init(); </script>


<script>
document.addEventListener("DOMContentLoaded", function () {
let counted = false;

const observer = new IntersectionObserver(function (entries) {
entries.forEach(function (entry) {
if (entry.isIntersecting && !counted) {
counted = true;

$('.counter').each(function () {
const $this = $(this);
const target = +$this.data('target');

$this.prop('Counter', 0).animate({
Counter: target
}, {
duration: 2000,
easing: 'swing',
step: function (now) {
$this.text(Math.ceil(now));
}
});
});

observer.disconnect(); // Stop observing once triggered
}
});
}, { threshold: 0.4 });

const section = document.querySelector(".secc");
if (section) observer.observe(section);
});
</script>


<script>
const sections = document.querySelectorAll('.section');
const observer = new IntersectionObserver(entries => {
entries.forEach(entry => {
if (entry.isIntersecting) {
entry.target.classList.add('active');
} else {
entry.target.classList.remove('active');
}
});
}, {
threshold: 0.5
});

sections.forEach(section => {
observer.observe(section);
});
</script>
<!-- fancybox -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".mySwiper", {
slidesPerView: 3,
centeredSlides: true, 
loop: true,
initialSlide: 1,
observer: true,
observeParents: true,
autoplay: true,
navigation: {
nextEl: ".swiper-button-next",
prevEl: ".swiper-button-prev",
},
breakpoints: {
// mobile
0: {
slidesPerView: 1,
centeredSlides: false
},
// tablets
769: {
slidesPerView: 1,
centeredSlides: false
},
1044: {
slidesPerView: 1,
centeredSlides: false
},
// desktops
1200: {
slidesPerView: 3,
centeredSlides: true
}
}
});
window.addEventListener("load", function () {
swiper.update();
});
swiper.update();
$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function () {
swiper.updateSize();
swiper.updateSlides();
swiper.updateProgress();
swiper.update();
});

</script>


</body>
</html>
