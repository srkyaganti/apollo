<nav id="sidebar-nav">
    <ul class="nav nav-pills nav-stacked">
        <li {!! Request::is('dashboard') ? 'class="active"' : '' !!}>
        	<a href="{{ url('dashboard') }}">Dashboard</a>
        </li>
        <li {!! Request::is('profile') ? 'class="active"' : '' !!}>
        	<a href="{{ url('profile') }}">Profile</a>
        </li>
        <li {!! Request::is('apps') ? 'class="active"' : '' !!}>
        	<a href="{{ url('apps') }}">Apps</a>
        </li>
        <li {!! Request::is('sql-console') ? 'class="active"' : '' !!}>
        	<a href="{{ url('sql-console') }}">SQL REPL</a>
        </li>
        <li {!! Request::is('databases') ? 'class="active"' : '' !!}>
        	<a href="{{ url('databases') }}">Databases</a>
        </li>
    </ul>
</nav>