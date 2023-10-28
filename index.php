<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    

<link href="css/bootstrap.min.css" rel="stylesheet">

<div class="container text-center">
  <div class="row">
 <div class="col-3"></div>
    <div class="col-6">

	<div align="center">
	<u><h2>Token Dashboard for doctor's clinic</h2></u>
	
	<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Token</th>
    </tr>
  </thead>
  <tbody>
  <?php
					include('conne.php');
					$query=mysqli_query($conne,"select * from `token`");
					while($row=mysqli_fetch_array($query)){
						?>
    <tr>

      <td><?php echo $row['pname']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['token']; ?></td>
    </tr>
			<?php
					}
				?>
  </tbody>
</table>
	
	
	
	</div>
</div>
<div class="col-3"></div>
</div>










    <div class="container text-center">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
	

  <form method="POST" action="add.php">
    
    <center><h1 class="h3 mb-3 fw-normal">Add patient Details</h1></center>

  <div class="row g-1">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="pname">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="phone number" name="phone">
    </div>
	<div class="col">
      <input type="text" class="form-control" placeholder="tokens number" name="token">
    </div>
	<div class="col">
	<button class="btn btn-success rounded-pill" type="Submit" name="add">Generate Tokens</button>
	</div>
  </div>
</form>
<div class="col-3"></div>
</div>














    
  </body>
</html>
