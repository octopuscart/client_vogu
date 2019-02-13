<?php
$this->load->view('layout/header');
?>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14766.265299096092!2d114.168786!3d22.2944119!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa36f76b04a6a4a4!2sVogue+Tailors!5e0!3m2!1sen!2sin!4v1540021794499" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


<!--content-->
<!-- Contact Section -->
<section class="page-section" id="contact" style="padding: 10px">
    <div class="container relative">

        <h2 class="section-title font-alt mb-70 mb-sm-40">
            Have a questions?
        </h2>

        <div class="row mb-60 mb-xs-40">

            <div class="col-md-8 col-md-offset-2">
                <div class="row">

                    <!-- Phone -->
                    <div class="col-lg-3 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="ci-title font-alt" style="text-align: left;">
                                Call Us
                            </div>
                            <div class="ci-text" style="text-align: left;">
                                +(852) 2314 8016
                            </div>
                        </div>
                    </div>
                    <!-- End Phone -->

                    <!-- Address -->
                    <div class="col-lg-6 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-title font-alt" style="text-align: left;">
                                Address
                            </div>
                            <div class="ci-text" style="text-align: left;">
                                B6, Star House Plaza, <br/>Star House (Next to Starbucks),
                                <br/> 3 Salisbury Road,
                                Tsim Sha Tsui,<br/> Kowloon, Hong Kong
                            </div>
                        </div>
                    </div>
                    <!-- End Address -->

                    <!-- Email -->
                    <div class="col-lg-3 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">

                            <div class="ci-title font-alt" style="text-align: left;">
                                <div class="ci-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>  Email
                            </div>
                            <div class="ci-text" style="text-align: left;">
                                <a href="mailto:vogue@voguetailor.com">vogue@voguetailor.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Email -->

                </div>
            </div>

        </div>

        <!-- Contact Form -->                            
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <form class="form contact-form" id="contact_form">
                    <div class="clearfix">

                        <div class="cf-left-col">

                            <!-- Name -->
                            <div class="form-group">
                                <input type="text" name="last_name" id="name" class="input-md round form-control" placeholder="Last Name"  required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <input type="email" name="email"  class="input-md round form-control" placeholder="Email"  required>
                            </div>
                            

                        </div>

                        <div class="cf-right-col">

                            <!-- Message -->
                            <!-- Name -->
                            
                            
                            <div class="form-group">
                                <input type="text" name="first_name"  class="input-md round form-control" placeholder="First Name"  required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <input type="text" name="contact"  class="input-md round form-control" placeholder="Contact No."  required>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix">

                        <div class="cf-left-col">

                            <!-- Name -->
                            <div class="form-group">
                                <input type="text" name="subject" id="name" class="input-md round form-control" placeholder="Subject" pattern=".{3,100}" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <div class="row" class="text-center">
                                    <div class="col-md-3 text-center"><?php echo $rand_num1; ?></div>
                                    <div class="col-md-1 text-center">+</div>
                                    <div class="col-md-3 text-center"><?php echo $rand_num2; ?></div>
                                    <div class="col-md-5">    
                                        <input type="text" name="answer"  class="input-md round form-control" placeholder="Type Answer"  required>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="cf-right-col">

                            <!-- Message -->
                            <div class="form-group">                                            
                                <textarea name="message" id="message" class="input-md round form-control" style="height: 84px;" placeholder="Message"></textarea>
                            </div>

                        </div>

                    </div>

                    <div class="clearfix">

                        <div class="cf-left-col">

                            <!-- Inform Tip -->                                        
                            <div class="form-tip pt-20">
                                <i class="fa fa-info-circle"></i> All the fields are required
                            </div>

                        </div>

                        <div class="cf-right-col">

                            <!-- Send Button -->
                            <div class="align-right pt-10">
                                <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Submit Message</button>
                            </div>

                        </div>

                    </div>



                    <div id="result"></div>
                </form>

            </div>
        </div>
        <!-- End Contact Form -->

    </div>
</section>
<!-- End Contact Section -->




<?php
$this->load->view('layout/footer');
?>