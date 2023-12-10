

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>user</title>
  <!-- ======== Style ========= -->
  <link rel="stylesheet" href="<?= base_url('public/') ?>css/style-user.css">
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

</head>

<body>
  <?php include_once("header.php") ?>
  <br>
  <!-- ========== Siderbar ========= -->
  <nav class="siderbar close">
    <header>
      <!--<div class="image-text">
        <span class="image">
          <img src="logo.avif" alt="" />
        </span>
        <div class="text header-text">
          <span class="name">CryptoLink</span>
          <span class="profession">Future</span>
        </div>
      </div>-->

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
            <a href="#" class="market" onclick="ShowPage('marketplace')">
              <i class='bx bxs-store-alt icon'></i>
              <span class="text nav-text">Marketplace</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#" class="ove" onclick="ShowPage('over')">
              <i class='bx bx-stats icon'></i>
              <span class="text nav-text">Exchange</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#" class="wall" onclick="ShowPage('wallet')">
              <i class='bx bx-wallet icon'></i>
              <span class="text nav-text">wallet</span>
            </a>
          </li>
          <hr>
          <li class="nav-link">
            <a href="#" class="pro" onclick="ShowPage('profile')">
              <i class='bx bxs-user icon'></i>
              <span class="text nav-text">Profile</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="botton-content">
        <li class="n">
          <a href="<?= base_url('logout') ?>">
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
              <div class="cardName">Profile</div>
            </div>

            <div class="iconBx">
              <ion-icon name="person-add-outline"></ion-icon>
            </div>
          </div>

          <div class="card">
            <div>
              <div class="numbers">$<?= $total ?></div>
              <div class="cardName">Wallet</div>
            </div>

            <div class="iconBx">
              <ion-icon name="wallet-outline"></ion-icon>
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
        <!-- Grafics-->
        <!--<div class="grafics">
            <canvas id="bitcoin-chart" class="chart-card"></canvas>
            <canvas id="ethereum-chart" class="chart-card"></canvas>
            <canvas id="bnb-chart" class="chart-card"></canvas>
        </div>-->
      </div>
    </div>

    <div id="marketplace" class="page">
      <div class="text">Marketplace
        <hr>
      </div>
      <div class="main2">
        <div class="cardBox2">
          <div class="card2">
            <div class="iconBx2">
              <ion-icon name="logo-bitcoin"></ion-icon>
            </div>
            <div class="info">
              <div class="cardName2">Vendedor</div>
              <div class="postDate">Data</div>
            </div>
            <div class="numbers2">R$ 80,00</div>
          </div>
          <div class="card2">
            <div class="iconBx2">
              <ion-icon name="">
                <img src="ethereum.png" alt="Ethereum" style="color: white;">
              </ion-icon>
            </div>
            <div class="info">
              <div class="cardName2">Vendedor</div>
              <div class="postDate">Data</div>
            </div>
            <div class="numbers2">R$ 80,00</div>
          </div>
          <div class="card2">
            <div class="iconBx2">
              <ion-icon name="logo-bitcoin"></ion-icon>
            </div>
            <div class="info">
              <div class="cardName2">Vendedor</div>
              <div class="postDate">Data</div>
            </div>
            <div class="numbers2">R$ 80,00</div>
          </div>
          <div class="card2">
            <div class="iconBx2">
              <ion-icon name="logo-bitcoin"></ion-icon>
            </div>
            <div class="info">
              <div class="cardName2">Vendedor</div>
              <div class="postDate">Data</div>
            </div>
            <div class="numbers2">R$ 80,00</div>
          </div>
          <div class="card2">
            <div class="iconBx2">
              <ion-icon name="logo-bitcoin"></ion-icon>
            </div>
            <div class="info">
              <div class="cardName2">Vendedor</div>
              <div class="postDate">Data</div>
            </div>
            <div class="numbers2">R$ 80,00</div>
          </div>
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

    <div id="wallet" class="page">
      <div class="text">Wallet
        <hr>
      </div>
      <div class="main5">
        <div class="credit-card">
          <div class="card-header">
            <div class="card-title"><?= $_SESSION['user']['username'] ?></div>
            <div class="card-logo">
              <!-- Adicione aqui o ícone do cartão -->
              <ion-icon name="card-outline"></ion-icon>
            </div>
          </div>
          <div class="card-number">**** **** **** 1234</div>
          <div class="card-info">
            <div class="info-item">
              <div class="label">Validade</div>
              <div class="value">12/23</div>
            </div>
            <div class="info-item">
              <div class="label">Saldo</div>
              <div class="value"><?= $total ?></div>
            </div>
          </div>
        </div>

        <div class="transaction-history">
          <h2>Transactions</h2>
          <table>
            <thead>
              <tr>
                <th>Data</th>
                <th>Descrição</th>
                <th>Valor</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($transactions as $transaction): ?>
              <tr>
                <td><?= $transaction['DataHoraTransacao'] ?></td>
                <td><?= $transaction['TipoTransacao'] ?></td>
                <td>$<?= $transaction['ValorTransacao'] ?></td>
              </tr>
              <?php endforeach ?>
              <!-- Adicione mais linhas conforme necessário -->
            </tbody>
          </table>

          <div class="alter">
            <form action="add-transaction" method="post">
              <input type="number" placeholder="Valor" required name="amount" min="10">
              <input type="hidden" name="id" value="<?= getUserByNickname($_SESSION['user']['username'])[0]['UserID'] ?>">
              <button type="submit" class="butt">Change</button>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div id="profile" class="page">
      <div class="text">Settings
        <hr>
      </div>
      <div class="main4">
        <div class="profile">
          <div class="title">
            <h2>Profile</h2>
          </div>
          <div class="basic">
            <span class="icon"><i class='bx bx-user-circle'></i></span>
            <span class="name"><br> <?= $_SESSION['user']['username'] ?></span>
          </div>
          <div class="alter">
            <form action="update-user" method="post">
              <input type="text" placeholder="Username" required name="username">
              <input type="password" placeholder="Password" required name="password">
              <input type="hidden" name="id" value="<?= getUserByNickname($_SESSION['user']['username'])[0]['UserID'] ?>">
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
  <script src="<?= base_url('public/') ?>js/user.js"></script>
  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- ======== Graphics=========== -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>