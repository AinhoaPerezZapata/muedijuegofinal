Antecedentes:

Para mi proyecto de página de pagina web he utilizado diferentes lenguajes de programación, como PHP y Javascript para el desarrollo general de la página, y para el diseño de la web se ha utilizado boostrap y estilos css.

Requisitos funcionales:
1.	El usuario se podrá registrar y loguear.
2.	Si el usuario no cierra la sesión se queda logueada, es decir hasta que no le de a cerrar sesión no sale.
3.	Solo los usuarios registrados pueden ver la noticia entera.
4.	Los usuarios no registrados solo podrán ver el título de la noticia y mitad de la descripción.
5.	El usuario registrado tendrá la opción de modificar su perfil, también tendrá la opción de recuperar la contraseña, si no se acuerda de ella.
6.	Los administradores de la página son los únicos que podrán añadir o eliminar las noticias, es decir, los videos, fotos, descripción, etc… También ellos podrán modificar una noticia y eliminarla.
7.	La página tendrá diferentes secciones, como es mi caso, pc, Nintendo, playstation, Xbox... Las secciones son administradas por el administrador de la página y son creadas en diferentes archivos .php.
8.	La página principal tendrá varios carruseles en los que se muestran las consolas, estas se actualizan conforme se refresque la página.
9.	El criterio que utilizo para mostrar los carruseles es que se vaya recogiendo las consolas que están reflejadas en la base de datos, estas consolas a base de comandos las elijo yo.
10.	Diseño responsive.
11.	Control de errores:
•	Usuario
•	Nombre
•	Password
•	Apellido1
•	Apellido2
•	Email
•	Dirección
•	DNI
•	Teléfono
•	Código Postal
•	Provincia
•	Comunidad Autónoma (Provincia)
•	Rol: Usuario o Administrador
12.	Acceso restringido a usuario no registrado.

Prototipo WEB: (PAGINAS)

Inicio:

