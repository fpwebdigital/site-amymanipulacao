<?php include("include/head.php"); ?>
<?php include("include/header.php"); ?>
<?php include("include/nav.php"); ?>
  <!--Quem Somos -->
  <div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
			<div id="box_quemsomos">
			<h1 class="estilo_texto_granco_cinza center"><i class="fa fa-flask"></i> Receita Online - Envie sua Receita Agora Mesmo</h1>
				<p class="estilo_texto_geral justify">
					Você pode nos encaminhar sua receita para orçamento e posterior manipulação preenchendo as informações abaixo.					
				</p>
				<p class="estilo_texto_geral justify">É importante ressaltar que, caso a fórmula prescrita contenha Substâncias Sujeitas a Controle Especial, vamos contatá-lo para passar as orientações necessárias, pois só podemos manipulá-la com a receita na farmácia.</p>
				<p class="estilo_texto_geral justify">Preencha o Formuário Abaixo:</p>
  </div>
		</div>
	  </div>
	  <form method="post" action="upload.php" enctype="multipart/form-data">
	  	<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
			
				<div class="box_inputs"><input id="nome" type="text" name="nome" class="input-inputprincipal" placeholder="Nome" required autofocus></div>
				<div class="box_inputs"><input id="rg" type="text" name="rg" class="input-inputprincipal" maxlength="10" placeholder="RG (Só Números)" required></input></div>
				<div class="box_inputs"><input id="end" type="text" name="end" class="input-inputprincipal"  placeholder="Endereço" required></input></div>
				<div class="box_inputs"><input id="telefone" type="text" name="telefone" class="input-inputprincipal" placeholder="Ex: (11) 4444-4444" required></input></div>				
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
			
				<div class="box_inputs"><input id="email" type="email" name="email" class="input-inputprincipal" placeholder="E-mail" required></input></div>
				<div class="box_inputs"><input id="cpf" type="text" name="cpf" class="input-inputprincipal" maxlength="11" placeholder="CPF (Só Números)" required></input></div>
				<div class="box_inputs"><input id="cidade" type="text" name="cidade" class="input-inputprincipal" placeholder="Cidade" required></input></div>
				<div class="box_inputs"><input id="celular" type="text" name="celular" class="input-inputprincipal" placeholder="Ex: (11) 99999-8888" required></input></div>				
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
			
				<div class="box_inputs">
				
				<input type="file" name="arquivo" size="45" class="estilo_texto_geral" />
				<p class="estilo_texto_geral justify">Tipos de arquivo: pdf, doc, jpg, png</p>
				</div>
				<div class="box_inputs left">
				
					<label for="sim" class="estilo_texto_geral">Está enviando anexo?</label> <input id="enviou" type="radio" name="gender" value="Sim"></input>
      <label for="sim" class="estilo_texto_geral">Sim</label>
      <input id="nao" type="radio" name="gender" value="Não">
      <label for="nao" class="estilo_texto_geral">Não</label>
				</div>
				<div class="box_inputs">
				<textarea id="obs" type="text" name="obs" class="input-inputarea" placeholder="Observações" required></textarea>
				</div>
			
			</div>			
				
			
	  </div>
	  	  	<div class="row">
				<div class="col-sm-2 col-md-2 col-lg-2 col-xs-12">
					<input type="submit" class="btn btn-2 btn-2h" value="ENVIAR RECEITA" />
					
				</div>
		   </div>
	  </form>
	</div>

<?php include("include/footer.php"); ?>  
        
       
