# **Cómo instalar Git en Windows**

**Paso 1:** Descarga el Instalador de Windows

Visita la página oficial de [Git](https://git-scm.com/downloads)  para descargar la última versión del instalador de Git para Windows. La descarga debería iniciarse automáticamente cuando visites la página.

<img src="https://kinsta.com/wp-content/uploads/2023/04/git-windows-download.jpg" alt="Descripción de la imagen" width="50%" height="50%">


**Paso 2:** Ejecuta el Instalador y Selecciona las Opciones

* Ejecuta el instalador descargado y sigue el asistente de instalación. Confirma que la aplicación puede realizar cambios en tu dispositivo haciendo clic en Sí en el cuadro de diálogo Control de Cuentas de Usuario que aparece.

Lee la Licencia Pública General GNU y haz clic en Siguiente.

<img src="https://kinsta.com/wp-content/uploads/2023/04/gnu-license.png" alt="Descripción de la imagen" width="70%" height="70%">

* El instalador te pedirá una ubicación para la instalación. Mantén la predeterminada a menos que necesites cambiarla, y haz clic en Siguiente.

<img src="https://kinsta.com/wp-content/uploads/2023/04/destination-location.png" alt="Descripción de la imagen" width="70%" height="70%">

* Aparecerá una pantalla de selección de componentes. Mantén la configuración por defecto a menos que necesites modificarla, y haz clic en Siguiente.

* Se te pedirá que crees una carpeta de inicio. Déjala como está y haz clic en Siguiente.

* Elige un editor de texto para utilizar con Git. Haz clic en el menú desplegable para elegir el editor de texto que quieras utilizar, como Vim, Notepad++, etc. y haz clic en Siguiente.

<img src="https://kinsta.com/wp-content/uploads/2023/04/git-default-editor.png" alt="Descripción de la imagen" width="70%" height="70%">

* En este siguiente paso, puedes optar por renombrar tu rama inicial. Por defecto es master. Deja el predeterminado (a menos que realmente quieras cambiarlo) y haz clic en Siguiente.

* Ahora pasas a modificar el entorno PATH. Déjalo en la selección recomendada, Git desde la línea de comandos y también desde software de terceros y haz clic en Siguiente.

* En la siguiente pantalla, tienes que elegir el programa SSH que quieres utilizar. Git viene con su propio cliente SSH, así que deja marcada la configuración por defecto. Haz clic en Siguiente.

* La siguiente opción se refiere a los certificados del servidor. La mayoría de los usuarios deberían elegir la opción por defecto, Utilizar la biblioteca OpenSSL. Haz clic en Siguiente.

* La siguiente pantalla trata de las conversiones de los finales de línea. Déjalo establecido en la opción por defecto, Revisar finales de línea estilo Windows, confirmar finales de línea estilo Unix. Cambiar esta opción puede causar problemas. Haz clic en Siguiente.

* A continuación, tendrás que seleccionar el emulador de terminal. Se recomienda el predeterminado MinTTY. Haz clic en Siguiente.

* En la siguiente pantalla, se te preguntará qué debe hacer el comando git pull. De nuevo, se recomienda la opción por defecto. Haz clic en Siguiente.

* A continuación, tendrás que elegir qué ayudante de credenciales utilizar. Mantén seleccionada la opción por defecto y haz clic en Siguiente.

* A continuación, se te presentarán algunas opciones adicionales para personalizar tu instalación, entre las que se incluyen:

        🔹Activar el almacenamiento en caché del sistema de archivos

        🔹Activar enlaces simbólicos

        🔹Cuando hayas terminado de seleccionar, haz clic en Siguiente.

**Paso 3:** Verifica la instalación con Git Bash

Para asegurarte de que Git se ha instalado correctamente, abre Git Bash y escribe el siguiente comando:

` git --version `

El cual debería aparecer el nombre de la versión de Git que acabas de instalar.

# **Configuración de Git**

**Paso 1:** Establece tu Nombre y Dirección de Correo Electrónico

Para configurar tu nombre y dirección de correo electrónico para Git, abre tu terminal o Git Bash (para usuarios de Windows) e introduce los siguientes comandos, sustituyendo Your Name y youremail@example.com por tu nombre y dirección de correo electrónico reales:

` git config --global user.name "Your Name" `

` git config --global user.email "youremail@example.com" `

**Paso 2:** Configurar los Finales de Línea (Opcional)

Para configurar Git para que gestione los finales de línea adecuadamente para tu sistema, ejecuta el siguiente comando:

Para usuarios de Windows:

 ` git config --global core.autocrlf true `

 Para comprobar que tu configuración de Git es correcta, ejecuta el siguiente comando:

 ` git config --list `


# **Crear repositorios**

## **¿Qué es un Repositorio en GitHub?**

Un repositorio en GitHub es un espacio donde puedes almacenar, organizar y colaborar en proyectos de código.

* Guarda código y archivos del proyecto.
* Permite hacer seguimiento a los cambios con Git.
* Facilita la colaboración con otros desarrolladores.
* Se puede usar para desplegar proyectos en servidores como Hestia, Oracle Cloud, o para sitios web con Apache y PHP.


## **Cómo Crear un Repositorio en GitHub**

**Opcion 1**

1. Crear un Repositorio desde GitHub
1. Ve a GitHub e inicia sesión.
1. Haz clic en el botón New Repository o ve a https://github.com/new.
1. Escribe el nombre de tu repositorio.
1. Agrega una descripción opcional.
1. Elige si el repositorio será público o privado.
1. Marca la opción de Initialize this repository with a README si quieres un archivo inicial.
1. Haz clic en Create Repository.

**Opcion 2**

**Crear un Repositorio desde la Terminal**

1. **Inicializar un Repositorio Git**

` git init `

Este comando crea un repositorio vacío en tu carpeta actual.

2. **Vincularlo con GitHub**

Agrega los archivos al repositorio:

` git add ` 

3. **Guarda los cambios en un commit:**

` git commit -m "Primer commit" `

4. **Conéctalo con GitHub (reemplaza usuario y repositorio con los tuyos):*

` git remote add origin https://github.com/usuario/repositorio.git `

5. **Sube los archivos a GitHub:**

` git push -u origin main `


# **Página Web con GitHub**

Para activar la página web de GitHub, sigue estos pasos:

1. Crea un repositorio en GitHub: Inicia sesión en tu cuenta de GitHub y crea un nuevo repositorio con el nombre de usuario seguido de «.github.io».

1. Sube tu página web: Sube los archivos de tu página web al repositorio que acabas de crear.

1. Accede a tu página web: Una vez subidos los archivos, podrás acceder a tu página web escribiendo en tu navegador la URL «https://tu_nombre_de_usuario.github.io»
