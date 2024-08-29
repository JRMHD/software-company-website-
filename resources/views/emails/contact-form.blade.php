<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        h1 {
            color: #FFFFFF;
            margin-top: 0;
        }

        .info {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .info p {
            margin: 5px 0;
        }

        .message {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
        }

        .footer {
            background-color: #2c3e50;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            font-size: 0.8em;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Message</h1>
        </div>
        <div class="content">
            <p>Hello Web Admin,</p>
            <p>You have received a new message from your website's contact form. Here are the details:</p>
            <div class="info">
                <p><strong>Name:</strong> {{ $submission->name }}</p>
                <p><strong>Subject:</strong> {{ $submission->subject }}</p>
                <p><strong>Email:</strong> {{ $submission->email }}</p>
                <p><strong>Phone:</strong> {{ $submission->phone }}</p>
            </div>
            <div class="message">
                <h2>Message:</h2>
                <p>{{ $submission->message }}</p>
            </div>
            <p>Please respond to this inquiry at your earliest convenience.</p>
            <p>Best regards,<br>Your Website Contact Form</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Jrmhd Technologies | Auto-generated message - Do not reply
        </div>
    </div>
</body>

</html>
