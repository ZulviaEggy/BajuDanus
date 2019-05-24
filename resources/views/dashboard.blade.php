<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/ecommerce.png">
  <link rel="icon" type="image/png" href="../assets/img/ecommerce.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Baju Danus
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="/" class="simple-text logo-normal">
          Baju Danus
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="/dashboard">
              <i class="material-icons">home</i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/map">
              <i class="material-icons">shopping_cart</i>
              <p>Barang</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/tabel">
              <i class="material-icons">tabel</i>
              <p>Tabel Harga</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('user.logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="material-icons">logout</i>
               <p>Logout</p>
               </a>

               <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
                 </form>
            </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">list</i>
                  </div>
                  <p class="card-category">Category
                  <h4 class="card-title">+15</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">add_box</i>
                    <a href="/tabel">Show More...</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">attach_money</i>
                  </div>
                  <p class="card-category">Sell</p>
                  <h4 class="card-title">IDR...</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">shopping_cart</i>
                    <a href="/jual">Sell Your Garbage</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">group</i>
                  </div>
                  <p class="card-category">Community</p>
                  <h4 class="card-title">+10</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">how_to_reg</i>
                    <a href="/community_show">Join The Community</a>
                  </div>
                </div>
              </div>
            </div>
          </div>


        <div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-6 col-sm-6">
          <div class="card-header">
            <h3><strong>Manfaat Sampah Anorganik</strong></h3></br>
           <img class="img" src="img/unsplash1.jpg" height="320px" width="450px" style="margin-bottom: 20px">
            <p style="text-align: justify; text-indent :2em;">
              Sampah anorganik adalah salah satu jenis limbah yang berasal dari bahan-bahan anorganik dimana proses dan pembuatannya menggunakan suatu teknologi.
              </p>
            <p style="text-align: justify; text-indent :2em;">
              Sebagai limbah anorganik, tentunya limbah tersebut tidak bisa diuraikan secara alami dalam tanah, kalaupun dapat terurai butuh waktu yang sangat lama. Ketika sampah-samlah tersebut di dalam tanah maka tidak mampu menyatu ke dalam tanah dalam waktu bertahun-tahun.
            </p>
            <div class="card-footer"></div>
          </div>
          </div>

            <div class="col-md-6 col-sm-6">
            <div class="card-header">
              <p style="text-align: justify"><strong>1. Kerajinan tangan</strong></p>
                <p style="text-align: justify; text-indent :2em;">
                Banyak warga di Indonesia yang memiliki ide kreatif untuk mendapatkan manfaat tersembunyi dari sampah anorganik. Salah satunya dengan membuat berbagai kerajinan tangan atau handycraft.
                </p>
                <p style="text-align: justify; text-indent :2em;">
                Jenis-jenis kerajinan tangan tersebut berasal dari sampah-sampah yang tidak bisa diuraikan ke dalam tanah. Menjadi sebuah barang kerajinan tangan, sampah-sampah tersebut memiliki nilai ekonomis yang tinggi sehingga mampu mengembangkan sebuah bisnis yang besar.
                </p>
              <p style="text-align: justify"><strong>2. Pembuatan bahan daur ulang</strong></p>
                <p style="text-align: justify; text-indent :2em;">
                Pemanfaatan sampah anorganik untuk bahan daur ulang biasanya dari sampah-sampah yang berasal dari plastik. Sampah-sampah plastik tersebut kemudian dikumpulkan dan didaur ulang. Melakukan daur ulang sampah plastik ini tentu akan sedikit banyak mengurangi penumpukan sampah yang tidak bisa terurai di dalam tanah. Dengan melakukan daur ulang terhadap sampah-sampah tersebut, maka akan menjadikan hal yang positif terhadap lingkungan sekitar anda.
              </p>
              <p style="text-align: justify"><strong>3. Penggunaan kembali atau reusable</strong></p>
                <p style="text-align: justify; text-indent :2em;">
                Istilah reusable ini merupakan sebuah tindakan untuk menggunakan berbagai sampah yang bersifat anorganik. Sampah-sampah tersebut ketika sudah tidak dipakai lagi, maka tidak perlu dibuang sehingga tidak menjadi limbah yang mengotori lingkungan sekitar.
              </p>
                <div class="card-footer"></div>
            </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="/welcome">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
