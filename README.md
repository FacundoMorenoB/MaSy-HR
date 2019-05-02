# MaSy-HR
Poyecto RH-UDL

#Instalar el Poyecto.
1. Descarga o clona el proyecto

2. Descomprime el paquete

3. Copia la carpeta MaSy-HR en tu servidor web (Ejemplo: /var/wwww/html/)

4. Crea una base de datos en MySQL llamada: masy-hr

5. Configura tu base de datos en el archivo: MaSy-HR/application/config/database.php

6. Instalar mpdf(Para poder generar los PDFS): 
	Solo hay que tener composer instalado y ejecutar el siguiente comando en la terminal ubicado en la carpeta del proyecto
	#composer require mpdf/mpdf 
	
7. Si es necesario cambiar permisos a carpeta vendor (Esta carpeta es creada por mpdf) para utilizar el modulo de PDF.
