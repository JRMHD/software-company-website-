<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Our Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #1A56DB;
            --primary-green: #1E9547;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--dark-gray);
            background-color: var(--light-gray);
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: var(--primary-blue);
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .header nav {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
        }

        .header a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .blog-single {
            padding: 60px 0;
        }

        .heading {
            text-align: center;
            margin-bottom: 40px;
        }

        .pretitle {
            color: var(--primary-green);
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .title {
            color: var(--primary-blue);
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .blog-info {
            display: flex;
            justify-content: center;
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .blog-info span {
            margin: 0 10px;
            display: flex;
            align-items: center;
        }

        .blog-tags {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 10px;
        }

        .tag {
            background-color: #e9ecef;
            color: #495057;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            margin: 2px;
            text-decoration: none;
        }

        .tag:hover {
            background-color: var(--primary-blue);
            color: #fff;
        }

        .blog-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }

        .main-content {
            flex: 1 1 65%;
            min-width: 300px;
        }

        .sidebar {
            flex: 1 1 30%;
            min-width: 250px;
        }

        .blog-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .blog-text {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .blog-link {
            display: inline-block;
            margin-bottom: 30px;
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .blog-link:hover {
            color: var(--primary-green);
        }

        .social-share {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        .social-share a {
            color: var(--primary-blue);
            font-size: 1.2rem;
            text-decoration: none;
        }

        .social-share a:hover {
            color: var(--primary-green);
        }

        .related-posts {
            margin-top: 40px;
        }

        .related-posts h3 {
            color: var(--primary-blue);
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .related-post-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .related-post-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .related-post-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 15px;
        }

        .related-post-info {
            flex-grow: 1;
        }

        .related-post-title {
            font-size: 1.1rem;
            color: var(--dark-gray);
            text-decoration: none;
            margin-bottom: 5px;
        }

        .related-post-title:hover {
            color: var(--primary-blue);
        }

        .recent-posts {
            list-style-type: none;
            padding: 0;
        }

        .recent-post-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .recent-post-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .recent-post-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 15px;
        }

        .recent-post-info {
            flex-grow: 1;
        }

        .recent-post-title {
            font-size: 1rem;
            margin-bottom: 5px;
            color: var(--dark-gray);
            text-decoration: none;
        }

        .recent-post-date {
            font-size: 0.8rem;
            color: #666;
        }

        .footer {
            background-color: var(--dark-gray);
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        .footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('about') }}">About</a>
            <a href="{{ url('blog') }}">Blog</a>
            <a href="{{ url('contact') }}">Contact</a>
        </nav>
    </header>

    <section class="blog-single">
        <div class="container">
            <div class="heading">
                <h4 class="pretitle">Blog Post</h4>
                <h1 class="title">{{ $post->title }}</h1>
                <div class="blog-info">
                    <span><i class="fas fa-user"></i> {{ $post->author }}</span>
                    <span><i class="fas fa-calendar"></i> {{ $post->created_at->format('d M Y') }}</span>
                </div>
                <div class="blog-tags">
                    @foreach (explode(',', $post->tags) as $tag)
                        <a href="{{ route('blog.tag', trim($tag)) }}" class="tag">{{ trim($tag) }}</a>
                    @endforeach
                </div>
            </div>
            <div class="blog-content">
                <div class="main-content">
                    <img src="{{ $post->image ? asset('storage/' . $post->image) : '/images/blog/default.jpg' }}"
                        alt="{{ $post->title }}" class="blog-image">
                    <div class="blog-text">
                        <p>{{ $post->body }}</p>
                    </div>
                    @if ($post->link)
                        <a href="{{ $post->link }}" class="blog-link" target="_blank">
                            <i class="fas fa-external-link-alt"></i> Related Link
                        </a>
                    @endif
                    <div class="social-share">
                        <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(route('blog.show', $post->id)) }}"
                            target="_blank" title="Share on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog.show', $post->id)) }}"
                            target="_blank" title="Share on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode(route('blog.show', $post->id)) }}" target="_blank"
                            title="Share on WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('blog.show', $post->id)) }}"
                            target="_blank" title="Share on LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <div class="related-posts">
                        <h3>Related Posts</h3>
                        @forelse ($relatedPosts as $relatedPost)
                            <div class="related-post-item">
                                <img src="{{ $relatedPost->image ? asset('storage/' . $relatedPost->image) : '/images/blog/default.jpg' }}"
                                    alt="{{ $relatedPost->title }}" class="related-post-image">
                                <div class="related-post-info">
                                    <a href="{{ route('blog.show', $relatedPost->id) }}" class="related-post-title">
                                        {{ $relatedPost->title }}
                                    </a>
                                    <p class="related-post-excerpt">
                                        {{ Str::limit($relatedPost->body, 100, '...') }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <p>No related posts found.</p>
                        @endforelse
                    </div>
                </div>
                <aside class="sidebar">
                    <h4>Recent Posts</h4>
                    <ul class="recent-posts">
                        @foreach ($recentPosts as $recentPost)
                            <li class="recent-post-item">
                                <img src="{{ $recentPost->image ? asset('storage/' . $recentPost->image) : '/images/blog/default.jpg' }}"
                                    alt="{{ $recentPost->title }}" class="recent-post-image">
                                <div class="recent-post-info">
                                    <a href="{{ route('blog.show', $recentPost->id) }}" class="recent-post-title">
                                        {{ $recentPost->title }}
                                    </a>
                                    <p class="recent-post-date">
                                        {{ $recentPost->created_at->format('d M Y') }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>
            &copy; {{ date('Y') }}
            <a href="https://www.jrmhd.tech" target="_blank" style="color: #fff; text-decoration: none;">JRMHD
                Technologies</a>.
            All rights reserved.
        </p>
    </footer>
</body>

</html>
