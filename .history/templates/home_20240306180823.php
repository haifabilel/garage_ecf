<?php
require_once 'head.php';
?>
<!------------ home ------------->
<!-- <section class="home" >
  <div class="container col-xxl-8 px-2 py-6">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
         <img src="./assets/images/cover-blue.jpg" class="d-block mx-lg-auto img-fluid" alt="cover" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
          <h1 class="display-5 fw-bold  lh-1 mb-3">Bienvenue dans le garage Vincent Parrot</h1>
          <p class="lead">Nous vous faisons bénéficier de notre savoir-faire pour la totalité des services liés à vos véhicules, que ce soit la réparation mécanique & la vente des véhicules d'occasion.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="./templates/contact.php"  class="button" id="btn-login" >Contact</a>
    </div>
   </div>  
</section> -->
<section class="home">
<div class="main">
    <!-- ========section slider home starts=========  -->
  <section class="home-section">
    <div class="slider">
        <div class="slider_  slide1">
            <div class="ovelay"></div>
            <div class="slide-detail">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere libero blanditiis ipsa beatae, eum ipsam voluptate illo magni doloribus distinctio!</p>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
            <div class="hero-doc-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <div class="slider_  slide2">
            <div class="ovelay"></div>
            <div class="slide-detail">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere libero blanditiis ipsa beatae, eum ipsam voluptate illo magni doloribus distinctio!</p>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
            <div class="hero-doc-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <div class="slider_  slide3">
            <div class="ovelay"></div>
            <div class="slide-detail">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere libero blanditiis ipsa beatae, eum ipsam voluptate illo magni doloribus distinctio!</p>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
        </div>
      <div class="left-arrow"><i class="bi bi-arrow-left-circle"></i></div>
      <div class="right-arrow"><i class="bi bi-arrow-right-circle"></i></div>
    </div>
  </section>
</div>
.home-section{
    position: relative;
    margin-bottom: 2rem;
    margin-top: -4rem;
}
.slider{
    max-height: 82vh;
    width:100%;
    display:flex;
    overflow-x: hidden;
    overflow-y:hidden;
    scroll-snap-type: x mandatory;
    margin-top: 45px;
}
.slider_{
   height: 80vh;
   min-width: 100vw;
   width:100%;
   scroll-snap-align: start;
   background-position: center;
   background-size: cover;
   position:relative;
}
.slider .slide-detail{
    position: absolute;
    top:30%;
    left:20%;
    text-align: center;
}
.slider .slide-detail h1{
    position: relative;
    color:#80005e;
    margin-left: -5rem;
}
.slider .slide-detail h1::before{
    position: absolute;
    content:'';
    width:380px;
    height:1px;
    bottom:-40%;
    left:20%;
    background: #e2e2e244;
}
.slider .slide-detail h1::after{
    position: absolute;
    content:'';
    width:10px;
    height:10px;
    bottom:-50%;
    left:50%;
    border-radius:50%;
    background: #f7b90f;
}
.slider .slide-detail p{
    font-size: 14px;
    color:#80005e;
    margin-top:2rem ;
    margin-bottom:2rem;
    margin-left: -7rem;
}
.slide1{
    background-image: url(../uploads/images/birth_candle.jpg);   
}
.slide2{
    background-image: url(../uploads/images/slider4.jpg);
    background-position:center;
}
.slide3{
    background-image: url(../uploads/images/slider3.jpg);  
}
.left-arrow,
.right-arrow{
position:absolute;
top:50%;
transform: translateY(-50%);
font-size: 2rem;
width:40px;
height:40px;
border-radius: 50%;
color:#fff;
z-index: 2;
}
.right-arrow{
   right: 1rem; 
}
.left-arrow{
    left: 1rem; 
 }