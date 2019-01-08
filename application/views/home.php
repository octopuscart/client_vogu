<?php
$this->load->view('layout/header');
?>

<!--youtube video-->
<!--<link href="https://pupunzi.com/mb.components/mb.YTPlayer/demo/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
<script src="https://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
<script src="https://pupunzi.com/mb.components/mb.YTPlayer/demo/assets/apikey.js"></script>
<div id="myPlayer" style="background: #000; height: 600px; width: 100%; position: relative; " ></div>
<div id="customElement" class="player" data-property="{videoURL:'qvuILbcXlg8',containment:'#myPlayer', showControls:true, autoPlay:true, loop:false, mute:true, startAt:0, opacity:1, addRaster:true, quality:'default'}">
    <div id="testText">
        <h1>jQuery.mb.YTPlayer</h1>
        <h2>An HTML5 Background player <br>for YouTube videos</h2>
    </div>
</div>-->
<script>
    var myPlayer;
    jQuery(function () {

        var options = {
            mobileFallbackImage: "http://www.hdwallpapers.in/walls/pink_cosmos_flowers-wide.jpg",
            playOnlyIfVisible: false
        };

//        myPlayer = jQuery(".player").YTPlayer(options);
    });
</script>
<!--end of youtube video-->


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<!--<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>-->




