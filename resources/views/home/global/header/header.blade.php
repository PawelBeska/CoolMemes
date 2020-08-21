<header id="top-nav">
    <div class="nav-wrap">
        <a class="logo" href="/home">JP2GmD</a>
        <nav class="nav-menu">
            <ul class="secondary">
                <li>
                    <a target="_blank" redirect="true" class="" href="#"><span
                            class="material-icons md-18">shuffle</span> Przemieszaj</a>
                </li>
                <li>
                    <a target="_blank" class="" href="#">📱 Pobierz aplikacje</a>
                </li>
            </ul>
        </nav>
        <div class="function-wrap">
            <div class="general-function">
                <a href="#" class="darkmode-toggle"><span class="material-icons md-18">
brightness_3
</span></a>
                <a href="#" class="search"><span class="material-icons md-18">search</span></a>
                <div class="popup-menu search-menu dropdown-menu" style="display: none">
                    <form action="/search">
                        <div class="headbar-search">
                            <input type="text" name="query" autocomplete="off" placeholder="Type to search…"></div>
                        <div class="headbar-search-suggest">
                            <ul>
                                <li><a href="/tag/funny?ref=search"><span
                                            class="suggested"><strong>funn</strong>y</span> <span
                                            class="count">131333</span></a></li>
                                <li><a href="/tag/not-funny?ref=search"><span
                                            class="suggested">not <strong>funn</strong>y</span> <span
                                            class="count">1762</span></a></li>
                                <li><a href="/tag/finnish-spitz?ref=search"><span class="suggested"><strong>f</strong>innish spitz</span>
                                        <span class="count">1519</span></a></li>
                                <li><a href="/tag/bunny?ref=search"><span
                                            class="suggested">b<strong>unn</strong>y</span> <span
                                            class="count">1159</span></a></li>
                                <li><a href="/tag/bugs-bunny?ref=search"><span
                                            class="suggested">bugs b<strong>unn</strong>y</span> <span class="count">1081</span></a>
                                </li>
                                <li><a href="/tag/funeral?ref=search"><span
                                            class="suggested"><strong>fun</strong>eral</span> <span
                                            class="count">611</span></a></li>
                                <li><a href="/tag/elle-fanning?ref=search"><span
                                            class="suggested">elle <strong>f</strong>anning</span> <span class="count">343</span></a>
                                </li>
                                <li><a href="/tag/olivia-munn?ref=search"><span
                                            class="suggested">olivia m<strong>unn</strong></span> <span class="count">338</span></a>
                                </li>
                                <li><a href="/tag/funny-meme?ref=search"><span class="suggested"><strong>funn</strong>y meme</span>
                                        <span class="count">302</span></a></li>
                                <li><a href="/tag/james-gunn?ref=search"><span
                                            class="suggested">james g<strong>unn</strong></span> <span
                                            class="count">295</span></a></li>
                            </ul>
                        </div>
                    </form>
                </div>

            </div>
            @guest
                <div class="visitor-function">
                    <a href="{{route('login')}}" redirect="true" container="true" class="btn-mute">Logowanie</a>
                    <a href="{{route('register')}}" redirect="true" container="true" class="btn-primary">Rejestracja</a>
                </div>
            @endguest()
            @auth
                <div class="user-function" style="">
                    <div class="notification"><a href="#" class="bell"><span class="material-icons">
notifications
</span>
                        </a>
                    </div>
                    <div class="notification-menu dropdown-menu" style="display: none"><div class="tab-bar"><a href="#" class="active">
                                All
                            </a> <a href="javascript:void(0)" class="">
                                Mentions
                            </a></div> <div class="notification-list viewport"><ul class="overview"><li class="empty"><div class="empty-message"><p>No notifications yet</p></div></li></ul></div> <div class="bumper"><a href="/notifications" class="see-all">See all</a></div></div>

                    <div class="avatar">
                        <a href="#" class="avatar-container">
                            <img alt="Avatar"
                                 src="https://www.shareicon.net/data/128x128/2016/11/21/854776_darth_512x512.png"></a>
                    </div>
                    <div class="popup-menu dropdown-menu user" style="display: none">
                        <ul>
                            <li>
                                <a href="/admin">Admin panel</a>
                            </li>
                            <li>
                                <a redirect="true"  href="{{ route('home.user.index',\Illuminate\Support\Facades\Auth::user()->name) }}">Mój profil</a>
                            </li>
                            <li><a redirect="true"  href="/settings">Ustawienia</a></li>
                            <li><a href="{{route('logout')}}">Wyloguj</a></li>
                        </ul>
                    </div>

                    <!---->
                    <div class="upload"><a redirect="true" href="{{route('home.posts.create.index')}}" class="btn-primary"><span class="material-icons">
add
</span> Dodaj</a></div>
                </div>
            @endauth()
        </div>
    </div>

    @auth
    <section class="announcement-banner yellow" id="jsid-banner-confirm-email">
        <p>Hej! <span id="jsid-banner-confirm-email-username"></span> Proszę aktywuj swoje konto poprzez email. Jeśli nie dostałeś linka aktywacyjnego, możemy go <a href="/member/resend-confirmation">wysłać ponownie</a> lub możesz zmienić <a
                href="{{route('home.user.settings.index')}}" redirect="true">adres email</a>.</p>
    </section>
        @endauth
</header>
