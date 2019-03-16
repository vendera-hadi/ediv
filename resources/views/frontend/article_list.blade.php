@extends('frontend.layout.main')

@section('title')
{{$title}}
@endsection

@section('content')
<section id="post-list" class="container-fluid company-bg">
  <div class="container">
    <div class="page-header mb-5">
      <h1>{{$title}}</h1>
    </div>

    <div class="row">
      <div class="col-md-8">
        @foreach($posts as $key => $post)
        <article class="my-5">
          <header>
            <h2>
              <a href="{{route('article_detail', ['slug' => $post->slug])}}" title="{{$post->title}}" class="text-brown">{{$post->title}}</a>
            </h2>
            <div class="meta">
              Posted by <span class="author">Admin</span> at <span class="date">{{date("d F Y", strtotime($post->created_at))}}</span>
            </div>
          </header>
          <div class="entry-content">
            <a href="{{route('article_detail', ['slug' => $post->slug])}}" title="{{$post->title}}">
              <img src="{{asset($post->image)}}" alt="{{$post->title}}" class="img-fluid fit-image my-3" />
            </a>
            <p class="lead">{{Str::limit(strip_tags($post->description), 100)}}</p>

            <a href="{{route('article_detail', ['slug' => $post->slug])}}" class="btn btn-brown font-weight-bold rounded-circle px-3 pull-right">Read More <span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
          </div>
          <footer>
          </footer>
        </article>
        @endforeach
      </div>
      <div class="col-sm-12">
        <nav class="mt-5 pull-right">
          {{$posts->links()}}
        </nav>
      </div>
    </div>
  </div>
</section>
@endsection
