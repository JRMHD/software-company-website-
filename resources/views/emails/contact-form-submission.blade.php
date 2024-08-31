<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f0f0f0; margin: 0; padding: 0;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%"
        style="max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <tr>
            <td style="background-color: #4169E1; padding: 30px; text-align: center;">
                <h1 style="color: #ffffff; margin: 0; font-size: 24px;">New Message Received</h1>
            </td>
        </tr>
        <tr>
            <td style="padding: 30px;">
                <p style="font-size: 16px; color: #333333; margin-bottom: 20px;">Hello, you have received a message from
                    <strong>{{ $contact->name }}</strong>.</p>

                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 20px;">
                    <tr>
                        <td style="padding: 10px; background-color: #f0f0f0; border-radius: 4px;">
                            <p style="margin: 0; color: #333333;"><strong>Subject:</strong> {{ $contact->subject }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;">
                            <p style="margin: 0; color: #333333;"><strong>Email:</strong> {{ $contact->email }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; background-color: #f0f0f0; border-radius: 4px;">
                            <p style="margin: 0; color: #333333;"><strong>Phone:</strong> {{ $contact->phone }}</p>
                        </td>
                    </tr>
                </table>

                <h2 style="color: #4169E1; font-size: 18px; margin-bottom: 10px;">Message:</h2>
                <p
                    style="font-size: 16px; color: #333333; line-height: 1.6; background-color: #f0f0f0; padding: 15px; border-radius: 4px;">
                    {{ $contact->message }}</p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #4169E1; padding: 20px; text-align: center;">
                <p style="color: #ffffff; font-size: 14px; margin: 0;">&copy; {{ date('Y') }} Jrmhd Technologies.
                    All rights reserved.</p>
            </td>
        </tr>
    </table>
</body>

</html>
