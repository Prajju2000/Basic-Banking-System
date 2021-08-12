<!DOCTYPE html>
<html lang="en">
<head>
    <title>Banking System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color : #949fb5;background-image:url(images/1.jpg);">
<!-- Navigation bar -->
  <section>
    <nav class="navbar navbar-expand-lg navbar-dark text-light bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Banking System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="customers.php">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="transactions.php">Transaction History</a>
            </li>
          </ul>
        </div>  

      </div>
    </nav>
  </section>

<!-- cards -->
  <section style="padding-top:30px;">>
    <div class="container" style="padding-top:20px;">
      <div class="row">
        <div class="col" style="padding-left:150px;">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/2.png" alt="Card image cap">
            <div class="card-body" style="padding-left:90px;">
              <a href="customers.php" class="btn btn-primary">Customers</a>
            </div>
          </div>
        </div>
        <div class="col" style="padding-left:40px;padding-bottom:20px;">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="./images/transaction.png" alt="Card image cap">
              <div class="card-body" style="padding-left:60px;">
                <a href="transactions.php" class="btn btn-primary">Transaction History</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="text-center mt-2 py-5 text-light" style="position:relative;bottom:0;width:100%;">
    <p>&copy 2021  <b>Prajwal Poojary</b> </br>Banking System</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
  
</body>
</html>