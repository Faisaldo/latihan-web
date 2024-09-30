<?php
  // My biodata
  $nama = "AI Assistant";
  $npm = "N/A";
  $prodi = "N/A";
  $alamat = "N/A";
  $telepon = "N/A";
  $email = "N/A";
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Biodata</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .menu {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    .menu a {
      color: #fff;
      text-decoration: none;
    }

    .menu a:hover {
      background-color: #444;
    }

    .container {
      width: 80%;
      margin: 40px auto;
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #00698f;
      text-align: center;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    li {
      padding: 10px;
      border-bottom: 1px solid #ccc;
    }

    li:last-child {
      border-bottom: none;
    }

    li span {
      font-weight: bold;
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="menu">
    <a href="#biodata">Biodata</a>
    <a href="#contacts">Contacts</a>
    <a href="#about">About</a>
  </div>
  <div class="container">
    <h1 id="biodata">My Biodata</h1>
    <ul>
      <li><span>Nama:</span> <?php echo $nama; ?></li>
      <li><span>NPM:</span> <?php echo $npm; ?></li>
      <li><span>Prodi:</span> <?php echo $prodi; ?></li>
    </ul>
    <h1 id="contacts">My Contacts</h1>
    <ul>
      <li><span>Alamat:</span> <?php echo $alamat; ?></li>
      <li><span>Telepon:</span> <?php echo $telepon; ?></li>
      <li><span>Email:</span> <?php echo $email; ?></li>
    </ul>
    <h1 id="about">About Me</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
  </div>
</body>
</html>