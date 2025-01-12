<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Hotel - Rooms</title>
    <style>
        body { 
            font-family: 'Roboto', sans-serif; 
            line-height: 1.6; 
            margin: 0; 
            padding: 0; 
            background-color: #f4f6f8; /* Light gray */
            color: #333; 
        }
        .container { 
            width: 90%; 
            max-width: 1200px;
            margin: 40px auto; 
            padding: 20px; 
            background-color: #ffffff; 
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #1e88e5; 
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .rooms-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .room { 
            flex: 1 1 calc(33.333% - 20px); 
            display: flex;
            flex-direction: column;
            background-color: #f9fbfd; 
            border-radius: 10px; 
            overflow: hidden; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        .room:hover {
            transform: translateY(-5px);
        }
        .room img { 
            width: 100%; 
            height: auto; 
            object-fit: cover;
        }
        .room-details { 
            padding: 20px; 
        }
        .room-title { 
            font-size: 1.5em; 
            margin-bottom: 10px; 
            color: #1976d2; 
        }
        .room-description, .room-price {
            font-size: 1em;
            margin-bottom: 10px; 
        }
        .room-price { 
            font-weight: bold; 
            color: #388e3c; 
        }
        .room-buttons {
            margin-top: 15px;
        }
        .room-buttons button {
            background-color: #1e88e5;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
        .room-buttons button:hover {
            background-color: #1976d2;
        }
        @media (max-width: 768px) {
            .room {
                flex: 1 1 calc(50% - 20px); 
            }
        }
        @media (max-width: 480px) {
            .room {
                flex: 1 1 100%; 
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
    <div class="container">
        <h1>Our Rooms</h1>
        <div class="rooms-container">
            <?php
            $rooms = [
                [
                    'id' => 10,
                    'type' => 'Single Room',
                    'description' => 'Kamar ini dirancang untuk satu orang dengan kenyamanan maksimal. Dilengkapi dengan tempat tidur single yang nyaman, meja kerja, dan kamar mandi pribadi, ideal untuk bisnis travel maupun solo. Suasana kamar yang tenang menjamin istirahat yang berkualitas.',
                    'price' => 500000,
                    'capacity' => '1 Orang',
                    'image' => '../assets/single-room.jpg',
                ],
                [
                    'id' => 12,
                    'type' => 'Deluxe Room',
                    'description' => 'Kamar Deluxe menawarkan ruang lebih luas dengan desain yang elegan. Dilengkapi dengan tempat tidur king size, area duduk, dan fasilitas modern, memberikan pengalaman menginap yang mewah. Mmbuat setiap momen menjadi istimewa.',
                    'price' => 1200000,
                    'capacity' => '2 Orang',
                    'image' => '../assets/deluxe-room.jpg',
                ],
                [
                    'id' => 8,
                    'type' => 'Triple Room',
                    'description' => 'Kamar ini cocok untuk kelompok kecil atau keluarga dengan tiga orang. Dilengkapi dengan satu tempat tidur king dan satu tempat tidur single, serta ruang tambahan untuk bergerak. Fasilitas lengkap dan suasana yang hangat menjadikan kamar ini pilihan yang ideal untuk kebersamaan.',
                    'price' => 1500000,
                    'capacity' => '3 Orang',
                    'image' => '../assets/triple-room.jpg',
                ],
                [
                    'id' => 10,
                    'type' => 'Family Room',
                    'description' => 'Dirancang untuk keluarga, kamar ini menawarkan ruang yang luas dengan kapasitas hingga empat orang. Dilengkapi dengan beberapa tempat tidur, area bermain, dan layanan anak-anak, menjadikannya sempurna untuk liburan keluarga. Kenyamanan dan fasilitas lengkap menjadikan pengalaman menginap lebih menyenangkan.',
                    'price' => 2000000,
                    'capacity' => '4 Orang',
                    'image' => '../assets/family-room.jpg',
                ],
                [
                    'id' => 15,
                    'type' => 'Standard Room',
                    'description' => 'Kamar Standard menawarkan kenyamanan dengan harga terjangkau. Dilengkapi dengan tempat tidur double atau twin, kamar mandi pribadi, dan fasilitas dasar tapi sangat memadai, kamar ini memberikan pengalaman menginap yang nyaman dan menyenangkan, snagat rekomend sekali untuk anda yang ingin mencoba menginap di hotel',
                    'price' => 400000,
                    'capacity' => '2 Orang',
                    'image' => '../assets/standard-room.jpg',
                ],
            ];

            foreach ($rooms as $room) {
                echo "<div class='room'>";
                echo "<img src='{$room['image']}' alt='{$room['type']}'>";
                echo "<div class='room-details'>";
                echo "<h2 class='room-title'>{$room['type']}</h2>";
                echo "<p><strong>Jumlah Kamar:</strong> {$room['id']}</p>";
                echo "<p><strong>Tipe Kamar:</strong> {$room['type']}</p>";
                echo "<p class='room-description'><strong>Deskripsi:</strong> {$room['description']}</p>";
                echo "<p><strong>Kapasitas :</strong> {$room['capacity']}</p>";
                echo "<p class='room-price'><strong>Harga:</strong> Rp " . number_format($room['price'], 0, ',', '.') . " /Malam</p>";
                echo "<div class='room-buttons'>";
                
                if ($room['type'] === 'Single Room') {
                    echo "<button onclick=\"window.location.href='single-room.php?room={$room['id']}'\">More Details</button>";
                }
                if ($room['type'] === 'Deluxe Room') {
                    echo "<button onclick=\"window.location.href='deluxe-room.php?room={$room['id']}'\">More Details</button>";
                }
                if ($room['type'] === 'Triple Room') {
                    echo "<button onclick=\"window.location.href='triple-room.php?room={$room['id']}'\">More Details</button>";
                }
                if ($room['type'] === 'Family Room') {
                    echo "<button onclick=\"window.location.href='family-room.php?room={$room['id']}'\">More Details</button>";
                }
                if ($room['type'] === 'Standard Room') {
                    echo "<button onclick=\"window.location.href='standard-room.php?room={$room['id']}'\">More Details</button>";
                }
                echo "</div>"; // End of buttons div
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
</div>
    <div class="footer">
    <p>&copy; 2024 Hotel Kami. Semua Hak Dilindungi.</p>
    </div>
</body>
</html>
