<body>
    
<div id="corpo">
<?php


    if($_POST){ 
        echo '<h1>CURRICULUM VITAE</h1>'; 
        echo '<h2> DADOS PESSOAIS</h2><hr>';
     echo '<div class="dados">nome: '.$nome =$_POST['nome'].', '.$idade =$_POST['idade'].' Anos<br><br>';
     echo 'email: '.$email =$_POST['email'].'<br><br>';
     echo 'estado civil: '.$civil =$_POST['civil'].'<br><br>';
        echo '<hr><h2>ENDEREÇO</h2>';
     echo 'endereço: '.$endereco =$_POST['endereco'].'<br><br>';
     echo 'cep: '.$cep =$_POST['cep'].'<br>';  
     echo 'estado: '.$uf =$_POST['uf'].'<hr>'; 
        echo'<h2>OBJETIVO </h2>';
    echo'objetivo: '.$objetivo =$_POST['objetivo'].'<br><hr>';
        echo'<h2> FORMAÇÃO <h2>';
    echo' '.$instituicao =$_POST['instituicao'].'<br>';
    echo ' '.$curso =$_POST['curso'].'<br>';
    echo'concluido '.$data =$_POST['data'];
        echo'<h2> EXPERIÊNCIA';
    echo'empresa: '.$empresa =$_POST['empresa'].'<br>';
    echo'cargo: '.$cargo =$_POST['cargo'].'<br>';
    echo'incio: '.$datainicio =$_POST['datainicio'];
    echo' / término '.$datafim =$_POST['datafim'].'<br></div>';

    
              
    } 
    ?>
    
        <style>
            h1{
                text-align:center;
                font-size:25px;
                font-family:arial;
            }
            h2{
                text-align:30px;
                padding-left:50px;
                font-family:arial;
            }

  
        #corpo{
            margin-left:20%;
            height:1000px;
            width:800px;
            background-color:whitesmoke;
            border-bottom: 4px solid yellow;
            border-top: 4px solid yellow;
            border-left:4px solid yellow;
            border-right:4px solid yellow;
        }
      
        .dados{
            font-size:20px;
            font-family:arial;
            color:green;
            padding-left:20px;
            padding-top:5px;
        }

        </style>
        </div>
</body>

