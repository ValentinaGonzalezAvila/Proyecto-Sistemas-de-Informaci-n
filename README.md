# Proyecto-Sistemas-de-Información

### 1. Introducción


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

### 4. Tecnologías a utilizar

Con el fín de poder manejar y visualizar de una manera adecuada los datos de la base de datos del ICBF, hemos optado por usar diversas herramientas tecnológicas, como lo son:
<strong>EXCEL: </strong> Usamos ésta herramienta, pues nos permitió visualizar de manera sencilla los datos extraidos de la página (datos.gov.co), y también nos ayudó a limpiar los datos, para posteriormente pasarlos a PowerBi.

<img src="https://user-images.githubusercontent.com/79425510/166080976-d695b78e-d90c-49bc-b1ab-c02d9bcec749.png" width="350" align="CENTER">

<strong>PowerBi: </strong> Usamos esta herramienta, pues nos permitió usar los datos para crear dashboards y asi poder analizarlos y entenderlos de una manera mas clara y sencilla.

<img src="https://user-images.githubusercontent.com/79425510/166081204-f088258e-8485-415b-a750-ea44da37fbb6.png" width="250">

<strong>Python / Pandas:: </strong> Usamos este lenguaje de programación pues nos permitía usar Pandas, una libreria de Python especializada en el manejo y analísis de estructuras de datos, pues nos ayudó a:

Leer y escribir los ficheros en formato CSV, Excel.
Reordenar, dividir y combinar los conjuntos de datos
Nos permitió trabajar con series temporales
Todo esto de una manera muy eficiente y facil de entender

<img src="https://user-images.githubusercontent.com/79425510/166082135-70671464-aef3-483e-94f7-70fb44ab717f.png" width="250">

<strong>Google Colab: </strong> Esta herramienta nos permitió a nuestro grupo de trabajo, crear un Jupyter Notebook, con el fín de usar Pandas de mánera colaborativa y en tiempo real.

<img src="https://user-images.githubusercontent.com/79425510/166082098-548dbcfb-7c1e-4f14-a208-b01aab78a711.png" width="250">

<strong>Github: </strong> Esta herramienta nos permitió subir nuestro proyecto y mantener un control de versiones, todo alojado en la nube

<img src="https://user-images.githubusercontent.com/79425510/166081368-f2fed31c-1fda-4523-bdff-a26e73f2bf22.png" width="250">

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


Luego se realizó un dashboard con la herramienta PowerBI, dando como resultado lo siguiente:

![image](https://user-images.githubusercontent.com/82173439/166065584-c5f19625-0a30-4086-a0c4-dd82bae96b53.png)


![image](https://user-images.githubusercontent.com/82173439/166065541-b5869144-a563-47fe-9dbc-d374d25d8156.png)



### Análisis 

### Conclusión
 
