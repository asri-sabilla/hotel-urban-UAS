<?php
$facilities = [
    [
        "name" => "Swimming Pool",
        "description" => "Kolam renang luar ruangan yang luas dengan area tempat duduk nyaman untuk bersantai. Cocok untuk berenang atau menikmati suasana santai di sekitar kolam.",
        "image" => "../assets/swimming.jpg"
    ],
    [
        "name" => "Fitness Center",
        "description" => "Pusat kebugaran dengan peralatan gym modern, termasuk mesin kardio, beban bebas, dan peralatan resistansi. Tersedia juga pelatihan pribadi dan kelas kebugaran.",
        "image" => "../assets/fitness.jpg"
    ],
    [
        "name" => "Spa & Wellness",
        "description" => "Nikmati relaksasi lengkap dengan layanan spa mewah, termasuk pijat, perawatan wajah, dan scrub tubuh, untuk pengalaman peremajaan yang menyegarkan.",
        "image" => "../assets/spa.png"
    ],
    [
        "name" => "Restaurant",
        "description" => "Restoran kami menyajikan masakan lokal dan internasional dengan bahan berkualitas tinggi, cocok untuk makan santai atau pengalaman bersantap yang lebih formal.",
        "image" => "../assets/restaurant.jpg"
    ],
    [
        "name" => "Ballroom",
        "description" => "Ballroom kami adalah tempat sempurna untuk acara besar seperti pernikahan, konferensi, atau perayaan pribadi dengan fasilitas audio visual terbaik.",
        "image" => "../assets/ballroom.jpg"
    ],
    [
        "name" => "Cafe",
        "description" => "Nikmati kopi segar, teh pilihan, dan aneka kue di kafe kami yang nyaman, tempat yang ideal untuk bersantai atau menikmati waktu bersama teman.",
        "image" => "../assets/cafe.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Hotel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #004aad;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: bold;
        }
        .header p {
            margin: 10px 0 0;
            font-size: 18px;
            font-weight: 300;
        }
        .facilities-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 40px;
            gap: 20px;
        }
        .facility {
            background: white;
            border: 1px solid #ddd;
            border-radius: 12px;
            width: 350px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            text-align: center;
        }
        .facility:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .facility img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }
        .facility .info {
            padding: 20px;
            text-align: left; /* Mengatur teks deskripsi rata kiri */
        }
        .facility .info h3 {
            margin: 0 0 10px;
            font-size: 24px;
            color: #333;
            transition: color 0.3s ease;
            display: inline-block; /* Menjaga bentuk segitiga */
        }
        .facility .info h3:hover {
            color: #004aad; /* Ubah warna saat hover */
            cursor: pointer;
        }
        .facility .info p {
            margin: 0;
            color: #555;
            font-size: 16px;
            line-height: 1.5;
        }
        @media (max-width: 768px) {
            .facilities-container {
                flex-direction: column;
                align-items: center;
            }
            .facility {
                width: 90%;
            }
        }
        .footer {
            background-color: #004aad;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
        .footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="header">
<h1>Our Facilities</h1>
<p>Explore the best facilities we offer for your comfort and enjoyment</p>
</div>

<div class="facilities-container">
    <?php foreach ($facilities as $facility): ?>
        <div class="facility">
            <img src="<?php echo $facility['image']; ?>" alt="<?php echo $facility['name']; ?>">
            <div class="info">
                <h3><?php echo $facility['name']; ?></h3>
                <p><?php echo $facility['description']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="footer">
    <p>&copy; 2024 Hotel Kami. Semua Hak Dilindungi.</p>
</div>

</body>
</html>
