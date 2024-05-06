<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<style type="text/css">
        header .item {
  height: 100vh;
  position: relative;
}
header .item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
header .item .cover {
  padding: 75px 0;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.6);
  display: flex;
  align-items: center;
}
header .item .cover .header-content {
  position: relative;
  padding: 56px;
  overflow: hidden;
}
header .item .cover .header-content .line {
  content: "";
  display: inline-block;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  position: absolute;
  border: 9px solid #fff;
  -webkit-clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
  clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
}
header .item .cover .header-content h2 {
  font-weight: 300;
  font-size: 35px;
  color: #fff;
}
header .item .cover .header-content h1 {
  font-size: 56px;
  font-weight: 600;
  margin: 5px 0 20px;
  word-spacing: 3px;
  color: #fff;
}
header .item .cover .header-content h4 {
  font-size: 24px;
  font-weight: 300;
  line-height: 36px;
  color: #fff;
}
header .owl-item.active h1 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInDown;
  animation-delay: 0.3s;
}
header .owl-item.active h2 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInDown;
  animation-delay: 0.3s;
}
header .owl-item.active h4 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInUp;
  animation-delay: 0.3s;
}
header .owl-item.active .line {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInLeft;
  animation-delay: 0.3s;
}
header .owl-nav .owl-prev {
  position: absolute;
  left: 15px;
  top: 43%;
  opacity: 0;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  background: rgba(0, 0, 0, 0.5) !important;
  width: 40px;
  cursor: pointer;
  height: 40px;
  position: absolute;
  display: block;
  z-index: 1000;
  border-radius: 0;
}
header .owl-nav .owl-prev span {
  font-size: 1.6875rem;
  color: #fff;
}
header .owl-nav .owl-prev:focus {
  outline: 0;
}
header .owl-nav .owl-prev:hover {
  background: #000 !important;
}
header .owl-nav .owl-next {
  position: absolute;
  right: 15px;
  top: 43%;
  opacity: 0;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  background: rgba(0, 0, 0, 0.5) !important;
  width: 40px;
  cursor: pointer;
  height: 40px;
  position: absolute;
  display: block;
  z-index: 1000;
  border-radius: 0;
}
header .owl-nav .owl-next span {
  font-size: 1.6875rem;
  color: #fff;
}
header .owl-nav .owl-next:focus {
  outline: 0;
}
header .owl-nav .owl-next:hover {
  background: #000 !important;
}
header:hover .owl-prev {
  left: 0px;
  opacity: 1;
}
header:hover .owl-next {
  right: 0px;
  opacity: 1;
}

</style>
<!-- Slider Banner-->
    <header>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('images/banner/new-banner-img-1.jpg') }}" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>Discover the future of workspace with</h2>
                            <h1 class="mb-0">WE WORK BUSINESS CENTER</h1>
                            <h4 class="text-center">ENDLESS SOLUTIONS</h4>
                        </div>
                    </div>
                </div>
            </div>                    
            <div class="item">
                <img src="{{ asset('images/banner/new-banner-img-2.jpg') }}" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h1>Premier Office Spaces</h1>
                            <h4>Discover the essence of luxury and efficiency at We Work Business Center. </h4>
                        </div>
                    </div>
                 </div>
            </div>                
            <div class="item">
                <img src="{{ asset('images/banner/new-banner-img-3.jpg') }}" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h1>Co-working Space</h1>
                            <h4>Elevate your productivity in our state-of-the-art Co-working Space.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End Slider Banner -->

    <script src="{{ asset('js/owl.carousel.js')}}"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            dots:false,
            nav:true,
            mouseDrag:true,
            autoplay:true,
            animateOut: 'slideOutRight',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    </script>