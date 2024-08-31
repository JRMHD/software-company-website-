<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->name }} - Project Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Root and Base Styles */
        :root {
            --primary-color: #3B82F6;
            --secondary-color: #10B981;
            --bg-color: #F9FAFB;
            --text-color: #1F2937;
            --card-bg: #FFFFFF;
            --hover-color: #2563EB;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            margin: 0;
            padding: 0;
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        h1,
        h2,
        h3,
        h4 {
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
        }

        .project-layout {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }

        .project-main {
            flex: 2;
            min-width: 300px;
        }

        .project-sidebar {
            flex: 1;
            min-width: 300px;
        }

        .project-image {
            width: 100%;
            height: 400px;
            overflow: hidden;
            border-radius: 12px;
            margin-bottom: 40px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .project-image:hover {
            transform: scale(1.05);
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-content {
            background-color: var(--card-bg);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            transition: box-shadow 0.3s ease;
        }

        .project-content:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .project-description {
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .project-languages {
            background-color: #E0F2FE;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .project-languages strong {
            color: var(--primary-color);
            font-weight: 600;
        }

        .project-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .project-link i {
            margin-right: 8px;
        }

        .project-link:hover {
            background-color: var(--hover-color);
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .project-link.github {
            background-color: #333;
        }

        .project-link.github:hover {
            background-color: #555;
        }

        .project-link.contact {
            background-color: var(--secondary-color);
        }

        .project-link.contact:hover {
            background-color: #059669;
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .back-link:hover {
            color: var(--hover-color);
        }

        .recent-projects {
            background-color: var(--card-bg);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .project-card {
            margin-bottom: 30px;
            border-bottom: 1px solid #E5E7EB;
            padding-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-card:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .project-card .project-image {
            height: 200px;
            margin-bottom: 20px;
        }

        .project-card .project-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .project-card .project-description {
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .view-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        .view-button:hover {
            background-color: var(--hover-color);
        }

        .project-stats {
            background-color: #E0F2FE;
            padding: 30px;
            border-radius: 12px;
            margin-top: 40px;
        }

        .stat-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .stat-icon {
            font-size: 2rem;
            margin-right: 15px;
            color: var(--primary-color);
        }

        .stat-info h4 {
            margin: 0;
            font-size: 1.2rem;
        }

        .stat-info p {
            margin: 5px 0 0;
            font-size: 0.9rem;
            color: #4B5563;
        }

        .social-share {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            color: white;
            font-size: 1.2rem;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }

        .social-icon.facebook {
            background-color: #1877F2;
        }

        .social-icon.twitter {
            background-color: #1DA1F2;
        }

        .social-icon.linkedin {
            background-color: #0A66C2;
        }

        .social-icon.instagram {
            background-color: #E4405F;
        }

        .social-icon.whatsapp {
            background-color: #25D366;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }

        /* Copy Link Section */
        .copy-link {
            display: flex;
            align-items: center;
            background-color: #F3F4F6;
            border-radius: 6px;
            padding: 10px;
            margin-top: 20px;
            position: relative;
        }

        .copy-link input {
            flex-grow: 1;
            border: none;
            background: transparent;
            padding: 5px;
            font-size: 0.9rem;
        }

        .copy-button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .copy-button:hover {
            background-color: var(--hover-color);
        }

        /* Notification */
        .notification {
            position: absolute;
            right: 10px;
            background-color: #4CAF50;
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            display: none;
            font-size: 0.9rem;
        }

        .notification.show {
            display: inline-block;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .project-layout {
                flex-direction: column;
            }

            .project-main,
            .project-sidebar {
                flex: 1;
                min-width: auto;
            }

            .project-image {
                height: 300px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.8rem;
            }

            .project-description,
            .project-languages p {
                font-size: 0.9rem;
            }

            .view-button {
                padding: 6px 12px;
                font-size: 0.8rem;
            }

            .social-icon {
                width: 35px;
                height: 35px;
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="animate-fade-in">{{ $project->name }}</h1>
        <div class="project-layout">
            <div class="project-main">
                @if ($project->image)
                    <div class="project-image animate-fade-in" style="animation-delay: 0.2s;">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}">
                    </div>
                @endif
                <div class="project-content animate-fade-in" style="animation-delay: 0.4s;">
                    <h2>Project Overview</h2>
                    <div class="project-description">
                        <p>{{ $project->description }}</p>
                    </div>
                    <div class="project-languages">
                        <p><strong>Technologies Used:</strong> {{ $project->languages }}</p>
                    </div>
                    <div class="project-links">
                        @if ($project->github_link)
                            <a href="{{ $project->github_link }}" class="project-link github" target="_blank">
                                <i class="fab fa-github"></i> View on GitHub
                            </a>
                        @endif
                        @if ($project->live_link)
                            <a href="{{ $project->live_link }}" class="project-link" target="_blank">
                                <i class="fas fa-globe"></i> Explore Live Project
                            </a>
                        @endif
                        <a href="{{ route('contact') }}" class="project-link contact">
                            <i class="fas fa-shopping-cart"></i> Buy Project
                        </a>
                    </div>
                    <div class="copy-link">
                        <input type="text" value="{{ url()->current() }}" id="projectLink" readonly>
                        <button class="copy-button" onclick="copyProjectLink()">
                            <i class="fas fa-copy"></i> Copy Link
                        </button>
                        <div class="notification" id="notification">Link Copied!</div>
                    </div>
                </div>
                <div class="project-stats animate-fade-in" style="animation-delay: 0.6s;">
                    <h3>Project Insights</h3>
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Code Complexity</h4>
                            <p id="codeInsight"></p>
                        </div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Development Process</h4>
                            <p id="devProcessInsight"></p>
                        </div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Team Dynamics</h4>
                            <p id="teamInsight"></p>
                        </div>
                    </div>
                </div>
                <div class="social-share animate-fade-in" style="animation-delay: 0.8s;">
                    <a href="#" class="social-icon facebook" onclick="shareProject('facebook')">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon twitter" onclick="shareProject('twitter')">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon linkedin" onclick="shareProject('linkedin')">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-icon instagram" onclick="shareProject('instagram')">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon whatsapp" onclick="shareProject('whatsapp')">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
                <a href="{{ route('portfolio.index') }}" class="back-link animate-fade-in"
                    style="animation-delay: 1s;">
                    <i class="fas fa-arrow-left"></i> Back to Portfolio
                </a>
            </div>
            <div class="project-sidebar">
                <div class="recent-projects animate-fade-in" style="animation-delay: 0.4s;">
                    <h3>Recent Projects</h3>
                    @foreach ($recentProjects as $recentProject)
                        <div class="project-card">
                            <div class="project-image">
                                @if ($recentProject->image)
                                    <img src="{{ asset('storage/' . $recentProject->image) }}"
                                        alt="{{ $recentProject->name }}">
                                @else
                                    <div
                                        style="width: 100%; height: 100%; background-color: #E5E7EB; display: flex; align-items: center; justify-content: center;">
                                        <span style="color: #9CA3AF;">No Image Available</span>
                                    </div>
                                @endif
                            </div>
                            <h4 class="project-title">{{ $recentProject->name }}</h4>
                            <p class="project-description">{{ Str::limit($recentProject->description, 60) }}</p>
                            <a href="{{ route('portfolio.show', $recentProject) }}" class="view-button">View
                                Details</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyProjectLink() {
            const linkInput = document.getElementById('projectLink');
            linkInput.select();
            linkInput.setSelectionRange(0, 99999); // For mobile devices
            document.execCommand('copy');

            const notification = document.getElementById('notification');
            notification.classList.add('show');
            setTimeout(() => {
                notification.classList.remove('show');
            }, 4000);
        }

        function shareProject(platform) {
            const projectTitle = "{{ $project->name }}";
            const projectUrl = window.location.href;
            let shareUrl;

            switch (platform) {
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(projectUrl)}`;
                    break;
                case 'twitter':
                    shareUrl =
                        `https://twitter.com/intent/tweet?text=${encodeURIComponent('Check out this amazing project: ' + projectTitle)}&url=${encodeURIComponent(projectUrl)}`;
                    break;
                case 'linkedin':
                    shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(projectUrl)}`;
                    break;
                case 'instagram':
                    alert(
                        'Instagram sharing is not directly supported. You can copy the project link and share it manually on Instagram.'
                    );
                    return;
                case 'whatsapp':
                    shareUrl =
                        `https://api.whatsapp.com/send?text=${encodeURIComponent('Check out this amazing project: ' + projectTitle + ' ' + projectUrl)}`;
                    break;
            }

            if (shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400');
            }
        }

        // Add animation to elements as they come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        });

        document.querySelectorAll('.animate-fade-in').forEach(element => {
            observer.observe(element);
        });
    </script>
</body>

</html>
