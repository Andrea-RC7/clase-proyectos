# **Creación de cuenta de oracle Cloud**

 El primer paso es ir a la web del Plan Gratuito de **[Oracle Cloud](https://www.oracle.com/es/cloud/free/)** y dar click en «Comienza gratis» o la obcion de cuenta de estudiante.

 <img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-19-1024x472.png" alt="Descripción de la imagen" width="70%" height="70%">

Rellenamos los datos para crear nuestra cuenta de Oracle Cloud y pulsamos en «Verificar mi correo electrónico».

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-20-1024x472.png" alt="Descripción de la imagen" width="70%" height="70%">

recibiras un correo y tendras que verificar la cuenta desde allí.

Tras realizar la verificación, establece la contraseña. También, tienes que rellenar el nombre de cuenta y elegir la región principal. 

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-21-768x354.png" alt="Descripción de la imagen" width="70%" height="70%">

Rellena los datos de dirección y continua con el proceso de registro. Tendras que añadir una tarjeta de crédito como método de pago, que se utilizará solo en caso de que actualices la suscripción, en caso de ser estudiante no se pedira ninguna tarjeta.

Una vez dentro del panel, abrimos el menú y vamos a Compute > Instances.

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-22-768x354.png" alt="Descripción de la imagen" width="70%" height="70%">

En el lateral izquierdo, abrimos el desplegable «Compartment» y elegimos la única opción que aparece disponible.

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-23-768x354.png" alt="Descripción de la imagen" width="70%" height="70%">

Ahora, solo tenemos que pulsar en «Create instance».

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-24-768x354.png" alt="Descripción de la imagen" width="40%" height="40%">

Damos un nombre a la instancia y mantenemos las opciones por defecto de «Placement» y «Security».

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-25-768x354.png" alt="Descripción de la imagen" width="70%" height="70%">

Los cambios vienen ahora. En el cuadro «Image and shape» pulsamos en «Edit».

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-26-768x354.png" alt="Descripción de la imagen" width="70%" height="70%">

En «Image», pulsamos en «Change image». Podemos elegir cualquiera de las que aparecen como «Always Free-elegible». En este caso, para montar un VPS que hará de servidor VPN con Wireguard se eligira Ubuntu 22.04 Minimal aarch64.

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-27-768x354.png" alt="Descripción de la imagen" width="70%" height="70%">

Cambiamos también el «Shape» y elegimos la opción Ampere. Aunque podemos elegir hasta 4 núcleos y 24 GB de RAM, debemos elegir la opción que realmente creamos que vamos a utilizar. La razón es que Oracle puede eliminar la instancia prácticamente sin avisar si no superamos ciertos umbrales de uso.

Por ejemplo, se utilizara un núcleo y 4 GB de RAM porque para esta funcionalidad es más fácil rebasar esos umbrales y mantener la instancia.

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-28-768x354.png" alt="Descripción de la imagen" width="70%" height="70%">

Se edita también el «Networking» y pulsamos en «Create new virtual network» para crear una subred que incluirá la instancia.

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-29-768x354.png" alt="Descripción de la imagen" width="70%" height="70%">

En el apartado «Add SSH Keys», se mantendra la opción «Generate a key pair for me» y pulsamos en «Save private key». Es muy importante que guardar esta clave, esta permitirá acceder al servidor posteriormente.

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-30-768x354.png" alt="Descripción de la imagen" width="70%" height="70%">

Por último, en «Boot volume», se marcara «Specify a custom boot volume size». Establecemos un tamaño de 199GB y una VPU de 20. (Esta configuración viene recomendada por el chollero Pablo_Lpzz en Chollometro).

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-31-768x354.png" alt="Descripción de la imagen" width="70%" height="70%">

Por último, se pulsa en «Create».

Automáticamente se dará comienzo al proceso de creación de la instancia, tal como vemos a continuación, y en algo menos de un minuto la misma estará disponible.

<img src="https://github.com/Akeno075/Proyectos-Clases/raw/main/Oracle%20Cloud/insta.png" alt="Descripción de la imagen" width="70%" height="70%">

En nuestro caso se necesitas acceso remoto por SSH, entonces colocamos el siguiente comando en nuestra termial de Power Shell:

Genera una clave SSH en tu terminal con:

` ssh-keygen -t rsa -b 4096 -f ~/.ssh/oracle_key `

Finalmente, se prueba la conexión conectándo por SSH y aprovechamos para dejar el VPS completamente actualizado.

<img src="https://javituinformatico.com/wp-content/uploads/2023/05/image-32-768x433.png" alt="Descripción de la imagen" width="70%" height="70%">


# **Configuración de un Dominio en Hostinger**

en este apartado se vera el como comprar un dominio de Hostinger y a adminsitrarlo con hestia.

**Paso 1**: Inicia sesión en Hostinger, en caso de no tener cuenta es necesario crearla para poder comprar el domino.
**Paso 2**: Dirígete a la sección Dominios y selecciona Registrar un nuevo dominio.

<img src="https://www.hostinger.com/mx/tutoriales/wp-content/uploads/sites/39/2024/09/comprobador-de-dominios-1.png" alt="Descripción de la imagen" width="60%" height="60%">

**Paso 3**:Escribe el nombre del dominio deseado (ejemplo: myHostinger.com), apareceran las opciones disponibles por ejemplo (.com, .fun, .store), elige la opcion que se acomode a tu presupuesto, al agregarla al carrito elige el periodo por el que lo compraras y el metodo de pago.

<img src="https://www.hostinger.com/mx/tutoriales/wp-content/uploads/sites/39/2024/09/comprar-dominio-hostinger.png" alt="Descripción de la imagen" width="60%" height="60%">

<img src="https://www.hostinger.com/mx/tutoriales/wp-content/uploads/sites/39/2024/09/seleccionar-pago-hostinger.png" alt="Descripción de la imagen" width="50%" height="50%">

**Paso 4:** Tras realizar el pago, la página te redirigirá a la página Dominios en hPanel. Haz clic en Administrar junto al dominio que acabas de comprar.

<img src="https://www.hostinger.com/mx/tutoriales/wp-content/uploads/sites/39/2024/09/administrar-dominio-hostinger.png" alt="Descripción de la imagen" width="60%" height="60%">


# **Configurar los Servidores de Nombres (DNS)**


En el Panel de Control de Hostinger, da click en **dominios** despues en **administrar**, encontraras la seccion de **NameServers (DNS)**, selecciona la opción **usar servidores de nombres personalizados**.

Para configura los servidores DNS que apunten a tu servidor en Oracle Cloud 

* Para crear un nuevo registro, ingresa los valores para tipo, nombre, contenido, TTL (según el tipo de registro, es posible que también debas completar otra información). Una vez hecho esto, haz clic en Agregar registro:

<img src="https://downloads.intercomcdn.com/i/o/597937915/eb5ea79a75502077fd559f78/dns-add-record-es.png?expires=1743743700&signature=8c6a1354f965b08ccbb39e8751099e934ecc29256e162ac0770c864784cff9f4&req=cSkgH8p5lIBaFb4f3HP0gOMzJwzJ8XymyDgPVFjU0r9QY9EKWICqL5WgSrkP%0AKW29Hd4%2F%2FONYf4z0Lg%3D%3D%0A" alt="Descripción de la imagen" width="50%" height="50%">

Guarda los cambios y espera la propagación del DNS (puede tardar algunas horas).

Si tienes duda sobre los pasos te dejo a conticuación videos de apoyo para la configuración.

**[Compra del Domino](https://www.youtube.com/watch?v=fjdeTokWtOM&list=PL-aSvPEYgSGij1bg9HvlLZAJahMNGunX7&index=1)**

**[Configuracion de DNS](https://www.youtube.com/watch?v=CYexE75Tzaw&list=PL-aSvPEYgSGij1bg9HvlLZAJahMNGunX7&index=3)**

## **instalacion de Hestia Control Panel**

Nos vamos a la pagina de **[Hestia](https://hestiacp.com/)** y ubicamos el apartado de install 

<img src="https://github.com/Akeno075/Proyectos-Clases/raw/main/Base%20de%20Datos/image.png" alt="Descripción de la imagen" width="70%" height="70%">

Una vez configurados los campos anteriores, se nos proporcionará un comando SSH que debemos ejecutar en nuestra VPS de Oracle Cloud que se creo, este comado se ejecutara con permisos de root para instalar Hestia.

<img src="https://github.com/Akeno075/Proyectos-Clases/raw/main/Base%20de%20Datos/installHestia.png" alt="Descripción de la imagen" width="70%" height="70%">

Para configurar tu nombre de dominio (example.tech) en Hestia, ejecuta los siguientes comandos como root estos nos lo proporciona Hestia al momento de colocar las opciones necesarias:

>[!IMPORTANT]
>
>Es necesaria ya tener comprado y confugurado el DNS en tu dominio para quealizar estos pasos.

`cd /usr/local/hestia/bin/`

`v-change-sys-hostname example.tech`

`v-add-letsencrypt-host`

# ** HTPPS mayor seguridad**


**Pasos para Configurar HTTPS en HestiaCP: **


**Paso 1:** Acceder a HestiaCP poniendo tu direccion ip o el nombre de tu dominio y el puerto 8083 como se ve:

 https://<"IP">:8083/ e inicia sesión como admin.

**Paso 2:** Agregar un Dominio a HestiaCP en el panel de control encontraras un apartado de web ingresa y añade el nombre del dominio como los siguientes pasos.


* Escribe tu dominio (Ejemplo: midominio.com).

* Marca la opción Habilitar Soporte SSL.

* Marca la opción Usar Let’s Encrypt.

* Haz clic en Guardar.

**Paso 3:** ingresa a tu pagina y debe contar con el identificador de Https en algunos servidores es un candado en la parte superior izquierda jundo con la URL.
