<?php
require_once('../login/conexao.php');
require_once('clientes.php');
require_once('produtos.php');
require_once('vendas.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Carregar Janela modal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript">
		$(document).ready(function(){
			$("#menu a").click(function( e ){
				e.preventDefault();
				var href = $( this ).attr('href');
				$("#content").load( href +" #content");
			});
		});
		</script>
    </head>
    <body>
        <div class="container theme-showcase" role="main">
            <div class="page-header">
            	<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Logout</button>
                <h1>Dados dos Arquivos XML Atualizados</h1></br>
                <h3>Clique para visualizar individual</h3></br>
                <!-- Botões -->
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
				  <div class="btn-group" role="group">
				    <a data-toggle="modal" href="#myModal2" ><button type="button" class="btn btn-default">Clientes</button></a>
				  </div>
				  <div class="btn-group" role="group">
				    <a data-toggle="modal" href="#myModal3" ><button type="button" class="btn btn-default">Produtos</button></a>
				  </div>
				  <div class="btn-group" role="group">
				    <a data-toggle="modal" href="#myModal4" ><button type="button" class="btn btn-default">Vendas</button></a>
				  </div>
				</div>
				<!-- fim botões -->
				<h3>Clientes</h3>
					<?php
						include 'imprimeClientes.php';
					?>
				<h3>Produtos</h3>
					<?php
						include 'imprimeProduto.php';
					?>
				<h3>Vendas</h3>
					<?php
						include 'imprimeVendas.php';
					?>
            </div>
        </div>
        
        <!-- Modal Clientes -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Clientes</h4>
					</div>
					<div class="modal-body">
						<?php
						include 'imprimeClientes.php';
						?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						<!-- <button type="button" class="btn btn-primary">Salvar</button> -->
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- Modal Produtos -->
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Produtos</h4>
					</div>
					<div class="modal-body">
						<?php
						include 'imprimeProduto.php';
						?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						<!-- <button type="button" class="btn btn-primary">Salvar</button> -->
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- Modal Vendas -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Vendas</h4>
					</div>
					<div class="modal-body">
						<?php
						include 'imprimeVendas.php';
						?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						<!-- <button type="button" class="btn btn-primary">Salvar</button> -->
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

        <!-- Modal -->
        <div class="modal bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-sm">
		    <div class="modal-content">
		      <div class="modal-header"><h4>Logout <i class="fa fa-lock"></i></h4></div>
		      <div class="modal-body"><i class="fa fa-question-circle"></i> O arquivo xml foi gerado, deseja sair?</div>
		      <div class="modal-footer"><a href="../login/sair.php" class="btn btn-primary btn-block">Logout</a></div>
		    </div>
		  </div>
		</div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
		
		<?php
			$xml = "aviso";
			if($xml == "aviso"){ ?>
				<script>
					$(document).ready(function(){
						$('#myModal').modal('show');
					});
				</script>
			<?php } ?>
    </body>
</html>