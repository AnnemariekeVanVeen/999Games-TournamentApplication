<div class="sidebar">
    <div class="sidebar-position col-2">
        <a class="navbar-brand" href="{{ url('') }}"> <img src="{{ asset('storage/img/carcassonne-main-logo.png') }}"></a>
        <div class="sidebar-inner">
            <ul>
                <li class="{{ (request()->segment(1) == 'dashboard') ? 'active' : '' }}"><a href="{{ url('dashboard') }}" class="menu-item-sidebar d-block">Dashboard</a></li>
            </ul>
            <ul class="functions-list">
                <p class="functions-title">Functies</p>
                <li class="{{ (request()->segment(1) == 'tablearrangement') ? 'active' : '' }}"><a href="{{ url('tablearrangement') }}" class="menu-item-sidebar d-block">Tafel indelingen</a></li>
                <li class="{{ (request()->segment(1) == 'scoreinput') ? 'active' : '' }}"><a href="{{ url('scoreinput') }}" class="menu-item-sidebar d-block">Scores invoeren</a></li>
                <li class="{{ (request()->segment(1) == 'rounds') ? 'active' : '' }}"><a href="{{ url('rounds') }}" class="menu-item-sidebar d-block">Rondes bewerken</a></li>
                <li class="{{ (request()->segment(1) == 'players') ? 'active' : '' }}"><a href="{{ url('players') }}" class="menu-item-sidebar d-block">Deelnemers</a></li>
                <li class="{{ (request()->segment(1) == 'judges') ? 'active' : '' }}"><a href="{{ url('judges') }}" class="menu-item-sidebar d-block">Juryleden</a></li>
                @role('admin')
                <li class="{{ (request()->segment(1) == 'privileges') ? 'active' : '' }}"><a href="{{ url('privileges') }}" class="menu-item-sidebar d-block">Privileges</a></li>
                @endrole
                <li class="{{ (request()->segment(1) == 'nieuwsfeed') ? 'active' : '' }}"><a href="{{ url('nieuwsfeed') }}" class="menu-item-sidebar d-block">Nieuwsfeed</a></li>
            </ul>
            <ul class="settings-list">
                <p class="settings-title">Start NK</p>
                <li class="{{ (request()->segment(1) == 'checkin') ? 'active' : '' }}"><a href="{{ url('checkin') }}" class="menu-item-sidebar d-block">Check-in</a></li>
            </ul>
            <ul class="settings-list">
                <p class="settings-title">Instellingen</p>
                <li class="{{ (request()->segment(1) == 'profiel-instellingen') ? 'active' : '' }}"><a href="{{ url('usersdashboard') }}" class="menu-item-sidebar d-block">Profiel instellingen</a></li>
            </ul>
        </div>
    </div>
</div>
