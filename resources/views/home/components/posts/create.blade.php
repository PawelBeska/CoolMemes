<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">

            <div id="form-errors"></div>
            <div class="card">
                <div class="card-header">Dodawanie posta</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Tytuł</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Opis</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('password') is-invalid @enderror"
                                          name="password" required autocomplete="current-password"></textarea>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Tagi</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="spacer">
                            <a href="javascript:void(0);" id="jsid-upload-file-btn" class="source file dz-clickable">
                                <p>Przeciągnij plik by go wgrać lub</p>
                                <span class="btn">Wybierz plik...</span>
                            </a>
                            <div class="other-source">
                                <div class="wrapper">
                                    <a href="#" id="media-upload" to="image-upload" class="source pic-url">
                      <span class="material-icons">
add_photo_alternate
</span>
                                        <p>Wklej adres obrazka</p>
                                    </a>
                                </div>
                                <div class="wrapper">
                                    <a class="source vid-url" id="media-upload" to="movie-upload" href="#"><span
                                            class="material-icons">
movie
</span>
                                        <p>Wklej adres filmu</p></a>

                                </div>
                                <div class="wrapper">
                                    <a href="https://memeful.com/generator" target="_blank"
                                       onclick="GAG.GA.track('UploadAction', 'TapMakeMeme');" class="source meme">
                        <span class="material-icons">
emoji_emotions
</span>
                                        <p>Stwórz mema</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="image-upload" class="form-group uploader row" style="display: none">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Adres obrazka</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="movie-upload" class="form-group uploader row" style="display: none">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Adres filmu</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    Dodaj post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
