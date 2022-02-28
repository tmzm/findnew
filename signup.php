<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find jop - sign up</title>
    <link rel="stylesheet" href="sign-style.css">
    <link rel="stylesheet" href="style-before.css">
    <link rel="stylesheet" href="style.css">
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
          </div>
        </div>
    </nav>

    <h1 class="mx-auto sign-up shadow " style="width: 200px;">sign up</h1>

    <!-- .................... phpmyadmin ........................ -->
    <!-- .................... phpmyadmin ........................ -->

    <div class="mx-auto shadow-lg p-3 mb-5 bg-body rounded padding-subm" style="width: 500px;">
      <form action="" method="GET">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input type="text" name="firstname" class="form-control mb-3" id="exampleInputEmail1" required>
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="text" name="lastname" class="form-control mb-3" id="exampleInputEmail1" required>
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="passwords" class="form-control mb-3" id="exampleInputPassword1" required>
        <div class="form-floating">
         <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kind">
          <option selected>choose ..</option>
          <option value="search">search for jop</option>
          <option value="hiring">hiring someone</option>
         </select>
          <label for="floatingSelect">you search for jop or hiring ??</label>
        </div>

        <input type="submit" name="submit" class="btn btn-primary padding-subm" value="submit">
      </form>
      <?php
include 'conn.php';

if(isset($_GET['submit'])){

    if(isset($_GET['email'])){
      $email =$_GET['email'];
    }
    if(isset($_GET['passwords'])){
      $passwords =$_GET['passwords'];
    }
    if(isset($_GET['firstname'])){
      $firstname =$_GET['firstname'];
    }
    if(isset($_GET['lastname'])){
      $lastname =$_GET['lastname'];
    }
    if(isset($_GET['kind'])){
      $kind = filter_input(INPUT_GET, 'kind');
    }
    
    
    $sql = "SELECT id, email FROM usres";
    $result = $conn->query($sql);
    if ($result->num_rows >= 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($email === $row['email']){
          echo 'email used before | ';
          $conset = " ";
        }
      }
      if(empty($conset)){
      $sql = "INSERT INTO usres(firstname, lastname, email, passwords, cvjop) VALUES ('$firstname','$lastname','$email','$passwords','$kind')";
    
      if (mysqli_query($conn, $sql)) {
        $name = $firstname." ".$lastname;
        header("Location: mainpage.php?name=$name&kind=$kind");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      }
    }

    
}

?>
    </div>

    <?php
/*
    if(mysqli_query($conn $sql)){
      header('Location: profile.html');
    }else{
      echo 'error: ' . mysqli_error($conn);
    }
*/
    ?>

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


<!--


<div class="mx-auto" style="width: 200px;">
  Centered element
</div>


-->