<div class="home-section fullscreen-container" id="home">
    <div class="fullscreenbanner-s bg-dark">
        <ul>






            <li data-transition="fade" data-slotamount="7" data-title="Black Slide">

                <img src="<?php echo base_url(); ?>assets/theme/slider/slider3.jpg" alt="">

                <div class="caption customin customout tp-resizeme hs-line-8 no-transp font-alt" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="-100" 
                     data-customin="x:-50;y:-300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 

                     data-speed="800" 
                     data-start="1000" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">

                    HAND MADE AND HAND CUT

                </div>

                <div class="caption customin customout tp-resizeme hs-line-12 font-alt" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="0" 
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                     data-speed="800" 
                     data-start="1300" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">

                    ORDER TO MADE!


                </div>


                <div class="caption customin customout tp-resizeme" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="120" 
                     data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                     data-speed="800" 
                     data-start="1500" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">

                    <div class="local-scroll">

                        <a href="https://test2.voguetailorhk.com/about.php" class="btn btn-mod btn-border-w btn-medium btn-round">
                            See More
                        </a>

                        <span>&nbsp;</span>

                        <a href="https://test2.voguetailorhk.com/" class="btn btn-mod btn-border-w btn-medium btn-round">
                            Show Now
                        </a>

                    </div>

                </div>

            </li>



            <li data-transition="fade" data-slotamount="7" data-title="Black Slide">

                <img src="<?php echo base_url(); ?>assets/theme/slider/slider8.jpg" alt="">

                <div class="caption customin customout tp-resizeme hs-line-8 no-transp font-alt" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="-100" 
                     data-customin="x:-50;y:-300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 

                     data-speed="800" 
                     data-start="1000" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">

                    BESPOKE OR MADE TO MEASURE SUITS & FORMAL WEARS
                </div>

                <div class="caption customin customout tp-resizeme hs-line-12 font-alt" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="0" 
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                     data-speed="800" 
                     data-start="1300" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn" style="font-size: 35px;">

                    HONG KONG LEADING BESPOKE CLOTHIER



                </div>


                <div class="caption customin customout tp-resizeme" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="120" 
                     data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                     data-speed="800" 
                     data-start="1500" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">

                    <div class="local-scroll">

                        <a href="https://test2.voguetailorhk.com/about.php" class="btn btn-mod btn-border-w btn-medium btn-round">
                            See More
                        </a>

                        <span>&nbsp;</span>

                        <a href="https://test2.voguetailorhk.com/" class="btn btn-mod btn-border-w btn-medium btn-round">
                            Show Now
                        </a>

                    </div>

                </div>

            </li>


            <li data-transition="fade" data-slotamount="7" data-title="Black Slide">

                <img src="<?php echo base_url(); ?>assets/theme/slider/15.jpg" alt="">

                <div class="caption customin customout tp-resizeme hs-line-8 no-transp font-alt" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="-100" 
                     data-customin="x:-50;y:-300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 

                     data-speed="800" 
                     data-start="1000" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn" style="color: black">

                    TAILORING WITH THE BEST IN CUT, CLOTH & CREATION.

                </div>

                <div class="caption customin customout tp-resizeme hs-line-12 font-alt" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="0" 
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                     data-speed="800" 
                     data-start="1300" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn" style="font-size: 30px;color: black">

                    EXPERTISE IN CRAFTING SARTORIAL ELEGANCE


                </div>


                <div class="caption customin customout tp-resizeme" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="120" 
                     data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                     data-speed="800" 
                     data-start="1500" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">

                    <div class="local-scroll">

                        <a href="https://test2.voguetailorhk.com/about.php" class="btn btn-mod btn-border-b btn-medium btn-round">
                            See More
                        </a>

                        <span>&nbsp;</span>

                        <a href="https://test2.voguetailorhk.com/" class="btn btn-mod btn-border-b btn-medium btn-round">
                            Show Now
                        </a>

                    </div>

                </div>

            </li>



            <li data-transition="fade" data-slotamount="7" data-title="Black Slide">

                <img src="<?php echo base_url(); ?>assets/theme/slider/17.jpg" alt="">

                <div class="caption customin customout tp-resizeme hs-line-8 no-transp font-alt" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="-100" 
                     data-customin="x:-50;y:-300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 

                     data-speed="800" 
                     data-start="1000" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">

                    HAND MADE AND HAND CUT

                </div>

                <div class="caption customin customout tp-resizeme hs-line-12 font-alt" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="0" 
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                     data-speed="800" 
                     data-start="1300" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">

                    ORDER TO MADE!


                </div>


                <div class="caption customin customout tp-resizeme" 
                     data-x="center" 
                     data-hoffset="0" 
                     data-y="center" 
                     data-voffset="120" 
                     data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                     data-speed="800" 
                     data-start="1500" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">

                    <div class="local-scroll">

                        <a href="https://test2.voguetailorhk.com/about.php" class="btn btn-mod btn-border-w btn-medium btn-round">
                            See More
                        </a>

                        <span>&nbsp;</span>

                        <a href="https://test2.voguetailorhk.com/" class="btn btn-mod btn-border-w btn-medium btn-round">
                            Show Now
                        </a>

                    </div>

                </div>

            </li>



            <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-title="Cup of Dream">

                <img src="<?php echo base_url(); ?>assets/theme/slider/slider5.jpg"  alt="">


                <div class="caption customin customout tp-resizeme mediumlarge_light_white" 
                     data-x="center" 
                     data-y="center" 
                     data-voffset="-70"  
                     data-customin="x:-50;y:-300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 

                     data-speed="800" 
                     data-start="1000" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">


                </div>

                <div class="caption customin customout tp-resizeme hs-line-14 font-alt" 
                     data-x="center" 
                     data-y="center" 
                     data-hoffset="20" 
                     data-voffset="40"  
                     data-customin="x:-50;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:0.1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                     data-speed="800" 
                     data-start="1300" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn" style="font-size: 30px;">


                    PREMIERE BESPOKE BOUTIQUES

                </div>


                <div class="caption customin customout tp-resizeme hs-line-8 no-transp font-alt" 
                     data-x="center" 
                     data-y="center" 
                     data-voffset="120"
                     data-customin="x:50;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                     data-speed="800" 
                     data-start="1500" 
                     data-startslide="1" 

                     data-easing="Power4.easeOut" 
                     data-endspeed="500" 
                     data-endeasing="Power4.easeIn">

                    TAILORING WITH THE BEST IN CUT, CLOTH, CREATION
                </div>

            </li>








        </ul>
        <div class="tp-bannertimer tp-bottom"></div> 
    </div>
