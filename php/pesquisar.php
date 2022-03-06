
<!DOCTYPE html>
<html>
<head>
	<title>Pesquisar</title>
	<link rel="stylesheet" type="text/css" href="../css/StyleLogin.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>



	
	




	
	<section>
    <div class="wave"></div>
</section>

	<div class="login-form">
		
    <form action="" method="POST">

        <h4 class="text-center">Informações Da Sua Conta</h4>  <br>     
    
        <div class="form-group">
        	<input disabled type="text" size="10" class="form-control" value="
    <?php  include_once("indexD.php");
            $senha = $_POST["Senha"];
            

     

     $query = "SELECT email FROM pessoa WHERE senha = '$senha'";
     $result =  mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) {
        echo $row['email'];
     }
             ?>  " 	  required="required" name="Senha"><br>
            <input disabled  type="text" class="form-control" placeholder="<?php echo "Senha"; ?>" value="
    <?php  include_once("indexD.php");
            $senha = $_POST["Senha"];
            

     

     $query = "SELECT senha FROM pessoa WHERE senha = '$senha'";
     $result =  mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) {
        echo $row['senha'];
     }
             ?>  " required="required" name="Senha"> <br> 
               
                <input  disabled type="text" class="form-control" value="
    <?php  include_once("indexD.php");
            $senha = $_POST["Senha"];
            

     

     $query = "SELECT id FROM pessoa WHERE senha = '$senha'";
     $result =  mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'];
     }
             ?>  " required="required" name="Senha"> <br> 
        </div>
        <div class="form-group">
            
            
            <button type="submit" class="btn btn-primary btn-block">Voltar</button>
            
            
             
        </div>
            
        </div>
        <div class="clearfix">
            
        </div>        
    </form>
    
</div>

</body>
</html>