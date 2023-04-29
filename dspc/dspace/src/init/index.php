<!DOCTYPE html>
<html lang="en">
<head>
  <title>D-space</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: black;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: black;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">D-space</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p>add assincrono------</p>
      <p><a href="#">add collection</a></p>
      <p><a href="#">add scene</a></p>
      <p>add alterações------</p>
      <p><a href="#">add titulo</a></p>
      <p><a href="#">add alterações n stone</a></p>
      <p><a href="#">add alterações l stone</a></p>
      <p><a href="#">add alterações s stone</a></p>
      <p><a href="#">add alterações o stone</a></p>
      <p><a href="#">add link</a></p> 
    </div>
    <div class="col-sm-8 text-left"> 
       <?php 
   
   session_start();
   require '../db/conexao.php';

                $linkscene = $_SESSION['scene'];
                $linkscn = $_SESSION['scene'];
               



echo "<a style='color:white; border: 3px solid white' href='../front/page_1/main.php'> voltar pro inicio</a>";


                

echo "<input id='id3' style='background-color: black;color:white;' type='text' value=' localidades coordenadas'>";


    echo "<div class='painel-cards-1' >";
          
            echo "<div class='painel-nav-1' >";
                

                




                    
                    



       

                $sthh=$pdo->prepare("SELECT * FROM pear  ");






                $sthh->execute();
                $resultado_usuarios = $sthh-> fetchAll( PDO::FETCH_ASSOC );
                 echo "<h3 style='color:white'>Coleções</h3>";
                foreach($resultado_usuarios as  $row) {
                    $x = $row["x"];
                    $y = $row["y"];
                    $tg = $y AND $x;
                    $tr = $row["coin_pe"];
                    $dr = $row["drop_pe"];
                    $lkc = $row["linkc"];
                    $grey = $row["greytile"];
                    $dark = $row["blacktile"];







                 
                
                    $rc =  $sthh ->rowCount();





                      if($tr != NULL){

                   
          echo  "<a href='".$row["linkc"]."'>";
                    

                                   echo "<img style='width:40px;height:40px' src='../static/bitmap.png'>";
                              
                                

                echo  "</a>";
   }elseif($dr != NULL){


                    echo  "<a href='".$row["linkc"]."'>";
                    

                                   echo "<img style='width:40px;height:40px' src='".$dr."'>";
                                
                                

                echo  "</a>";
}elseif($dark == 'dark'){



 echo  "<a href='".$row["linkc"]."'>";
                    

                                   echo "<img style='width:40px;height:40px' src='../static/terrain_minidark.png'>";
                              
                                

                echo  "</a>";

}elseif($grey == 'grey'){



 echo  "<a href='".$row["linkc"]."'>";
                    

                                   echo "<img style='width:40px;height:40px' src='../static/terrain_minigravity.png'>";
                              
                                

                echo  "</a>";

}elseif($tg != NULL){

     echo  "<a href='".$row["linkc"]."'>";
                    

                                   echo "<img style='width:40px;height:40px' src='../static/terrain_minig.png'>";
                                
                                

                echo  "</a>";

                
}else{

                        

                    echo  "<a href='../'".$row["linkc"].">";
                   
                                   echo "<img style='width:40px;height:40px' src='../static/terrain_minir.png'>";      
                      
                echo  "</a>";
  
              
            echo  "</div>";  
                
                 }}

         


   
         
$linkscn = $linkscene;
echo "<p> <form action='bitmap.php' method = 'POST'><input type='submit' value='+ mini coin add'> <img style='width:40px;height:40px' src='../static/bitmap.png'><input type='hidden'  name ='mini' value='".$linkscn."'></input></form></p>";

echo "<p> + <form action='terrain_minidark.php' method = 'POST'><input type='submit'value='+ mini dark add' ><img style='width:40px;height:40px' src='../static/terrain_minidark.png'><input type='hidden'  name ='mini' value='".$linkscn."'></input></form></p>";

echo "<p> + <form action='terrain_minig.php' method = 'POST'><input type='submit'   value='+ mini green add'><img style='width:40px;height:40px' src='../static/terrain_minig.png'><input type='hidden'  name ='mini' value='".$linkscn."'></input></form></p>";

echo "<p> + <form action='terrain_minir.php' method = 'POST'><input type='submit' value='+ mini red add'><input type='hidden'  name ='mini' value='".$linkscn."'></input><img style='width:40px;height:40px' src='../static/terrain_minir.png' ></input></form></p>";
        
  echo "</body>";



?>


    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>play</p>
      </div>
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
