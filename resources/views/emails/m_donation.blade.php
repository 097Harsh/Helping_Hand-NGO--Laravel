<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333333;
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-color: #ffffff;
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .email-header {
            background-color: #007BFF;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .email-header img {
            max-width: 150px;
            margin-bottom: 10px;
        }
        .email-body {
            padding: 20px;
        }
        .email-footer {
            background-color: #007BFF;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>{{ $subject }}</h1>
        </div>
        <div class="email-body">
            <p>{{ $mailmassage }}</p>
        </div>
        <div class="email-footer">
            <p>Thank you for your support!</p>
        </div>
    </div>
</body>
</html>
