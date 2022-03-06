<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/StyleCadastro.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>
<body>
    
	

<section>
    <div class="wave"></div>
</section>

	<div class="login-form">
		
    <form action="php/gravador.php" method="POST">

        <h2 class="text-center">Cadastro</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="Email">

        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" required="required" name="Senha">
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            <button type="reset" class="btn btn-danger btn-block">Limpar</button>
        </div>
        <div class="clearfix">
            
        </div>        
    </form>
    
</div>





</body>
</html>