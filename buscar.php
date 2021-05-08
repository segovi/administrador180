<html>
<head>
<title>Buscador simple en PHP</title>
</head>
<body>
<form action="buscar.php" method="post">
Buscar: <input name="palabra">
<input type="submit" name="buscador" value="Buscar">
</form>
<?
if ($_POST[‘buscador’])
{

$buscar = $_POST[‘palabra’];


if(empty($buscar))
{
echo "No se ha ingresado una cadena a buscar";
}else{
// Conexión a la base de datos y seleccion de registros
$con=mysql_connect("localhost","root","");
$sql = "SELECT * FROM tabla_demo WHERE nombres like ‘%$buscar%’ ORDER BY id DESC";
mysql_select_db( $con);

$result = mysql_query($sql, $con);

// Tomamos el total de los resultados
$total = mysql_num_rows($result);

// Imprimimos los resultados
if ($row = mysql_fetch_array($result)){
echo "Resultados para: <b>$buscar</b>";
do {
?>
<p><b><a href="noticia.php?id=<?=$row[‘id’];?>"><?=$row[‘nombres’];?></a></b></p>
<?
} while ($row = mysql_fetch_array($result));
echo "<p>Resultados: $total</p>";
} else {
// En caso de no encontrar resultados
echo "No se encontraron resultados para: <b>$buscar</b>";
}
}
}
?>
</body>
</html>
 