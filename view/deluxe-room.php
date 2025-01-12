<?php
// Data Kamar
$room = [
    'type' => 'Deluxe Room',
    'description' => 'Kamar mewah dengan pemandangan yang indah dan fasilitas premium.',
    'price' => 800000,
    'image' => '../assets/deluxe-room.jpg',
    'facilities' => [
        'Tempat Tidur King Size',
        'Meja Makan',
        'Kamar Mandi Mewah',
        'Wi-Fi Gratis',
        'Televisi HD',
        'Kulkas'
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kamar - Deluxe Room</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .room-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .back-button {
            margin-top: 20px;
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .back-button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $room['type']; ?></h1>
</header>

<div class="container">
    <img src="<?php echo $room['image']; ?>" alt="Kamar <?php echo $room['type']; ?>" class="room-image">
    <div>
        <p><?php echo $room['description']; ?></p>
        <p>Harga: Rp <?php echo number_format($room['price'], 0, ',', '.'); ?>/malam</p>
    </div>

    <h3>Fasilitas Kamar</h3>
    <ul>
        <?php foreach ($room['facilities'] as $facility): ?>
            <li><?php echo $facility; ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="rooms.php" class="back-button">Back to Rooms</a>
</div>

</body>
</html>