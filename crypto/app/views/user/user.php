<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User</title>
  <!-- ======== Style ========= -->
  <link rel="stylesheet" href="<?= base_url('public/') ?>css/style-user.css">
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

</head>

<body>
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
          <!-- <a href="<?= base_url('clear') ?>">
            <i class='bx bx-trash icon'></i>
            <span class="text nav-text">Clear</span>
          </a> -->
          <a href="javascript:void(0)" id="btnClear">
            <i class='bx bx-trash icon'></i>
            <span class="text nav-text">Clear</span>
          </a>
        </li>
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
              <div class="cardName">Bitcoin</div>
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
        <div class="graphic" id="">
          <canvas id="cryptoChart"></canvas>
        </div>
        <!--<div class="calendar" id="customCalendar">
        </div>-->
        <div class="graphic2-" id="">
          <canvas id="cryptoChart2-"></canvas>
        </div>
      </div>
    </div>

    <div id="marketplace" class="page">
      <div class="text">Marketplace
        <hr>
      </div>
      <div class="main2">
        <div class="button">
          <button class="sell-button"> Sell </button>
        </div>
        <?php foreach ($ordens as $ordem) : ?>
          <div class="cardBox2">
            <div class="card2">
              <div class="iconBx2">
                <ion-icon name="logo-bitcoin"></ion-icon>
              </div>
              <div class="info">
                <div class="cardName2"><?= $ordem['Username'] ?></div>
                <div class="cardName2"><?= $ordem['Quantidade'] ?></div>
                <div class="cardName2"><?= $ordem['Criptomoeda'] ?></div>
              </div>
              <?php if ($userID == $ordem['UserID']) : ?>
                <button class="numbers2" ?>$ <?= $ordem['Preco'] ?> (Propriedade)</button>
              <?php else : ?>
                <?php if ($total < $ordem['Preco']) : ?>
                  <button class="numbers2" ?>$ <?= $ordem['Preco'] ?> (Saldo insuficiente)</button>
                <?php else : ?>
                  <a class="numbers2" href="<?= base_url('buy-crypto?id=') . $ordem['OrderID'] ?>">$ <?= $ordem['Preco'] ?></a>
                <?php endif ?>
              <?php endif ?>
            </div>
          </div>
        <?php endforeach ?>
      </div>

      <div class="modal-overlay" id="modalOverlay">
        <div class="modal-content" id="sellCryptoModal">
          <div id="sell-crypto" class="box">
            <form action="<?= base_url("add-ordem") ?>" method="post">
              <Fieldset>
                <legend><b>Sell</b></legend>
                <div class="inputBox">
                  <input class="inputUser" type="text" id="username" name="username" value="<?= $_SESSION['user']['username'] ?>">
                </div>
                <div class="inputBox">
                  <input class="inputUser" type="text" id="data_venda" name="data_venda" value="<?php echo date('Y-m-d'); ?>" readonly>
                </div>
                <div class="inputBox">
                  <select class="inputUser" id="tipo_moeda" name="tipo_moeda" required>
                    <option value="bitcoin">Bitcoin</option>
                    <option value="ethereum">Ethereum</option>
                    <option value="tether">Tether</option>
                    <option value="bnb">BNB</option>
                  </select>
                </div>
                <div class="inputBox">
                  <input class="inputUser" type="text" id="tipo_transacao" name="tipo_transacao" value="Venda" readonly>
                  <input class="inputUser" type="number" id="amount" name="amount" step="any" placeholder="Amount">
                </div>
                <div class="inputBox">
                  <input class="inputUser" type="number" id="preco" name="preco" step="any" placeholder="Price">
                </div>
                <button type="submit">Post</button>
              </Fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div id="over" class="page">
      <div class="text">
        Exchange - Coin
        <hr>
      </div>
      <div class="main3">
        <div class="cart">
          <h2>Cart</h2>
          <div class="credit-card2">
            <div class="card-header2">
              <div class="card-title2"><?= $_SESSION['user']['username'] ?></div>
              <div class="card-logo2">
                <ion-icon name="card-outline"></ion-icon>
              </div>
            </div>
            <div class="card-number2"><?= $referencia ?></div>
            <div class="card-info2">
              <div class="info-item2">
                <div class="label2">Validade</div>
                <div class="value2">16/23</div>
              </div>
              <div class="info-item2">
                <div class="label2">Saldo</div>
                <div class="value2"><?= $totalCripto ?></div>
              </div>
            </div>
          </div>
          <?php foreach ($userCripto as $cripto) : ?>
            <div class="coin">
              <span class="name"><?= $cripto['Criptomoeda'] ?></span>
              <span class="amout"><?= $cripto['total'] ?></span>
            </div>
          <?php endforeach ?>
        </div>
        <div class="counten">
          <h3>Transactions Cryptocurrency</h3>
          <!--<form class="form-wallet" action="" method="post">
            <select class="inputUser" id="" name="">
              <option value="bitcoin">Bitcoin</option>
              <option value="ethereum">Ethereum</option>
              <option value="tether">Tether</option>
              <option value="bnb">BNB</option>
            </select>
            <input type="number" placeholder="amount" name="amount" min="1">
            <button type="submit" class="butt">Add</button>
          </form>-->
          <table>
            <thead>
              <tr>
                <th>Cryptocurrency</th>
                <th>Referencia</th>
                <th>Value</th>
                <!-- <th>Date</th> -->
              </tr>
            </thead>
            <tbody>
              <?php foreach ($transactionWallet as $tw) : ?>
                <tr>
                  <!-- <td>Nada encon</td> -->
                  <td><?= $tw['Tipo_moeda'] ?></td>
                  <td><?= $tw['referencia'] ?></td>
                  <td><?= $tw['SaldoCriptomoeda'] ?></td>
                </tr>
              <?php endforeach ?>
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
          <div class="alter">
            <h2>Transactions</h2>
            <form action="add-transaction" method="post">
              <input type="number" placeholder="Valor" required name="amount" min="10">
              <input type="hidden" name="id" value="<?= getUserByNickname($_SESSION['user']['username'])[0]['UserID'] ?>">
              <button type="submit" class="butt">Change</button>
            </form>
          </div>
          <table>
            <thead>
              <tr>
                <th>Type</th>
                <th>Value</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($transactions as $transaction) : ?>
                <tr>
                  <td><?= $transaction['TipoTransacao'] ?></td>
                  <td>$<?= $transaction['ValorTransacao'] ?></td>
                  <td><?= $transaction['DataHoraTransacao'] ?></td>
                </tr>
              <?php endforeach ?>
              <!-- Adicione mais linhas conforme necessário -->
            </tbody>
          </table>

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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    var btnClear = document.getElementById("btnClear");

    btnClear.addEventListener("click", function(){
      alert("Eliminado com sucesso.")
      window.location.href = "clear"
    })
  </script>
</body>

</html>