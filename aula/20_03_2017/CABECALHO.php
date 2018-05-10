<style>
body{ margin-top:0;}

#layout1
{
	position:fixed; left:50%; margin-left:-50%; width:100%; height:100px;
	background:linear-gradient(to bottom, rgba(255,0,0,1),rgba(255,0,0,0)); 
}

#cabecalho
{
	/* ESTE CSS PODE SER USADO PARA FIXAR UM CABEÇALHO NO TOPO DA SUA PÁGINA */
	background-color:#6F6; position:relative; left:50%; margin-left:-40%; width:80%;
	/* SE O MENU FICAR POR TRÁS DO CONTEÚDO DA SUA PÁGINA ENTÃO USE A PROPRIEDADE z-index DO CSS */
}
</style>

<script src="jquery-1.8.2.min.js"></script>

<script>
// LISTA COMPLETA DE EFEITOS JQUERY:
// https://www.w3schools.com/jquery/jquery_ref_effects.asp
var oculto=false;
function alternar_menu()
{
	if (oculto==false)
	{
		$("#cabecalho").fadeToggle(2000,recolher);
		oculto=true;
	}
	else
	{
		ampliar();
		$("#cabecalho").fadeToggle(2000);
		oculto=false;
	}
	
}
function recolher()
{
	$("#layout1").animate({height: '50px', backgroundColor:'silver'},2000);
}

function ampliar()
{
	$("#layout1").animate({height: '100px'},2000);
}

</script>
<?php
echo("
<table id='layout1'>
 <tr>
  <td valign='middle'>
   <table id='cabecalho' border=1 >
   <tr>
      <td align='center'>MENU 1</td>
      <td align='center'>MENU 2</td>
      <td align='center'>MENU 3</td>
      <td align='center'>MENU 4</td>
      <td align='center'>MENU 5</td>
      <td align='center'>MENU 6</td>
      <td align='center'>MENU 7</td>
   </tr>
   </table>
  
  </td>
  <td><a href='#' onclick=\"alternar_menu();\"> [Ocultar / Mostrar] </a></td>
 </tr>
 
</table>
<br><br><br><br><br><br>
");
// PARA INSERIR ESTE MENU NUMA PÁGINA PHP USE O SEGUINTE COMANDO APÓS O <BODY>:    include("CABECALHO.php");
// O MESMO PROCEDIMENTO PODE SER FEITO PARA UM RODAPÉ.
?>