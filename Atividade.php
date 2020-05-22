<html>
<head>
    <title> Atividade </title>
    <meta charset="UTF-8">
</head>
<body>
    <label>
    <? php
        
        $conn = mysql_connect("127.0.0.1", "root", "") or die ("Nao foi possivel conectar!");
				           
        mysql_select_db("sysfar") or die ("Tabela nao encontrada!");


        

       $consulta = mysql_query($publicar) or die ("Falha na execução da consulta!");


      while ($li = mysql_fetch_assoc($consulta)) {

        if ($li["visivel"] == "Y") {
          $quantidade;
          $descricao;
          $preco;
          $barra;
          $promocao;
          $dbjson = $coon;
          
      }
      //criando o arquivo
      $arquivo  = fopen('PS.JSON','w');
      //verificando se foi criado
      if ($arquivo == false) die ('Não foi possivel criar o arquivo.');
      //escrevendo no arquivo
      $texto = $dbjson;
      fwrite($arquivo, $texto);
      //Fechando o arquivo após escrever no mesmo
      fclose($arquivo);
      //---------------------------------------------------
      if ($promocao > 0) {
        echo "<div class='col-xs-12 col-md-4 comentario'>
                  $descricao <br>
              echo "$promocao" </div>";
      }
      elseif ($promocao==0) {
      echo "$descricao <br>
      $preco";
      }
      if ($quantidade <=0){post not null}{
        
      }
      else 
      echo "$quantidade <br>";
      }
    ?>
</body>
</html>
