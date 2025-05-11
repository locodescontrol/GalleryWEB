<!DOCTYPE html>
<html lang="es">

<!--
──────▄▀▄─────▄▀▄
─▄▄──█░░░░░░░░░░░█──▄▄
█▄▄█─█░░▀░░┬░░▀░░█─█▄▄█
｡☆✼★━━━━━━━━━━━━━━━━━━━━━━━━━━★✼☆｡
Ṣ𝒦𝓬𝓱𝓻𝓲𝓼
██╗░░░░░░█████╗░░█████╗░░█████╗░██████╗░███████╗░██████╗░█████╗░░█████╗░███╗░░██╗████████╗██████╗░░█████╗░██╗░░░░░
██║░░░░░██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔════╝██╔════╝██╔══██╗██╔══██╗████╗░██║╚══██╔══╝██╔══██╗██╔══██╗██║░░░░░
██║░░░░░██║░░██║██║░░╚═╝██║░░██║██║░░██║█████╗░░╚█████╗░██║░░╚═╝██║░░██║██╔██╗██║░░░██║░░░██████╔╝██║░░██║██║░░░░░
██║░░░░░██║░░██║██║░░██╗██║░░██║██║░░██║██╔══╝░░░╚═══██╗██║░░██╗██║░░██║██║╚████║░░░██║░░░██╔══██╗██║░░██║██║░░░░░
███████╗╚█████╔╝╚█████╔╝╚█████╔╝██████╔╝███████╗██████╔╝╚█████╔╝╚█████╔╝██║░╚███║░░░██║░░░██║░░██║╚█████╔╝███████╗
╚══════╝░╚════╝░░╚════╝░░╚════╝░╚═════╝░╚══════╝╚═════╝░░╚════╝░░╚════╝░╚═╝░░╚══╝░░░╚═╝░░░╚═╝░░╚═╝░╚════╝░╚══════╝-->

<head>
    <meta charset="UTF-8">
    <title>Galería de Imágenes</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: #fff;
            text-align: center;
        }

        h1 {
            padding: 20px;
            font-size: 2.5em;
        }

        .galeria {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            gap: 15px;
        }

        .galeria img {
            width: 220px;
            height: 160px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .galeria img:hover {
            transform: scale(1.05);
        }

        .copiado {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #4caf50;
            padding: 10px 15px;
            border-radius: 8px;
            display: none;
            color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <h1>📸 Mi Galería de Imágenes</h1>
    <div class="galeria">
        <?php
        $directorio = 'images/'; // Tú ruta donde se encuentra tu carpeta de imagenes 
        $archivos = scandir($directorio);
        $dominio = "https://chrisdev.xyz"; // Tu dominio
        
        foreach ($archivos as $archivo) {
            $ruta = $directorio . $archivo;
            if (is_file($ruta) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $archivo)) {
                $urlCompleta = $dominio . '/' . $ruta;
                echo "<img src='$ruta' alt='Imagen' onclick=\"copiarURL('$urlCompleta')\">";
            }
        }
        ?>
    </div>

    <div id="copiado" class="copiado">¡Enlace copiado!</div>

    <script>
        function copiarURL(url) {
            navigator.clipboard.writeText(url).then(() => {
                const mensaje = document.getElementById("copiado");
                mensaje.style.display = "block";
                setTimeout(() => {
                    mensaje.style.display = "none";
                }, 1500);
            }).catch(err => {
                alert("Error al copiar: " + err);
            });
        }
    </script>
</body>
<!---
█╗░░░░░░█████╗░░█████╗░░█████╗░██████╗░███████╗░██████╗░█████╗░░█████╗░███╗░░██╗████████╗██████╗░░█████╗░██╗░░░░░
██║░░░░░██╔══██╗██╔══██╗██╔══██╗██╔══██╗██╔════╝██╔════╝██╔══██╗██╔══██╗████╗░██║╚══██╔══╝██╔══██╗██╔══██╗██║░░░░░
██║░░░░░██║░░██║██║░░╚═╝██║░░██║██║░░██║█████╗░░╚█████╗░██║░░╚═╝██║░░██║██╔██╗██║░░░██║░░░██████╔╝██║░░██║██║░░░░░
██║░░░░░██║░░██║██║░░██╗██║░░██║██║░░██║██╔══╝░░░╚═══██╗██║░░██╗██║░░██║██║╚████║░░░██║░░░██╔══██╗██║░░██║██║░░░░░
███████╗╚█████╔╝╚█████╔╝╚█████╔╝██████╔╝███████╗██████╔╝╚█████╔╝╚█████╔╝██║░╚███║░░░██║░░░██║░░██║╚█████╔╝███████╗
╚══════╝░╚════╝░░╚════╝░░╚════╝░╚═════╝░╚══════╝╚═════╝░░╚════╝░░╚════╝░╚═╝░░╚══╝░░░╚═╝░░░╚═╝░░╚═╝░╚════╝░╚══════╝ -->

</html>
