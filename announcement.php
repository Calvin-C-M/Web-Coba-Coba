<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Announcements</title>

        <script src="assets/scripts/sidebar.js"></script>
    </head>
    <body>
        <script>
            document.writeln(OpenSidebar);
            document.writeln(Sidebar);
        </script>

        <main>
            <h1>Announcements</h1>
            <section class="announcement">
                <p>{ tanggal kirim }</p>
                <p>{ deskripsi }</p>
                <p>{ pengirim }</p>
                <div class='komentar-section'>
                    <h3>Komentar</h3>
                    <form id='buat-komentar' action="">
                        <input type="text">
                        <button name="send" type="submit">{ Logo send }</button>
                    </form>
                    <div id="{ id_komentar }" class="komentar">
                        <p>{ nama pengirim }</p>
                        <p>{ isi }</p>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>