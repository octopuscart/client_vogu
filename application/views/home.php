<?php
$this->load->view('layout/header_home');
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
    <div class="fullscreenbanner bg-dark">
        <ul>



            <li data-transition="fade" data-slotamount="7" data-title="Black Slide">

                <img src="<?php echo base_url(); ?>assets/theme/slider/slider1.jpg" alt="">

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

                    Welcome To

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

                    Vogue Tailors


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

                        <a href="<?php echo site_url("Shop/aboutus"); ?>" class="btn btn-mod btn-border-w btn-medium btn-round">
                            About Us
                        </a>



                    </div>

                </div>

            </li>


            <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-title="Cup of Dream">

                <img src="<?php echo base_url(); ?>assets/theme/slider/slider2_1.jpg"  alt="">


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


                    HONG KONG LEADING BESPOKE CLOTHIER

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

                    BESPOKE OR MADE TO MEASURE SUITS & FORMAL WEARS
                </div>

            </li>



            <li data-transition="fade" data-slotamount="7" data-title="Black Slide">

                <img src="<?php echo base_url(); ?>assets/theme/slider/slider8_1.jpg" alt="">

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

                        <a href="<?php echo site_url("Shop/aboutus"); ?>" class="btn btn-mod btn-border-w btn-medium btn-round">
                            See More
                        </a>

                        <span>&nbsp;</span>

                        <a href="<?php echo site_url("Product/ProductList/2/0"); ?>" class="btn btn-mod btn-border-w btn-medium btn-round">
                            Show Now
                        </a>

                    </div>

                </div>

            </li>


            <li data-transition="fade" data-slotamount="7" data-title="Black Slide">

                <img src="<?php echo base_url(); ?>assets/theme/slider/15_1.jpg" alt="">

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

                        <a href="<?php echo site_url("Shop/aboutus"); ?>" class="btn btn-mod btn-border-b btn-medium btn-round">
                            See More
                        </a>

                        <span>&nbsp;</span>

                        <a href="<?php echo site_url("Product/ProductList/2/0"); ?>" class="btn btn-mod btn-border-b btn-medium btn-round">
                            Show Now
                        </a>

                    </div>

                </div>

            </li>



            <li data-transition="fade" data-slotamount="7" data-title="Black Slide">

                <img src="<?php echo base_url(); ?>assets/theme/slider/17_1.jpg" alt="">

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

                    MADE TO ORDER!


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

                        <a href="<?php echo site_url("Shop/aboutus"); ?>" class="btn btn-mod btn-border-w btn-medium btn-round">
                            See More
                        </a>

                        <span>&nbsp;</span>

                        <a href="<?php echo site_url("Product/ProductList/2/0"); ?>" class="btn btn-mod btn-border-w btn-medium btn-round">
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

                    MADE TO ORDER!


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

                        <a href="<?php echo site_url("Shop/aboutus"); ?>" class="btn btn-mod btn-border-w btn-medium btn-round">
                            See More
                        </a>

                        <span>&nbsp;</span>

                        <a href="<?php echo site_url("Product/ProductList/2/0"); ?>" class="btn btn-mod btn-border-w btn-medium btn-round">
                            Show Now
                        </a>

                    </div>

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
            <div class="col-lg-5 col-md-5 col-sm-12 m_xs_bottom_20">
                <img src="<?php echo base_url(); ?>assets/images/aboutvogue2_1.jpg" class="r_corners" alt="Mr. Bhat Zahoor and Mr. Farooq Shalla " style="border-radius: 30px;">
            </div>
            <div class="col-lg-7 col-md-7 t_align_l">

                <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                    About Us

                    <a href="<?php echo site_url("Shop/aboutus") ?>" class="section-more right">More about us <i class="fa fa-angle-right" aria-hidden="true"></i></a>

                </h2>

                <p class="m_bottom_25 mt-20 fw_light fs_large">
                    Vogue Tailors was founded Mr. Bhat Zahoor and Mr. Farooq Shalla with the belief that bespoke does not have to mean expensive. Most people would agree that a bespoke suit, hand cut and stitched by a skilled tailor, would look and fit much better than an off-the-peg suit.
                </p>
                <p class="m_bottom_25 fw_light fs_large">
                    However, people can be put off by the prices - that need not be the case.
                </p>
                <p class="m_bottom_25 fw_light fs_large">
                    At Vogue Tailors we can make a suit to your exact specifications using many of the traditional Shanghainese bespoke tailoring techniques at an affordable price. Once you've had a custom made suit, made for you by our highly skilled bespoke tailor you will never want to go back to buying off the peg. We believe that quality should never be compromised.                </p>

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