</div>







<!-- Section -->
<section class="page-section" style="    padding: 40px;">
    <div class="container relative">

        <div class="row">

            <div class="col-md-4 mb-sm-40">
                <div class="alt-features-item align-left" >
                    <div class="alt-features-icon" >

                    </div>
                    <h3 class="font-alt mb-10 mb-xxs-10 alt-features-title_black">   <span class=" icon-recycle"></span> Tailoring services</h3>
                    <div class="alt-features-descr align-left" >

                        Made To Measure<br/>

                        Professional Shanghainese Workmanship<br/>

                        Made In Hong Kong<br/>

                        Professional Alteration<br/>

                        Ready In 24 Hours<br/>

                        <div class="mt-20">
                            <a href="https://test2.voguetailorhk.com/Shop/contactus" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">Schedule Now</a>
                        </div>
                    </div>
                </div>
                    <div class="alt-features-item align-left" style="    margin-top: 100px;">
                        <div class="alt-features-icon" >

                        </div>
                        <h3 class="font-alt mb-10 mb-xxs-10 alt-features-title_black">   <span class=" icon-map"></span> TRIP SCHEDULE</h3>
                        <div class="alt-features-descr align-left" >
                            Our tailors have each cut over 1,000 suits. The collaborative fitting process ensures you will get the suit you want.
                        </div>
                        <div class="mt-20">
                            <a href="https://test2.voguetailorhk.com/Shop/contactus" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">Schedule Now</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-sm-40">
                    <div class="work-full-media mt-0 white-shadow wow fadeInUp">
                        <ul class="clearlist work-full-slider owl-carousel">
                            <li>
                                <img src="<?php echo base_url(); ?>assets/theme/images/shopbg_6.png" alt="" />
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-4 mb-sm-40">

                    <div class="alt-features-item align-left">
                        <div class="alt-features-icon" >
                        </div>
                        <h3 class="font-alt mb-10 mb-xxs-10 alt-features-title_black"> 
                            <span class="icon-scissors"></span> BUILD YOUR SUIT
                        </h3>
                        <div class="alt-features-descr align-left" >
                            Our tailors have each cut over 1,000 suits. The collaborative fitting process ensures you will get the suit you want.
                        </div>
                        <div class="mt-20">
                            <a href="https://test2.voguetailorhk.com/" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">Read More</a>
                        </div>
                    </div>



                    <div class="alt-features-item align-left mt-100" style="    margin-top: 150px;">
                        <div class="alt-features-icon" >
                        </div>
                        <h3 class="font-alt mb-10 mb-xxs-10 alt-features-title_black">  
                            <span class="  icon-basket"></span> DELIVERY</h3>
                        <div class="alt-features-descr align-left" >
                            Suits arrive in 4-6 weeks. Optional second fittings are encouraged to perfect your fit.
                        </div>
                        <div class="mt-20">
                            <a href="https://test2.voguetailorhk.com/" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">Read More</a>
                        </div>
                    </div>
                </div>




            </div>
        </div>
</section>
<!-- End Section -->

