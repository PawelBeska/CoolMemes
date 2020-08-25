<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <span class="admin-brand-content font-secondary"><a href='{{route('admin.index')}}'>  Admin panel</a></span>
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle">
                <svg style="width:18px;height:18px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M16,12V4H17V2H7V4H8V12L6,14V16H11.2V22H12.8V16H18V14L16,12Z" />
                </svg>
            </a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar">
                <svg style="width:36px;height:36px" viewBox="0 0 32 28">
                    <path fill="currentColor"
                          d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu">
            <li class="menu-item">
                <a redirect="true" href="{{route('admin.index')}}" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Pulpit</span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-home-outline "></i>
                                            </span>
                </a>
            </li>
            <li class="menu-item ">
                <a href="" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Posty
                                                    <span class="menu-arrow">
                                                        <svg style="width:16px;height:16px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"></path>
</svg>
                                                    </span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-clipboard-file-outline"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.posts.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Lista postów
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-clipboard-list-outline"></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Główna
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-clipboard-text-outline "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Tagi
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-tag-multiple "></i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Użytkownicy
                                                      <span class="menu-arrow">

 <svg style="width:16px;height:16px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"></path>
</svg>


                                                    </span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder  mdi mdi-account-multiple"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.users.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Lista użytkowników

                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <i class="icon-placeholder mdi mdi-account-search "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.groups.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Grupy

                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <i class="icon-placeholder mdi mdi-account-group "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.permissions.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                  <span class="menu-name">Permisje

                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-gavel"></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
          <li class="menu-item ">
                <a href="" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Ustawienia
                                                    <span class="menu-arrow">
                                                        <svg style="width:16px;height:16px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"></path>
</svg>
                                                    </span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-cog"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.bots.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Ustawienia serwisu
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                <svg style="width:24px;height:24px" class="icon-placeholder" viewBox="0 0 24 24">
    <path fill="currentColor" d="M21.7 18.6V17.6L22.8 16.8C22.9 16.7 23 16.6 22.9 16.5L21.9 14.8C21.9 14.7 21.7 14.7 21.6 14.7L20.4 15.2C20.1 15 19.8 14.8 19.5 14.7L19.3 13.4C19.3 13.3 19.2 13.2 19.1 13.2H17.1C16.9 13.2 16.8 13.3 16.8 13.4L16.6 14.7C16.3 14.9 16.1 15 15.8 15.2L14.6 14.7C14.5 14.7 14.4 14.7 14.3 14.8L13.3 16.5C13.3 16.6 13.3 16.7 13.4 16.8L14.5 17.6V18.6L13.4 19.4C13.3 19.5 13.2 19.6 13.3 19.7L14.3 21.4C14.4 21.5 14.5 21.5 14.6 21.5L15.8 21C16 21.2 16.3 21.4 16.6 21.5L16.8 22.8C16.9 22.9 17 23 17.1 23H19.1C19.2 23 19.3 22.9 19.3 22.8L19.5 21.5C19.8 21.3 20 21.2 20.3 21L21.5 21.4C21.6 21.4 21.7 21.4 21.8 21.3L22.8 19.6C22.9 19.5 22.9 19.4 22.8 19.4L21.7 18.6M18 19.5C17.2 19.5 16.5 18.8 16.5 18S17.2 16.5 18 16.5 19.5 17.2 19.5 18 18.8 19.5 18 19.5M11.29 20H5C3.89 20 3 19.1 3 18V6C3 4.89 3.9 4 5 4H19C20.11 4 21 4.9 21 6V11.68C20.38 11.39 19.71 11.18 19 11.08V8H5V18H11C11 18.7 11.11 19.37 11.29 20Z" />
</svg>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.bots.statistics.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Ustawienia użytkowników
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-account-cog "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.bots.advanced.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Ustawienia serwerów
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-table-cog "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.bots.advanced.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Ustawienia zaawansowane
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-cogs "></i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item ">
                <a href="" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Boty
                                                    <span class="menu-arrow">
                                                        <svg style="width:16px;height:16px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"></path>
</svg>
                                                    </span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-file-code"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.bots.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Lista botów
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-code-tags"></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.bots.statistics.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Statystyki
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-poll "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.bots.advanced.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Zaawansowane
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-flash "></i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
          <li class="menu-item ">
                <a href="" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Serwery
                                                    <span class="menu-arrow">
                                                        <svg style="width:16px;height:16px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"></path>
</svg>
                                                    </span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-server"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.servers.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Lista serwerów
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-server-network"></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.servers.statistics.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Statystyki
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-poll "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a redirect="true" href='{{route('admin.servers.advanced.index')}}' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Zaawansowane
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-flash "></i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
          <li class="menu-item ">

              <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Zgłoszenia
                                                    <span class="menu-arrow">

 <svg style="width:16px;height:16px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"></path>
</svg>


                                                    </span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-tooltip "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href='/default/kanban' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Lista zgłoszeń
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-alert"></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href='/default/chat' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Archwium zgłoszeń
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-archive"></i>
                                            </span>
                        </a>
                    </li>
                </ul>
          </li>
        </ul>

    </div>

</aside>
