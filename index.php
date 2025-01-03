<?php
$webhook_url = "https://discord.com/api/webhooks/1304874037578694727/5EjVPcAnmO8f1QT-6Gi6nRYM8PswXtqiR-oCKnr7NSdLEsvxiRO6WMqN413uWPndRakv";

$user_ip = $_SERVER['REMOTE_ADDR'];

$message = json_encode([
    "content" => "Un utilisateur a visité le site !\nIP: $user_ip"
]);

// Use cURL to send the request to the Discord webhook
$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Continue with HTML content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>olegus - Accueil</title>
    <link rel="icon" href="discord_pfp.png" type="image/png">

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: radial-gradient(circle, #0f0c29, #302b63, #24243e);
            color: #fff;
            margin: 0;
            overflow: hidden;
        }
        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-image: url('discord_pfp.png');
            background-size: cover;
            background-position: center;
            border: 3px solid #00ff99;
            margin-bottom: 20px;
            box-shadow: 0 0 15px #00ff99, 0 0 25px #00ff99;
            transition: background-image 0.7s ease;
        }
        h1 {
            font-size: 3em;
            color: #00eaff;
            margin-bottom: 1em;
            text-shadow: 0 0 10px #00ccff, 0 0 20px #00eeff;
            display: flex;
            align-items: center;
        }
        h1 img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }
        .buttons {
            display: flex;
            gap: 20px;
        }
        .button {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.2em;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            gap: 8px;
        }
        .button img {
            width: 24px;
            height: 24px;
        }
        .button:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(0, 255, 153, 0.6);
        }
        #twitter { background-color: #1DA1F2; }
        #youtube { background-color: #FF0000; }
        #discord { background-color: #5865F2; }
        #github { background-color: #333; }
        #portfolio { background-color: #00f2ff; }
        #autre { background-color: #6a5acd; }
        #commentaire { background-color: #f39c12; }

        /* Heart styles */
        .heart {
            font-size: 50px;
            color: #bbb;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .heart.liked {
            color: #ff3366;
        }

        .heart-count {
            font-size: 1.5em;
            margin-top: 20px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="profile-picture" id="profile-picture"></div>
    <div class="buttons">
        <a id="twitter" href="https://x.com/ol3gus" class="button" target="_blank">
            <img src="twitter-icon.png" alt="Twitter"> X
        </a>
        <a id="youtube" href="https://www.youtube.com/@olegus_-" class="button" target="_blank">
            <img src="youtube-icon.png" alt="YouTube"> YouTube
        </a>
        <a id="discord" href="profile.html" class="button" target="_blank">
            <img src="discord-icon.png" alt="Discord"> Discord
        </a>
        <a id="github" href="https://github.com/ol3gus" class="button" target="_blank">
            <img src="github-icon.png" alt="GitHub"> GitHub
        </a>
        <a id="portfolio" href="portfolio.html" class="button" target="_blank">
            <img src="discord_pfp.png" alt="Portfolio"> Portfolio
        </a>
        <a id="autre" href="other.html" class="button" target="_blank">
            <img src="other-icon.png" alt="Projets"> Projets
        </a>
        <a id="Avis" href="avis.html" class="button" target="_blank">
            <img src="star-icon.png" alt="Avis"> Avis
        </a>
    </div>

    <h5>© 2024 olegus - Tous droits réservés.</h5>

    <script>
        const profilePicture = document.getElementById('profile-picture');
        const originalImage = 'discord_pfp.png';
        const newImage = 'other_image.png';

        profilePicture.addEventListener('click', () => {
            profilePicture.style.backgroundImage = `url('${newImage}')`;

            setTimeout(() => {
                profilePicture.style.backgroundImage = `url('${originalImage}')`;
            }, 700);
        });
    </script>
</body>
</html>
