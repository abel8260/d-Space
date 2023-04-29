<?php 
   
   session_start();
   require '../db/conexao.php'; ?>
<!DOCTYPE html><!--comentario-no-final-do-build-no-processo-de-documentação-->
<html lang="en">
<head>
  <title>D-space</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <style>
      
      .dotted_box{
                border: 3px dotted black;
        margin-bottom:2%; 
        cursor:pointer;
        position: relative;
      }
      
      .cen_box_left{
        margin-top:30px; 
                border: 3px solid black;
        margin-bottom:2%; 
        cursor:pointer;
        padding-top:2%;
        padding-bottom:2%;
        padding-left:10%;
        padding-right:10%;   
        float:left; 
        margin-left:17%; 
      }

           .img_cen_box0{
         float:left;
               
          
           }

          
           p{
            text-align:center; 
           }
          .cen_box{
        border: 3px solid black;
        margin-bottom:2%; 
        cursor:pointer;
          }

          

          .cen_box_title{
        border: 3px solid black;
        margin-bottom:2%; 
          }
          .cen_box:hover, .cen_box_left:hover {
        background-color: #555555;
        color:white;
      }
             a.confirm:link, a.confirm:visited,a.menu:link, a.menu:visited, a.voltar:link, a.voltar:visited {
          background-color: #000;
          border: 1px solid #000;
          color: white;
          display: inline-block;
          padding: 14px 25px;
          text-align: center;
          text-decoration: none;
          
          width:100%;
        }

        a.confirm:hover, a.confirm:active ,a.menu:hover, a.menu:active , a.voltar:hover, a.voltar:active  {

          background-color: #e0e0d1;
          color: #000;
        }


        .links{
          width:120px;
          margin-bottom:2%; 
        }
        vermelho{
          color:red;
        }
        body {
  font-family: Arial;
  margin: 0;
  background-color: black; 
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.badge-warning{
  border-radius:12%;
  background-color:yellow;
  color:black;   
}
.badge-danger{
  border-radius:12%;
  background-color:red;
  color:black;
  }

.badge-success{
  border-radius:12%;
  background-color:green;
  color:black;
}
    
  
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 100vh}
    
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
<body bgcolor="black">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">D-space</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> exportar</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p>add assincrono------</p>
      <p><a href="./add/sceneadd.php">list scenes</a></p>
      <p><a href="./add/collectionadd.php">list collections</a></p>
      <p><a href="./add/ttladd.php">play</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
<?php       

                $linkscene = $_SESSION['title_pe'];
                $linkscnn = $_SESSION['title_pe'];
               






    echo "<div class='painel-cards-1' >";
          
            echo "<div class='painel-nav-1' >";
                

                




                    
                    



       

                $sthh=$pdo->prepare("SELECT * FROM pear WHERE title_pe = '$linkscnn' LIMIT 1");






                $sthh->execute();
                $resultado_usuarios = $sthh-> fetchAll( PDO::FETCH_ASSOC );
                 echo "<h3 style='color:white'>Títulos:</h3>";
                foreach($resultado_usuarios as  $row) {
                    $x = $row["linkc"];
                    $y = $row["colecttion_pe"];
                    
                    $tr = $row["scene_pe"];
                    $dr = $row["title_pe"];
                    $lkc = $row["alt_pe"];
                   

      echo "<div class='col-sm-8 sidenav'>";
      echo "<div class='well '>";
        echo "<p>$dr</p>";
      echo "</div>";
      
    echo "</div>";

    $sthh=$pdo->prepare("SELECT * FROM pear WHERE title_pe = '".$linkscnn."'");






                $sthh->execute();
                $resultado_usuarios = $sthh-> fetchAll( PDO::FETCH_ASSOC );
                 echo "<h3 style='color:white'>(play)</h3>";
    foreach($resultado_usuarios as  $row) {
                    $x = $row["linkc"];
                    $y = $row["colecttion_pe"];
                    
                    $tr = $row["scene_pe"];
                    $dr = $row["title_pe"];
                    $lkc = $row["alt_pe"];
                   

      echo "<div class='col-sm-8 sidenav'>";
      echo "<a href='$x' >";
      echo "<div class='well cen_box '>";
        echo "<p>$lkc</p>";
      echo "</a>";
      echo "</div>";
      
    echo "</div>";

}

}
         
$linkscn = $linkscene;




?>


    </div>
    
  </div>
</div>

<footer class="container-fluid text-center">
  

</footer>

</body>
</html>
