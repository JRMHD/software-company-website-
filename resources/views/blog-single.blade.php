<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Our Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #1A56DB;
            --primary-green: #1E9547;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
            --white: #ffffff;
            --max-width: 1200px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--dark-gray);
            background-color: var(--light-gray);
        }

        .container {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .header {
            background-color: var(--primary-blue);
            color: var(--white);
            padding: 20px 0;
        }

        .header nav {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .header a {
            color: var(--white);
            text-decoration: none;
            font-size: 1.1rem;
            transition: opacity 0.3s ease;
        }

        .header a:hover {
            opacity: 0.8;
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
            gap: 10px;
        }

        .tag {
            background-color: #e9ecef;
            color: #495057;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .tag:hover {
            background-color: var(--primary-blue);
            color: var(--white);
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
            transition: color 0.3s ease;
        }

        .blog-link:hover {
            color: var(--primary-green);
        }

        .social-share {
            margin-top: 20px;
            display: flex;
            gap: 15px;
        }

        .social-share a {
            color: var(--primary-blue);
            font-size: 1.2rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-share a:hover {
            color: var(--primary-green);
        }

        .related-posts {
            margin-top: 60px;
        }

        .related-posts h3,
        .comments-section h3 {
            color: var(--primary-blue);
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .related-post-item,
        .comment-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .related-post-item:last-child,
        .comment-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .related-post-image,
        .recent-post-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 15px;
        }

        .related-post-info,
        .recent-post-info {
            flex-grow: 1;
        }

        .related-post-title,
        .recent-post-title {
            font-size: 1.1rem;
            color: var(--dark-gray);
            text-decoration: none;
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }

        .related-post-title:hover,
        .recent-post-title:hover {
            color: var(--primary-blue);
        }

        .recent-posts {
            list-style-type: none;
            margin-bottom: 30px;
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

        .recent-post-date {
            font-size: 0.8rem;
            color: #666;
        }

        .comment-form {
            margin-bottom: 30px;
        }

        .comment-form input,
        .comment-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            font-size: 1rem;
        }

        .comment-form button {
            background-color: var(--primary-blue);
            color: var(--white);
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .comment-form button:hover {
            background-color: #1545b3;
        }

        .comment-author {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .comment-date {
            font-size: 0.8rem;
            color: #666;
            margin-bottom: 10px;
        }

        .comment-content {
            line-height: 1.6;
        }

        .footer {
            background-color: var(--dark-gray);
            color: var(--white);
            text-align: center;
            padding: 20px 0;
            margin-top: 60px;
        }

        .footer p {
            margin: 0;
            font-size: 0.9rem;
        }

        .footer a {
            color: var(--white);
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        .footer a:hover {
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .blog-content {
                flex-direction: column;
            }

            .main-content,
            .sidebar {
                min-width: 100%;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('about') }}">About</a>
                <a href="{{ url('blog') }}">Blog</a>
                <a href="{{ url('contact') }}">Contact</a>
            </nav>
        </div>
    </header>

    <main class="blog-single">
        <div class="container">
            <article>
                <header class="heading">
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
                </header>

                <div class="blog-content">
                    <div class="main-content">
                        <img src="{{ $post->image ? asset('storage/' . $post->image) : '/images/blog/default.jpg' }}"
                            alt="{{ $post->title }}" class="blog-image">
                        <div class="blog-text">
                            {!! nl2br(e($post->body)) !!}
                        </div>
                        @if ($post->link)
                            <a href="{{ $post->link }}" class="blog-link" target="_blank" rel="noopener noreferrer">
                                <i class="fas fa-external-link-alt"></i> Related Link
                            </a>
                        @endif
                        <footer class="social-share">
                            <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(route('blog.show', $post->id)) }}"
                                target="_blank" rel="noopener noreferrer" title="Share on Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog.show', $post->id)) }}"
                                target="_blank" rel="noopener noreferrer" title="Share on Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode(route('blog.show', $post->id)) }}"
                                target="_blank" rel="noopener noreferrer" title="Share on WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('blog.show', $post->id)) }}"
                                target="_blank" rel="noopener noreferrer" title="Share on LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </footer>

                        <section class="related-posts">
                            <h3>Related Posts</h3>
                            @forelse ($relatedPosts as $relatedPost)
                                <div class="related-post-item">
                                    <img src="{{ $relatedPost->image ? asset('storage/' . $relatedPost->image) : '/images/blog/default.jpg' }}"
                                        alt="{{ $relatedPost->title }}" class="related-post-image">
                                    <div class="related-post-info">
                                        <a href="{{ route('blog.show', $relatedPost->id) }}"
                                            class="related-post-title">
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
                        </section>
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

                        <section class="comments-section">
                            <h3>Comments</h3>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form class="comment-form" action="{{ route('comments.store', $post->id) }}"
                                method="POST">
                                @csrf
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="email" name="email" placeholder="Your Email" required>
                                <textarea name="comment" placeholder="Your Comment" rows="4" required></textarea>
                                <button type="submit">Submit Comment</button>
                            </form>

                            <ul class="comment-list">
                                @forelse ($post->comments as $comment)
                                    <li class="comment-item">
                                        <div class="comment-author">{{ $comment->name }}</div>
                                        <div class="comment-date">{{ $comment->created_at->format('M d, Y H:i') }}
                                        </div>
                                        <div class="comment-content">{{ $comment->comment }}</div>
                                    </li>
                                @empty
                                    <li>No comments yet. Be the first to comment!</li>
                                @endforelse
                            </ul>
                        </section>
                    </aside>
                </div>
            </article>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>
                &copy; {{ date('Y') }}
                <a href="https://www.jrmhd.tech" target="_blank" rel="noopener noreferrer">JRMHD Technologies</a>.
                All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        // You can add any JavaScript here if needed
        // For example, you might want to add some interactivity or form validation
    </script>
</body>

</html>
