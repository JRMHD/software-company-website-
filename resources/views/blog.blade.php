<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #1A56DB;
            --primary-green: #1E9547;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        .blog {
            padding: 40px 0;
        }

        .search-form {
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
        }

        .search-form input[type="text"] {
            width: 60%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            font-size: 1rem;
        }

        .search-form button {
            padding: 10px 20px;
            background-color: var(--primary-blue);
            color: #fff;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 1rem;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .blog-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .blog-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-content {
            padding: 20px;
        }

        .blog-info {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 15px;
        }

        .blog-info span {
            display: flex;
            align-items: center;
        }

        .blog-info i {
            margin-right: 5px;
        }

        .blog-title {
            font-size: 1.4rem;
            color: var(--primary-blue);
            margin-bottom: 15px;
            text-decoration: none;
            font-weight: bold;
            /* Added bold styling */
        }


        .blog-title:hover {
            text-decoration: underline;
        }

        .blog-excerpt {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .read-more {
            display: inline-block;
            color: var(--primary-green);
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .read-more:hover {
            color: var(--primary-blue);
        }

        .blog-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-top: 10px;
        }

        .tag {
            background-color: #e9ecef;
            color: #495057;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            text-decoration: none;
        }

        .tag:hover {
            background-color: var(--primary-blue);
            color: #fff;
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

        .pagination {
            text-align: center;
            margin-top: 40px;
        }

        .pagination a {
            background-color: var(--primary-blue);
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin: 0 5px;
        }

        .pagination a:hover {
            background-color: var(--primary-green);
        }

        .sidebar-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .sidebar-section h3 {
            color: var(--primary-blue);
            margin-bottom: 15px;
            font-size: 1.3rem;
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

        .tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tag-cloud a {
            background-color: #e9ecef;
            color: var(--dark-gray);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.9rem;
            text-decoration: none;
        }

        .tag-cloud a:hover {
            background-color: var(--primary-blue);
            color: #fff;
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

        @media (max-width: 768px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }
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

    <section class="blog" id="blog">
        <div class="container">
            <div
                style="text-align: center; padding: 40px 20px; background: #f0f0f0; border-radius: 10px; margin: 20px 0;">
                <div style="max-width: 800px; margin: 0 auto; padding: 0 20px;">
                    <img src="/images/logo/logo.png" alt="JRMHD Technologies Logo"
                        style="width: 80px; margin-bottom: 20px;">
                    <h4 style="font-size: 1.2rem; color: #333; text-transform: uppercase; margin-bottom: 10px;">Tech
                        Insights</h4>
                    <h1 style="font-size: 2.5rem; color: #007bff; font-weight: bold; margin-bottom: 15px;">Explore Our
                        Blog</h1>
                    <p style="font-size: 1.2rem; color: #555; margin-bottom: 15px;">Get the latest updates and tech
                        trends from JRMHD Technologies.</p>
                    <p style="font-size: 1rem; color: #666; line-height: 1.6; margin-bottom: 15px;">Discover expert
                        opinions, emerging technologies, and tips to enhance your tech experience.</p>
                </div>
            </div>

            <form action="{{ route('blog.index') }}" method="GET" class="search-form">
                <input type="text" name="search" placeholder="Search blogs..." value="{{ $search ?? '' }}">
                <button type="submit">Search</button>
            </form>

            <div class="blog-grid">
                @forelse ($posts as $post)
                    <div class="blog-card">
                        <img src="{{ $post->image ? asset('storage/' . $post->image) : '/images/blog/default.jpg' }}"
                            alt="{{ $post->title }}" class="blog-image" />
                        <div class="blog-content">
                            <div class="blog-info">
                                <span><i class="fas fa-user"></i> {{ $post->author }}</span>
                                <span><i class="fas fa-calendar"></i> {{ $post->created_at->format('d M Y') }}</span>
                            </div>
                            <a href="{{ route('blog.show', $post->id) }}" class="blog-title">{{ $post->title }}</a>
                            <p class="blog-excerpt">
                                {{ $post->excerpt ? $post->excerpt : \Illuminate\Support\Str::limit($post->body, 100) }}
                            </p>
                            <a href="{{ route('blog.show', $post->id) }}" class="read-more">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                            <div class="blog-tags">
                                @foreach (explode(',', $post->tags) as $tag)
                                    <a href="{{ route('blog.tag', trim($tag)) }}"
                                        class="tag">{{ trim($tag) }}</a>
                                @endforeach
                            </div>
                            <div class="social-share">
                                <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(route('blog.show', $post->id)) }}"
                                    target="_blank" title="Share on Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog.show', $post->id)) }}"
                                    target="_blank" title="Share on Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://wa.me/?text={{ urlencode(route('blog.show', $post->id)) }}"
                                    target="_blank" title="Share on WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('blog.show', $post->id)) }}"
                                    target="_blank" title="Share on LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No posts available at the moment. Check back later!</p>
                @endforelse
            </div>

            <div class="pagination">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </div>


            <div class="sidebar-section">
                <h3>Recent Posts</h3>
                <ul class="recent-posts">
                    @foreach ($recentPosts as $recentPost)
                        <li class="recent-post-item">
                            <img src="{{ $recentPost->image ? asset('storage/' . $recentPost->image) : '/images/blog/default.jpg' }}"
                                alt="{{ $recentPost->title }}" class="recent-post-image">
                            <div class="recent-post-info">
                                <a href="{{ route('blog.show', $recentPost->id) }}" class="recent-post-title">
                                    {{ $recentPost->title }}
                                </a>
                                <div class="recent-post-date">{{ $recentPost->created_at->format('M d, Y') }}</div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="sidebar-section">
                <h3>Popular Tags</h3>
                <div class="tag-cloud">
                    @foreach ($popularTags as $tag)
                        <a href="{{ route('blog.tag', $tag->tags) }}">
                            {{ $tag->tags }} ({{ $tag->count }})
                        </a>
                    @endforeach
                </div>
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
