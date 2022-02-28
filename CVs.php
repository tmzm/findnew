<?php
if(isset($_POST['home'])){
  $name = $_GET['name'];
  $kind = $_GET['kind'];
  header("Location: mainpage.php?name=$name&kind=$kind");
}
?>
<!DOCTYPE html>
<html lang="en">
    <!-- ............. start ............. -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> find jop - CV </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-before.css">
    <link rel="stylesheet" href="bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
       <!-- ...................................... navbar ............................................ -->

       <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="align-center container-fluid">
          <div class="padding navbar-brand"><img src="images/find jops.png"  alt="" width="170"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <form action="" method="POST">
                <input type="submit" name="home" class="btn-lg btn" aria-current="page" href="mainpage.php"  value="Home">
                </form>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- ............................................. create CV ................................... -->


<form class="row g-3 createcv mx-auto shadow-lg p-3 mb-5 bg-body rounded" style="width: 700px;" action="" method="GET">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email to Contact</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Field</label>
    <select id="inputState" class="form-select">
      <option selected>Choose Field...</option>
      <optgroup label="Architecture and engineering">
       <option>Architect</option>
       <option>Civil engineer</option>
       <option>Landscape architect</option>
       <option>Sustainable designer</option>
       <option>Biomedical engineer</option>
      </optgroup>
      <optgroup label="Arts, culture and entertainment">
       <option>Singer/songwriter</option>
       <option>Music producer</option>
       <option>Art curator</option>
       <option>Animator/video game designer</option>
       <option>Filmmaker</option>
       <option>Graphic designer</option>
       <option>Fashion designer</option>
       <option>Photographer</option>
      </optgroup>
      <optgroup label="Business, management and administration">
       <option>Human resources manager</option>
       <option>Marketing assistant</option>
       <option>Accountants</option>
       <option>Secretary</option>
       <option>Entrepreneur/small business owner</option>
       <option>Real estate agent</option>
       <option>Business development manager</option>
      </optgroup>
      <optgroup label="Communications">
       <option>Journalist</option>
       <option>Copywriter</option>
       <option>Accountants</option>
       <option>Communications manager</option>
       <option>Public relations specialist</option>
       <option>Meeting/event planner</option>
       <option>Social media manager</option>
       <option>Brand manager</option>
      </optgroup>
      <optgroup label="Community and social services">
       <option>
         School counselor
        </option>
       <option>
         Speech pathologist
        </option>
       <option>
         Rehabilitation counselor
        </option>
       <option>
         Licensed clinical social worker
        </option>
       <option>
         Child welfare social worker
        </option>
       <option>
         Palliative and hospice care worker
        </option>
      </optgroup>
      <optgroup label="Education">
       <option>
       Special education teacher
        </option>
       <option>
       School principal
        </option>
       <option>
       Superintendent
       </option>
       <option>
       College professor
        </option>
       <option>
       School librarian
        </option>
       <option>
       Substitute teacher
        </option>
      </optgroup>
      <optgroup label="Science and technology">
       <option>
       Archeologist
        </option>
       <option>
       Software engineer
        </option>
       <option>
       Laboratory technician
       </option>
       <option>
       Microbiologist
        </option>
       <option>
       Physicist
        </option>
      </optgroup>
      <optgroup label="Installation, repair and maintenance">
       <option>
       Auto mechanic
        </option>
       <option>
       Landscaper and groundskeeper
        </option>
       <option>
       Bicycle repairer
       </option>
       <option>
       Wind turbine technician
        </option>
       <option>
       Plumber
        </option>
      </optgroup>
      <optgroup label="Government">
       <option>
       School cafeteria worker
        </option>
       <option>
       Congressional staff
        </option>
       <option>
       National park ranger
       </option>
       <option>
       Mail carrier
        </option>
       <option>
       Elementary school teacher
        </option>
      </optgroup>
      <optgroup label="Health and medicine">
       <option>
       Anesthesiologist
        </option>
       <option>
       Dental assistant
        </option>
       <option>
       Nurse
       </option>
       <option>
       Veterinarian
        </option>
       <option>
       Physical therapist
        </option>
      </optgroup>
      <optgroup label="Law and public policy">
       <option>
       Lobbyist
        </option>
       <option>
       Public administrator
        </option>
       <option>
       Paralegal
       </option>
       <option>
       Lawyer
        </option>
       <option>
       Labor relations specialist
        </option>
      </optgroup>
      <optgroup label="Sales">
       <option>
       Sales associate
        </option>
       <option>
       sales development rep
        </option>
       <option>
       Account executive
       </option>
       <option>
       Regional sales manager
        </option>
       <option>
       VP of sales
        </option>
      </optgroup>
    </select>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">About You</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Education</label>
    <select id="inputState" class="form-select">
       <option selected>Pre-K/Elementary School</option>
       <option>Middle school</option>
       <option>High School</option>
       <option>Higher Education</option>
      </optgroup>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">programs</label>
    <select id="inputState" class="form-select">
      <option selected>NON</option>
      <optgroup label="Architecture and engineering">
       <option>Architect</option>
       <option>Civil engineer</option>
       <option>Landscape architect</option>
       <option>Sustainable designer</option>
       <option>Biomedical engineer</option>
      </optgroup>
      <optgroup label="Arts, culture and entertainment">
       <option>Singer/songwriter</option>
       <option>Music producer</option>
       <option>Art curator</option>
       <option>Animator/video game designer</option>
       <option>Filmmaker</option>
       <option>Graphic designer</option>
       <option>Fashion designer</option>
       <option>Photographer</option>
      </optgroup>
      <optgroup label="Business, management and administration">
       <option>Human resources manager</option>
       <option>Marketing assistant</option>
       <option>Accountants</option>
       <option>Secretary</option>
       <option>Entrepreneur/small business owner</option>
       <option>Real estate agent</option>
       <option>Business development manager</option>
      </optgroup>
      <optgroup label="Communications">
       <option>Journalist</option>
       <option>Copywriter</option>
       <option>Accountants</option>
       <option>Communications manager</option>
       <option>Public relations specialist</option>
       <option>Meeting/event planner</option>
       <option>Social media manager</option>
       <option>Brand manager</option>
      </optgroup>
      <optgroup label="Community and social services">
       <option>
         School counselor
        </option>
       <option>
         Speech pathologist
        </option>
       <option>
         Rehabilitation counselor
        </option>
       <option>
         Licensed clinical social worker
        </option>
       <option>
         Child welfare social worker
        </option>
       <option>
         Palliative and hospice care worker
        </option>
      </optgroup>
      <optgroup label="Education">
       <option>
       Special education teacher
        </option>
       <option>
       School principal
        </option>
       <option>
       Superintendent
       </option>
       <option>
       College professor
        </option>
       <option>
       School librarian
        </option>
       <option>
       Substitute teacher
        </option>
      </optgroup>
      <optgroup label="Science and technology">
       <option>
       Archeologist
        </option>
       <option>
       Software engineer
        </option>
       <option>
       Laboratory technician
       </option>
       <option>
       Microbiologist
        </option>
       <option>
       Physicist
        </option>
      </optgroup>
      <optgroup label="Installation, repair and maintenance">
       <option>
       Auto mechanic
        </option>
       <option>
       Landscaper and groundskeeper
        </option>
       <option>
       Bicycle repairer
       </option>
       <option>
       Wind turbine technician
        </option>
       <option>
       Plumber
        </option>
      </optgroup>
      <optgroup label="Government">
       <option>
       School cafeteria worker
        </option>
       <option>
       Congressional staff
        </option>
       <option>
       National park ranger
       </option>
       <option>
       Mail carrier
        </option>
       <option>
       Elementary school teacher
        </option>
      </optgroup>
      <optgroup label="Health and medicine">
       <option>
       Anesthesiologist
        </option>
       <option>
       Dental assistant
        </option>
       <option>
       Nurse
       </option>
       <option>
       Veterinarian
        </option>
       <option>
       Physical therapist
        </option>
      </optgroup>
      <optgroup label="Law and public policy">
       <option>
       Lobbyist
        </option>
       <option>
       Public administrator
        </option>
       <option>
       Paralegal
       </option>
       <option>
       Lawyer
        </option>
       <option>
       Labor relations specialist
        </option>
      </optgroup>
      <optgroup label="Sales">
       <option>
       Sales associate
        </option>
       <option>
       sales development rep
        </option>
       <option>
       Account executive
       </option>
       <option>
       Regional sales manager
        </option>
       <option>
       VP of sales
        </option>
      </optgroup>
    </select>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">years of experience</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

       <!-- ...................................... footer ............................................ -->
       <div class="botom">
         <div><a href="signin.html" class="under-line"><h4 class="sign-in">sign in</h4></a></div>
        <div class="align-cen"> <h6>new visiter? <a href="#" class="under-line">start here</a></h6> </div>
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