<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iqautotrade</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">
  <link href="img/favicon.ico" rel="icon">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<style>

body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}

a {
  color: #ffc451;
  text-decoration: none;
}

a:hover {
  color: #ffd584;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #ffc451;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 28px;
  color: #151515;
  line-height: 0;
}

.back-to-top:hover {
  background: #151515;
}

.back-to-top:hover i {
  color: #ffc451;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: #151515;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 0px);
  left: calc(50% - 30px);
  border: 6px solid #ffc451;
  border-top-color: #151515;
  border-bottom-color: #151515;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: animate-preloader 1s linear infinite;
  animation: animate-preloader 1s linear infinite;
}

@-webkit-keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
}

#header.header-scrolled, #header.header-inner-pages {
  background: rgba(0, 0, 0, 0.8);
}

#header .logo {
  font-size: 32px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
}

#header .logo a {
  color: #fff;
}

#header .logo a span {
  color: #ffc451;
}

#header .logo img {
  max-height: 40px;
}

/*--------------------------------------------------------------
#  Get Startet Button
--------------------------------------------------------------*/
.get-started-btn {
  color: #fff;
  border-radius: 4px;
  padding: 7px 25px 8px 25px;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
  display: inline-block;
  border: 2px solid #ffc451;
}

.get-started-btn:hover {
  background: #ffbb38;
  color: #343a40;
}

@media (max-width: 992px) {
  .get-started-btn {
    padding: 7px 20px 8px 20px;
    margin-right: 15px;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #ffc451;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  color: #151515;
  font-weight: 400;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  background-color: #ffc451;
}

.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }
  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a {
  padding: 10px 20px;
  font-size: 15px;
  color: #151515;
}

.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #151515;
  background-color: #ffc451;
}

.navbar-mobile .getstarted {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
  color: #151515;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  background-color: #ffc451;
}

.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  background: url("slide.jpg") top center;
  background-size: cover;
  position: relative;
}

#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .container {
  position: relative;
  padding-top: 74px;
  text-align: center;
}

#hero h1 {
  margin: 0;
  font-size: 56px;
  font-weight: 700;
  line-height: 64px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}

#hero h1 span {
  color: #ffc451;
}

#hero h2 {
  color: rgba(255, 255, 255, 0.9);
  margin: 10px 0 0 0;
  font-size: 24px;
}

#hero .icon-box {
  padding: 30px 20px;
  transition: ease-in-out 0.3s;
  border: 1px solid rgba(255, 255, 255, 0.3);
  height: 100%;
  text-align: center;
}

#hero .icon-box i {
  font-size: 32px;
  line-height: 1;
  color: #ffc451;
}

#hero .icon-box h3 {
  font-weight: 700;
  margin: 10px 0 0 0;
  padding: 0;
  line-height: 1;
  font-size: 20px;
  line-height: 26px;
}

#hero .icon-box h3 a {
  color: #fff;
  transition: ease-in-out 0.3s;
}

#hero .icon-box h3 a:hover {
  color: #ffc451;
}

#hero .icon-box:hover {
  border-color: #ffc451;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero {
    height: auto;
  }
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 20px;
    line-height: 24px;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-title {
  padding-bottom: 40px;
}

.section-title h2 {
  font-size: 14px;
  font-weight: 500;
  padding: 0;
  line-height: 1px;
  margin: 0 0 5px 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #aaaaaa;
  font-family: "Poppins", sans-serif;
}

.section-title h2::after {
  content: "";
  width: 120px;
  height: 1px;
  display: inline-block;
  background: #ffde9e;
  margin: 4px 10px;
}

.section-title p {
  margin: 0;
  margin: 0;
  font-size: 36px;
  font-weight: 700;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  color: #151515;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about .content h3 {
  font-weight: 700;
  font-size: 28px;
  font-family: "Poppins", sans-serif;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding: 0 0 8px 26px;
  position: relative;
}

.about .content ul i {
  position: absolute;
  font-size: 20px;
  left: 0;
  top: -3px;
  color: #ffc451;
}

.about .content p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Clients
--------------------------------------------------------------*/
.clients {
  padding-top: 20px;
}

.clients .swiper-slide img {
  opacity: 0.5;
  transition: 0.3s;
  filter: grayscale(100);
}

.clients .swiper-slide img:hover {
  filter: none;
  opacity: 1;
}

.clients .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.clients .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  background-color: #ddd;
}

.clients .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ffc451;
}

/*--------------------------------------------------------------
# Features
--------------------------------------------------------------*/
.features {
  padding-top: 20px;
}

.features .icon-box {
  padding-left: 15px;
}