<!-- Section -->
<section class="page-section" style=" padding: 0px  ">
    <div class="col-md-6" style="background: url(<?php echo base_url(); ?>assets/images/serviceblock.jpg);height: 760px;background-position: center;background-size:cover ">


    </div>
    <div class="col-md-6">
        <h2 class="section-title font-alt mb-70 mb-sm-40">
            Services
        </h2>
        <div class="">








            <div class="row">

                <div class="col-md-12 mb-sm-40">
                    <div class="alt-features-item align-left" style='margin-top: 0px'>
                        <div class="alt-features-icon" >

                        </div>
                        <h3 class="font-alt mb-10 mb-xxs-10 alt-features-title_black">   <span class=" icon-recycle"></span> Tailoring services</h3>
                        <div class="alt-features-descr align-left" >
                            <div style=''>
                                Made To Measure<br/>

                                Professional Shanghainese Workmanship<br/>

                                Made In Hong Kong<br/>

                                Professional Alteration<br/>


                            </div>
                            <div class="mt-20">
                                <a href="<?php echo site_url("Shop/contactus"); ?>" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-12 mb-sm-40 mt-50">
                    <div class="alt-features-item align-left mt-100" style='margin-top: 0px'>
                        <div class="alt-features-icon" >
                        </div>
                        <h3 class="font-alt mb-10 mb-xxs-10 alt-features-title_black">  
                            <span class="  icon-basket"></span> DELIVERY</h3>
                        <div class="alt-features-descr align-left" >
                            <div style='  '>
                                Suits arrive in 4-6 weeks. Optional second fittings are encouraged to perfect your fit.
                            </div>
                        </div>
                        <div class="mt-20">
                            <a href="<?php echo site_url("Shop/aboutus"); ?>" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">Read More</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-12 mb-sm-40 mt-50">

                    <div class="alt-features-item align-left" style='margin-top: 0px'>
                        <div class="alt-features-icon" >
                        </div>
                        <h3 class="font-alt mb-10 mb-xxs-10 alt-features-title_black"> 
                            <span class="icon-scissors"></span> BUILD YOUR SUIT
                        </h3>
                        <div class="alt-features-descr align-left" >
                            <div style=''>
                                Our tailors have each cut over 1,000 suits. The collaborative fitting process ensures you will get the suit you want.
                            </div>
                        </div>
                        <div class="mt-20">
                            <a href="<?php echo site_url("Product/ProductList/2/0"); ?>" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">Read More</a>
                        </div>
                    </div>




                </div>




            </div>
        </div>
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























<section class="page-section fullwidth-slider" data-background="<?php echo base_url(); ?>assets/theme/images/fabricback.jpg" style="padding: 30px">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3 class="color_light fw_light m_bottom_15 t_align_c appear-animation bounceInUp appear-animation-visible align-center" data-appear-animation="bounceInUp" style="color:white">ORIGINAL ITALIAN FABRICS</h3>
                <p class="fabricblockhome" >
                    Our fabrics are sourced from only a handful of the finest mills across the globe.
                    <br/> Every detail is carefully constructed using precision technology and state-of-the-art machinery.      </p>
                <p class="fabricblockhome">
                    The best men's suits are tailored from the best cloth - this means pure merino wool fabric, <br/>woven in the traditional mills of Italy and England.     
                </p>
                <p class="fabricblockhome">
                    Vogue Tailors stock about 15000 fabrics ranging from affordable to exclusive.<br/>  Few bespoke tailors offer such a wide selection on the spot.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php echo base_url(); ?>assets/images/fabricimge.jpg" class="r_corners" alt="Mr. Bhat Zahoor and Mr. Farooq Shalla " style="border-radius: 30px;">

            </div>
        </div>
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

<?php
$this->load->view('layout/footer');
?>