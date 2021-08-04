<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Profile { nama }</title>

        <script src="../assets/scripts/sidebar.js"></script>
    </head>
    <body>
        <script>
            document.writeln(OpenSidebar)
            document.writeln(Sidebar)
        </script>
        <main>
            <h1>Edit Profile</h1>
            <div id="options">
                <button id="open-data">Data</button>
                <button id="open-password">Password</button>
            </div>
            <div id="edit-data" style="display:block">
                <form action="" method="post">
                    <label for="nama">Nama
                        <input name="nama" type="text">
                    </label>
                    <br>
                    <label for="npm">NPM
                        <input nama="npm" type="text">
                    </label>
                    <br>
                    <label for="kelas">Kelas
                        <input nama="kelas" type="text">
                    </label>
                    <br>
                    <label for="tgl_lahir">Tanggal Lahir
                        <input name="tgl_lahir" type="date">
                    </label>
                    <br>
                    <label for="alamat">Alamat
                        <textarea name="alamat" cols="30" rows="10"></textarea>
                    </label>
                    <br>
                    <button name="save" type="submit">Save</button>
                </form>
            </div>
            <div id="edit-password" style="display:none">
                <form action="" method="post">
                    <label for="old_pw">Old Password:
                        <input class="pw-input" name="old_pw" type="password">
                        <button class="see-password">{ See PW }</button>
                    </label>
                    <br>
                    <label for="new_pw">New Password:
                        <input class="pw-input" name="new_pw" type="password">
                        <button class="see-password">{ See PW }</button>
                    </label>
                    <br>
                    <label for="confirm_pw">Confirm New Password:
                        <input class="pw-input" name="confirm_pw" type="password">
                        <button class="see-password">{ See PW }</button>
                    </label>
                    <br>
                    <button name="save" type="submit">Save</button>
                </form>
            </div>
        </main>
        
        <script src="../assets/scripts/seePw.js"></script>
    </body>
</html>