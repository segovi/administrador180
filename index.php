<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insertar, Editar, Eliminar Registros con Función PHP MySQLi </title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
    width:60%;
    
    background:#E0E4E5;
    border:1px solid #292929;
    padding:25px;
    margin:auto;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
h2{
    font-size:24px;
    }
##########################
*{
  margin: 0;
  padding: 0;
}
header{
  font-family: Helvetica;
  width: 480px;
  margin: 0 auto;
}
ul{
  list-style: none;
}
#menu li>a{
  background-color: grey;
  color: white;
  padding: 10px;
  display: block;
  text-decoration: none;
  min-width: 100px;
}
#menu li>a:hover{
  color: #000;
  background-color: #eaeaea;
}
#menu>li{
  float: left;
  text-align:center
}
#menu>li>ul{
  display: none;
}
#menu>li:hover>ul {
  display:block;
}

</style>
</head>

<body>


      <nav>
        <ul id="menu">
          <li><a href="">Inicio</a></li>
          <li><a href="">Buscar</a>
            <ul>
              <li><a href="buscar/index.php">Buscar</a></li>
              <li><a href="">Buscar por fechas</a></li>
              <li><a href="">Buscar por codigo de Fallas</a></li>
            </ul>  
          </li>
          <li><a href="">Tutoriales</a></li>
          <li><a href="">Contacto</a></li>
        </ul>
      </nav>
   
<br><br>
<br><br>




<div class="main-wrapper">
<h2>Insertar, Editar, Eliminar Registros con Función PHP MySQLi </h2>
<br><br>
<form action="" method="post">
  <div class="col-xs-3">
    <input class="form-control" name="nombres" type="text" placeholder="Nombres">
  </div>
  <div class="col-xs-3">
    <input class="form-control" name="apellidos" type="text" placeholder="Apellidos">
  </div>  
    <input type="submit" name="submit" class="btn btn-primary" value="Insertar">
</form>
<br>

<?php
    include("function.php");
    if(isset($_POST['submit'])){
        $field = array("nombres"=>$_POST['nombres'], "apellidos"=>$_POST['apellidos']);
#array("nombres"=>$_POST['name']);
        $tbl = "tabla_demo";
        insert($tbl,$field);
        
    }
?>

<table border="1" width="100%">
	<tr>
		<th width="41%">Nombres</th>
		<th width="46%">Apellidos</th>
		<th width="13%">Opcion</th>
	</tr>

<?php 
	$sql = "select * from tabla_demo";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->nombres;?></td>
		<td><?php echo $row->apellidos;?></td>
		<td>

<a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
<a class="btn btn-primary" href="borrar.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
</td>



    </tr>
    <?php } ?>
</table>
</div>
</body>
</html>