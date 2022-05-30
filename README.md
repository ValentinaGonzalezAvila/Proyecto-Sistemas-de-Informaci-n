# Proyecto-Sistemas-de-Información

## Tabla de Contenido

[1. Introducción](#introducción)

[2. Contexto del problema](#contexto-del-problema)

[3. Descripción de la solución](#descripcion-de-la-solucion)

[4. Tecnologías a utilizar](#tecnologias-a-utilizar)

[5. Solución](#solución)

[6. Análisis](#análisis)

[7. Conclusiones](#conclusiones)



### 1. Introducción
El Instituto Colombiano de Bienestar Familiar (ICBF) es la entidad del Estado colombiano que trabaja por la prevención y protección integral de la primera infancia, y adolescencia, el fortalecimiento de los jóvenes y las familias en Colombia, brindando atención especialmente a aquellos en condiciones de amenaza, inobservancia o vulneración de sus derechos
Para este proyecto los datos recolectados son del El Instituto Colombiano de Bienestar Familiar (ICBF) en el cual se quiere analizar los casos de abandono en niños y jovenes.

### 2. Contexto del problema
En Colombia, debido a la gran brecha social, tenemos datos alarmantes sobre el abandono de niños, lo cual es muy preocupante ya que esto genera un inmenso impacto en su desarrollo social. Muchos de nosotros desconocemos esta situación como comunidad y no somos conscientes de los diferentes motivos del porqué del abandono de niños.
Con lo anterior, pretendemos generar conciencia de las diferentes razones por la cuales los niños y adolescentes en Colombia ingresan al Instituto Colombiano de bienestar Familiar (ICBF) y sus variables anexas. Alertando las principales causas y los grupos enfocados donde se deben tomar acciones para que estas cifras sean controladas. 
### 3. Descripción de la solución 

A través de un dashboard se realizará un análisis detallado de la base de datos del ICBF obtenida de la página web datos.gov, con el fin de identificar algunas de las razones por las que se presenta el ingreso de menores a estos centros. Con ayuda de las herramientas <strong>PowerBI, Excel y Pyhton(Pandas)</strong>, se podrán mostrar los datos de una forma que permita a cualquier persona hacer una lectura totalmente legible y entendible.

Como primera medida se realizarán las <strong>preguntas de negocio</strong> que tendrán solución con Python y la libreria Pandas.

  1. ¿Cuantos ingresos se presentaron en los ultimos 5 años?
  2. ¿Cuántos ingresos con nacionalidad colombiana y en bogota se tienen en el registro?
  3. Mostrar las filas que en la columna CANTIDAD_PROCESOS tengan el valor 48
  4. ¿En la regional de Antioquia cuántos niños fueron registrados?
  5. ¿Cuáles son los grupos étnicos que se encuentran en el listado?

### 4. Tecnologías  a utilizar

Con el fín de poder manejar y visualizar de una manera adecuada los datos de la base de datos del ICBF, hemos optado por usar diversas herramientas tecnológicas, como lo son:<br>
<br><strong>EXCEL: </strong> Usamos ésta herramienta, pues nos permitió visualizar de manera sencilla los datos extraidos de la página (datos.gov.co), y también nos ayudó a limpiar los datos, para posteriormente pasarlos a PowerBi.

<img src="https://user-images.githubusercontent.com/79425510/166080976-d695b78e-d90c-49bc-b1ab-c02d9bcec749.png" width="300">

<br><strong>PowerBi: </strong> Usamos esta herramienta, pues nos permitió usar los datos para crear dashboards y asi poder analizarlos y entenderlos de una manera mas clara y sencilla.

<img src="https://user-images.githubusercontent.com/79425510/166081204-f088258e-8485-415b-a750-ea44da37fbb6.png" width="300">

<br><strong>Python / Pandas:: </strong> Usamos este lenguaje de programación pues nos permitía usar Pandas, una libreria de Python especializada en el manejo y analísis de estructuras de datos, pues nos ayudó a:<br>

<br>Leer y escribir los ficheros en formato CSV, Excel.
<br>Reordenar, dividir y combinar los conjuntos de datos
<br>Nos permitió trabajar con series temporales
<br>Todo esto de una manera muy eficiente y facil de entender

<img src="https://user-images.githubusercontent.com/79425510/166082135-70671464-aef3-483e-94f7-70fb44ab717f.png" width="500">

<br><strong>Google Colab: </strong> Esta herramienta nos permitió a nuestro grupo de trabajo, crear un Jupyter Notebook, con el fín de usar Pandas de mánera colaborativa y en tiempo real.

<img src="https://user-images.githubusercontent.com/79425510/166082098-548dbcfb-7c1e-4f14-a208-b01aab78a711.png" width="500">

<br><strong>Github: </strong> Esta herramienta nos permitió subir nuestro proyecto y mantener un control de versiones, todo alojado en la nube

<img src="https://user-images.githubusercontent.com/79425510/171051245-a9d2c006-b563-4576-ab7c-d92d3cbfd73e.png" width="400">

<br><strong>Html - Css - Php - Javascript: </strong> Estos fueron los lenguajes de programación utilizados para el desarrollo de nuestra página web.

<img src="https://user-images.githubusercontent.com/79425510/171044062-2ae25836-c360-46ab-b29d-18c72ee1a777.png" width="500">


<br><strong>phpMyAdmin: </strong> Es aplicación que usamos para administrar la base de datos MySQL de forma sencilla y con una interfaz amistosa.

<img src="https://user-images.githubusercontent.com/79425510/171043822-b0e27753-ee6e-4857-b913-a13fc227d772.png" width="500">

<br><strong>00webhost: </strong> --- Es uno de los hosting web más grandes de la red, éste nos permitió subir nuestra página web de manera gratuita.

<img src="https://user-images.githubusercontent.com/79425510/171043618-3d623219-c60f-4319-a845-fdabb1f47165.png" width="500">


### 5. Solución

A continuación se mostrará la realización del ejercicio con los datos del ICBF, utilizando la plataforma de Google Colaboratory.
Lo primero que se realizó fue la importación de las librerías Pandas y Numpy, luego importamos los datos subidos en este repositorio

import numpy as np <br>
import pandas as pd


* Obtener el archivo de ingresos
datos = pd.read_excel("https://github.com/ValentinaGonzalezAvila/Proyecto-Sistemas-de-Informaci-n//raw/main/Ingresos_a_Procesos_Administrativos_de_Restablecimiento_de_Derechos__PARD__de_NNA.xlsx")
datos.info()


![image](https://user-images.githubusercontent.com/82173439/166069968-ca3f6fbc-b54b-420c-90c0-c65e6bc01a89.png)



Lo siguiente es resolver cada una de las preguntas de la siguiente manera:

* Mostrar la estadística de los datos

 datos.describe()
 
 ![image](https://user-images.githubusercontent.com/82173439/166072376-56d546ea-0793-4b20-87bc-67448a5f16a2.png)

* ¿Cuantos ingresos se presentaron en los ultimos 5 años?

ingresos = datos[datos.AÑO >= 2017].sum()['CANTIDAD_PROCESOS']
print(f"los ingresos generados en los últimos 5 años fueron: {ingresos}")

![image](https://user-images.githubusercontent.com/82173439/166073470-53a19f9b-bf78-4d94-b545-913e7445899b.png)

* ¿Cuántos ingresos con nacionalidad colombiana y en bogota se tienen en el registro?

nb = len(datos[(datos.NACIONALIDAD == "COLOMBIANO")&(datos.REGIONAL == "BOGOTA")])
print(f"los ingresos de Colombianos en Bogotá fueron: {nb}")

![image](https://user-images.githubusercontent.com/82173439/166073680-ffa4394e-540a-452e-82a9-2dce20ca650f.png)


* Mostrar las filas que en la columna CANTIDAD_PROCESOS tengan el valor 48

datos[(datos.CANTIDAD_PROCESOS== 48)]

![image](https://user-images.githubusercontent.com/82173439/166073855-6ddde5a9-12fa-473b-9bd3-e39d5b596976.png)


* ¿En la regional de Antioquia cuántos niños fueron registrados?

r = datos[(datos.REGIONAL=="ANTIOQUIA")].CANTIDAD_PROCESOS.sum()
print(f"la cantidad de niños registrados en la región de Antioquia fuerón: {r}")

![image](https://user-images.githubusercontent.com/82173439/166073968-78edca60-c72f-4ff2-a684-fca661de483f.png)


* ¿Cuáles son los grupos étnicos que se encuentran en el listado? 

datos.groupby("GRUPO_ETNICO").size()

![image](https://user-images.githubusercontent.com/82173439/166074021-fd632f0a-c06a-437c-9650-217d5577c2a5.png)

* ¿Que rango de edad que se encuentran en el registro?

datos.groupby("RANGO_EDAD").size()

![image](https://user-images.githubusercontent.com/82173439/166088570-1d39cb90-6297-4302-99d7-f5d7eb0aced3.png)

* ¿Cuál es el sexo que más ingresó en el 2021?

y2021=datos[(datos.AÑO==2021)&((datos.SEXO=="Femenino")|(datos.SEXO=="Masculino"))]
y2021.groupby("SEXO").size()

![image](https://user-images.githubusercontent.com/82173439/166088829-52d9b9f9-d5ad-4943-8100-58518ab3e0b5.png)

* Mostrar cuál es el principal motivo de ingreso 

datos.MOTIVO_DE_INGRESO.max()

![image](https://user-images.githubusercontent.com/82173439/166088852-627a0106-ffd7-4236-83e8-fc1fdc2abf86.png)



Luego se realizó un dashboard con la herramienta PowerBI, dando como resultado lo siguiente:

![image](https://user-images.githubusercontent.com/82173439/166065584-c5f19625-0a30-4086-a0c4-dd82bae96b53.png)


![image](https://user-images.githubusercontent.com/82173439/166065541-b5869144-a563-47fe-9dbc-d374d25d8156.png)



### 6. Análisis 

Una vez realizamos los dashboards correspondientes en PowerBi, podemos analizar:

* Se envidencia que se recibe  14.84% más de niñas 
* La edad en la que más llegan niños es entre los 12 y 17 años, con el 45.8%, luego le siguen los niños de 6 a 11 años, con el 10.7%, y por último los niños de 0 a 5 años.
* En cuanto al grupo étnico al que pertenecen los niños que llegan, se puede evidenciar que el 95% de los niños que llegan al Bienestar Familiar no pertenecen a ningun grupo étnico, ó no se registró su información. Por otro lado tenemos que el 2.74% son Afrocolombianos, y el % restante pertenecen a otros grupos étnicos
* En Bogotá se registran la mayor cantidad de procesos, con un total de 83mil, le sigue el Valle de Cauca, con 56mil , y en tercer lugar se encuentra Antioquia con 23mil procesos.
* El principal motivo de ingreso es por <strong>Violencia Sexual</strong>, y por <strong>Violencia (Maltrato)</strong>, ambos suman casi 210mil procesos, lo que equivale a la suma de los demas motivos de ingreso, como: Condiciones especiales, Otros motivos, Consumo de sustancias, Amenazas, Trabajo infantil, etc.
* Podemos evidenciar que a lo largo de los años han venido aumentando la cantidad de procesos, pues en el 2012 hubo 31mil, estos vinieron aumentando gradualmente, pero luego en el año 2016 se dispararon a 46mil procesos, este valor se mantuvo hasta el 2018, para luego bajar a 40mil casos en el 2019, se mantuvo igual por el 2020, Pero luego en el año 2021 se dispararon hasta los 55 mil procesos. Esto para un total de 409.617 mil casos en 9 años.

Una vez realizado todo el análisis de los datos obtenidos nos hemos dado cuenta de que existe una gran escasez de datos y falta de accesibilidad, pues muchas veces no se diligencian por completo los datos, lo que impide un adecuado manejo de los datos.

### 7. Conclusiones
Con la ayuda de diferentes herramientas como Excel, PowerBi y Python se lograron identificar algunas razones del ingreso de niños al ICBF, logrando evidenciar que la violencia presentada hacia los adolescentes en nuestro país es una de principales razones para el abandono de los niños.

Es necesario que el ICBF genere los datos asociados respecto al grupo étnico en el ingreso de cada niño a la institución, ya que con  los datos generados no se puede identificar el grupo étnico al cual repesenta mayor tasa de abandono en adolescentes, para tomar medidas preventivas hacia estas.

Esta información es alarmante para nuestra sociedad porque se evidencia el incremento de la violencia, en nuestro país, mas que todo en las ciudades principales y como nuestros niños se estan viendo afectados.
