<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="../logo_tcc/ico.png">
        <link rel="stylesheet" type="text/css" href="../css/site.css">
        <title>FIND</title>
        
        
        
        <script>
           function INICIAR(){
               var data_atual = new Date();
               var ano = data_atual.getFullYear();
               var mes = data_atual.getMonth();
               var txt_mes="";
               
               var dia = data_atual.getDate();
               var dia_semana = data_atual.getDay();
               var txt_semama = "";
               
               if (dia_semana==0){
                   txt_semana = "Domingo";
                   banner.style.backgroundImage = "url('https://images.pexels.com/photos/838413/pexels-photo-838413.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb')";
               }
                if (dia_semana==1){
                   txt_semana = "Segunda"
                    banner.style.backgroundImage = "https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb')";
               }
                if (dia_semana==2){
                   txt_semana = "Terça"
                    banner.style.backgroundImage = "url('https://images.pexels.com/photos/326576/pexels-photo-326576.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb')";
               }
                if (dia_semana==3){
                   txt_semana = "Quarta"
                    banner.style.backgroundImage = "url('https://images.pexels.com/photos/429248/pexels-photo-429248.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb')";
               }
                if (dia_semana==4){
                   txt_semana = "Quinta"
                    banner.style.backgroundImage = "url('https://images.pexels.com/photos/634511/pexels-photo-634511.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb')";
               }
                if (dia_semana==5){
                   txt_semana = "Sabado"
                    banner.style.backgroundImage = "url('https://images.pexels.com/photos/756883/pexels-photo-756883.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb')";
               }
                if (dia_semana==6){
                   txt_semana = "Sabado"
                    banner.style.backgroundImage = "url('https://images.pexels.com/photos/162564/gardener-worker-gardening-machinery-162564.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb')";
               }
               
               
           }
          
            
            function ir(){
                var LOCALIDADE = l.value;
                LOCALIDADE = LOCALIDADE.replace(/ /g,"+");
                local.innerHTML = "<iframe width='125%' height='500' frameborder='0' style='border:0' src='https://www.google.com/maps/embed/v1/place?key=AIzaSyCXlg-UheeFvXNuGdat0w-R5L0cVxoTr34&q=" + LOCALIDADE + "' allowfullscreen></iframe>";
            }

            
       </script>
        
    </head>
    
    <body onload="INICIAR();">
        <div class="box bg-1">
            <a href="login.php">
                <button class="button button--wapasha button--round-s">Login</button>
            </a>
        </div>  
        <div class="menu_superior">
           <img id="logo" src="../logo_tcc/find.png">
             
        </div>
        <div class="content">
            
            <div id="banner">
           
            </div>
            
            <div class="box_content">                
                <h2>Encontre o profissinal ideal para o que precisa em poucos cliques...</h2>                
                    <img id="maps" src="../imagens/site/tablet.png"> 
            </div>
            
            <section class="sessao3">
                <h1>Regiões cobertas</h1>
                <ul>
                    <li><h2>Sul</h2>
                        <ul>
                            <li><a href=""  title="Paraná"><img id="ico_estados" src="../imagens/site/pr.png">Paraná</a></li>
                            <li><a href="" title="Baccarat BC632"><img id="ico_estados" src="../imagens/site/sc.png">Santa Catarina</a></li>
                            <li><a href="" title="Armani Collezioni AC951"><img id="ico_estados" src="../imagens/site/rs.png">Rio Grande do Sul </a></li>                        
                        </ul>
                    </li>
                    <li><h2>Sudeste</h2>
                        <ul>
                            <li><a href=""  title="Paraná"><img id="ico_estados" src="../imagens/site/sp.png">São Paulo</a></li>
                            <li><a href="" title="Rio de Janeiro"><img id="ico_estados" src="../imagens/site/rj.png">Rio de Janeiro</a></li>
                            <li><a href="" title="Minas Gerais"><img id="ico_estados" src="../imagens/site/mg.png">Minas Gerais </a></li>             <li><a href="" title="Espirito Santo"><img id="ico_estados" src="../imagens/site/es.png">Espirito Santo </a></li>
                        </ul>
                    </li>
                    <li><h2>Centro Oeste</h2>
                        <ul>
                            <li><a href=""  title="Mato Grosso"><img id="ico_estados" src="../imagens/site/mt.png">Mato Grosso</a></li>
                            <li><a href="" title="Goias"><img id="ico_estados" src="../imagens/site/go.png">Goias</a></li>
                            <li><a href="" title="Destrito Federal"><img id="ico_estados" src="../imagens/site/df.png">Destrito Federal</a></li>
                            <li><a href="" title="Mato Grosso do Sul"><img id="ico_estados" src="../imagens/site/ms.png">Mato Grosso do Sul</a></li>                        
                        </ul>
                    </li>
                    <li><h2>Nordeste</h2>
                        <ul>
                            <li><a href=""  title="Bahia"><img id="ico_estados" src="../imagens/site/ba.png">Bahia</a></li>
                            <li><a href="" title="Sergipe"><img id="ico_estados" src="../imagens/site/se.png">Sergipe</a></li>
                            <li><a href="" title="Alagoas"><img id="ico_estados" src="../imagens/site/al.png">Alagoas</a></li>                   
                            <li><a href="" title="Pernambuco"><img id="ico_estados" src="../imagens/site/pe.png">Pernambuco</a></li>
                            <li><a href="" title="Paraíba"><img id="ico_estados" src="../imagens/site/pb.png">Paraíba</a></li>
                            <li><a href="" title="Rio Grande do Norte"><img id="ico_estados" src="../imagens/site/rn.png">Rio Grande do Norte</a></li>
                            <li><a href="" title="Ceará"><img id="ico_estados" src="../imagens/site/ce.png">Ceará</a></li>
                            <li><a href="" title="Piauí"><img id="ico_estados" src="../imagens/site/pi.png">Piuaí</a></li>
                            <li><a href="" title="Maranhão"><img id="ico_estados" src="../imagens/site/ma.png">Maranhão</a></li>
                        </ul>
                    </li>
                    <li><h2>Norte</h2>
                        <ul>
                            <li><a href=""  title="Rôndonia"><img id="ico_estados" src="../imagens/site/ro.png">Rondônia</a></li>
                            <li><a href="" title="Acre"><img id="ico_estados" src="../imagens/site/ac.png">Acre</a></li>
                            <li><a href="" title="Amazonas"><img id="ico_estados" src="../imagens/site/am.png">Amazonas</a></li>                 
                            <li><a href="" title="Pará"><img id="ico_estados" src="../imagens/site/pa.png">Pará</a></li>
                            <li><a href="" title="Tocantins"><img id="ico_estados" src="../imagens/site/to.png">Tocantins</a></li>
                            <li><a href="" title="Amapá"><img id="ico_estados" src="../imagens/site/ap.png">Amapá</a></li>
                            <li><a href="" title="Roraima"><img id="ico_estados" src="../imagens/site/rr.png">Roraima</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            
            <div class="maps">
                <h2>
                    Faça uma busca rápida<br> <input type="text" id="l" placeholder="Buscar">
                    
                    <input type="button" id="busca" value="ir" onclick="ir();">
                </h2>
                <div id="local">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31754407.091740575!2d-69.69606940484344!3d-13.702066330730936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c59c7ebcc28cf%3A0x295a1506f2293e63!2sBrasil!5e0!3m2!1spt-BR!2sbr!4v1520637304386" width="125%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!--    https://developers.google.com/maps/documentation/embed/guide?hl=pt-br -->
            </div>
            
           
            
            
        </div>
        <footer>
            
            
            </footer>
        
    </body>


</html>