<div class="page">


    <section class="settings">
        <form  class="setting" action="" id="account"  method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="csrftoken" value="42dcc9cc4f0ab0fea35f1749e23f4d09">

            <h2>Konto</h2>

            <div class="form-group row">
                <label for="name" class="col-md-1 col-form-label text-md-left">Login</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name" disabled autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <small id="nameHelp" class="form-text text-muted">https://jp2jmd.pl/u/raz4r</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-1 col-form-label text-md-left">Email</label>

                <div class="col-md-6">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <small id="emailHelp" class="form-text text-muted">Email nie jest widoczny dla innych użytkowników</small>
                    <small id="emailHelp" class="form-text text-muted">Adres email nie jest zweryfikowany, prosimy o weryfikację konta poprzez adres email.</small>
                    <small id="emailHelp" class="form-text text-muted"><a href="#">Wyślij link aktywujący konto.</a></small>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Mocne treści:</div>
                <div class="col-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Ukrywaj
                        </label>
                    </div>
                </div>
            </div>

            <div class="btn-container">
                <input type="submit" value="Zapisz zmiany">
            </div>

            <div class="btn-container">
                <a id="jsid-delete-account-btn" class="link" href="/member/delete">Dezaktywuj konto</a>
            </div>
        </form>
        <form class="setting" style="display: none" id="password" action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="csrftoken" value="42dcc9cc4f0ab0fea35f1749e23f4d09">

            <h2>Hasło</h2>

            <div class="form-group row">
                <label for="old_password" class="col-md-2 col-form-label text-md-left">Stare hasło</label>

                <div class="col-md-6">
                    <input id="old_password" type="text" class="form-control @error('old_password') is-invalid @enderror"
                           name="old_password" value="{{ old('old_password') }}" required autocomplete="old_password" disabled autofocus>

                    @error('old_password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="new_password" class="col-md-2 col-form-label text-md-left">Nowe hasło</label>

                <div class="col-md-6">
                    <input id="new_password" type="text" class="form-control @error('new_password') is-invalid @enderror"
                           name="new_password" value="{{ old('new_password') }}" required autocomplete="new_password" disabled autofocus>

                    @error('new_password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="new_password_confirmation" class="col-md-3 col-form-label text-md-left">Powtórz nowe hasło</label>

                <div class="col-md-5">
                    <input id="new_password_confirmation" type="text" class="form-control @error('new_password_confirmation') is-invalid @enderror"
                           name="new_password_confirmation" value="{{ old('new_password_confirmation') }}" required autocomplete="new_password_confirmation" disabled autofocus>

                    @error('new_password_confirmation')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="btn-container">
                <input type="submit" value="Zapisz zmiany">
            </div>

        </form>

        <form class="setting" style="display: none" id="profile"  action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="csrftoken" value="8f17ef6ad8c77b9d655ae2df1c36eccc">

            <h2>Profil</h2>

            <div class="form-group">
                <label class="col-md-12 col-form-label text-md-left">Avatar</label>
                <img src="https://accounts-cdn.9gag.com/media/default-avatar/1_41_100_v0.jpg" alt="..." class="img-thumbnail">
                <div class="control">
                    <input type="file" name="avatar" accept=".jpg, .gif, .png">
                    <p class="tips">JPG, GIF or PNG, Max size: 10MB</p>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-3 col-form-label text-md-left">Nazwa wyświetlana</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name" >

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <small id="nameHelp" class="form-text text-muted">Ta nazwa będzie wyświetlana dla innych użytkowników</small>
                </div>
            </div>



            <div class="form-group">
                <label for="name" class="col-md-3 col-form-label text-md-left">Data urodzin</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <small id="nameHelp" class="form-text text-muted">Data twoich urodzin będzie wyświetlana w twoim profilu</small>
                </div>
            </div>


            <div class="form-group">
                <label for="name" class="col-md-1 col-form-label text-md-left">Płeć</label>

                <div class="col-md-8">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name" >

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <small id="nameHelp" class="form-text text-muted">Twoja płeć będzie wyświetlana w profilu </small>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-md-2 col-form-label text-md-left">O mnie</label>

                <div class="col-md-6">
                    <textarea id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                              name="name" value="{{ old('name') }}" required autocomplete="name" ></textarea>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <small id="nameHelp" class="form-text text-muted">Twój opis będzie wyświetlany dla innych użytkowników</small>
                </div>
            </div>

            <div class="btn-container">
                <input type="submit" value="Zapisz zmiany">
            </div>
        </form>

        <ul class="form-nav">
            <li><a id="account" class="selected" href="#">Konto</a></li>
            <li><a id="password"  class="" href="#">Hasło</a></li>
            <li><a id="profile" class="" href="#">Profil</a></li>
        </ul>
        <div class="clearfix"></div>

    </section>
    <script>
        $('ul.form-nav a').on('click', function (e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let selector = $('form#'+ id);
            if (selector.is(":visible"))
                selector.hide();
            else {
                $('section form').each(function () {
                    $(this).hide();
                });
                $('ul.form-nav li a').each(function(){
                   $(this).removeClass('selected')
                });
                selector.show();
            }
            $(this).addClass('selected');

        });
    </script>


    <div class="clearfix"></div>
</div>
