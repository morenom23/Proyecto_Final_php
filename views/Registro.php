<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../routes/public/css/styles/styles.css">
    <link rel="stylesheet" href="../routes/public/css/styles/formularios.css">
</head>
<body>
    
    

    <header>
        <a href="/ProyectoDiplomado/index.html" class="logo">
            <img src="../routes/public/assets/Imagenes/logo-header.png" alt="Logo de GAMINGHOUSE">
            <p>GAMINGHOUSE</p>
        </a>

        <nav class="navbar">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="/Final_php/ProyectoDiplomado/Producto.html">Productos</a>
                    <ul class="sublista">
                        <li><a href="">Mas vendidos</a></li>
                        <li><a href="">Juegos</a></li>
                        <li><a href="">Consolas</a></li>
                        <li><a href="">Controles</a></li>
                        <li><a href="">Asesorios</a></li>
                    </ul>
                </li>
                <li><a href="">Ofertas</a></li>
                <li><a href="">Contactenos</a></li>
                
            </ul>
            <!-- <div class="usuario"><img src="/ProyectoDiplomado/Imagenes/user.png" alt="iconoImagen"></div>             -->
            <!-- <a class="entrar" href="#">Login</a> -->
            <img src="../routes/public/assets/Imagenes/carrito-de-compras.png" alt="carritoCompras">
        </nav>

    </header>

    
    <div class="caja-formularios">

        <div class="cont-form-registro">
            <form action="../controllers/crearUsuario.php" method="POST" name="Registro_form">
                <h2>Formulario de Registro</h2>
        
                <div class="imputs">
                    <label for="">Nombre</label>
                    <input type="text" placeholder="ingrese su nombre" name="nombre" required>
        
                </div>
        
                <div class="imputs">
                    <label for="">Correo</label>
                    <input type="text" placeholder="ingrese su Correo" name="correo" required>
        
                </div>
        
                <div class="imputs">
                    <label for="">Contraseña</label>
                    <input type="password" placeholder="ingrese una contraseña" name="password" required>
        
                </div>
        
                <center><input type="submit" class="btn-registro" name="registrar" value="Registrarme"></center>
                <center><a href="login.php" class="anclaPie_form">Tengo una cuenta</a></center>
            </form>
    
        </div>
        

    </div>


    <!-- FOOTHER -->

    <footer>

        <button onclick="topFunction()" id="scrollBtn" title="Ir arriba">↑</button>

        <div class="caja1">

            <div class="logo_pie">
                <a href="/ProyectoDiplomado/index.html">
                    <img src="../routes/public/assets/Imagenes/logo-pie.png" alt="">
                </a>
                <p>GAMINGHOUSE</p>
            </div>
    
            <div class="colum_productos">
                <h4>Productos</h4>
                <ul>
                    <li>
                        <a href="">Juegos</a>
                        <a href="">Consolas</a>
                        <a href="">Controles</a>
                        <a href="">Accesorios</a>
                        
                    </li>
                </ul>
            </div>
    
            <div class="colum_tienda">
                <h4>Tienda</h4>
                <p>Av. Fray A. Alcalde 10
                    44100 Guad., Jal., México</p>
                <p>Lun - Vie: 7:00 - 22:00</p>
                <p class="info_email">info@misitio.com</p>
                <p>+57-3238016233</p>
                
            </div>
    
            <div class="colum_politicas">
                <h4>Politicas</h4>
                <ul>
                    <li>
                        <a href="">Terminos y condiciones</a>
                        <a href="">Polotica de envío</a>
                        <a href="">Politica de reembolso</a>
                        <a href="">Politica de privacidad</a>
                        <a href="">Politica de cookies</a>
                        <a href="">FAQ</a>
                        
                    </li>
                </ul>
            </div>

        </div>

        <center><hr class="linea"></center>

        <div class="caja2">

            <div class="medios_pagos">
                <h4>Métodos de pago</h4>
                <div class="pagos_imagenes">
                    <img src="../routes/public/assets/Imagenes/Visa.jpg" alt="">
                    <img src="../routes/public/assets/Imagenes/Master Card.jpg" alt="">
                    <img src="../routes/public/assets/Imagenes/American Express.jpg" alt="">
                    <img src="../routes/public/assets/Imagenes/JCB.jpg" alt="">
                    <img src="../routes/public/assets/Imagenes/Diners.jpg" alt="">
                    <img src="../routes/public/assets/Imagenes/China Union Pay.jpg" alt="">
                    <img src="../routes/public/assets/Imagenes/Diners.jpg" alt="">
                    <img src="../routes/public/assets/Imagenes/PayPal.jpg" alt="">
                </div>

            </div>

            <div class="redes">
                <h4>Únete a la comunidad</h4>
                <div class="redes_imagenes">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com">
                                <img src="../routes/public/assets/Imagenes/facebook_.png" alt="">
                            </a>
                            <a href="https://www.instagram.com/">
                                <img src="../routes/public/assets/Imagenes/instagram.png" alt="">
                            </a>
                            <a href="https://www.youtube.com/">
                                <img src="../routes/public/assets/Imagenes/Youtube.png" alt="">
                            </a>
                            <a href="https://www.tiktok.com/">
                                <img src="../routes/public/assets/Imagenes/tiktok.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="copy">
            <CEnter>© 2035 Creado por GAMINGHOUSE</CEnter>
        </div>

    </footer>

</body>
</html>