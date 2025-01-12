<?php
include "db.php";

session_start();

// Ambil data dari form
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$roomType = $_POST['roomType'];
$person = $_POST['person'];
$rooms = $_POST['rooms'];
$totalPrice = $_POST['totalPrice'];
$paymentMethod = $_POST['paymentMethod'];
$cardNumber = !empty($_POST['cardNumber']) ? $_POST['cardNumber'] : null; 
$bankName = !empty($_POST['bankName']) ? $_POST['bankName'] : null; 

// Menyimpan data ke session
$_SESSION['checkin'] = $checkin;
$_SESSION['checkout'] = $checkout;
$_SESSION['roomType'] = $roomType;
$_SESSION['person'] = $person;
$_SESSION['rooms'] = $rooms;
$_SESSION['totalPrice'] = $totalPrice;
$_SESSION['paymentMethod'] = $paymentMethod;
$_SESSION['cardNumber'] = $cardNumber;
$_SESSION['bankName'] = $bankName;

// Query untuk menyimpan data ke tabel tbl_booking
$sql = "INSERT INTO tbl_booking (checkin, checkout, room_type, person, rooms, total_price, payment_method, card_number, bank_name) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Persiapkan statement
$stmt = $db->prepare($sql);

if ($stmt) {
    // Bind parameter ke statement
    $stmt->bind_param(
        "sssiiisss", 
        $checkin, 
        $checkout, 
        $roomType, 
        $person, 
        $rooms, 
        $totalPrice, 
        $paymentMethod, 
        $cardNumber, 
        $bankName
    );

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "Reservasi berhasil disimpan. <script>window.location.href = '../view/resi.html?checkin={$checkin}&checkout={$checkout}&roomType={$roomType}&person={$person}&rooms={$rooms}&totalPrice={$totalPrice}&paymentMethod={$paymentMethod}&bankName={$bankName}&cardNumber={$cardNumber}';</script>";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Tutup statement
    $stmt->close();
} else {
    echo "Terjadi kesalahan: " . $db->error;
}

// Menutup koneksi
$conn->close();
?>
