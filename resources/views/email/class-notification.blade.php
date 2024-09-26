<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class is Live</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            color: #2c3e50;
        }
        p {
            color: #34495e;
        }
        .btn {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #95a5a6;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Assalamu Alaikum, {{ $studentName }}</h2>
        <p>We are pleased to inform you that your Quran class is now live. You can join the session using the link below:</p>

        <a href="https://zbti.net/account" class="btn">Join Live Class</a>

        <p>If you have any issues or need assistance, feel free to reply to this email or contact your instructor directly.</p>

        <p>Jazak Allah Khair for being a part of our Quran academy. We look forward to seeing you in class.</p>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Quran Academy | All rights reserved</p>
        </div>
    </div>
</body>
</html>
