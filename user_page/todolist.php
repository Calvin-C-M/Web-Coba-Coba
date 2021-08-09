<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{ nama } To Do List</title>

        <script src="../assets/scripts/sidebar.js"></script>
    </head>
    <body>
        <script>
            document.writeln(OpenSidebar);
            document.writeln(Sidebar);
        </script>

        <main>
            <div id="background">
                <div class="list">
                    <!-- Buat ceklis masih belum tentu -->
                    <p>{ deskripsi }</p>
                    <div id='menu' class="menu">
                        <button>Edit</button>
                        <button>Delete</button>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>