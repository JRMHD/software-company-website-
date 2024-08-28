<!-- WhatsApp Chat Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<div id="whatsapp-chat">
    <div class="welcome-messages">
        <div class="welcome-message message-1">👋 Hello! Need help? Chat with us on WhatsApp!</div>
        <div class="welcome-message message-2">💬 We're here to assist you 24/7. Chat now!</div>
        <div class="welcome-message message-3">🚀 Have questions? Get instant support on WhatsApp!</div>
    </div>
    <div id="whatsapp-button">
        <i class="fab fa-whatsapp"></i>
    </div>
</div>

<style>
    /* WhatsApp Chat Icon Container */
    #whatsapp-chat {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 1000;
        animation: slideIn 1s ease-out;
    }

    /* Welcome Messages Container */
    .welcome-messages {
        position: absolute;
        bottom: 80px;
        left: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    /* General Welcome Message Style */
    .welcome-message {
        display: none;
        padding: 10px;
        border-radius: 10px;
        font-size: 14px;
        max-width: 220px;
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        opacity: 0;
        transform: scale(0.8);
        animation: waveIn 1s ease-in-out;
    }

    /* Message 1 - Primary Style */
    .message-1 {
        background-color: #25d366;
        color: white;
    }

    /* Message 2 - Secondary Style */
    .message-2 {
        background-color: #128C7E;
        color: white;
    }

    /* Message 3 - Tertiary Style */
    .message-3 {
        background-color: #075E54;
        color: white;
    }

    /* WhatsApp Icon Button */
    #whatsapp-button {
        width: 60px;
        height: 60px;
        background-color: #25d366;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #whatsapp-button:hover {
        transform: scale(1.1);
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.3);
    }

    /* WhatsApp Icon */
    #whatsapp-button i {
        color: white;
        font-size: 30px;
    }

    /* Animations */
    @keyframes slideIn {
        from {
            transform: translateX(-100px);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes waveIn {
        0% {
            opacity: 0;
            transform: scale(0.8);
        }

        50% {
            opacity: 1;
            transform: scale(1.05);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Light/Dark Theme Adaptation */
    body.light-theme #whatsapp-chat .welcome-message,
    body.light-theme #whatsapp-button {
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
    }

    body.dark-theme #whatsapp-chat .welcome-message,
    body.dark-theme #whatsapp-button {
        box-shadow: 0px 4px 12px rgba(255, 255, 255, 0.3);
    }

    body.dark-theme #whatsapp-button i {
        color: #e0e0e0;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- FontAwesome for icons -->
<script>
    $(document).ready(function() {
        // Show pop-up messages in sequence
        function showMessages() {
            let delay = 2000; // Delay between messages
            $('.welcome-message').each(function(index) {
                $(this).delay(delay * index).fadeIn(400).animate({
                    opacity: 1
                }, {
                    duration: 400
                }).delay(3000).fadeOut(400);
            });
        }

        // Trigger pop-up messages
        setTimeout(showMessages, 2000);

        // Detect user's country
        $.get('https://ipapi.co/json/', function(data) {
            var userCountry = data.country;

            // Assign WhatsApp numbers and personalized messages based on the user's country
            var whatsappNumber;
            var message;
            if (userCountry === "KE") {
                whatsappNumber = "254706378245"; // Kenyan number
                message = "Hello, coming from the website. I need help with...";
            } else {
                whatsappNumber = "18622013375"; // USA number
                message = "Hello, coming from the website. I need assistance with...";
            }

            // Set the WhatsApp link with the correct number and personalized message
            $('#whatsapp-button').click(function() {
                window.open('https://wa.me/' + whatsappNumber +
                    '?text=' + encodeURIComponent(message), '_blank');
            });
        }, "json");

        // Detect the theme and adjust styling accordingly
        function detectTheme() {
            if ($('body').hasClass('dark-theme')) {
                $('#whatsapp-chat').addClass('dark-mode');
            } else {
                $('#whatsapp-chat').removeClass('dark-mode');
            }
        }

        // Listen for theme changes
        $(document).on('themeChange', function() {
            detectTheme();
        });

        // Initial theme detection
        detectTheme();
    });
</script>
