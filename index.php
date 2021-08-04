<?php
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
    </head>
    <body>
        <a href="login.php">
            <button>Login</button>
        </a>
        <main>
            <section id="hero-banner" class="banners">
                <img src="" alt="Logo gopher">
                <div id='texts'>
                    <h3>Gopher 2020</h3>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </section>
            <section id="koor-wakoor" class="banners">
                <h2>Koordinator dan Wakil Koordinator</h2>
                <!-- Nanti pakai php buat query koor dan wakoornya -->
                <div id='koor'>
                    <img src="" alt="Foto Koor">
                    <p>{ nama }</p>
                    <p>{ npm }</p>
                </div>
                <div id='wakoor'>
                    <img src="" alt="Foto Wakoor">
                    <p>{ nama }</p>
                    <p>{ npm }</p>
                </div>
            </section>
            <section id="anggota-gopher">
                <h2>Anggota Gopher</h2>
                <!-- Nanti pakai php untuk query data anggota -->
                <!-- Berikut struktur tiap data anggota -->
                <div id="{ npm }" class="anggota">
                    <p>{ nama }</p>
                    <p>{ npm }</p>
                </div>
            </section>
        </main>
    </body>
</html>