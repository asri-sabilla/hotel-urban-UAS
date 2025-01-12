<!DOCTYPE html>
<html>
<head>

<style>
body {
  font-family: Arial, sans-serif;
  text-align: center;
  background-color: #fff5f5; 
  color: #333;
}

.header {
  background-color: #f7f7f7; 
  padding: 50px;
}

.header h1 {
  font-size: 48px;
  font-weight: bold;
  color: #333; 
  margin-bottom: 20px;
}

.header hr {
  border: 1px solid #e0e0e0; 
  width: 100px;
  margin: 0 auto;
}

.container {
  margin-top: 40px;
  display: flex;
  justify-content: center;
  gap: 20px; 
  flex-wrap: wrap; 
}

.profile {
  background-color: #fff; 
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  padding: 20px;
  width: 250px; 
  text-align: center;
  transition: transform 0.3s ease; 
}

.profile:hover {
  transform: translateY(-10px); 
}

.profile img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  margin-bottom: 15px;
}

.profile h3 {
  font-size: 22px;
  color: #800000;
  margin-bottom: 10px;
}

.profile h5 {
  font-size: 18px;
  color: #555;
  margin-bottom: 15px;
}

.profile p {
  font-size: 16px;
  color: #666;
  text-align: left;
}

.footer {
  margin-top: 40px;
  background-color: #f7f7f7;
  color: rgb(10, 10, 10);
  padding: 20px;
}
</style>
</head>
<body>

<div class="header">
  <h1>URBAN HOTEL</h1>
  <hr style="border-top: 2px solid pink;">
  <h2>About Our Website Creators</h2>
  <h2>Meet Our Team</h2>
</div>

<div class="container">

  <div class="profile">
    <img src="../assets/alisha.jpg" alt="Alisha Zaharani">
    <h3>Alisha Zaharani</h3>
    <h5>Database Manager</h5>
    <p>Bertanggung jawab dalam menangani basis data untuk website Urban Hotel. Memiliki keahlian tinggi dalam merancang dan mengelola database, memastikan semua data tamu, reservasi, dan pembayaran tersimpan dengan aman dan terorganisir.</p>
  </div>

  <div class="profile">
    <img src="../assets/ibrah.jpg" alt="M.Ibrah Adz-Dzikra">
    <h3>M.Ibrah Adz-Dzikra</h3>
    <h5>Front-End Developer</h5>
    <p>Bertanggung jawab dalam pengembangan antarmuka pengguna (front-end) website ini. Dengan kreativitas dan pengetahuannya tentang desain web, ia menciptakan pengalaman pengguna yang intuitif dan menarik.</p>
  </div>

  <div class="profile">
    <img src="../assets/asri.jpg" alt="Asri Sabilla Putri">
    <h3>Asri Sabilla Putri</h3>
    <h5>Back-End Developer</h5>
    <p>Pengembang back-end website Urban Hotel. Ia bertugas merancang sistem dan logika di balik layar yang memastikan semua fitur berjalan dengan baik, mulai dari proses registrasi, pembayaran, hingga pengelolaan ulasan tamu.</p>
  </div>

</div>

<div class="footer">
  <p>© 2024 Urban Hotel. All Rights Reserved.</p>
</div>

</body>
</html>