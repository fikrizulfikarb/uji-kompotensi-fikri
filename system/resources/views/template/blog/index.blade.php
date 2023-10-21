@extends('template.client.dashboard')

@section('client_article')
<section id="blog" class="karla-blog-section blog-page section-padding">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">

        @foreach ($list_article as $article)
        <div class="post-cont"> <a href="blog.html"><span class="tag">Guides & Ideas</span></a>
            <h5>
                <a href="{{ url('article', $article->id) }}">{{ $article->title }}</a>
            </h5>
            <p>{{ $article->description }}
            </p>
            <div class="info"><strong> write : {{ $article->write }}</strong> </div>
        </div>
        @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