<section class="page-section" style="background: url(<?php echo base_url(); ?>assets/theme/images/2.jpg);    background-size: cover;
         background-position: center;    padding: 10px 0;">
    <div class="container relative">
        <h3 class="align-center color_light" data-appear-animation="bounceInLeft" style="color:white;    margin-bottom: 80px;"> WORK PROCESS</h3>



        <!-- Features Grid -->
        <div class="row multi-columns-row alt-features-grid">

            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon" style="color: white;">
                        <span class="icon-layers"></span>
                    </div>
                    <h3 class="alt-features-title font-alt" style="color: white;">Choose Fabric</h3>
                    <div class="alt-features-descr align-center" style="color: white;">
                        Choose any fabric and create own style. Vogue Tailors stock about 15000 fabrics ranging from affordable to exclusive.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->

            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon" style="color: white;">
                        <span class="icon-tools"></span>
                    </div>
                    <h3 class="alt-features-title font-alt" style="color: white;">Get Size</h3>
                    <div class="alt-features-descr align-center" style="color: white;">
                        Let Size and calculate your measurement. Insert you measurements by following easy steps.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->

            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon" style="color: white;">
                        <span class="icon-scissors"></span>
                    </div>
                    <h3 class="alt-features-title font-alt" style="color: white;">Cut to Create</h3>
                    <div class="alt-features-descr align-center" style="color: white;">
                        You can customize your clothes conveniently, And our experienced shanghainese tailor cut and make your new dress.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->



        </div>
        <!-- End Features Grid -->

    </div>
</section>

<!--canvas constraustion-->
<section class="section_offset" style="background: url(<?php echo base_url(); ?>assets/images/middle3.jpg);    margin-bottom: 30px;">
    <div class="container t_align_c">
        <div class="tabs">

            <!--tabs content-->
            <article id="tab-1" data-appear-animation="fadeInUp" data-appear-animation-delay="450">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_20">
                        <img src="<?php echo base_url(); ?>assets/theme/images/standsuit1.png" class="r_corners" alt="" style="  height: 350px;">
                    </div>
                    <div class="col-lg-8 col-md-8 t_align_l fw_light" style="margin-top: 40px">
                        <h3 class="color_dark fw_light m_bottom_15 heading_1" data-appear-animation="bounceInLeft">Why should you buy from us?</h3>
                        <p class="m_bottom_35 heading_2" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Because we provide best tailoring services </p>

                        <p class="m_bottom_15">Vogue Tailors stock about 15000 fabrics ranging from affordable to exclusive. Few bespoke tailors offer such a wide selection on the spot.  </p>

                        </p>

                        <p class="m_bottom_15">
                            Our garments are hand cut and hand stitched down to the smallest detail, to ensure it's comfortable and durable. We even use cloths from some of the finest mills in the world including the very best of British and Italian - the difference being our suits are as affordable as an off-the-peg suit.  </p>
                        </p>




                    </div>
                </div>
            </article>

        </div>
    </div>
</section>















<!-- Testimonials Section -->
<section class="page-section fullwidth-slider" data-background="<?php echo base_url(); ?>assets/theme/images/clients.jpg">

    <!-- -->
    <div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 align-center">
                    <!-- Section Icon -->
                    <div class="section-icon" style="color:white">
                        <span class="icon-quote"></span>
                    </div>
                    <!-- Section Title --><h3 class="small-title font-alt" style="color:white">What people say?</h3>
                    <blockquote class="testimonial white">
                        <p>
                            I always approach to Vogue Tailors for many reasons, one because I know what the quality they give, second because nothing ever fits (Square shoulders, Baggy trousers, bit of a gut) and thirdly because I always look to stand out from the ground. Sometimes before, I needed a wedding suit and I directly approached Vogue Tailors, and I am greatly impressed with what is being made for me. Honesty in giving an advice to customers is the main key point that you will love. Anyone who wants bespoke tailored suit, just go to Vogue Tailors. There is no benefit to ring other tailors. This is my personal experience that I am telling you.
                        </p>
                        <footer class="testimonial-author" style="color:white">
                            TAHSA
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- -->
    <div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 align-center">
                    <!-- Section Icon -->
                    <div class="section-icon">
                        <span class="icon-quote"></span>
                    </div>
                    <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                    <blockquote class="testimonial white">
                        <p>
                            Vogue tailors provide premium quality fabrics, which are from the finest mills from all over the world. They offer various brands of fabrics such as Scabal, Ermenegildo Zegna, Marzoni etc. Vogue Tailors provide high quality tailoring. They are full of ideas, knowledge of running trend, reliable and user-friendly. I would recommend you to go for Vogue tailor for your bespoke tailored suits.
                        </p>
                        <footer class="testimonial-author">
                            MICHAEL
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!--  -->



