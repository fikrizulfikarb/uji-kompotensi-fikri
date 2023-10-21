@extends('template.client.base')

@section('client_content')

<div class="karla-homepage-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="karla-slider">
                    <div class="karla-slider-item"> <img class="karla-slider-img" src="{{ url('public/two') }}/images/slider/a.jpg" alt=""> 
                        <div class="karla-slider-caption">
                            <div class="karla-slider-title">Wedding in Filzmoos Sam & Paul</div>
                            <div class="karla-slider-subtitle">Wedding in Austria</div>
                        </div>
                    </div>
                    <div class="karla-slider-item"> <img class="karla-slider-img" src="{{ url('public/two') }}/images/slider/b.jpg" alt=""> 
                        <div class="karla-slider-caption">
                            <div class="karla-slider-title">Wedding at Chateau de Lacoste</div>
                            <div class="karla-slider-subtitle">Wedding in France</div>
                        </div>
                    </div>
                    <div class="karla-slider-item"> <img class="karla-slider-img" src="{{ url('public/two') }}/images/slider/c.jpg" alt=""> 
                        <div class="karla-slider-caption">
                            <div class="karla-slider-title">Pre-wedding in Vienna</div>
                            <div class="karla-slider-subtitle">Helen & Eddy</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-padding recent-weddings bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-30">
                <span class="heading-meta">Portfolio</span>
                <h2 class="pwe-heading">Recent Weddings</h2>
                <hr class="line line-hr-center">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="item">
                    <div class="recent-weddings-img"> <img src="{{ url('public/two') }}/images/weddings/1.jpg" alt=""> </div>
                    <div class="content">
                        <h5><a href="post.html">Wedding in Barcelona<br>Marine & Kevin</a></h5>
                        <p>Mauris suscipit enec est aliqua a tincidunt eroculis. Proin suscipit risus eu ullamcorper faucibus...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <div class="recent-weddings-img"> <img src="{{ url('public/two') }}/images/weddings/2.jpg" alt=""> </div>
                    <div class="content">
                        <h5><a href="post.html">Olivia and Enrico<br>Wedding in Switzerland</a></h5>
                        <p>Mauris suscipit enec est aliqua a tincidunt eroculis. Proin suscipit risus eu ullamcorper faucibus...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <div class="recent-weddings-img"> <img src="{{ url('public/two') }}/images/weddings/3.jpg" alt=""> </div>
                    <div class="content">
                        <h5><a href="post.html">Wedding in France<br>Tammy & Matthew</a></h5>
                        <p>Mauris suscipit enec est aliqua a tincidunt eroculis. Proin suscipit risus eu ullamcorper faucibus...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('client_article')

@endsection