<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo h1 {
            margin: 0;
            font-size: 24px;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ddd;
        }

        main {
            padding: 20px;
        }

        .gallery {
            text-align: center;
        }

        .gallery h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .photo {
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .photo img {
            max-width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .photo:hover img {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Dashboard</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="gallery">
            <h2>Galeri Seni</h2>
            <div class="photo">
                <img src="https://img.ws.mms.shopee.co.id/26f2e48d2ed8cf7d98ca70994859a094" alt="GatotKaca">
            </div>
            <div class="photo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bagong_santai.jpg" alt="Bagong">
            </div>
            <!-- Add more photo elements as needed -->
        </section>
    </main>
</body>
</html>
