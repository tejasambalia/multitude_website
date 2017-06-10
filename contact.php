<?php include "header.php" ?>

<div class="inner-banner text-center">
    <div class="container">
        <div class="box">
            <h3>Contact</h3>
        </div><!-- /.box -->
        <div class="breadcumb-wrapper">
            <div class="clearfix">
                <div class="pull-left">
                    <ul class="list-inline link-list">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div><!-- /.container -->
        </div>
    </div><!-- /.container -->
</div>


<section class="contact_details sec-padd2">
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="icon-magnifying-glass"></span>
                    </div>
                    <h4>Visit Our Place</h4>
                    <div class="text">
                        <p>Ahmedabad, Gujarat, India</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="icon-clock"></span>
                    </div>
                    <h4>Office Schedule</h4>
                    <div class="text">
                        <p>Monday to Saturday: 09.00am to 18.00pm <br>Sunday: Closed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="icon-telephone"></span>
                    </div>
                    <h4>Quick Contact</h4>
                    <div class="text">
                        <p><!-- Ph: +321 456 78 9012 <br> -->Email: Iinfo@multitudetech.com</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="contact_us sec-padd-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3>Send Your Message Us</h3>
                </div>
                <div class="default-form-area">
                    <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Mail *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                </div>
                            </div>   
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="thm-btn2" type="submit" data-loading-text="Please wait...">send message</button>
                                </div>
                            </div>   

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-12">
                <div class="home-google-map">
                    <div 
                        class="google-map" 
                        id="contact-google-map" 
                        data-map-lat="23.0168035" 
                        data-map-lng="72.5886083" 
                        data-icon-path="images/slider/logo.png"
                        data-map-title="Chester"
                        data-map-zoom="11" >
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php" ?>