</section>
<!-- End Testimonials Section -->




<section class="section_offset image_bg_7 mt-20" id="how_it_works">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 m_sm_bottom_30" data-appear-animation="fadeInUp" data-appear-animation-delay="400">
                <div class="iframe_video_wrap">
                    <iframe width="642" height="361" src="https://www.youtube.com/embed/LcbLFNOTW2s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-md-6" data-appear-animation="fadeInUp" data-appear-animation-delay="600">

                <div class="alt-features-item align-left" style="margin-top: 0px;">
                    <div class="alt-features-icon" >

                    </div>
                    <h3 class="font-alt mb-10 mb-xxs-10 alt-features-title_black">   <span class=" icon-recycle"></span> How It Works</h3>
                    <div class="alt-features-descr align-left" >
                        Before the measurements begin we will want to start with a few guidelines in order to obtain the most accurate measurements.  It is ideal for the subject to be in a pair of trousers and shirt that fits well.                </p>
                    </div>

                </div>




                <h3 class="color_light fw_light m_bottom_40 m_xs_top_0"></h3>
                <p class="fs_large fw_light color_light m_bottom_25">
                <div class="row" style="    color: #777;
                     font-size: 12px;
                     font-weight: 300;
                     line-height: 1.86;">
                    <div class="col-md-5 m_bottom_15">
                        <ul class="color_light">
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Chest</li>
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Stomach</li>
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Hips</li>

                        </ul>
                    </div>
                    <div class=" col-md-7  m_bottom_15">
                        <ul class="color_light">
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Shoulder </li>
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Sleeve Length</li>
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Back Length </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-20">
                    <a href="https://test2.voguetailorhk.com/Shop/contactus" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">Schedule Now</a>
                </div>            </div>
        </div>
    </div>
</section>


<section class="page-section fullwidth-slider" data-background="<?php echo base_url(); ?>assets/theme/images/fabricback.jpg" style="padding: 30px">
    <div class="container">
        <h3 class="color_light fw_light m_bottom_15 t_align_c appear-animation bounceInUp appear-animation-visible align-center" data-appear-animation="bounceInUp" style="color:white">ORIGINAL ITALIAN FABRICS</h3>
        <p class="m_bottom_35 t_align_c color_light appear-animation bounceInUp appear-animation-visible align-center" data-appear-animation="bounceInUp" data-appear-animation-delay="200" style="animation-delay: 200ms;    font-size: 15px;
           line-height: 38px;color:white;
           font-weight: 300;">
            Our fabrics are sourced from only a handful of the finest mills across the globe.
            <br/> Every detail is carefully constructed using precision technology and state-of-the-art machinery.   
            <br/>The best men's suits are tailored from the best cloth - this means pure merino wool fabric, <br/>woven in the traditional mills of Italy and England.     </p>

    </div>
</section>


<!-- Section -->
<section class="page-section  bg-scroll" style="padding: 20px 10px;" >
    <div class="container relative">
        <h3 class="align-center" data-appear-animation="bounceInLeft">Our Brands</h3>

        <!-- Features Grid -->
        <div class="item-carousel owl-carousel">


            <?php
            for ($i = 1; $i < 7; $i++) {
                ?>
                <!-- Features Item -->
                <div class="features-item"> 
                    <div class="clients_item db_xs_centered wrapper relative r_corners d_xs_block d_mxs_inline_b">
                        <a href="#" class="d_block  tr_all wrapper r_corners">
                            <img src="<?php echo base_url(); ?>assets/brand/<?php echo $i; ?>.jpg" alt="">
                        </a>
                    </div>
                </div>

                <?php
            }
            ?>






        </div>
        <!-- Features Grid -->

    </div>
</section>
<!-- End Section -->






<?php
$this->load->view('layout/footer');
?>