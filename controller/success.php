<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>
    <h1>Payment Selesai</h1>
    <p>Terima kasih! Bukti pembayaran Anda telah berhasil diunggah.</p>
    <p>Anda akan diarahkan kembali ke halaman utama dalam beberapa detik.</p>
    <script>
        setTimeout(function() {
            window.location.href = '../index.php';
        }, 3000); // Redirect after 3 seconds
    </script>
</body>
</html>