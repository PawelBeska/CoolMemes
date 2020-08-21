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
