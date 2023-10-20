@extends('template.client.base')

@section('client_content')

<div class="ready banner-padding bg-img" data-overlay-light="0" data-background="{{ url('public/two') }}/images/banner/1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cat text-center animate-box fadeInUp animated" data-animate-effect="fadeInUp"> <span>About me</span>
                    <hr class="line line-hr-center">
                    <h1>Wedding Photographer</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Me -->
<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Hello there! I'm Caroline</h2>
                <hr class="line line-hr-left">
                <p>A wedding, pre-wedding and fashion photographer based in central Europe.</p>
                <p>Mauris porttitor magna vel ante luctus convallis. Nunc at tellus erat. Donec et magna lectus. Aliquam egestas vel arcu id maximus. Orci varius natoque penatibus et mate dis parturient montes, nascetur ridiculus mus. Praesent sollicitudin feugiat element. Suspendisse nec felis laoreet imperdiet metus vitae, suscipit ex.</p>
                <p>Quisque efficitur nisi nec tellus fringilla posuere. Sed ut scelerisque tortor. Mauris maximus sollicitudin purus, sed fringilla lorem auctor eget. Interdum et malesuada duruthemes the miss a comp dresire ifames.</p>
                <p class="signature">Caroline K.</p>
            </div>
            <div class="col-md-6">
                <div class="karla-about-img">
                    <div class="img"> <img src="{{ url('public/two') }}/images/about.jpg" alt=""> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Travel Dates -->

<!-- Testiominals -->
<div class="section-padding testimonials bg-img bg-fixed" data-overlay-light="1" data-background="{{ url('public/two') }}/images/banner/2.jpg">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme col-md-8 offset-md-2 mb-30">
                <div class="item-box"> <span class="quote">
                        <img src="{{ url('public/two') }}/images/quot.png" alt="">
                    </span>
                    <h3>" Caroline is an amazing photographer!!! She made the pictures during our wedding and they look amazing. It's like she has a third sense to capture all the interesting moments that are taking place. "</h3>
                    <hr class="line line-hr-left">
                    <div class="info">
                        <h6>— Marine & Kevin</h6>
                    </div>
                </div>
                <div class="item-box"> <span class="quote">
                        <img src="{{ url('public/two') }}/images/quot.png" alt="">
                    </span>
                    <h3>" Caroline is an amazing photographer!!! She made the pictures during our wedding and they look amazing. It's like she has a third sense to capture all the interesting moments that are taking place. "</h3>
                    <hr class="line line-hr-left">
                    <div class="info">
                        <h6>— Olivia & Enrico</h6>
                    </div>
                </div>
                <div class="item-box"> <span class="quote">
                        <img src="{{ url('public/two') }}/images/quot.png" alt="">
                    </span>
                    <h3>" Caroline is an amazing photographer!!! She made the pictures during our wedding and they look amazing. It's like she has a third sense to capture all the interesting moments that are taking place. "</h3>
                    <hr class="line line-hr-left">
                    <div class="info">
                        <h6>— Tammy & Matthew</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
