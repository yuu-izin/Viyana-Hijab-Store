<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: right;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 20px 40px;
            text-decoration: none;
        }

        .navbar .logo {
            float: left;
            font-size: 1.5em;
            color: #f2f2f2;
            text-align: center;
            padding: 20px 40px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .section {
            padding: 60px;
        }

        .home {
            background-image: url('img/background.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .home h1 {
            margin: 100px 0 0 0;
            font-size: 2.5em;
            color: maroon;
        }

        .about {
            background-color: #f2f2f2;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .about img {
            width: 900px;
            height: auto;
            margin-right: 20px;
        }

        .about-text {
            max-width: 50%;
        }

        .product {
            background-color: #e2e2e2;
            text-align: left;
        }

        .contact {
            background-color: #d3d3d3;
            text-align: center;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            width: 18%;
            /* Lebar kartu ditetapkan menjadi 18% untuk 5 kartu per baris */
            margin: 1%;
            /* Spasi antara kartu */
            box-sizing: border-box;
            /* Menambahkan box-sizing untuk memperhitungkan margin dalam lebar kartu */
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .card-img-top {
            width: 100%;
            height: 280px;
            object-fit: cover;
        }

        .card-body {
            padding: 10px;
        }

        .product-heading {
            text-align: center;
            font-size: 2em;
            color: black;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 15px 30px;
            font-size: 1.2em;
            color: white;
            background-color: maroon;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: darkred;
        }

        .social-icons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            /* Ini akan menyelaraskan ikon di tengah */
        }

        .contactInfo {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Menyelaraskan elemen secara horizontal ke tengah */
            justify-content: center;
            /* Menyelaraskan elemen secara vertikal di tengah */
            text-align: center;
        }

        .social-icons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            /* Menyelaraskan ikon sosial di tengah secara horizontal */
        }

        .social-icons a {
            color: #333;
            font-size: 2em;
            margin: 0 10px;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: maroon;
        }

        .info .header {
            height: 20%;
            width: 100%;
        }

        .info .body ul {
            list-style: none;
            padding: 0;
        }

        .info .body ul li {
            margin-bottom: 20px;
        }

        .info .body ul li .list {
            display: flex;
            align-items: center;
        }

        .info .body ul li .list img {
            margin-right: 15px;
            padding: 8px;
            border-radius: 50%;
            border: 1px solid black;
        }

        .info .body ul li .list .text {
            font-size: 1.2em;
        }

        .whatsapp-btn {
            background-color: #25D366;
            /* Warna hijau WhatsApp */
            color: white;
            border: none;
            padding: 15px 25px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .whatsapp-btn:hover {
            background-color: #128C7E;
            /* Warna hijau gelap saat hover */
        }

        .order-button {
            background-color: maroon;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 10px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .order-button:hover {
            background-color: darkred;
            transform: scale(1.05);
        }
    </style>
    </styl.whatsapp-btn>
</head>

<body>

    <div class="navbar">
        <a href="#" class="logo">hijab store</a>
        <a href="#contact">Contact</a>
        <a href="#product">Product</a>
        <a href="#home">Home</a>
    </div>
    <div id="home" class="section home">
    </div>
    <!-- product section -->
    <div id="product" class="section product">
        <h1 class="product-heading">Products</h1>
        <div class="card-container">
            <div class="card">
                <img src="img/pasminaceruty.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <ul>
                        <li>Pasmina Ceruty <br> Hijab berukuran segi empat panjang yang terbuat dari kain ceruty</li>
                    </ul>
                    <button class="order-button">Pesan Sekarang</button>
                </div>
            </div>
            <div class="card">
                <img src="img/instant.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <ul>
                        <li>Pasmina Instan <br> Bahan Jersey yang memiliki karakter stretch. Adem, Nyaman, & Ringan</li>
                    </ul>
                    <button class="order-button">Pesan Sekarang</button>
                </div>
            </div>
            <div class="card">
                <img src="img/jilbabbella.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <ul>
                        <li> Jilbab Bella Square <br> Karakteristik bahannya yang cenderung tipis tapi tetap mudah diatur.</li>
                    </ul>
                    <button class="order-button">Pesan Sekarang</button>
                </div>
            </div>
            <div class="card">
                <img src="img/bergoo.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <ul>
                        <li>Jilbab Bergo <br> Tidak perlu memakai peniti atau jarum pentul yang sangat simple dan tidak mudah berantakan</li>
                    </ul>
                    <button class="order-button">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Us Section -->
    <div class="info" style="text-align: center; margin-top: 50px;">
        <div class="header">
            <h1>Contact Us</h1>
        </div>
        <button class="whatsapp-btn" onclick="window.location.href='https://wa.me/6289524517784?text=Halo,%20saya%20tertarik%20untuk%20membeli%20produk%20anda.'">Hubungi sekarang</button>
    </div>
</body>

</html>