<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Information</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #222;
            /* Dark gray background */
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            /* Position relative for absolute positioning of text */
        }

        .developer {
            width: 200px;
            height: 300px;
            margin: 20px;
            background-color: #333;
            /* Darker gray background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            /* White shadow */
            overflow: hidden;
            position: relative;
            animation: blink 2s infinite;
            /* Blink animation */
        }

        @keyframes blink {

            0%,
            100% {
                border: 2px solid #fff;
                /* White border */
                background-color: #333;
                /* Darker gray background */
            }

            50% {
                border: 2px solid #fff;
                /* White border */
                background-color: #555;
                /* Even darker gray background */
            }
        }

        .developer:hover {
            animation: none;
            /* Disable blink animation on hover */
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.6);
            /* Increased shadow on hover */
        }

        .developer img {
            width: 100%;
            height: 60%;
            object-fit: cover;
            border-bottom: 2px solid #fff;
            /* White border */
        }

        .info {
            padding: 10px;
            text-align: left;
            /* Align text to left */
            position: absolute;
            /* Position text */
            bottom: 0;
            /* Align text to bottom */
            left: 0;
            /* Align text to left */
            width: 100%;
            /* Full width */
            background-color: rgba(0, 0, 0, 0.8);
            /* Black background with transparency */
        }

        .info h2 {
            margin-top: 0;
            font-size: 18px;
            /* Font size for developer name */
            margin-bottom: 5px;
            /* Add space below name */
            text-transform: uppercase;
            /* Uppercase name */
        }

        .info p {
            margin: 0;
            font-size: 14px;
            /* Font size for other info */
            margin-bottom: 3px;
            /* Add space below each line */
        }

        .info a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin-top: 10px;
            font-size: 14px;
        }

        .info a:hover {
            text-decoration: underline;
        }

        .developer-info {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="developer" id="developer1">
            <img src="images/shreya.jpg" alt="Shreya">
            <div class="info">
                <h2>Shreya Berlikar</h2>
                <p>Email: shreyaberlikar@gmail.com</p>
                <p>Qualification: CSE Diploma Student (III year)</p>
                <a href="https://linkedin.com/in/shreya-berlikar" target="_blank">LinkedIn</a>
            </div>
        </div>
        <div class="developer" id="developer2">
            <img src="images/om.jpg" alt="Om">
            <div class="info">
                <h2>Om Chaudhari</h2>
                <p>Email: om@example.com</p>
                <p>Qualification: CSE Diploma Student (III year)</p>
                <a href="https://linkedin.com/in/om" target="_blank">LinkedIn</a>
            </div>
        </div>
        <div class="developer" id="developer3">
            <img src="images/samarth.jpg" alt="Samarth">
            <div class="info">
                <h2>Samarth Joshi</h2>
                <p>Email: samarth31j@gmail.com</p>
                <p>Qualification: CSE Diploma Student (III year)</p>
                <a href="https://linkedin.com/in/samarth-joshi" target="_blank">LinkedIn</a>
            </div>
        </div>
        <div class="developer" id="developer4">
            <img src="images/vaishnavi.jpg" alt="Vaishnavi">
            <div class="info">
                <h2>Vaishnavi Are</h2>
                <p>Email: vaishnavi@example.com</p>
                <p>Qualification: CSE Diploma Student (III year)</p>
                <a href="https://www.linkedin.com/in/vaishnavi-are-4552242b3?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                    target="_blank">LinkedIn</a>
            </div>
        </div>
        <div class="developer-info">Developer Information</div>
    </div>
</body>

</html>