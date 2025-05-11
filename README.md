# 📸 GalleryWEB

**GalleryWEB** es una galería web autoactualizable que te permite **almacenar, visualizar y copiar enlaces directos a tus imágenes** de forma rápida y sencilla. Ideal para creadores, desarrolladores, y quienes necesitan compartir imágenes sin pérdida de calidad y sin depender de servicios externos.

---

## 🚀 Características

- ✅ Visualización automática de imágenes desde una carpeta del servidor.
- ✅ Copia el enlace completo de cualquier imagen con un solo clic.
- ✅ Compatible con la mayoría de los hostings que soportan PHP.
- ✅ Diseño moderno con fondo degradado y animaciones suaves.
- ✅ Muestra enlaces personalizados con tu propio dominio.

---

## 🛠️ Requisitos

- Hosting con soporte para **PHP 7.x o superior**.
- Carpeta `/imagenes` dentro del directorio raíz (para almacenar las imágenes).
- Acceso FTP o panel para subir archivos al servidor.

---

## 📁 Estructura de Archivos
```yml
/public_html (o raíz del hosting)
│
├── /imagenes # Aquí subes tus imágenes (jpg, png, gif, etc.)
├── index.php # Archivo principal que genera la galería
```

---

## ⚙️ Personalización
### 🌐 Cambia tu ruta en `index.php`
### 🌐 Cambia tu dominio en `index.php`

Busca esta línea en el código:

```php
$directorio = 'images/';
```
```php
$dominio = "https://tusitio.com";
```
## 📎 Ejemplo de enlace copiado
Si tu dominio es https://chrisdev.xyz y subes una imagen foto1.jpg, al hacer clic en la imagen se copiará automáticamente este enlace:

```yml
https://chrisdev.xyz/imagenes/foto1.jpg
```


---

## 🖼️ Cambia el diseño si lo deseas
Puedes editar el bloque <style> en index.php para ajustar colores, tamaños, animaciones o tipografía según tu estilo.

---

## 💾 ¿Cómo subir las imágenes?
Simplemente sube las imágenes directamente a la carpeta /imagenes de tu hosting (por FTP o desde el panel del hosting). Se mostrarán automáticamente en la galería y podrás copiarlas con un clic.

---


## ✨ Vista previa

<img src="https://i.imgur.com/UKfui9N.png" alt="Vista previa" width="600">

---

## 🧠 Créditos
Creado por loco_descontrol
