
<?php
	$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;

	$pasta = './arquivos/';
	$arquivo_caminho = $pasta . $arquivo['name'];
	if(move_uploaded_file($arquivo['tmp_name'], $arquivo_caminho)){
		echo "ok";
	};
	
	$fp = fopen($arquivo_caminho,"rb");
	$anexo = fread($fp,filesize($arquivo_caminho));
	$anexo = base64_encode($anexo);
	fclose($fp);
	$anexo = chunk_split($anexo);
	
	$recipient = "atendimento@amymanipulacao.com.br";
	$subject = "Receita Enviada pelo Site";
	$texto = '
		<table width="600" border="0" align="center" style="border:1px solid #c2c2c2" bgcolor=" #E5E5E5">
		 <tr>
			<td colspan="4" align="center" bgcolor="#626769"><font size="5" face="Arial, Helvetica, sans-serif" color="#ffffff">RECEITA ENVIADA PELO SITE</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Nome:</strong></td>
			<td>'.$_POST['nome'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Email:</strong></td>
			<td>'.$_POST['email'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>RG:</strong></td>
			<td>'.$_POST['rg'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>CPF:</strong></td>
			<td>'.$_POST['cpf'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Endereço:</strong></td>
			<td>'.$_POST['end'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Cidade:</strong></td>
			<td>'.$_POST['cidade'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Telefone:</strong></td>
			<td>'.$_POST['telefone'].'</td>
		  </tr>	  
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Celular:</strong></td>
			<td>'.$_POST['celular'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Observações:</strong></td>
			<td>'.$_POST['obs'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Enviou Anexo?</strong></td>
			<td>'.$_POST['gender'].'</td>
		  </tr>
		</table>
	';	
	$boundary = "XYZ-" . date("dmYis") . "-ZYX";
	$mens = "--$boundary\n";
	$mens .= "Content-Transfer-Encoding: 8bits\n";
	$mens .= "Content-Type: text/html; charset=\"UTF-8\"\n\n"; //plain
	$mens .= "$texto\n";
	$mens .= "--$boundary\n";
	$mens .= "Content-Type: ".$arquivo["type"]."\n";
	$mens .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";
	$mens .= "Content-Transfer-Encoding: base64\n\n";
	$mens .= "$anexo\n";
	$mens .= "--$boundary--\r\n";
	$mailheaders = "MIME-Version: 1.0\n";
	$mailheaders .= "From: ".$_POST['nome']." <".$_POST['email'].">\r\n";
	$mailheaders .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
	$mailheaders .= "$boundary\n";

	mail($recipient, $subject, $mens, $mailheaders);
	echo '<script type="text/javascript">alert("Obrigado! Em Breve Retornaremos seu Contato.");</script>';
;
?>