<head>
<meta charset="UTF-8">
<!-- ====== style ========  -->
<link rel="stylesheet" href="<?= base_url('public/') ?>css/style-register.css">
<!-- Boxicons CSS -->
<link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
<title>Register</title>
</head>
<body>
<div class="hero">
      <div class="form-box">
         <div class="tit-btn">
            <h2>Register</h2><br>
         </div>
         <hr>
         <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="common()">Common</button>
            <button type="button" class="toggle-btn" onclick="anonymous()">Anonymous</button>
         </div>
         <form method="post" id="common" class="input-group" action="<?= base_url('register')?>">
            <input type="text" placeholder="Nickname" class="input-field" required name="username"><br>
            <input type="email" placeholder="Email" class="input-field" name="email" required>
            <input type="password" placeholder="Password" class="input-field" name="password" required><br>
            <button type="submit" class="submit-btn">Register</button>
         </form>
         <form method="post" id="anonymous" class="input-group">
            <input type="text" placeholder="Nickname" class="input-field" required>
            <input type="password" placeholder="Password" class="input-field">
            <button type="submit" class="submit-btn">Register</button>
         </form>
      </div>
   </div>
   <!-- ======= Script ======= -->
   <script src="<?= base_url('public/') ?>js/register.js"></script>
</body>

