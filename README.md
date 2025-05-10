# PROYECTO-ADSO-V2
Este proyecto tiene como objetivo principal desarrollar un sistema integral para la validación y adquisición responsable de vehículos, donde no solo se gestione el proceso de compra, sino que también se garantice que los usuarios estén aptos para conducir de manera segura y legal.

# Validación y Adquisición de Vehículo

Este proyecto tiene como objetivo principal permitir que los usuarios puedan adquirir vehículos **siempre y cuando cumplan con ciertos criterios que garantizan su aptitud para conducir**. El propósito es generar conciencia sobre la responsabilidad que implica manejar un vehículo.

## Descripción 

El sistema permite a los usuarios registrarse y realizar una solicitud de compra de vehículo, pero solo si cumplen con los siguientes requisitos:

- No estar reportado en centrales de riesgo.
- Aprobar una evaluación psicológica.
- No tener antecedentes judiciales.
- Contar con una licencia de conducción vigente y acorde al vehículo.

Este sistema fue desarrollado con fines académicos y sociales, con el fin de promover una movilidad más segura y responsable.

## Requisitos mínimos para la instalación

- **Sistema operativo:** Windows 10/11, Linux o macOS
- **Servidor web:** Apache (incluido en XAMPP o similar)
- **Lenguajes utilizados:** HTML, CSS, PHP
- **Base de datos:** MySQL (phpMyAdmin)
- **Software recomendado:**
  - [XAMPP](https://www.apachefriends.org/index.html) (incluye Apache, PHP y MySQL)
  - Navegador actualizado (Google Chrome, Firefox, etc.)

---
## Instalación paso a paso

1. **Descarga e instala XAMPP**
   - Puedes descargarlo desde: https://www.apachefriends.org/es/index.html

2. **Clona o descarga el repositorio**
   - Si usas Git:
     ```bash
     git clone https://github.com/DuvanSCM97/PROYECTO-ADSO-V2.git
     ```
   - O descarga el ZIP desde GitHub y extráelo en:
     ```
     C:\xampp\htdocs\
     ```
3. **Inicia Apache y MySQL desde el panel de control de XAMPP**

4. **Configura la base de datos**
   - Abre [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Crea una base de datos llamada `adqvehiculos`
   - Importa el archivo `.sql` incluido en la carpeta `/sql` de tu proyecto

5. **Ajusta la conexión a la base de datos**
   - Abre los archivos con conexión a la base de datos como por ejemplo `Miperfil.php, login.php y register.php`, esto al inicio del codigo de los archivos mencionados anteriormente, con el fin de que no allá errores de conexión a la base de datos. 
   - Asegúrate de que tenga los datos correctos:
     ```php
     $conexion = mysqli_connect("localhost", "root", "", "adqvehiculos");
      ejemplo con archiv login.php, al inicio cuando accedemos a editar este archivo debe estar de la siguiente manera 
      $dbhost = "localhost";
      $dbusuario = "root";
      $dbpassword = "";
      $dbname = "adqvehiculos";
     ```
6. **Accede al sistema**
   - Ve a tu navegador y entra a: [http://localhost/PROYECTO-ADSO-FICHA12-V2/](http://localhost/PROYECTO-ADSO-FICHA12-V2/)

---

## Estructura del proyecto

```plaintext
📁 validacion-adquisicion-vehiculo/
│
├── 📁 css/               → Archivos de estilos
├── 📁 sql/               → Archivo SQL descargado de PhpMyAdmid y montado al repositorio para el buen uso del proyecto
├── 📁 img/               → Imágenes del proyecto
├── 📁 Logica/            → Archivos PHP de lógica
├── 📁 Vista/             → Archivos PHP o Html maneja especialmente el frontend del aplicativo
├── index.php            → Página principal
└── README.md            → Este archivo


---
```
## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Esto significa que puedes usar, copiar, modificar, fusionar, publicar.

MIT License

Copyright (c) 2025 Duvan Steeven Casilimas Mota

Se concede permiso, libre de cargos, a cualquier persona que obtenga una copia de este software y los archivos de documentación asociados (el "Software"), para tratar el Software sin restricción, incluyendo sin limitación los derechos a usar, copiar, modificar, fusionar, publicar, distribuir, sublicenciar y/o vender copias del Software, y para permitir a las personas a quienes se les proporcione el Software a hacerlo, sujeto a las siguientes condiciones:

El aviso de copyright anterior y este aviso de permiso se incluirán en todas las copias o partes sustanciales del Software.

EL SOFTWARE SE PROPORCIONA "TAL CUAL", SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O IMPLÍCITA, INCLUYENDO PERO NO LIMITÁNDOSE A GARANTÍAS DE COMERCIALIZACIÓN, IDONEIDAD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO LOS AUTORES O TITULARES DEL COPYRIGHT SERÁN RESPONSABLES POR NINGUNA RECLAMACIÓN, DAÑO U OTRA RESPONSABILIDAD, YA SEA EN UNA ACCIÓN CONTRACTUAL, AGRAVIO O DE OTRO TIPO, DERIVADA DE, FUERA DE O EN CONEXIÓN CON EL SOFTWARE O EL USO U OTROS TRATOS EN EL SOFTWARE.

---

