# administrador180
<! doctype html >
< html >
< cabeza >
< meta  charset = " utf-8 " >
< título > Insertar, Editar, Eliminar Registros con Función PHP MySQLi </ título >
< link  type = " text / css " href = " bootstrap.min.css " rel = " stylesheet " >
< link  type = " text / css " href = " http://fontawesome.io/assets/font-awesome/css/font-awesome.css " rel = " stylesheet " >
< estilo >
tabla {
    colapso de la frontera : colapso;
    ancho :  100 % ;
}
th ,  td {
    alineación de texto : izquierda;
    relleno :  4 px ;
}
tr : nth-child ( even ) { background-color :  # f2f2f2 }
th {
    color de fondo :  # 4CAF50 ;
    color : blanco;
}
. envoltorio principal {
    ancho : 60 % ;
    
    fondo : # E0E4E5 ;
    borde : 1 px sólido # 292929 ;
    relleno : 25 px ;
    margen : automático;
}
hr {
    margen superior :  5 px ;
    margen inferior :  5 px ;
    borde :  0 ;
    borde superior :  1 px sólido # eee ;
}
h2 {
    tamaño de fuente : 24 px ;
    }
# # # # # # # # # # # # # # # # # # # # # # # # # #
* {
  margen :  0 ;
  acolchado :  0 ;
}
encabezado {
  familia de fuentes : Helvetica;
  ancho :  480 px ;
  margen :  0 automático;
}
ul {
  estilo de lista : ninguno;
}
# menu  li > a {
  color de fondo : gris;
  color : blanco;
  relleno :  10 px ;
  pantalla : bloque;
  decoración de texto : ninguna;
  ancho mínimo :  100 px ;
}
# menu  li > a : hover {
  color :  # 000 ;
  color de fondo :  # eaeaea ;
}
# menu > li {
  flotar : izquierda;
  alineación de texto : centro
}
# menú > li > ul {
  pantalla : ninguna;
}
# menu > li : hover > ul {
  pantalla : bloque;
}

</ estilo >
</ cabeza >

< cuerpo >


      < nav >
        < ul  id = " menú " >
          < Li > < un  href = "" > Inicio </ una > </ li >
          < Li > < un  href = "" > Buscar </ una >
            < ul >
              < Li > < un  href = " buscar / index.php " > Buscar </ una > </ li >
              < Li > < un  href = "" > Buscar por Fechas </ una > </ li >
              < Li > < un  href = "" > Buscar por codigo de Fallas </ una > </ li >
            </ ul >  
          </ li >
          < Li > < un  href = "" > Tutoriales </ una > </ li >
          < Li > < un  href = "" > Contacto </ una > </ li >
        </ ul >
      </ nav >
   
< Br > < br >
< Br > < br >




< div  class = " envoltorio principal " >
< h2 > Insertar, Editar, Eliminar Registros con Función PHP MySQLi </ h2 >
< Br > < br >
< acción del formulario  = "" método = " publicación " >
  < div  class = " col-xs-3 " >
    < input  class = " form-control " name = " nombres " type = " text " placeholder = " Nombres " >
  </ div >
  < div  class = " col-xs-3 " >
    < input  class = " form-control " name = " apellidos " type = " text " placeholder = " Apellidos " >
  </ div >  
    < input  type = " submit " name = " submit " class = " btn btn-primary " value = " Insertar " >
</ formulario >
< Br >

<? php
    incluir ( "function.php" );
    if ( isset ( $ _POST [ 'enviar' ])) {
        $ campo = matriz ( "nombres" => $ _POST [ 'nombres' ], "apellidos" => $ _POST [ 'apellidos' ]);
#array ("nombres" => $ _ POST ['nombre']);
        $ tbl = "tabla_demo" ;
        insertar ( $ tbl , $ campo );
        
    }
?>

< table  border = " 1 " width = " 100% " >
	< tr >
		< th  width = " 41% " > Nombres </ th >
		< th  width = " 46% " > Apellidos </ th >
		< th  width = " 13% " > Opción </ th >
	</ tr >

<? php 
	$ sql = "seleccionar * de tabla_demo" ;
	$ resultado = db_query ( $ sql );
	while ( $ fila = mysqli_fetch_object ( $ resultado )) {
	?>
	< tr >
		< td > <? php  echo  $ fila -> nombres ; ?> </ td >
		< td > <? php  echo  $ row -> apellidos ; ?> </ td >
		< td >

< Una  clase = " btn btn-primaria " href =" ? Id = editar.php <? Php  echo  $ fila -> Identificación ; ?> " > < I  clase =" fa fa-fa-lg lápiz " aria-oculta = " verdadero " > </ i > </ a >
< Una  clase = " btn btn-primaria " href =" ? Id = borrar.php <? Php  echo  $ fila -> Identificación ; ?> " > < I  clase =" fa fa-basura-o fa-lg " aria- hidden = " true " > </ i > </ a >
</ td >



    </ tr >
    <? php } ?>
</ tabla >
</ div >
</ cuerpo >
</ html >
© 2021 GitHub, Inc.
