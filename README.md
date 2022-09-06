

 introduccion
=============
 *El presente sistema permite cargar pedidos de hamburguesas de diferentes características.
 el sistema resenta las siguientes funcionalidades:*
- Manejo de sesiones para los usuarios
- Carga de pedido y visualizacion de pedidos en elaboración y entregados
- Generar tickets de los pedidos en formato .txt con fecha, hora y datos del pedido
- Cargar reclamos de los pedidos con descripcion e imagen


Instrucciones de uso
=============

###Inicio sesion
Inicie sesion con nombre de usuario y contraseña para poder utilizar el sistema

###Cargar pedido
En la pestaña "generar pedido" seleccione tipo de hamburguesa, cantidad de medallones, tilde el casillero de papas en caso de que el pedido las incluya, indique los agregados y agregue alguna aclaracion en caso de que lo requiera. Cargue el pedido una vez este el formulario completado

### Ver perdidos en elaboración
En la pestaña de "ver pedidos" podrá ver los pedidos que esten en elaboración.
Haciendo click en "entregado" podra marcar el pedido como entregado

### Ver perdidos entregados
En la pestaña de "pedidos entregados" podrá ver los pedidos que ya hayan sido entregados y podra generar el ticket y cargar un reclamo en caso de haberlo, con su respectiva imagen.

Funcionamiento del sistema
=============

El programa se encuentra desarrollado con PHP nativo utilizando POO y el patron de desarrollo MVC.

### index.php
Instancia un objeto de la clase controlador y ejecuta el metodo *ctrGetPlantilla()* que permite ejecutar la vista principal de la web.

## controladores
Aquí se encuentran archivos que permiten gestionar consultas a modelo y presentar los resultados en vista.

### plantilla.controlador.php
Permite mostrar las páginas de la vista mediante index.php

### pedido.controlador.php
Toma los datos ingresador por el usuario para realizar una carga de un pedido. Mediante la instanciación de un objeto de la clase *dbPedidos* realiza la carga del pedido a la base de datos.

### marcar_entregado.php
obtiene el ID del elemento que el usuario señala como entregado y creando una instancia dbPedidos() ejecuta la modificación del estado del pedido.

### reclamos.php
Obtiene los datos de la imagen y del texto del reclamos y guarda el nobmre de la imagen y descripcion del reclamo en la carpeta reclamos. 
Mediante un objeto de clase *dbPedidos* guarda los datos del reclamo en una tabla en la base de datos.

### ticket.php
Obtiene el ID del pedido del cual se solicita el ticket y utiliza el mismo para obtener los datos del pedido.
Utiliza los datos del pedido y las funciones de hora y fecha para generar un ticket que se almacena en la carpeta tickets en archivos .txt con el nombre identificado con el ID del pedido.

## Modelos

###dbPedidos.php
La clase dbPedidos crea objetos cuyos atributos son los datos para establecer la conexión a la base de datos.
Los metodos de dicha clase son los utilizados por los controladores para efectuar las conultas, altas o modificaciones a los pedidos almacenados en la base de datos.

###validar_usuario.php
Toma los datos del inicio de sesion ingresados por el usuario para corroborar la existencia del mismo mediante la consulta a la tabla administradores.

## Vistas
###plantilla.php
Muestra la barra de navegación a la que puede acceder el usuario y direcciona a inicio_sesion.php siempre en caso de no haber una sesión iniciada.

###inicio_sesion.php
Es la vista inicial de la página y se muestra siempre que no se haya iniciado sesión. La misma es un formulario que toma los datos de usuario y contraseña para realizar el inicio de sesión.

###formulario_pedido.php
Muestra un formulario en el que se pueden ingresar los datos del pedido. Los campos obligatorios no pueden quedar vacios dado a las opciones default. los campo de agregados y comentarios pueden quedar vación.

###ver_entregados.php
Se genera una lista y luego se muestran los pedidos que ya fueron entregados y se muestra en cada pedido la opcion de generar el ticket o agregar un reclamo.

###ver_pedidos.php
Se genera una lista y se muestran los pedidos que se encuentran en estado de "elaborando", cada pedido se muestra con un boton que permite marcar el pedido como "entregado"

###error404.php
Se muestra una página de error en caso de que el url no corresponda a una sección de la página.

## Utilidades
###calculo_precio.php
el mismo es utilizado para calcular automaticamente el valor del pedido antes de ser ingresado en la base de datos. 



###### proyecto final "Experto Universitario en PHP y MySQL"
###### Centro de e-Learning UTN BA
###### ©Erick Teper