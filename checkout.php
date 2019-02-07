<html>
	<head>
	 <meta charset="UTF-8">
     <title>Checkout	Mirror	Fashion</title>
	 <meta	name="viewport"	content="width=device-width">
	 <link	rel="stylesheet" href="css/bootstrap.css">
	 <link	rel="stylesheet" href="css/bootstrap-flatly.css">
     <style>
	  .navbar{
		  margin:0;
	  }	
	  .navbar .glyphicon{
		  color:lightgreen;
	  }
	  </style>
    </head>
    
	<body>


<nav class="navbar navbar-default navbar-static-top">
		<div class="navbar-header">
			<a	class="navbar-brand" href="index.php">Mirror	Fashion</a>
	        <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
			<span class="glyphicon glyphicon-align-justify"></span>
				</button>
		</div>
	        <ul	class="nav	navbar-nav collapse navbar-collapse">
				<li	class="active"><a	href="sobre.php">Sobre</a></li>
				<li><a	href="#">Ajuda</a></li>
				<li><a	href="#">Perguntas	frequentes</a></li>
				<li><a	href="#">Entre	em	contato</a></li>
			</ul>
	</nav>
</nav>


    <div	class="jumbotron">
    <div    class="container">
	        <h1>Ótima escolha!</h1>
				     <p>Obrigado por comprar na Mirror Fashion!
					       Preencha seus dados para efetivar a compra.
				</p>
			</div>
		</div>
	<div class="container">
	    <div    class="row">
	       <div    class="col-sm-4">
               <div	class="panel panel-success">
                     <div	class="panel-heading">
      <h2	class="panel-title">Sua	compra</h2>
      </div>
    <!--	fim	.panel-heading	-->
       </div>

	<div class="panel-body">
		<dd id="preco">R$ <?= $_POST["preco"] ?></dd>
	    <img src="img/produtos/foto1-<?=	$_POST["cor"]	?>.png"	class="img-thumbnail	img-responsive">
		<dl>
			<dt>Produto</dt>
			<dd><?=	$_POST["nome"]	?></dd>
			<dt>Preço</dt>
			<dd>R$	<?=	$_POST["preco"]	?></dd>
			<dt>Cor</dt>
			<dd><?=	$_POST["cor"]	?></dd>
			<dt>Tamanho</dt>
			<dd><?=	$_POST["tamanho"]	?></dd>
		 </dl>

		 <div class="form-group">
			<label	for="qt">Quantidade</label>
			<input	id="qt"	class="form-control"	type="number"	min="0"	max="99"	value="1">
	    </div>
	    <div class="form-group">
			<label	for="total">Total</label>
			<output	i for= "qt preco" id="total" class="form-control">
				<?=	$_POST["preco"]	?>
				</output>
	</div>
</div>
           
		    <div class="col-sm-8">
			  <form class="col-sm-8 col-lg-9" action ="index.php">
				  <div class="row">
				     <fieldset class="col-md-6">	   
				        <legend>Dados pessoais</legend>
                        <div	class="form-group">
						   <label	for="nome">Nome	completo</label>
						   <div class="input-group">
                       <input type="text" class="form-control"	id="nome"	name="nome">
                       <input type="text" class="form-control"  id="nome"	name="nome"	autofocus>
                       <input type="text"	name="nome"	required>
				   </div>
	</div>
                   
				<div	class="form-group">
					<label	for="email">Email</label>
					   <div class="input-group">
                       <input type="email"	class="form-control" id="email"	name="email">
                       <input type="email"  class="form-control" id="email" name="email" placeholder="email@exemplo.com">
				</div>
	</div>
                
				<div class="form-group">
					<label	for="cpf">CPF</label>
					<div class="input-group">
                        <input	type="text"	class="form-control" id="cpf" name="cpf" data-mask="999.999.999-99">
                        <input	type="text"	class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
						<input	type="text"	name="cpf"	required>  
						             
					</div>
	</div>
                
				<div	class="checkbox">
					<label>
						<input	type="checkbox"	value="sim"	name="spam"	checked>
							Quero	receber	spam	da	Mirror	Fashion
					</label>


				</div>
              </fieldset>
              
			  <fieldset class="col-md-6">
                <legend>Cartão	de	crédito</legend>

					<div class="form-group">
						<label	for="numero-cartao">Número	-	CVV</label>
						<div class="input-group">	
						<input	type="text"	class="form-control"	id="numero-cartao"	name="numero-cartao" data-mask="9999 9999 9999 9999	- 999">
					</div>
	</div>
                    
					<div class="form-group">
						<label	for="bandeira-cartao">Bandeira</label>
						<div class="input-group">	
						<select	name="bandeira-cartao"	id="bandeira-cartao"	class="form-control">
									<option	value="master">MasterCard</option>
									<option	value="visa">VISA</option>
									<option	value="amex">American	Express</option>
							</select>
                    </div>
	</div>

					<div class="form-group">
						<label	for="validade-cartao">Validade</label>
						<div class="input-group">	
						<input	type="month"	class="form-control"	id="validade-cartao"	name="validade-cartao">
					</div>
	</div>

              </fieldset>
              
				  <button type="submit"	class="btn	btn-primary">
                  <span class="glyphicon glyphicon-thumbs-up"></span>
                  <span class="btn-lg"></span>
                  <span class="pull-right"></span>
						Confirmar	Pedido
				  </button>
	</form>
	     
        
	 </div> <!--fim.row-->
	</div> <!-- fim.container -->
    <!--	fim	.panel-body	-->
    </div>
	<!--	fim	.panel	-->
	

	</body>
	<script src="js/jquery.js"></script>
	<script src="js/bootsrap.js"></script>
	<script src="js/inputmask-plugin.js"></script>
	<script src="js/converteMoeda.js"></script>
	<script src="js/testaCOnversao.js"></script>
	<script src="js/total.js"></script>
	</html>