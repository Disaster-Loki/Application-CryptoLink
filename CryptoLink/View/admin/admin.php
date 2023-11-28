<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <!-- ======== Style ========= -->
  <link rel="stylesheet" href="Suport/css/style-admin.css" />

  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  
</head>

<body>
  <!-- ========== Siderbar ========= -->
  <nav class="siderbar close">
    <header>
      <div class="image-text">
        <span class="image">
          <img src="Suport/imgs/logo.avif" alt="" />
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
            <a href="#" class="dash" onclick="ShowPage('dashboard')">
              <i class="bx bx-home-alt icon"></i>
              <span class="text nav-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#" class="custo" onclick="ShowPage('customers')">
              <i class='bx bx-user icon'></i>
              <span class="text nav-text">Customers</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#" class="ove" onclick="ShowPage('over')">
              <i class='bx bx-stats icon'></i>
              <span class="text nav-text">Exchange</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#" class="sett" onclick="ShowPage('settings')">
              <i class='bx bx-cog icon'></i>
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
      <div id="dashboard" class="page">
         <div class="text">Dashboard
            <hr>
          </div>
          <div class="main">
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Customers</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Bitcoin</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="logo-bitcoin"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Over</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>
      </div>
      </div>
      
      <div id="customers" class="page">
         <div class="text">Customers
            <hr>
          </div>
          <div class="main2">
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Username</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
      </div>

      <div id="over" class="page">
        <div class="text">
          Exchange
          <hr>
        </div>
        <div class="main3">
          <div class="graphic" id="">
            <canvas id="cryptoChart"></canvas>
          </div>

          <div class="counten">
            <table>
              <thead>
                <tr>
                  <th>Criptomoeda</th>
                  <th>Câmbio (USD)</th>
                  <th>Câmbio (Kwanza)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bitcoin</td>
                  <td>$50,000</td>
                  <td>550,000 Kz</td>
                </tr>
                <tr>
                  <td>Ethereum</td>
                  <td>$3,000</td>
                  <td>33,000 Kz</td>
                </tr>
                <tr>
                  <td>Tether USDT</td>
                  <td>$1.00</td>
                  <td>11 Kz</td>
                </tr>
                <tr>
                  <td>BNB</td>
                  <td>$500</td>
                  <td>5,500 Kz</td>
                </tr>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>

      <div id="settings" class="page">
         <div class="text">Settings
            <hr>
          </div>
         <div class="main4">
          <div class="profile">
            <div class="title">
              <h2>Profile</h2>
            </div>
            <div class="basic">
              <span class="icon"><i class='bx bx-user-circle' ></i></span>
              <span class="name"><br> Mundo Cruel</span>
            </div>
            <div class="alter">
              <form action="">
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit" class="butt">Change</button>
              </form>
            </div>
          </div>
          <div class="activity">
            <div class="title">
              <h2>Activity</h2>
            </div>
            <div class="container">
              <div class="element">
                <table>
                  <thead>
                    <tr>
                      <td>Date</td>
                      <td>Log</td>
                      <td>Logout</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>11/11/2023</td>
                      <td>10:20:24</td>
                      <td>05:10:14</td>
                    </tr>
                    <tr>
                      <td>11/11/2023</td>
                      <td>10:20:24</td>
                      <td>05:10:14</td>
                    </tr>
                    <tr>
                      <td>11/11/2023</td>
                      <td>10:20:24</td>
                      <td>05:10:14</td>
                    </tr>
                    <tr>
                      <td>11/11/2023</td>
                      <td>10:20:24</td>
                      <td>05:10:14</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
         </div> 
      </div>

    </section>
  

  <!-- ======= Script js ======== -->
  <script src="Suport/js/admin.js"></script>

  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- ======== Graphics=========== -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>