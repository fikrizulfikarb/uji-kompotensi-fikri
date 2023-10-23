@extends('template.client.base')

@section('client_content')

<!-- Banner -->
<div class="ready banner-padding bg-img" data-overlay-light="0" data-background="{{ url('public/two') }}/images/banner/2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cat text-center animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                    <span>I’d love to tell your story.</span>
                    <hr class="line line-hr-center">
                    <h1>Contact Me</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info -->
<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-30">
                <span>Contact Me</span>
                <h2>I’d love to tell your story.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2"> <span class="line-one"></span> </div>
                    <div class="col-md-4 mb-30">
                        <p>I’m excited to go wherever your love story is taking me and looking forward to hearing from you!</p>
                        <p>We'd love to hear from you! Please fill out the form below or send a note directly with as much details as possible to info@carolinekarla.com</p>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <p><b>PHONE :</b> +62 812 9003 4449</p>
                        <p><b>EMAIL :</b> fikrizulfikarbrandan@gmail.com</p>
                        <p><b>ADDRESS :</b> Kalimantan</p>
                        <p><b>INSTAGRAM :</b> @fikrizulfikarb</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form -->
<div class="ready banner-full-padding bg-img valign" data-background="{{ url('public/two') }}/images/banner/6.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8 offset-md-2 bg-white">
                        <div class="contact-form">
                            <h6>Contact Me</h6>
                            <hr class="line line-hr-center"><br>
                            <p>I'd love to hear from you! Please fill out the form below to request my availability and to receive information of my wedding collections. </p>
                            <form method="post" class="contact__form" action="https://duruthemes.com/demo/html/ckarla/two/mail.php">
                                <!-- Form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            Your message was sent successfully.
                                        </div>
                                    </div>
                                </div>
                                <!-- Form elements -->
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input name="name" type="text" placeholder="Your Full Names *" required> 
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" placeholder="Email Address *" required> 
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="phone" type="text" placeholder="Phone Number *" required> 
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input name="subject" type="text" placeholder="Subject *" required> 
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="message" id="message" cols="40" rows="3" placeholder="Enter your message here. I would love to hear as much details about your day as possible, and other vendors you might be working with! *" required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <input name="submit" type="submit"  value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
