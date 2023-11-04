<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- ======== Style ========= -->
    <link rel="stylesheet" href="Suport/css/style-admin.css" />

    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- ========== Siderbar ========= -->
    <nav class="siderbar close">
      <header>
        <div class="image-text">
          <span class="image">
            <img src="image/logo.avif" alt="" />
          </span>
          <div class="text header-text">
            <span class="name">CryptoLink</span>
            <span class="profession">Future</span>
          </div>
        </div>

        <i class="bx bx-chevron-right toggle-icon"></i> 
      </header>
      <div class="menu-bar">
        <div class="menu">
          <li class="search-box">
            <i class="bx bx-search icon"></i>
            <input type="search" placeholder="Search..." />
          </li>
          <ul class="menu-links">
            <li class="nav-link">
              <a href="#">
                <i class="bx bx-home-alt icon"></i>
                <span class="text nav-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <i class='bx bx-user icon'></i>
                <span class="text nav-text">Customers</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <i class='bx bx-stats icon'></i>
                <span class="text nav-text">Over</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <i class='bx bx-cog icon' ></i>
                <span class="text nav-text">Settings</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="botton-content">
            <li class="n">
                <a href="#">
                    <i class='bx bx-log-out icon'></i>
                  <span class="text nav-text">Logout</span>
                </a>
              </li>

            <li class="mode">
                <div class="moon-sun">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun '></i>
                </div>
                <span class="mode-text text">Dark Mode</span>
                <div class="toggle-switch">
                    <div class="switch"></div>
                </div>
            </li>  
        </div>
      </div>
    </nav>

    <section class="home">
        <div class="text">Dashboard <hr> </div>
    </section>

    <!-- ======= Script js ======== -->
    <script src="Suport/js/admin.js"></script>
  </body>
</html>
