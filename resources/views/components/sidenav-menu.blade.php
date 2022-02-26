
<li class="{{ (Request::is('dashboard') ) ? 'active open' : ''}} bold ">
    <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
        <i class="material-icons">settings_input_svideo</i>
        <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
        {{-- <span class="badge badge pill orange float-right mr-10">3</span> --}}
    </a>
    <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li class="{{ (Request::is('dashboard') ) ? 'active' : ''}}">
                <a class="{{ (Request::is('dashboard') ) ? 'active' : ''}}" href="dashboard">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="eCommerce">Dashboard 1</span></a>
            </li>
            {{-- <li><a href="dashboard-modern.html"><i class="material-icons">radio_button_unchecked</i><span
                        data-i18n="Modern">Modern</span></a>
            </li>
            <li><a href="dashboard-analytics.html"><i
                        class="material-icons">radio_button_unchecked</i><span
                        data-i18n="Analytics">Analytics</span></a>
            </li> --}}
        </ul>
    </div>
</li>
<li class="navigation-header"><a class="navigation-header-text">MEN&Uacute; PRINCIPAL</a><i
    class="navigation-header-icon material-icons">more_horiz</i>
</li>
<li class="bold {{ (Request::is('sistema') ) ? 'active' : ''}}">
    <a class="waves-effect waves-cyan {{ (Request::is('sistema') ) ? 'active' : ''}} " href="sistema">
        <i class="material-icons">dashboard</i>
        <span class="menu-title" data-i18n="Dashboard">Sistema</span>
    </a>
</li>
<li class="bold {{ (Request::is('configuracion') ) ? 'active' : ''}}">
    <a class="waves-effect waves-cyan {{ (Request::is('configuracion') ) ? 'active' : ''}} " href="configuracion">
        <i class="material-icons">settings</i>
        <span class="menu-title" data-i18n="Settings">Configuraciones</span>
    </a>
</li>