![image](https://user-images.githubusercontent.com/91693066/142046658-ad1782a0-570a-464f-a78e-63d3145cb217.png)

Iniciar Sesión:

![image](https://user-images.githubusercontent.com/91693066/142046853-3076a072-e016-4f4d-a100-89af77a70d92.png)

Registro:

![image](https://user-images.githubusercontent.com/91693066/142046904-cd195e44-683c-4d72-9839-59a384dfb6de.png)

Modelo de las páginas PC, Playstation, Xbox y Nintendo:

![image](https://user-images.githubusercontent.com/91693066/142046939-b259433f-bdf2-45f2-82ad-d735749cfa8f.png)

Mapa WEB. Boceto estructura. (BOLAS)

![image](https://user-images.githubusercontent.com/91693066/142047000-0a75f0a3-fd68-4f32-8ab9-1957581a5b68.png)


Guía de estilos:

Para mi página he utilizado colores clásicos y no llamativos para que no molesten al usuario, el logo lo he creado desde una página que se dedica a la creación de ello.

Planificación de tareas. Diagrama de Gant:

Conforme iban pasando los días se he iban ocurriendo cosas nuevas y las iba añadiendo a mi página.

Diagrama E-R:

![image](https://user-images.githubusercontent.com/91693066/142047059-7c2e3ecd-5b8c-422d-94ef-b99fdabbdae6.png)


Modelo relacional:

![image](https://user-images.githubusercontent.com/91693066/142047097-61b3b949-1add-469b-8d18-7d91bac25eea.png)


Scrip creación BBDD:

CREATE DATABASE  IF NOT EXISTS `final` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `final`;
-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: final
-- ------------------------------------------------------
-- Server version	5.7.24
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
--
-- Table structure for table `noticias`
--
CREATE TABLE `noticias` (
  `idNoticias` int(11) NOT NULL AUTO_INCREMENT,
  `Plataforma` int(11) NOT NULL,
  `Imagen` varchar(2050) COLLATE utf8_bin DEFAULT NULL,
  `Descripcion` longtext COLLATE utf8_bin NOT NULL,
  `Titulo` longtext COLLATE utf8_bin,
  `NombreP` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idNoticias`),
  UNIQUE KEY `idNoticias_UNIQUE` (`idNoticias`),
  KEY `Plataforma_idx` (`Plataforma`),
  CONSTRAINT `idNoticias` FOREIGN KEY (`Plataforma`) REFERENCES `plataforma` (`idPlataforma`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Table structure for table `plataforma`
--
CREATE TABLE `plataforma` (
  `idPlataforma` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Imagen` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPlataforma`),
  UNIQUE KEY `Nombre_UNIQUE` (`Nombre`),
  UNIQUE KEY `idPlataforma_UNIQUE` (`idPlataforma`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Table structure for table `usuario`
--
DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(20) NOT NULL COMMENT 'El usuario debe ser único en la Base de Datos. Además debe tener una longitud mínima de 6 caracteres.',
  `Password` varchar(45) NOT NULL COMMENT 'La contraseña no puede ser nula.\nTiene que tener una longitud mínima de 8 caracteres, contener números y algún carácter especial de la siguiente lista (!,@,#,$,%,&,?,¿,*,€)',
  `Nombre` varchar(45) NOT NULL,
  `Apellido1` varchar(45) NOT NULL,
  `Apellido2` varchar(45) NOT NULL,
  `Telefono` varchar(10) NOT NULL COMMENT 'Se comprobará que solo puedan ser teléfonos nacionales',
  `Email` varchar(45) NOT NULL COMMENT 'Se comprobará que es un email válido',
  `CP` varchar(5) NOT NULL,
  `Provincia` varchar(45) NOT NULL COMMENT 'Se comprobará que la provincia introducida concuerda con el CP introducido',
  `ComunidadAutonoma` varchar(45) NOT NULL COMMENT 'Se comprobará que la provincia seleccionada pertenece a la comunidad autónoma correspondiente',
  `Direccion` varchar(45) NOT NULL,
  `Rol` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`),
  UNIQUE KEY `Usuario_UNIQUE` (`Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


Diseño de la interface:

Inicio:
En la página principal (inicio) se muestran una barra de opciones en la que podemos ver las siguientes opciones como son iniciar sesión, registrarse y una barra de búsqueda.
Debajo se muestra otra barra de opciones en la que salen las opciones de las diferentes plataformas de nuestra página.
Mas abajo nos muestra un carrusel con fotos de las consolas y después una sección con las plataformas.
Después nos muestran los títulos de unas noticias aleatorias con un botón que nos lleva a la descripción. 
Por último, una sección de las redes sociales y otra sección de donde nos muestra el video destacado.

Login:
Se muestra una barra de opciones en la que podemos volver al inicio o si no estamos registrados, una opción de registrarse.
Después se muestra una caja en la que el usuario tiene que introducir el usuario y la contraseña, si no recuerda la contraseña le envía a otra pagina en la que tiene que introducir el usuario y el email y esta le envía a otra en la que tiene que introducir la contraseña nueva.

Registro:
El usuario tiene que rellenar todos los datos necesarios para darse de alta en la página.

Páginas de las secciones PC, Playstation,  Xbox y Nintendo:
En estas secciones se mostrarán las noticias relacionadas con la plataforma.
En la página se muestra unas cartas en las que en cada una de ellas se ve la imagen de la noticia, el título, la plataforma y un botón para ver los detalles de ella.

Estructura de la interface:

![image](https://user-images.githubusercontent.com/91693066/142047427-96ed1a54-be72-4876-80dc-0c7ce9a79cb4.png)


![image](https://user-images.githubusercontent.com/91693066/142047546-25172a69-6db9-4025-8a22-109fb44511fb.png)


![image](https://user-images.githubusercontent.com/91693066/142047587-00aa998c-69bd-4d1c-bad5-f0078fcf3870.png)


![image](https://user-images.githubusercontent.com/91693066/142047615-140de2d3-9844-4055-8a72-6845563ceb85.png)


Herramientas:


Visual Studio Code: es un programa con numerosas características que respalda muchos aspectos del desarrollo de software.
Workbench mysql: es una herramienta visual de diseño de bases de datos que integra desarrollo de software, administración de bases de datos, diseño de bases de datos, creación y mantenimiento para el sistema de base de datos MySQL.


Lenguajes: 


Javascript: JavaScript es un lenguaje de programación o de secuencias de comandos que te permite implementar funciones complejas en páginas web.
CSS: CSS es un lenguaje utilizado en la presentación de documentos HTML.
HTML: HTML es un lenguaje de marcado que se utiliza para el desarrollo de páginas de Internet. Se trata de la sigla que corresponde a Lenguaje de Marcas de Hipertexto, que podría ser traducido como Lenguaje de Formato de Documentos para Hipertexto.


Bibliografía: 
https://www.tutorialmonsters.com/curso-php-como-cortar-una-cadena-de-texto/


https://www.srcodigofuente.es/tutoriales/ver-tutorial/como-cortar-texto-en-php