.features .icon-box h4 {
  font-size: 20px;
  font-weight: 700;
  margin: 5px 0 10px 60px;
}

.features .icon-box i {
  font-size: 48px;
  float: left;
  color: #ffc451;
}

.features .icon-box p {
  font-size: 15px;
  color: #848484;
  margin-left: 60px;
}

.features .image {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 400px;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  text-align: center;
  border: 1px solid #ebebeb;
  padding: 80px 20px;
  transition: all ease-in-out 0.3s;
  background: #fff;
}

.services .icon-box .icon {
  margin: 0 auto;
  width: 64px;
  height: 64px;
  background: #ffc451;
  border-radius: 4px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
  transition: 0.3s;
}

.services .icon-box .icon i {
  color: #151515;
  font-size: 28px;
  transition: ease-in-out 0.3s;
}

.services .icon-box h4 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 24px;
}

.services .icon-box h4 a {
  color: #151515;
  transition: ease-in-out 0.3s;
}

.services .icon-box h4 a:hover {
  color: #ffc451;
}

.services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .icon-box:hover {
  border-color: #fff;
  box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
  transform: translateY(-10px);
}

/*--------------------------------------------------------------
# Cta
--------------------------------------------------------------*/
.cta {
  background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)), url("../img/cta-bg.jpg") fixed center center;
  background-size: cover;
  padding: 60px 0;
}

.cta h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

.cta p {
  color: #fff;
}

.cta .cta-btn {
  font-family: "Raleway", sans-serif;
  font-weight: 600;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  border-radius: 4px;
  transition: 0.5s;
  margin-top: 10px;
  border: 2px solid #fff;
  color: #fff;
}

.cta .cta-btn:hover {
  background: #ffc451;
  border-color: #ffc451;
  color: #151515;
}

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 20px auto;
  list-style: none;
  text-align: center;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 15px 10px 15px;
  font-size: 14px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #444444;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
  border-radius: 3px;
}

.portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
  color: #151515;
  background: #ffc451;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  background: rgba(21, 21, 21, 0.6);
}

.portfolio .portfolio-wrap::before {
  content: "";
  background: rgba(21, 21, 21, 0.6);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}

.portfolio .portfolio-wrap img {
  transition: all ease-in-out 0.3s;
}

.portfolio .portfolio-wrap .portfolio-info {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: flex-start;
  padding: 20px;
}

.portfolio .portfolio-wrap .portfolio-info h4 {
  font-size: 20px;
  color: #fff;
  font-weight: 600;
}

.portfolio .portfolio-wrap .portfolio-info p {
  color: rgba(255, 255, 255, 0.7);
  font-size: 14px;
  text-transform: uppercase;
  padding: 0;
  margin: 0;
  font-style: italic;
}

.portfolio .portfolio-wrap .portfolio-links {
  text-align: center;
  z-index: 4;
}

.portfolio .portfolio-wrap .portfolio-links a {
  color: #fff;
  margin: 0 5px 0 0;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
  color: #ffc451;
}

.portfolio .portfolio-wrap:hover::before {
  opacity: 1;
}

.portfolio .portfolio-wrap:hover img {
  transform: scale(1.2);
}

.portfolio .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #ffc451;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ffc451;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(21, 21, 21, 0.08);
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li + li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}

