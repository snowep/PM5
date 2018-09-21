<!-- <?php
	include 'config.php';
	$db = $conn;
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$myusername = $_POST['username'];
		$mypassword = $_POST['password'];

		$sql = $db->query("SELECT * FROM tbl_user WHERE username = '$myusername' AND password = '$mypassword'");
		$row = $sql->fetch();
		$count = $sql->rowCount();

		if ($count == 1) {
			$_SESSION['username'] = $myusername;
			header("location:".$row['authentication']."/index.php");
		} else {
			echo $error = "Error";
		}
	}
?> -->

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
 <head>
   <style type="text/css">
   body { background: url(img/bg-login.jpg) !important; }
 </style>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>Asset PLN -Login</title>
	 <style type="text/css">
   #container{
       min-height: 100%;
       position: relative;
   }

   .header{
       background: #F0F8FF;
       padding: 20px;
   }
   .footer{
     width: 100%;
     height: 50px;
     padding-left: 10px;
     line-height: 50px;
     background: #333;
     color: #fff;
     position: absolute;
     bottom: 0px;
 }
	 </style>
	 <title></title>

   <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap-grid.min.css" rel="stylesheet">
    <script src="asset/js/bootstrap.min.js"></script>
	 <script type="text/javascript" src=" config/jquery.min.js"></script>
	 <script type="text/javascript" src=" components/dropdown.js"></script>
	 <script type="text/javascript" src=" components/transition.js"></script>
	 <script type="text/javascript" src=" components/modal.js"></script>
	 <link rel="stylesheet" type="text/css" href=" components/container.css">
	 <link rel="stylesheet" type="text/css" href=" components/menu.css">
	 <link rel="stylesheet" type="text/css" href=" components/grid.css">
	 <link rel="stylesheet" type="text/css" href=" components/header.css">
	 <link rel="stylesheet" type="text/css" href=" components/segment.css">
	 <link rel="stylesheet" type="text/css" href=" components/divider.css">
	 <link rel="stylesheet" type="text/css" href=" components/form.css">
	 <link rel="stylesheet" type="text/css" href=" components/label.css">
	 <link rel="stylesheet" type="text/css" href=" components/button.css">
	 <link rel="stylesheet" type="text/css" href=" components/table.css">
	 <link rel="stylesheet" type="text/css" href=" components/icon.css">
	 <link rel="stylesheet" type="text/css" href=" components/dropdown.css">
	 <link rel="stylesheet" type="text/css" href=" components/modal.css">
	 <link rel="stylesheet" type="text/css" href=" components/transition.css">
	 <link rel="stylesheet" type="text/css" href=" components/site.css">
	 <link rel="stylesheet" type="text/css" href=" components/semantic.css">


	 <style type="text/css">
		 body {
			 background-color: #F5F5F5;
		 }
		 body > .grid {
			 height: 50%;
		 }
		 }
	 </style>

 </head>
 <body>


      <div class="header"></div>

      </div>
   </div>

   <div class="footer">
      Copyright © 2018. All rights reserved. Design by Team Magang 2018
   </div>


	<div class="ui grid">
		<div class="row">
			<div class="img_header">
			</div>
		</div>
		<div class="row">
			<div class="ui container">
				<div class="ui two column grid">
					<div class="column">

				  </div>
					<div class="column">

					 <form class="ui large form" action="" method="post">
						 <div class="ui segment">
               <div class="icons">
               <div class="ui right icon"style="float:right;">
               <i class="home icon"></i>
               <i class="cog icon"></i>
             </div>
               </div>
							 <div class="field">


                 <form>

     <div class="form-group">
          <div class="ui center aligned column grid">
   <img src="img/new/pln.png">
      </div>
      <br>
      <br>
      <br>
       <div class="ui center aligned column grid">
       <h3 class="ui black" style="top">Sign in</h3>

     </div>
     <br>

 <label for="exampleInputEmail1">Username</label>
      <div class="ui left icon input">
      <i class="user circle icon"></i>
       <input type="text" name="username" placeholder="Enter username">
     </div>
       <small  class="form-text text-muted">We'll never share your Username with anyone else.</small>

     <div class="form-group">
       <label for="exampleInputPassword1">Password</label>
       <div class="ui left icon input">
       <i class="lock icon"></i>
       <input type="password" name="password" placeholder="Password">
     </div>
     <br></br>
     <button type="submit" name="login" class="btn btn-primary">Masuk</button>


   </form>

					 </form>
				  </div>
				</div>
			</div>
		</div>
	</div>


 </body>
     </html>
