<?php include 'components/header.php'; ?>

	<section class="interna contato">
		<div class="container">
			<h2>Fale Conosco</h2>
			<form>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="NOME" value="" />
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="email" id="email" class="form-control" value="" placeholder="E-MAIL" />
                    </div><!-- .md-6 -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="TELEFONE" value="" />
                    </div><!-- .md-6 -->
                </div><!-- .row -->
                <textarea name="mensagem" id="mensagem" class="form-control" placeholder="MENSAGEM"></textarea>
                
                <button>ENVIAR</button>
            </form>
		</div><!-- container -->
	</section><!-- interna -->
	
<?php include 'components/footer.php'; ?>