/*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
.counts .content {
  padding: 30px 0;
}

.counts .content h3 {
  font-weight: 700;
  font-size: 34px;
  color: #151515;
}

.counts .content p {
  margin-bottom: 0;
}

.counts .content .count-box {
  padding: 20px 0;
  width: 100%;
}

.counts .content .count-box i {
  display: block;
  font-size: 36px;
  color: #ffc451;
  float: left;
}

.counts .content .count-box span {
  font-size: 36px;
  line-height: 30px;
  display: block;
  font-weight: 700;
  color: #151515;
  margin-left: 50px;
}

.counts .content .count-box p {
  padding: 15px 0 0 0;
  margin: 0 0 0 50px;
  font-family: "Raleway", sans-serif;
  font-size: 14px;
  color: #3b3b3b;
}

.counts .content .count-box a {
  font-weight: 600;
  display: block;
  margin-top: 20px;
  color: #3b3b3b;
  font-size: 15px;
  font-family: "Poppins", sans-serif;
  transition: ease-in-out 0.3s;
}

.counts .content .count-box a:hover {
  color: #626262;
}

.counts .image {
  background: url("../img/counts-img.jpg") center center no-repeat;
  background-size: cover;
  min-height: 400px;
}

@media (max-width: 991px) {
  .counts .image {
    text-align: center;
  }
  .counts .image img {
    max-width: 80%;
  }
}

@media (max-width: 667px) {
  .counts .image img {
    max-width: 100%;
  }
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials {
  padding: 80px 0;
  background: url("../img/testimonials-bg.jpg") no-repeat;
  background-position: center center;
  background-size: cover;
  position: relative;
}

.testimonials::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.7);
}

.testimonials .section-header {
  margin-bottom: 40px;
}

.testimonials .testimonial-item {
  text-align: center;
  color: #fff;
}

.testimonials .testimonial-item .testimonial-img {
  width: 100px;
  border-radius: 50%;
  border: 6px solid rgba(255, 255, 255, 0.15);
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #fff;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #ddd;
  margin: 0 0 15px 0;
}

.testimonials .testimonial-item .quote-icon-left, .testimonials .testimonial-item .quote-icon-right {
  color: rgba(255, 255, 255, 0.6);
  font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
  color: #eee;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.4);
  opacity: .5;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ffc451;
  opacity: 1;
}

@media (min-width: 1024px) {
  .testimonials {
    background-attachment: fixed;
  }
}

@media (min-width: 992px) {
  .testimonials .testimonial-item p {
    width: 80%;
  }
}

/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team {
  background: #fff;
  padding: 60px 0;
}

.team .member {
  margin-bottom: 20px;
  overflow: hidden;
  border-radius: 5px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}

.team .member .social {
  position: absolute;
  left: 0;
  bottom: 30px;
  right: 0;
  opacity: 0;
  transition: ease-in-out 0.3s;
  text-align: center;
}

.team .member .social a {
  transition: color 0.3s;
  color: #151515;
  margin: 0 3px;
  border-radius: 4px;
  width: 36px;
  height: 36px;
  background: rgba(255, 255, 255, 0.8);
  transition: ease-in-out 0.3s;
  color: #484848;
  display: inline-flex;
  justify-content: center;
  align-items: center;
}

.team .member .social a:hover {
  color: #151515;
  background: #ffc451;
}

.team .member .social i {
  font-size: 18px;
  line-height: 0;
}

.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #151515;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  font-weight: 400;
  color: #aaaaaa;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}

.team .member:hover .social {
  opacity: 1;
  bottom: 15px;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info {
  width: 100%;
  background: #fff;
}

.contact .info i {
  font-size: 20px;
  background: #ffc451;
  color: #151515;
  float: left;
  width: 44px;
  height: 44px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 4px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #151515;
}

.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #484848;
}

.contact .info .email, .contact .info .phone {
  margin-top: 40px;
}

.contact .php-email-form {
  width: 100%;
  background: #fff;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 4px;
}

.contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
  border-color: #ffc451;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type="submit"] {
  background: #ffc451;
  border: 0;
  padding: 10px 24px;
  color: #151515;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #ffcd6b;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background: whitesmoke;
  min-height: 40px;
  margin-top: 74px;
}

.breadcrumbs h2 {
  font-size: 28px;
  font-weight: 400;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
}

.breadcrumbs ol li + li {
  padding-left: 10px;
}

.breadcrumbs ol li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: #2f2f2f;
  content: "/";
}

@media (max-width: 992px) {
  .breadcrumbs {
    margin-top: 68px;
  }
  .breadcrumbs .d-flex {
    display: block !important;
  }
  .breadcrumbs ol {
    display: block;
  }
  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: black;
  padding: 0 0 30px 0;
  color: #fff;
  font-size: 14px;
}

#footer .footer-top {
  background: #151515;
  border-bottom: 1px solid #222222;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 28px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
  text-transform: uppercase;
}

#footer .footer-top .footer-info h3 span {
  color: #ffc451;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #fff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #292929;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 4px;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #ffc451;
  color: #151515;
  text-decoration: none;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #ffc451;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #fff;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  color: #ffc451;
}

#footer .footer-top .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 4px;
}

#footer .footer-top .footer-newsletter form input[type="email"] {
  border: 0;
  padding: 4px;
  width: calc(100% - 110px);
}

#footer .footer-top .footer-newsletter form input[type="submit"] {
  position: absolute;
  top: 0;
  right: -2px;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #ffc451;
  color: #151515;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
}

#footer .footer-top .footer-newsletter form input[type="submit"]:hover {
  background: #ffcd6b;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}

  .x{
  background-color: black; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius:20px;

}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid black;
}

.button1:hover {
  background-color: #ffc451;;
  color: white;
}
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h3 class="logo me-auto me-lg-0"><a href="index.php"><img src="1.png" alt="">iqautotrade</a></h3>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
        
          <li><a class="nav-link scrollto" href="#services">  Features</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          
       <li ><a class="nav-link scrollto" href="home.php" >Signin/Signup</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>The home of digital asset trading<span>.</span></h1>
          <h2> iqautotrade is the most trusted
            cryptocurrency exchange known
            for its next-level security.Join millions who've already discovered smarter investing in multiple types of assets. Choose an investment product to start with.</h2>
          <br> <a href="home.php"><button class="x button1" style="text-align: center;width:200px;"> <strong>Signin/Signup</strong></button></a> 
        </div>
      </div>

     

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="asset/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
           <h1>What We Do</h1>
           <p style="text-align:justify;">
            iqautotrade offers state-of-the-art trading technology and online electronic brokerage services to active individual and institutional traders in the U.S. and worldwide. The company’s innovative trading and analysis platform provides one-click access to all major U.S. exchanges and market centers, while its expansive product offering enables clients to design, test, optimize, monitor and automate their own custom equities, options and futures trading strategies.
           </p>
           <p style="text-align:justify;"> iqautotrade provides personalized support from highly trained, fully licensed brokerage professionals, as well as a vast array of educational offerings designed to help clients improve their trading skills.</p>
            <p style="text-align:justify;">
              We’re proud to offer the lowest costs on your crypto trading among these global competitors.We place a great effort into developing and maintaining robust relationships with dozens of reputable banks across the key markets.
            </p>
            <p style="text-align:justify;">We continue to build new services and improve upon existing ones. Earning your trust is always on our mind. Throughout our company’s history, effective and trustworthy collaboration with regulators has always been a top priority. Our teams are constantly working to maintain our compliance with evolving regulatory requirements and financial industry standards.</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="image col-lg-6" style='background-image: url("ab.jpg");' data-aos="fade-right"></div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-receipt"></i>
          <h4>Customer centricity</h4>
          <p>we put our customers at the core of our business. We’re passionate about creating services that support customers with a great experience toward their goals. Do we seek to innovate? Certainly. And before all endeavors, we ask our team to start with three simple questions: Do I understand the customer’s needs? Am I minimizing customer efforts? How does this increase customer value? If they’re ready to answer, then we go ahead!</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-cube-alt"></i>
          <h4>Accountability</h4>
          <p>We believe that by inspiring our team and trusting them, we create opportunities for iqautotrade.com. We prefer free mindsets instead of detailed instructions where we can avoid them. The only golden rule we set is to be accountable — for actions we take, behaviors we demonstrate, and decisions we make.</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-images"></i>
          <h4>Teamwork</h4>
          <p>By treating others with respect, listening, and hearing, supporting each other, we stick to basic principles of human relationships. We value teamwork over personal ambition as the only way to success. What are we doing? We’re building a great team that’s a pleasure to work with.</p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bx bx-shield"></i>
          <h4>Focus on the result</h4>
          <p>Our individual and team achievements are meaningful when they’re aligned with our company’s goals. We’re inspired by the things we do and the people for whom we do them. And we’re passionate about creating the best possible outcomes for our customers.</p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h4>FEATURES</h4>
      <h2>  World class trading platform
        </h2>
      
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4><a href="">Exchange</a></h4>
          <p> We allowing users to easily exchange Bitcoin, Ethereum, EOS, Litecoin, Ripple, NEO and many other digital assets with minimal slippage.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href="">Customizable interface</a></h4>
          <p>Organize your workspace according to your needs: compose your layout, choose between themes, and set up notifications.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4><a href="">Security</a></h4>
          <p>Security of user information and funds is our first priority. Learn more about our security features and integrations.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4><a href="">Margin trading</a></h4>
          <p>We allows up to 10x leverage trading by providing traders with access to the peer-to-peer funding market.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-slideshow"></i></div>
          <h4><a href="">Margin funding</a></h4>
          <p>Liquidity providers can generate yield by providing funding to traders wanting to trade with leverage. Funding is traded on an order book at various rates and periods.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-arch"></i></div>
          <h4><a href="">Order types</a></h4>
          <p>offers a suite of order types to give traders the tools they need for every scenario. Discover more about our most advanced Algorithmic orders types.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Team</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="asset/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="asset/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="asset/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="asset/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>IQAUTOTRADE<span>.</span></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +13328957593<br>
                <strong>Email:</strong> support@iqautotrade.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#service">Features</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
          
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Main links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://iqautotrade.com/home.php">Signin/Signup</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe our newslatter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iqautotrade</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/aos/aos.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>
  <script src="asset/vendor/purecounter/purecounter.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60f2b7a9649e0a0a5ccca76c/1faq1qrrs';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>