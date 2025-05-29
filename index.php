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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Galería de imágenes y videos con funcionalidad para copiar enlaces">
    <title>Galería de Imágenes y Videos</title>
    <link rel="icon" type="image/png" href="https://chrisdev.xyz/images/GatoSinFondoNegro.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .wave-footer {
            position: relative;
            background: linear-gradient(to right, #1a3a72, #2a5298);
            color: white;
            padding-top: 80px;
            margin-top: 60px;
        }

        .wave {
            position: absolute;
            top: -70px;
            left: 0;
            width: 100%;
            height: 70px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background: #4fc3f7;
        }

        .footer-column p,
        .footer-column li {
            margin-bottom: 10px;
            opacity: 0.8;
        }

        .footer-column a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-column a:hover {
            color: #4fc3f7;
            padding-left: 5px;
        }

        .footer-column i {
            margin-right: 10px;
            color: #4fc3f7;
        }

        .footer-bottom {
            text-align: center;
            padding: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
        }

        :root {
            --primary-color: #1e3c72;
            --secondary-color: #2a5298;
            --accent-color: #4caf50;
            --text-color: #fff;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: var(--text-color);
            text-align: center;
            min-height: 100vh;
            line-height: 1.6;
        }

        h1 {
            padding-top: 40px;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .galeria {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .media-container {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .media-container:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        }

        .galeria img,
        .galeria video {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
            cursor: pointer;
        }

        .media-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            padding: 8px;
            font-size: 0.9em;
            opacity: 0;
            transition: var(--transition);
        }

        .media-container:hover .media-info {
            opacity: 1;
        }

        .copiado {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--accent-color);
            padding: 12px 20px;
            border-radius: var(--border-radius);
            display: none;
            color: white;
            box-shadow: var(--shadow);
            z-index: 1000;
            animation: fadeInOut 1.5s ease;
        }

        @keyframes fadeInOut {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            20% {
                opacity: 1;
                transform: translateY(0);
            }

            80% {
                opacity: 1;
                transform: translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateY(-20px);
            }
        }

        section {
            margin-bottom: 60px;
        }

        hr {
            border: none;
            border-top: 2px solid rgba(255, 255, 255, 0.2);
            margin: 40px auto;
            width: 80%;
            max-width: 1000px;
        }

        .loading {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 5px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin: 30px auto;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @media (max-width: 768px) {
            .galeria {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }

            h1 {
                font-size: 2em;
                padding-top: 20px;
            }
        }

        @media (max-width: 480px) {
            .galeria {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Galería de Imágenes -->
    <section id="galeria">
        <h1>📸 Galería de Imágenes</h1>
        <div class="galeria" id="imagenes-gallery">
            <?php
            $directorioImg = 'images/';
            if (is_dir($directorioImg)) {
                $archivosImg = scandir($directorioImg);
                $dominio = "https://chrisdev.xyz";
                $imageCount = 0;

                foreach ($archivosImg as $archivo) {
                    $ruta = $directorioImg . $archivo;
                    if (is_file($ruta) && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $archivo)) {
                        $urlCompleta = $dominio . '/' . $ruta;
                        $fileSize = filesize($ruta);
                        $formattedSize = $fileSize > 1024 ? round($fileSize / 1024) . ' KB' : $fileSize . ' bytes';
                        echo "
                        <div class='media-container' onclick=\"copiarURL('$urlCompleta')\">
                            <img src='$ruta' alt='$archivo' loading='lazy'>
                            <div class='media-info'>
                                $archivo<br>
                                $formattedSize
                            </div>
                        </div>";
                        $imageCount++;
                    }
                }

                if ($imageCount === 0) {
                    echo "<p>No se encontraron imágenes en el directorio.</p>";
                }
            } else {
                echo "<p>El directorio de imágenes no existe.</p>";
            }
            ?>
        </div>
    </section>

    <hr>

    <!-- Galería de Videos -->
    <section>
        <h1>🎥 Galería de Videos</h1>
        <div class="galeria" id="videos-gallery">
            <?php
            $directorioVid = 'videos/';
            if (is_dir($directorioVid)) {
                $archivosVid = scandir($directorioVid);
                $dominio = "https://chrisdev.xyz";
                $videoCount = 0;

                foreach ($archivosVid as $archivo) {
                    $ruta = $directorioVid . $archivo;
                    if (is_file($ruta) && preg_match('/\.(mp4|webm|ogg|mov)$/i', $archivo)) {
                        $urlCompleta = $dominio . '/' . $ruta;
                        $fileSize = filesize($ruta);
                        $formattedSize = $fileSize > 1048576 ? round($fileSize / 1048576, 1) . ' MB' : round($fileSize / 1024) . ' KB';
                        echo "
                        <div class='media-container'>
                            <video controls onclick=\"event.stopPropagation(); copiarURL('$urlCompleta')\">
                                <source src='$ruta' type='video/" . pathinfo($archivo, PATHINFO_EXTENSION) . "'>
                                Tu navegador no soporta este formato de video.
                            </video>
                            <div class='media-info'>
                                $archivo<br>
                                $formattedSize
                            </div>
                        </div>";
                        $videoCount++;
                    }
                }

                if ($videoCount === 0) {
                    echo "<p>No se encontraron videos en el directorio.</p>";
                }
            } else {
                echo "<p>El directorio de videos no existe.</p>";
            }
            ?>
        </div>
    </section>

    <!-- Mensaje flotante -->
    <div id="copiado" class="copiado">¡Enlace copiado al portapapeles!</div>

    <!-- footer  -->
    <footer class="wave-footer">
        <!--   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
            <path fill="rgba(30, 60, 114, 0.8)" fill-opacity="1"
                d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg> -->
        <div class="footer-content" id="mi-footer">
            <div class="footer-column">
                <h3>Galería Multimedia</h3>
                <p>Una colección de mis mejores imágenes y videos</p>
            </div>
            <div class="footer-column" id="contacto">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="">Inicio</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contacto</h3>
                <p><i class="fas fa-envelope"></i> contacto@chrisdev.xyz</p>
                <p><i class="fa-brands fa-discord"></i> <a href="https://discord.com/users/227210156365185024"
                        target="_blank">Discord</a></p>
                <!-- <p><i class="fas fa-phone"></i> +123 456 789</p> -->
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> ChrisDev | loco_descontrol. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Script para copiar enlaces -->
    <script>
        function copiarURL(url) {
            navigator.clipboard.writeText(url).then(() => {
                const mensaje = document.getElementById("copiado");
                mensaje.style.display = "block";
                setTimeout(() => {
                    mensaje.style.display = "none";
                }, 1500);
            }).catch(err => {
                // Fallback para navegadores antiguos
                const textarea = document.createElement('textarea');
                textarea.value = url;
                document.body.appendChild(textarea);
                textarea.select();
                try {
                    document.execCommand('copy');
                    const mensaje = document.getElementById("copiado");
                    mensaje.textContent = "¡Enlace copiado!";
                    mensaje.style.display = "block";
                    setTimeout(() => {
                        mensaje.style.display = "none";
                    }, 1500);
                } catch (e) {
                    alert("Error al copiar: " + err);
                }
                document.body.removeChild(textarea);
            });
        }

        // Precarga de imágenes para mejor rendimiento
        document.addEventListener('DOMContentLoaded', function () {
            const images = document.querySelectorAll('img[loading="lazy"]');

            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const image = entry.target;
                            image.src = image.getAttribute('src');
                            imageObserver.unobserve(image);
                        }
                    });
                });

                images.forEach(image => {
                    imageObserver.observe(image);
                });
            }
        });
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
