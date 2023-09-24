<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de réception de message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        strong {
            font-weight: bold;
        }

        .message {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Confirmation de réception de message</h1>
        <p>Merci de nous avoir contacter. Nous avons reçu votre message</p>
        <p><strong>Nom :</strong> {{ $contactMessage['name'] }}</p>
        <p><strong>Email :</strong> {{ $contactMessage['email'] }}</p>
        <p><strong>Sujet :</strong> {{ $contactMessage['subject'] }}</p>
        <div class="message">
            <strong>Message :</strong>
            <p>{{ $contactMessage['message'] }}</p>
        </div>
    </div>
</body>
</html>
