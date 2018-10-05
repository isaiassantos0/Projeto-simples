<?php
session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {

} else {
	header("Location: login.php");
}
?>
<html>
     <head>
         <meta charset="UTF-8"/>
         <link rel="stylesheet" type="text/css" href="assets/style/style.css">
         <title>Pratica Geral HTML</title>
     </head>
     <body>
         <header class="topo">
         	<div class="topo interior">
         		<div class="logomarca">Logomarca</div>
         		<div class="menu">
         			<ul>
         				<li>HOME</li>
         				<li>SOBRE</li>
         				<li>NOTÍCIAS</li>
                <li>PRODUTOS</li>
         				<li>CONTATO</li>
         		</div>
         	</header>
         </div>

         <div class="banner">
         	 <div class="banner interior">

                 <div class="banneresquerda">
         	 	 	<div class="frase1">Bom dia<?php echo ", ".$_SESSION['nome'];?></div>
                    <div class="frase2">Outras frases que complementam a frase</br>de efeito</div>
         	 	    <div class="botao">Acessar o Produto</div>
                 </div>

                 <div class="bannerdireita">
         	 	 	<img src="assets/images/homem.png" />
         	 	 </div>
         	 </div>
         </div>
         <div class="conteudo">
             <div class="conteudointerno">
                 <div class="outrosprodutos">Outros Produtos</div>
                 <div class="fotos">
                     <img src="assets/images/banner1.jpg"/>
                     <img src="assets/images/banner2.jpg"/>
                     <img src="assets/images/banner3.jpg"/>
                     <img src="assets/images/banner4.jpg"/>
                 </div>
             </div>
         </div>
         <footer class="rodape">Minha Empresa</footer>

     </body>
</head>
