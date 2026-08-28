<nav>
    <div class="logo">
        <a href="/">Kursplattform</a>
    </div>
    <ul>
        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}"> Home </a></li>
        <li><a href="/kurse" class="{{ request()->is('kurse') ? 'active' : '' }}"> Kurse </a></li>
        <li><a href="/anmeldung" class="{{ request()->is('anmeldung') ? 'active' : '' }}"> Anmeldung </a></li>
    </ul>
</nav>