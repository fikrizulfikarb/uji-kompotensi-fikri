@extends('template.client.base')

@section('client_content')

<!-- Banner -->
<div class="ready banner-padding bg-img" data-overlay-light="1" data-background="images/banner/3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cat text-center animate-box fadeInUp animated" data-animate-effect="fadeInUp"> <span>Stories</span>
                    <hr class="line line-hr-center">
                    <h1>Portfolio & Services</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio -->
<div class="section-padding">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12"> <span>Stories</span>
                <h2>Services & Portfolio</h2>
                <hr class="line line-hr-left">
            </div>
            <div class="col-md-6">
                <p>Quisque efficitur nisi nec tellus fringilla posuere. Sed ut scelerisque tortor. Mauris maximus sollicitudin purus, sed fringilla lorem auctor eget. Interdum et malesuae fames ac ante ipsum primen faucibus.</p>
                <p>Quality maximus sollicitudin purus, sed fringilla lorem auctor eget. Interdum et rhe drana inc malesuada fames ac ante. Duru efficitur nisi nec tellus fringilla posuere. Sedut scelerisque tortor. Mauris maximus sollicitudin faucibus.</p>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="exstra-services">
                    <h5><span>1.</span> Wedding Photography</h5>
                    <h5><span>2.</span> Engagement & Pre-Wedding Photography</h5>
                    <h5><span>3.</span> Portrait & Commercial Photography</h5>
                </div>
            </div>
        </div>
        <!-- Portfolio gallery -->
        <div class="karla-projects-gallery mb-90">
            <div class="row">
                <div class="col-md-12">
                    <ul class="karla-gallery-toolbar">
                        <!-- Here you can change or add a new filter tab -->
                        <li class="karla-toolbar-item active" data-filter="all"><a href="portfolio.html#">All</a></li>
                        <li class="karla-toolbar-item" data-filter="wedding"><a href="portfolio.html#">Wedding</a></li>
                        <li class="karla-toolbar-item" data-filter="prewedding"><a href="portfolio.html#">Pre-Wedding</a></li>
                        <li class="karla-toolbar-item" data-filter="portrait"><a href="portfolio.html#">Portrait</a></li>
                    </ul>
                    <ul class="karla-gallery-items" data-columns="3">
                        <!-- Here you can change the gallery columns number to 2,3 or 4 -->
                        <li class="karla-gallery-item prewedding">
                            <!-- each item should have a class corresponding with the associated filter tab eg. development -->
                            <a href="portfolio-page.html"> <img src="{{ url('public/two') }}/images/slider/1.jpg" alt="">
                                <div class="karla-project-imghover">
                                    <div class="karla-item-caption">
                                        <h4 class="karla-project-title">Wedding in Filzmoos Sam & Paul</h4>
                                        <div class="karla-project-subtitle">Wedding in Austria</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="karla-gallery-item wedding">
                            <a href="portfolio-page.html"> <img src="{{ url('public/two') }}/images/slider/9.jpg" alt="">
                                <div class="karla-project-imghover">
                                    <div class="karla-item-caption">
                                        <h4 class="karla-project-title">Stefania & Rodoulfe Wedding in France</h4>
                                        <div class="karla-project-subtitle">Wedding in France</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="karla-gallery-item wedding">
                            <a href="portfolio-page.html"> <img src="{{ url('public/two') }}/images/slider/3.jpg" alt="">
                                <div class="karla-project-imghover">
                                    <div class="karla-item-caption">
                                        <h4 class="karla-project-title"> Wedding at Chateau de Lacoste</h4>
                                        <div class="karla-project-subtitle">Wedding in France</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="karla-gallery-item prewedding">
                            <a href="portfolio-page.html"> <img src="{{ url('public/two') }}/images/slider/4.jpg" alt="">
                                <div class="karla-project-imghover">
                                    <div class="karla-item-caption">
                                        <h4 class="karla-project-title">Pre-wedding in Prague Fred & Ivy</h4>
                                        <div class="karla-project-subtitle">Pre-wedding Photography</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="karla-gallery-item wedding">
                            <a href="portfolio-page.html"> <img src="{{ url('public/two') }}/images/slider/5.jpg" alt="">
                                <div class="karla-project-imghover">
                                    <div class="karla-item-caption">
                                        <h4 class="karla-project-title">Pre-wedding in Prague Helen & Eddy</h4>
                                        <div class="karla-project-subtitle">Pre-wedding Photography</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="karla-gallery-item portrait">
                            <a href="portfolio-page.html"> <img src="{{ url('public/two') }}/images/slider/6.jpg" alt="">
                                <div class="karla-project-imghover">
                                    <div class="karla-item-caption">
                                        <h4 class="karla-project-title">Pre-wedding in Vienna Royal Experience</h4>
                                        <div class="karla-project-subtitle">Pre-wedding Photography</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="karla-gallery-item portrait">
                            <a href="portfolio-page.html"> <img src="{{ url('public/two') }}/images/slider/11.jpg" alt="">
                                <div class="karla-project-imghover">
                                    <div class="karla-item-caption">
                                        <h4 class="karla-project-title">Traditional Hungarian House</h4>
                                        <div class="karla-project-subtitle">Portraits</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="karla-gallery-item portrait">
                            <a href="portfolio-page.html"> <img src="{{ url('public/two') }}/images/slider/8.jpg" alt="">
                                <div class="karla-project-imghover">
                                    <div class="karla-item-caption">
                                        <h4 class="karla-project-title">Kaleem, the Ambassador</h4>
                                        <div class="karla-project-subtitle">Portraits</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="karla-gallery-item prewedding">
                            <a href="portfolio-page.html"> <img src="{{ url('public/two') }}/images/slider/7.jpg" alt="">
                                <div class="karla-project-imghover">
                                    <div class="karla-item-caption">
                                        <h4 class="karla-project-title">Elis and her morning in Prague</h4>
                                        <div class="karla-project-subtitle">Portraits</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Video gallery -->
        <div class="row">
            <div class="col-md-12">
                <span>Portfolio</span>
                <h2>Video Gallery</h2>
                <hr class="line line-hr-left">
                <p class="mb-30">Youtube video (popup), vimeo video (popup), custom video (popup) and iframe video...</p>
            </div>
            <div class="col-md-6 video-gallery">
                   <!-- YouTube -->
                   <a class="popup-youtube" href="https://www.youtube.com/watch?v=-wUYzKkFGrE">
                   <img src="{{ url('public/two') }}/images/video/1.jpg" alt="YouTube">
                   <div class="icon">
                        <i class="ti-control-play"></i>
                    </div>
                   </a>
            </div>
            <div class="col-md-6 video-gallery">
                   <!-- Vimeo -->
                   <a class="popup-vimeo" href="https://vimeo.com/channels/bestweddingphotography/148565786#t=32s">
                   <img src="{{ url('public/two') }}/images/video/2.jpg" alt="Vimeo">
                    <div class="icon">
                        <i class="ti-control-play"></i>
                    </div>
                   </a>
            </div>
            <div class="col-md-6 video-gallery">
                   <!-- Custom -->
                   <a class="popup-custom" href="images/video.mp4">
                   <img src="{{ url('public/two') }}/images/video/3.jpg" alt="">
                    <div class="icon">
                        <i class="ti-control-play"></i>
                    </div>
                   </a>
            </div>
            <div class="col-md-6 video-gallery">
                   <!-- YouTube -->
                   <a class="popup-youtube" href="https://www.youtube.com/watch?v=guA0-A1NZwk">
                   <img src="{{ url('public/two') }}/images/video/4.jpg" alt="">
                   <div class="icon">
                        <i class="ti-control-play"></i>
                    </div>
                   </a>
            </div>
        </div>
    </div>
</div>

@endsection