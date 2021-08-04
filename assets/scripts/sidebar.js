const Sidebar = () => {
    return (`
    <nav style="display:none">
        <button id='tutup-menu'>{ Tutup menu }</button>
        <img src="" alt="Logo gopher">
        <div id="links">
            <a href="profile.php">Profile</a>
            <a href="calendar.php">Timeline</a>
            <a href="todolist.php">To Do List</a>
        </div>
        <a href="#">Logout</a>
    </nav>
    `);
}

const OpenSidebar = () => {
    return (`
        <button id='buka-menu'>{ Buka menu }</button>
    `);
}