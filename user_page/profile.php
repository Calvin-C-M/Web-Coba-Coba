<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile { nama }</title>

        <script src="../assets/scripts/sidebar.js"></script>
    </head>
    <body>
        <script>
            document.writeln(OpenSidebar)
            document.writeln(Sidebar)
        </script>
        <main>
            <h1>My Profile</h1>
            <a href="editProfile.php">
                <button>Edit</button>
            </a>
            <img src="" alt="Foto { nama }">
            <div id='profile'>
                <div id="nama" class="profile-desc">
                    <p>Nama: { nama }</p>
                </div>
                <div id="npm" class="profile-desc">
                    <p>NPM: { npm }</p>
                </div>
                <div id="kelas" class="profile-desc">
                    <p>Kelas: { kelas }</p>
                </div>
                <div id="tgl" class="profile-desc">
                    <p>Tanggal Lahir: { tgl lahir }</p>
                </div>
                <div id="alamat" class="profile-desc">
                    <p>Alamat: { alamat }</p>
                </div>
            </div>
        </main>
    </body>
</html>