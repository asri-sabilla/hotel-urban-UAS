<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container {
            display: flex;
            gap: 20px;
            padding: 20px;
        }

        .room-list {
            flex: 2;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .availability {
            flex: 1;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            height: fit-content;
        }

        .room {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            gap: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .room img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px 0 0 8px;
        }

        .room-content {
            padding: 15px;
            flex: 1;
        }

        .room-content h3 {
            margin: 0 0 10px;
            font-size: 20px;
            font-weight: 700;
        }

        .room-content p {
            margin: 0 0 15px;
            font-size: 14px;
            color: #666;
        }

        .room-content .icons {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .room-content .icons i {
            font-size: 18px;
            color: #666;
        }

        .room-content button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .room-content button:hover {
            background-color: #45a049;
        }

        .availability h3 {
            margin: 0 0 20px;
            font-size: 20px;
            font-weight: 700;
        }

        .availability label {
            display: block;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .availability input,
        .availability select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .availability .counter {
            display: flex;
            gap: 10px;
        }

        .availability .counter button {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        .availability .counter input {
            width: 50px;
            text-align: center;
        }

        .availability button {
            background-color: #a87f5b;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .availability button:hover {
            background-color: #916a4c;
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

        /* Pesan error */
        #error-messages {
            color: red;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="header">
    <center><h1>Our Rooms</h1></center>

    <div class="main-container">
        <!-- Room Cards -->
        <div class="room-list">
            <div class="room">
                <img src="../assets/single-room.jpg" alt="single room">
                <div class="room-content">
                    <h3>Single Room</h3>
                    <p>Single Bed, bathroom, AC, Meja Rias, WIFI</p>
                    <button>For Rp500.000,-</button>
                </div>
            </div>

            <div class="room">
                <img src="../assets/deluxe-room.jpg" alt="Deluxe Room">
                <div class="room-content">
                    <h3>Deluxe Room</h3>
                    <p>AC, WIFI, TV LED, balkon, sofa</p>
                    <button>For Rp1.200.000,-</button>
                </div>
            </div>

            <div class="room">
                <img src="../assets/triple-room.jpg" alt="Triple Room">
                <div class="room-content">
                    <h3>Triple Room</h3>
                    <p>TV LED, WIFI, Bathroom terpisah, AC</p>
                    <button>For Rp1.500.000,-</button>
                </div>
            </div>

            <div class="room">
                <img src="../assets/family-room.jpg" alt="Family Room">
                <div class="room-content">
                    <h3>Family Room</h3>
                    <p>Mini bar, sofa, TV LED, WIFI, AC, Balkon</p>
                    <button>For Rp2.000.000,-</button>
                </div>
            </div>

            <div class="room">
                <img src="../assets/standard-room.jpg" alt="Standard Room">
                <div class="room-content">
                    <h3>Standard Room</h3>
                    <p>Bathroom, wifi, AC</p>
                    <button>For Rp400.000,-</button>
                </div>
            </div>
        </div>

        <div class="availability">
            <h3>Check Availability</h3>
            <label for="checkin">Check-In</label>
            <input type="date" id="checkin">
            <label for="checkout">Check-Out</label>
            <input type="date" id="checkout">

            <label for="room-type">Select Room Type</label>
            <select id="room-type">
                <option value="">-- Select Room Type --</option>
                <option value="single">Single Room</option>
                <option value="deluxe">Deluxe Room</option>
                <option value="triple">Triple Room</option>
                <option value="family">Family Room</option>
                <option value="standard">Standard Room</option> 
            </select>

            <label>Person</label>
            <div class="counter">
                <button onclick="updateCounter('person', -1)">-</button>
                <input type="number" id="person" value="1" min="1">
                <button onclick="updateCounter('person', 1)">+</button>
                min age < 12 years
            </div>

            <label>Rooms</label>
            <div class="counter">
                <button onclick="updateCounter('rooms', -1)">-</button>
                <input type="number" id="rooms" value="1" min="1">
                <button onclick="updateCounter('rooms', 1)">+</button>
            </div>

            <!-- Elemen untuk menampilkan pesan error -->
            <div id="error-messages"></div>

            <button onclick="checkAvailability()">Check Availability</button>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Hotel Kami. Semua Hak Dilindungi.</p>
    </div>
</div>

<script>
    function updateCounter(field, value) {
        const input = document.getElementById(field);
        const newValue = parseInt(input.value) + value;
        if (newValue >= parseInt(input.min)) {
            input.value = newValue;
        }
    }

    function checkAvailability() {
        // Ambil nilai dari semua input
        const checkin = document.getElementById("checkin").value;
        const checkout = document.getElementById("checkout").value;
        const roomType = document.getElementById("room-type").value;
        const person = document.getElementById("person").value;
        const rooms = document.getElementById("rooms").value;

        const errorMessages = document.getElementById("error-messages");

        // Bersihkan pesan error sebelumnya
        errorMessages.innerHTML = "";

        // Validasi input
        let errors = [];
        if (!checkin) errors.push("Masukkan tanggal check-in.");
        if (!checkout) errors.push("Masukkan tanggal check-out.");
        if (new Date(checkin) >= new Date(checkout)) errors.push("Tanggal check-out harus setelah check-in.");
        if (!roomType) errors.push("Pilih tipe kamar.");
        if (person < 1) errors.push("Jumlah tamu minimal 1 orang.");
        if (rooms < 1) errors.push("Jumlah kamar minimal 1.");

        // Tampilkan error jika ada
        if (errors.length > 0) {
            errorMessages.innerHTML = errors.join("<br>");
            return; // Hentikan eksekusi jika ada error
        }

        // Jika validasi lolos, hitung jumlah malam
        const checkinDate = new Date(checkin);
        const checkoutDate = new Date(checkout);
        const nights = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));

        // Redirect ke halaman pemesanan
        const url = `booking.html?checkin=${checkin}&checkout=${checkout}&roomType=${roomType}&person=${person}&rooms=${rooms}&nights=${nights}`;
        window.location.href = url;
    }
</script>
</body>
</html>
