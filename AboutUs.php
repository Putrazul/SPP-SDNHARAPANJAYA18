<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Halaman Tentang Kami - Memperkenalkan tim kami dan visi di balik layanan kami.">
    <link rel="icon" type="image/png" href="img/logo/logosd.jpg">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f9f9f9;
        }

        .content-wrapper {
            margin-left: 250px;
            padding: 130px 70px 20px;
        }

        /* Konten Utama */
        .content {
            padding: 20px 50px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .content h1 {
            text-align: center;
            color: #333;
        }

        .content h2 {
            text-align: left;
            color: #333;
        }

        .content h3 {
            text-align: center;
            color: #333;
        }

        .content p {
            font-size: 16px;
            text-align: justify;
            color: #666;
            margin-bottom: 20px;
        }

        /* Gambar dan Tim */
        .gambar {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .pm {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .team-member {
            width: 200px;
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .team-member h3 {
            text-align: center;
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }

        .team-member p {
            text-align: center;
            font-size: 16px;
            color: #666;
        }

        .team-member a {
            text-decoration: none;
            color: inherit;
        }

        .team-member a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <?php
    include('tampilan/sidebar.php');
    include('tampilan/header.php');
    ?>

    <div class="content-wrapper">
        <div class="content">
            <h2>Selamat datang di Halaman Tentang Kami!</h2>
            <p>
                Kami bukan sekadar entitas bisnis; kami adalah cerita, visi, dan semangat yang terwujud dalam setiap layanan dan produk kami. Di balik layar, ada tim penuh gairah yang bertekad untuk memberikan pengalaman terbaik bagi Anda.
            </p>
            <p>
                Kami lahir dari impian, diperkuat oleh kerja keras, dan diberdayakan oleh inovasi. Setiap langkah kami, setiap keputusan kami, ditempa oleh dedikasi untuk memberikan nilai tambah yang tak terlupakan bagi pelanggan kami.
            </p>
            <p>
                Kami tak hanya menjual produk, tapi juga menjalin hubungan. Kami percaya bahwa setiap pelanggan adalah cerminan dari kepercayaan yang telah kami bangun. Kami mendengarkan, memahami, dan berinovasi untuk memenuhi kebutuhan Anda.
            </p>
            <p>
                Terima kasih telah mempercayai kami untuk menjadi mitra perjalanan Anda.
            </p>

            <h2>Hubungi Kami</h2>
            <p>
                Jika Anda memiliki pertanyaan atau komentar, silakan <a href="mailto:putrazul009@gmail.com">hubungi kami</a>. Kami akan senang mendengarkan dan membantu Anda!
            </p>
            <br>
            <h1>Tim Kami</h1>
            <br>
            <br>
            <br>
            <h3>Project Manager</h3>
            <div class="pm">
                <div class="team-member">
                    <a href="https://www.instagram.com/putrazul09/" target="_blank">
                        <img src="img/putra.jpg" alt="Foto Project Manager">
                        <h3>Project Manager</h3>
                        <p>Sulthan Putra</p>
                    </a>
                </div>
            </div>
            <br>
            <br>
            <h3>Tim Developer</h3>
            <div class="gambar">
                <div class="team-member">
                    <a href="https://www.instagram.com/putrakuns" target="_blank">
                        <img src="img/hisyam.jpg" alt="Foto UI/UX Designer">
                        <h3>UI/UX Developer</h3>
                        <p>Hisyam Putra</p>
                    </a>
                </div>
                <div class="team-member">
                    <a href="https://www.instagram.com/putrazul09/" target="_blank">
                        <img src="img/putra.jpg" alt="Foto Beckend Developer">
                        <h3>Backend Developer</h3>
                        <p>Sulthan Putra</p>
                    </a>
                </div>
                <div class="team-member">
                    <a href="https://www.instagram.com/rizky.f.p.p" target="_blank">
                        <img src="img/rizky.jpg" alt="Foto Beckend Developer">
                        <h3>Backend Developer</h3>
                        <p>Rizky Fadillah</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        © 2024 Pembayaran SPP SDN Harapan Jaya 18
    </footer>
</body>

</html>