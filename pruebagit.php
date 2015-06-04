<?php


echo "prueba de git";

?>

-Configurar el nombre
	git config --gloabals user.name "NombreApellido"

-Configurar el correo
	git config --globals user.email "Correo@tucorreo.com"

-Crear un directorio 
	mkdir nombreArchivo

-Inicializar o crear el directorio del git
	git init

-Agregar los archivos
	git add nombreArchivo

-Hacer COMMIT
	git commit -m "Mensaje del commit"

-Verificar los commit realizados
	git log
	git log --oneline

-Vincular el repositorio local con el repositorio remoto de github
	git remote add testremoto https://github.com/joseink/testgithub.git
							  https://github.com/joseink/test.git

Ver los archivos del remoto
	git remote -v

	https://github.com/joseink/test2.git

-----------------------------------------------------------------------------

