<div style="padding-top: 48px;">
    <div style="position: fixed; width: 100vw; top: 0px; will-change: transition; transition: top 0.2s ease 0s; z-index: 8;">
        <header class="navbar"><a href="/home" class="menu">
                <span class="material-icons">arrow_back </span></a> <h4 class="title">Rejestracja</h4>
        </header>
    </div>
    <section class="account-form">
        <form action="/login" method="POST" class="form-login">
            <div class="input-group">
                <input type="text" name="username" placeholder="Nazwa użytkownika lub E-mail" maxlength="200">
                <input type="password" name="password" placeholder="Hasło" maxlength="32">
                <input type="hidden" name="next"></div> <!----> <div class="input-group">
                <a href="javascript:void(0)" class="btn block icon fill">Zarejestruj</a>
            </div>
            <a href="/recover" class="btn block mute">Masz już konto?</a>
        </form>
    </section>
</div>
<script>
    $('div#header').hide();
</script>
