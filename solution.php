<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Business Solutions Tools</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Lucide icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f4f6f9;
    }

    /* Top Navigation */
    nav {
      background: #0d47a1;
      color: #fff;
      padding: 14px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .navbar-brand {
      font-weight: bold;
      font-size: 22px;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
      text-align: center;
    }

    h1 {
      font-size: 28px;
      color: #0d47a1;
      margin-bottom: 30px;
    }

    .tools-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
    }

    .card {
      background: white;
      border-radius: 16px;
      padding: 30px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card svg {
      width: 60px;
      height: 60px;
      color: #0d47a1;
      margin-bottom: 15px;
    }

    .card h3 {
      font-size: 20px;
      margin-bottom: 15px;
    }

    .btn {
      background: #0d47a1;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 15px;
      font-weight: bold;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #08306b;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav>
    <div class="navbar-brand">Gaatech Business Solutions</div>
  </nav>

  <!-- Main Content -->
  <div class="container">
    <h1>Business Solutions Tools</h1>

    <div class="tools-grid">
      <!-- QR Receipt -->
      <div class="card">
        <i data-lucide="file-text"></i>
        <h3>QR Receipt</h3>
        <button class="btn" onclick="comingSoon()">Use Tool</button>
      </div>

      <!-- Barcode Receipt -->
      <div class="card">
        <i data-lucide="barcode"></i>
        <h3>Barcode for Receipt</h3>
        <button class="btn" onclick="comingSoon()">Use Tool</button>
      </div>

      <!-- QR Code Generator -->
      <div class="card">
        <i data-lucide="qr-code"></i>
        <h3>QR Code Generator</h3>
        <button class="btn" onclick="comingSoon()">Use Tool</button>
      </div>
    </div>
  </div>

  
  <script>
    lucide.createIcons();
    document.getElementById("year").textContent = new Date().getFullYear();

    function comingSoon() {
      alert(" This feature is coming soon!");
    }
  </script>
</body>
</html>
<?php include 'footer.php'; ?>
