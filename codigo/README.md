# Ejecución programa

Para correr el programa, dirigirse a la carpeta ``codigo`` del proyecto y ejecutar el comando:

```sh
sudo ./evilTrust.sh -m terminal
```

Luego, se tienen que seguir los siguientes pasos:

1. Escribir el nombre de la interfaz en la cual se levantará el Rogue AP.
2. Registrar el nombre del falso AP WiFi a levantar, como por ejemplo ``Estudiantes-USM-5G``.
3. Luego se elige el canal WiFi a utilizar (banda de frecuencia). Solo se eligen valores del 1 al 12.
4. Finalmente, se elige la plantilla ``google-login`` para levantar el RogueAP.


> Nota: en caso de no tener instalado ``hostapd``, ``dnsmasq`` o ``php`` el script no funcionará. El mismo programa pedirá instalar las dependencias faltantes.
