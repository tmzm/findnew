<?php
error_reporting(0);
ini_set('display_errors', 0);


if(isset($_GET['log'])){
  header("Location: mainpage.php");
}

if(isset($_POST['create'])){
  $name = $_GET['name'];
  $kind = $_GET['kind'];

  header("Location: CVs.php?name=$name&kind=$kind");
}

?>
<!DOCTYPE html>
<html lang="en">
    <!-- ............. start ............. -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> find jop - home page </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-before.css">
    <link rel="stylesheet" href="sign-style.css">
    <link rel="stylesheet" href="bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="align-center container-fluid">
        <div class="padding navbar-brand"><img src="images/find jops.png"  alt="" width="170"></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="mainpage.php" ><h3 id="padding-home">Home</h3></a>
              </li>
            </ul>
            <a class="nav-link active" aria-current="page" href="signup.php" >
                <h4 id="padding-home">

                  
                <?php
                $s = $_GET['name'];
                      
                if(empty($s)){
                        
                echo "sign up";
                }
                ?>
                  

                </h4>
            </a>
            <form class="d-flex width-max " id="padding-home">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <!-- .................. second navbar ........................ -->

      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
            <a href="signin.php">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                      <?php        
                      if(empty($s)){
                        echo 'sign in';
                      }
                      ?> 

              </h5>
            </a>

              <?php
                      
              if(empty($s)){
                        
              echo " or ";
              }
              ?> 

            <a href="signup.php">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                      <?php
                      
                      if(empty($s)){
                        echo 'sign up';
                      }
                      ?> 

              </h5>
            </a>
            <h5>
            <?php
                      
                      if(!empty($s)){
                        echo $s;
                      }
                      ?> 
                      </h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="mainpage.html">Home</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
              <div>
              <form action="" method="GET">
               <input type="submit" name="log" class="btn btn-primary margin-top" value="log out">
              </form>
              <form action="" method="POST">
              <input type="submit" name="create" class="btn btn-outline-success margin-top" value=
              "<?php
              if($_GET['kind'] === "search"){
                echo "create or edite your CVs";
              }elseif($_GET['kind'] === "hiring"){
                echo "create or edite your hiring";
              }
              ?>"
              >
              </input>
            </form>
             </div>
            </div>
          </div>
        </div>
      </nav>


      <!-- ..................................... recent jops .................................. -->
      <!-- title -->
    <div class="padding-cj">
      <div class="recent-jops">
          <h3>recent jops</h3>
      </div>

      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <!-- first slide-->
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/JobDesign.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <!-- second slide-->
          <div class="carousel-item" data-bs-interval="2000">
            <img src="images/JobDesign.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <!-- third slide-->
          <div class="carousel-item">
            <img src="images/JobDesign.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
           </div>
        </div>
        <!-- bottom of slides-->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

      <!-- ................................... jops and cvs ........................................... -->
    <div class="padding-cj">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Jobs</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Cvs</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="cards-cj">

            <div class="row row-cols-1 row-cols-md-3 g-4 ">
                <div class="col">
                  <div class="hover-card shadow p-3 mb-5 bg-body rounded">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="hover-card shadow p-3 mb-5 bg-body rounded">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="hover-card shadow p-3 mb-5 bg-body rounded">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="hover-card shadow p-3 mb-5 bg-body rounded">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="cards-cj">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              
                <div class="col">
                  <div class="hover-card shadow p-3 mb-5 bg-body rounded">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="hover-card shadow p-3 mb-5 bg-body rounded">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="hover-card shadow p-3 mb-5 bg-body rounded">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="hover-card shadow p-3 mb-5 bg-body rounded">
                     <img src="..." class="card-img-top" alt="...">
                     <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
                </div>
                </div>
              
              </div>
           </div>
       </div>

       <!-- ...................................... footer ............................................ -->
       <div class="botom">
        <div class="align-cen"> <h6>new visiter? <a href="signup.php" class="under-line">start here</a></h6> </div>
      </div>

      <a href="#" class="under-line"> <div class="botom-b-t under-line"><h5>back to top</h5></div> </a>

    <div class="row row-cols-1 row-cols-md-3 get-to">
      <div class=" card-text card-title ">
        <h3> Get to Know Us </h3> <p>Careers </p><p>Blog </p><p>About Amazon </p><p>Investor Relations </p><p>Amazon Devices </p><p>Amazon Science </p>
      </div>
      <div class=" card-text card-title">
        <h3> Make Money with Us </h3> <p>Sell products on Amazon </p><p>Sell on Amazon Business </p><p>Sell apps on Amazon </p><p>Become an Affiliate </p><p>Advertise Your Products </p><p>Self-Publish with Us </p><p>Host an Amazon Hub </p><p>› See More Make Money with Us </p>
      </div>
      <div class=" card-text card-title">
        <h3> About us </h3> <p>Amazon Business Card </p><p>Shop with Points </p><p>Reload Your Balance </p><p>Amazon Currency Converter </p>
      </div>
    </div>

    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="images/c-logo.png" alt="" width="50" class="d-inline-block align-text-top mx-auto">
           <h5 class="d-inline-block align-text-top padding"> Designed by : Creative identification</h5>
           <div class="padding d-inline-block align-text-top"> +963954608960</div>
        </a>
        <a href="https://www.facebook.com/creativeidtm" class="under-line"> facebook</a>
      </div>
    </nav>

<!-- ............. dont touch ............. -->
    <script src="bootstrap.bundle.min.js"></script>
    <script src="js.js"></script>
</body>
<!-- ............. end ............. -->
</html>