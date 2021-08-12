<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body style="background-color:#5234eb;">


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
        </ul>      
      </div>
    </div>
  </nav>

	<div class="container">
      <h2 class="text-center pt-4" style="color : white;">Transaction History</h2><br>
      <div class="table-responsive-sm">
        <table class="table table-hover table-dark">
          <thead style="color : white;">
              <tr>
                  <th class="text-center">S.No.</th>
                  <th class="text-center">Sender</th>
                  <th class="text-center">Receiver</th>
                  <th class="text-center">Amount</th>
                  <th class="text-center">Date & Time</th>
              </tr>
          </thead>
          <tbody>
            <?php

                include 'config.php';
                $count=1;
                $sql ="select * from customers c,transaction t where c.id=t.sender_id;";
                $query =mysqli_query($conn, $sql);
                while($rows = mysqli_fetch_assoc($query))
                {
                  
                  
            ?>

            <tr class="text-center" style="color : white;">
            <td class="py-2"><?php echo $count;$count=$count+1; ?></td>
            <td class="py-2"><?php echo $rows['name']; ?></td>
            <td class="py-2"><?php 
            $sq ="select name from customers c  where c.id={$rows['receiver_id']};";
            $quer =mysqli_query($conn, $sq);
            $row = mysqli_fetch_assoc($quer);
            echo $row['name']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
            <td class="py-2"><?php echo $rows['dt']; ?> </td>
                      
            <?php
                }
            ?>
          </tbody>
        </table>
    </div>
  </div>

  <footer class="text-center mt-5 py-5" style="position:relative;bottom:0;width:100%;">
    <p>&copy 2021 <b>Prajwal Poojary</b> <br>Banking System</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>