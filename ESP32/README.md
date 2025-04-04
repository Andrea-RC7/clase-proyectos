

# Proyectos con ESP32

Durante la duración de la materia se crearon varias actividades con el uso de la ESP32, todas las actividades que se crearon se enfocaron en la lograr tener comunicación inalámbrica, en donde también se pueda hacer envió de datos por distintos medios que se verán continuación.


## Bluetooth

En esta parte se crearon 6 códigos donde se utiliza como método de comunicación, Bluetooth con el cual cada uno de los códigos realiza una acción diferente desde solo probar el funcionamiento de una ESP32 y bluetooth hasta usarlo para el control de dispositivos, las siguientes actividades demuestran algunas formas de utilizar bluetooth.

**BT1 - Bridge entre Bluetooth y Serial (SPP)**

El ESP32 cuenta con Bluetooth integrado, que nos permite establecer de forma sencilla una comunicación inalámbrica con otros dispositivos, el ejemplo **tal** crea un puente entre el Bluetooth serie y el Bluetooth clásico (SPP) con la cual permitirá enviar y recibir datos desde un dispositivo Bluetooth emparejado, facilitando la interacción con cualquier dispositivo compatible con Bluetooth SPP.

**[Código BT1](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**

**BT2 - Control de LED**

En esta actividad se vuelve hacer uso de bluetooth serial pero esta vez para controlar un led de la ESP32 el cual es un pin ya asignado para poder controlar el led, el dispositivo que esta conectado mediante bluetooth enviara un 1 para encender el led y un 0 para apagarlo.

**[Código BT2](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**

**BT3 - Configuración Básica de Bluetooth**

Este proyecto muestra la manera de como inicializar bluetooth con ESP32 para hacer que el dispositivo sea detectable por otros y pueda aceptar conexiones.

**[Código BT3](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**

**BT4 - Control de leds**

Así como el proyecto BT2 se controla un led aquí se controlara el encendido y apagado con dos leds, los cuales estarán conectados a dos pines de cada led y al conectarse la ESP32 con un dispositivo este podrá controlar mediante 4 caracteres "1" enciende el led 1 y "2" apaga el led 1, para "3" enciende el led 2 y "4" apagara el led 2.

**[Código BT4](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**

**BT5 - Control de LED mediante Mensajes de Texto**

A diferencia de los demás proyectos donde usábamos solamente "1" , "2" o algún otro este no solo ocupara un solo numero sino una cadena de caracteres como un texto para encender y apagar un led, el dispositivo tendrá que enviar el texto "led_on" para encender el led, y "led_off" para apagarlo.

**[Código BT5](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**

**BT6 - Control de LED con letras**

Este proyecto encenderá y apagara un led conectado a la ESP32 mediante comandos enviados por bluetooth mediante las letras de A y B, cuando el dispositivo conectado mande una 'A' se encenderá y cuando mande una 'B' se apagara.

**[Código BT6](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**
 
## ESP32 y Deep Sleep

**¿Que es Deep Sleep?**  

El Deep Sleep es un modo de bajo consumo que apaga casi por completo el ESP32, lo que resulta en un consumo de energía extremadamente bajo. En este modo, el ESP32 consume solo unos pocos microamperios de corriente, lo que lo hace ideal para aplicaciones con baterías o alimentación limitada.

Cuando el ESP32 se encuentra en Deep Sleep, deja de ejecutar el programa y entra en un estado de suspensión. El ESP32 apaga la mayoría de los circuitos internos del microcontrolador, con excepción de algunos componentes esenciales.
  
Según la documentación de Espressif, el ESP32 apaga todos sus circuitos internos, salvo estos:

* RTC controller

* ULP coprocessor

* RTC FAST memory

* RTC SLOW memory

**¿Cómo funciona el Deep Sleep?**

Cuando el ESP32 se encuentra en modo Deep Sleep, deja de ejecutar el programa y entra en un estado de suspensión. Para salir del modo Deep Sleep, el ESP32 puede ser despertado por diferentes fuentes denominadas "Wake Up Sources". Estas pueden ser un temporizador, una interrupción externa o un pin táctil.

Al salir del Deep Sleep, el programa vuelve a iniciarse desde el principio, eso quiere decir que se ejecuta de nuevo desde la función Setup() de Arduino. Como si acabaras de encender la placa por primera vez.

Tienes que tener en cuenta de que las variables que hayamos guardado en la memoria se borran. Es como reiniciar el ESP32, aunque luego te enseñaré como puedes guardar datos de forma permanente y que tu ESP32 no pierda el norte cuando se despierta y no parezca que tenga resaca después de una noche de fiesta.

**¿Para qué se usa el Deep Sleep?**

El modo de deep sleep es especialmente útil en aplicaciones alimentadas por batería o con alimentación limitada, como puede ser una alimentación solar, donde se necesita ahorrar la mayor cantidad de energía posible.Eso es bastante obvio y este modo de reposo es extremadamente útil en estos casos.

>[!NOTE]
>
>En **[Información adicional](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)** encontraras información de apoyo si quieres seguir aprendiendo sobre el tema.

**[Código de Deep Sleep](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**

## ESP-NOW 

ESP-NOW es un protocolo de comunicación inalámbrica desarrollado por Espressif Systems, diseñado específicamente para dispositivos basados en los chips ESP32 y ESP8266. ESP-NOW es un sistema punto a punto (P2P) que permite a los dispositivos ESP32 y ESP8266 intercambiar datos sin necesidad de conectarse a una red Wi-Fi.

Características principales de ESP-NOW

* Baja latencia: ESP-NOW está diseñado para transmitir datos rápidamente, con tiempos de respuesta muy bajos.
* Bajo consumo de energía: Al no requerir una conexión Wi-Fi completa, ESP-NOW consume menos energía, lo que lo hace ideal para dispositivos alimentados por baterías.
* Conexión directa: Los dispositivos se comunican directamente entre sí, sin necesidad de un punto de acceso (Access Point) o un enrutador.
* Seguridad: ESP-NOW utiliza cifrado AES para garantizar que los datos transmitidos sean seguros.
* Fácil implementación: Con bibliotecas y ejemplos proporcionados por Espressif, es sencillo implementar ESP-NOW en proyectos con ESP32.

Comunicación ESP-Now en una dirección
Este tipo de comunicación se compone de uno o varios dispositivos ESP que funcionarán como maestros y esclavos. La comunicación la iniciará el dispositivo o dispositivos maestros, y será recibida por el o los esclavos. Entre las diferentes configuraciones de las que disponemos para la configuración en una dirección, podemos distinguir las siguientes:

* Un maestro y un esclavo
* Un maestro y varios esclavos
* Varios maestros y un esclavo

**Códigos Para Probar ESP-NOW**

**[Conocer la dirección MAC](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**
**[Código de maestro](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**
**[Código de esclavo](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**


>[!NOTE]
>
>En **[Información adicional](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)** encontraras información de apoyo, paginas y links donde podras encontrar mas información y códigos alternos para probar el funcionamiento de ESP-NOW.


## WIFI y ESP32

# Mostrar detalled de una red.

Este código está hecho para conectarse a una red WiFi y mostrar detalles de la conexión en el monitor serial.

Muestra información detallada de la conexión, como:

* Dirección IP asignada a la ESP32.

* Dirección MAC.

* Máscara de subred.

* Dirección IP del gateway.

 * Dirección del DNS.

**[Código WIFI_1](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**

## ESP32, WIFI y servidor Web

Este programa crea un servidor web local en una ESP32. Desde una página web accesible por la red WiFi, el usuario puede encender o apagar un LED usando dos botones, desde cualquier dispositivo conectado a la misma red WiFi simplemente ingresando la IP en un navegador y usando los botones de la página. El código creara una IP que se enviara por el monitor serial para acceder al servidor.

**[Código WIFI_2](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**

