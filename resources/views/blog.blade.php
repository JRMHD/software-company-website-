@extends('layouts.app')

@section('content')
    <section id="blog" class="container py-5">
        <div class="heading">
            <h4 class="pretitle">Blog</h4>
            <h1 class="title">Our Blog</h1>
            <p>Latest updates and insights from our team.</p>
        </div>
        <div class="row gy-4 gx-4">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <div class="box card border-0">
                        <div class="col-12">
                            <img src="{{ $post->image ? asset('storage/' . $post->image) : 'images/blog/default.jpg' }}"
                                alt="blog-img" class="blog-image"> <!-- Add the CSS class here -->
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($post->body, 100) }}</p>
                            <a href="{{ route('blog.show', $post) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
<style>
    .blog-image {
        width: 100%;
        height: 200px;
        /* Set desired height */
        object-fit: cover;
        /* Ensures the image covers the container */
        display: block;
    }
</style>
