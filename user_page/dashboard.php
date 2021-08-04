<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Dashboard</title>

        <!-- Buat nanti2, bikin si sidebar buat tiap halaman kayak begini -->
        <script src="../assets/scripts/sidebar.js"></script>
    </head>
    <body>
        <script>
            document.writeln(Sidebar);
        </script>
        <main>
            <section id='announcement' class="dashboard-components">
                <h2>Announcement</h2>
                <!-- Nanti struktur buat announcement kayak berikut -->
                <div>
                    <p>{ nama_pengirim }</p>
                    <p>{ deskripsi }</p>
                </div>
            </section>
            <section id='todolist' class="dashboard-components">
                <h2>To Do List</h2>
                <!-- Nanti struktur buat  -->
                <div>
                    <!-- Masih rada bingung buat ceklisnya bakal berbentuk apa -->
                    <p>{ deskripsi }</p>
                </div>
            </section>
            <section id='calendar' class="dashboard-components">
                <h2>Calendar</h2>
                <!-- Ini masih bingung juga bakal berbentuk kek gimana wkwk -->
            </section>
        </main>
    </body>
</html>