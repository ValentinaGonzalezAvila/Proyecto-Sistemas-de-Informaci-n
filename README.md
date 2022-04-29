# Proyecto-Sistemas-de-Información

### 1. Introducción


### 2. Descripción del problema
En Colombia, debido a la gran brecha social, tenemos datos alarmantes sobre el abandono de niños, lo cual es muy preocupante ya que esto genera un inmenso impacto en su desarrollo social. Muchos de nosotros desconocemos esta situación como comunidad y no somos conscientes de los diferentes motivos del porqué del abandono de niños.
Con lo anterior, pretendemos generar conciencia de las diferentes razones por la cuales los niños y adolescentes en Colombia ingresan al Instituto Colombiano de bienestar Familiar (ICBF) y sus variables anexas. Alertando las principales causas y los grupos enfocados donde se deben tomar acciones para que estas cifras sean controladas. 
### 3. Descripción de la solución 

A través de un dashboard se realizará un análisis detallado de la base de datos del ICBF obtenida de la página web datos.gov, con el fin de identificar algunas de las razones por las que se presenta el ingreso de menores a estos centros. Con ayuda de las herramientas PowerBI, Excel y Pyhton(Pandas), se podrán mostrar los datos de una forma que permita a cualquier persona hacer una lectura totalmente legible y entendible.

Como primera medida se realizarán las preguntas de negocio que tendrán solución con Python y la libreria Pandas.

  1. ¿Cuantos ingresos se presentaron en los ultimos 5 años?
  2. ¿Cuántos ingresos con nacionalidad colombiana y en bogota se tienen en el registro?
  3. Mostrar las filas que en la columna CANTIDAD_PROCESOS tengan el valor 48
  4. ¿En la regional de Antioquia cuántos niños fueron registrados?
  5. ¿Cuáles son los grupos étnicos que se encuentran en el listado?
A continuación se mostrará la realización del ejercicio con los datos del ICBF, utilizando la plataforma de Google Colaboratory.
Lo primero que se realizó fue la importación de las librerías Pandas y Numpy, luego importamos los datos subidos en este repositorio

import numpy as np
import pandas as pd


* Obtener el archivo de ingresos
datos = pd.read_excel("https://github.com/ValentinaGonzalezAvila/Proyecto-Sistemas-de-Informaci-n//raw/main/Ingresos_a_Procesos_Administrativos_de_Restablecimiento_de_Derechos__PARD__de_NNA.xlsx")
datos.info()

Lo siguiente es resolver cada una de las preguntas de la siguiente manera:

* ¿Cuantos ingresos se presentaron en los ultimos 5 años?

ingresos = datos[datos.AÑO >= 2017].sum()['CANTIDAD_PROCESOS']
print(ingresos)

* ¿Cuántos ingresos con nacionalidad colombiana y en bogota se tienen en el registro?

nb = len(datos[(datos.NACIONALIDAD == "COLOMBIANO")&(datos.REGIONAL == "BOGOTA")])
print(nb)


* Mostrar las filas que en la columna CANTIDAD_PROCESOS tengan el valor 48

datos[(datos.CANTIDAD_PROCESOS== 48)]

* ¿En la regional de Antioquia cuántos niños fueron registrados?

r = datos[(datos.REGIONAL=="ANTIOQUIA")].CANTIDAD_PROCESOS.sum()
print(r)

* ¿Cuáles son los grupos étnicos que se encuentran en el listado? 

datos.groupby("GRUPO_ETNICO").size()


Luego se realizó un dashboard con la herramienta PowerBI, dando como resultado lo siguiente:

 
