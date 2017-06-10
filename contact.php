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
                <div class="pull-right">
                    <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
                </div><!-- /.pull-right -->
            </div><!-- /.container -->
        </div>
    </div><!-- /.container -->
</div>


<section class="contact_details sec-padd2">
    <div class="container">
        <div class="tabs-outer">
            <!--Tabs Box-->
            <div class="tabs-box tabs-style-one">
                <!--Tab Buttons-->
                <ul class="tab-buttons clearfix">
                    <li data-tab="#tab-one" class="tab-btn">Newyork City</li>
                    <li data-tab="#tab-two" class="tab-btn active-btn">Los Angeles</li>
                    <li data-tab="#tab-three" class="tab-btn">San Fransisico</li>
                    <li data-tab="#tab-four" class="tab-btn">Chicago</li>
                </ul>
            
                <!--Tabs Content-->
                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="tab" id="tab-one" style="display: none;">
                        <div class="text-content">
                            <div class="text"><p>We recently helped a small business grow from break-even to over $1m profit in less than 2 years. Please find below contact details <br>and contact us today! Our experts always ready to help you.</p></div>
                        </div>
                    </div>
                    
                    <!--Tab-->
                    <div class="tab active-tab" id="tab-two" style="display: block;">
                        <div class="text-content">
                             <div class="text"><p>We recently helped a small business grow from break-even to over $1m profit in less than 2 years. Please find below contact details <br>and contact us today! Our experts always ready to help you.</p></div>                         
                        </div>
                    </div>
                    
                    <!--Tab-->
                    <div class="tab" id="tab-three" style="display: none;">
                        <div class="text"><p>We recently helped a small business grow from break-even to over $1m profit in less than 2 years. Please find below contact details <br>and contact us today! Our experts always ready to help you.</p></div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-four" style="display: none;">
                        <div class="text"><p>We recently helped a small business grow from break-even to over $1m profit in less than 2 years. Please find below contact details <br>and contact us today! Our experts always ready to help you. </p></div>
                    </div>
                    
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="icon-magnifying-glass"></span>
                    </div>
                    <h4>Visit Our Place</h4>
                    <div class="text">
                        <p>241/84 Theme Name Discover Street <br>New York, NY 10012, USA</p>
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
                        <p>Ph: +321 456 78 9012 <br>Email: Info@Wesupportyou.com</p>
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
                        data-map-lat="40.938541" 
                        data-map-lng="-73.904893" 
                        data-icon-path="images/logo/map-marker.png"
                        data-map-title="Chester"
                        data-map-zoom="11" >

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php" ?>