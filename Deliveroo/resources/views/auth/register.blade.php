@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center bg-light">
        <div class="col-md-8 box-form py-4">
            <h2 class="title-register">{{ __('REGISTRA IL TUO RISTORANTE') }}</h2>
            <div class="card card-register">

                @if ($errors->any())
                  <div class="alert alert-danger m-3">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif

                <span class="mx-3 mt-3 star">Gli elementi contrassegnati dal simbolo * sono campi obbligatori</span>

                <div class="card-body form-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- name --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror input-register" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="name" class="label-register">{{ __('Nome *') }}</label>
                        </div>

                        {{-- user_last_name --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input id="user_last_name" type="text" class="input-register @error('user_last_name') is-invalid @enderror" name="user_last_name" value="{{ old('user_last_name') }}" required autocomplete="user_city" autofocus>

                                {{-- @error('user_last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="user_last_name" class="label-register">{{ __('Cognome *') }}</label>
                        </div>

                        {{-- email --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input id="email" type="email" class="input-register @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="email" class="label-register">{{ __('E-Mail *') }}</label>
                        </div>

                        {{-- password --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input id="password" type="password" class="input-register @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="password" class="label-register">{{ __('Password *') }}</label>
                        </div>

                        {{-- password confirm --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input id="password-confirm" type="password" class="input-register" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <label for="password-confirm" class="label-register">{{ __('Conferma Password *') }}</label>
                        </div>

                        {{-- user_cell_number --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input placeholder="deve contenere almeno 10 cifre..." id="user_cell_number" type="number" class="input-register @error('user_cell_number') is-invalid @enderror" name="user_cell_number" value="{{ old('user_cell_number') }}" required autocomplete="user_cell_number" autofocus size="10">

                                {{-- @error('user_cell_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="user_cell_number" class="label-register">{{ __('Numero di telefono *') }}</label>
                        </div>

                        {{-- user_tax_code --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input placeholder="deve contenere almeno 11 cifre..." id="user_tax_code" type="number" class="input-register @error('user_tax_code') is-invalid @enderror" name="user_tax_code" value="{{ old('user_tax_code') }}" required autocomplete="user_tax_code" autofocus size="11">

                                {{-- @error('user_tax_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="user_tax_code" class="label-register">{{ __('Partita IVA *') }}</label>
                        </div>

                        {{-- user_street --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input id="user_street" type="text" class="input-register @error('user_street') is-invalid @enderror" name="user_street" value="{{ old('user_street') }}" required autocomplete="user_street" autofocus>

                                {{-- @error('user_street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="user_street" class="label-register">{{ __('Indirizzo *') }}</label>
                        </div>

                        {{-- user_city --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input id="user_city" type="text" class="input-register @error('user_city') is-invalid @enderror" name="user_city" value="{{ old('user_city') }}" required autocomplete="user_city" autofocus>

                                {{-- @error('user_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="user_city" class="label-register">{{ __('Città *') }}</label>
                        </div>

                        {{-- user_zip_code --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input placeholder="deve contenere almeno 5 cifre..." id="user_zip_code" type="number" class="input-register @error('user_zip_code') is-invalid @enderror" name="user_zip_code" value="{{ old('user_zip_code') }}" required autocomplete="user_zip_code" autofocus pattern="[0-9]{5}">

                                {{-- @error('user_zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="user_zip_code" class="label-register">{{ __('Codice Postale *') }}</label>
                        </div>

                        {{-- restaurant_name --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <input id="restaurant_name" type="text" class="input-register @error('restaurant_name') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name" autofocus>

                                {{-- @error('restaurant_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="restaurant_name" class="label-register">{{ __('Nome Ristorante *') }}</label>
                        </div>

                        {{-- description --}}
                        <div class="row-register">
                            <div class="col-md-6 col-register">
                                <textarea placeholder="deve contenere almeno 30 caratteri..." id="description" class="input-register-text @error('description') is-invalid @enderror" rows="4" name="description"  required autocomplete="description" autofocus>{{ old('description')}}</textarea>

                                {{-- @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <label for="description" class="label-register">{{ __('Descrizione Ristorante') }}</label>
                        </div>

                        {{-- type --}}
                        <div class="form-type">
                            <label for="type_id" class="label-title">{{ __('Seleziona una o più tipologie per il tuo ristorante *') }}</label>
                            <div class="ul-type" id="type_id" name="type_id">
                                @foreach ($types as $type)
                                    <div class="custom-control custom-checkbox type-checkbox">
                                        <input name="types[]" type="checkbox" class="custom-control-input" id="type_{{$type->id}}" value={{$type->id}} {{in_array($type->id, old('types', []))?'checked':''}}>
                                        <label class="custom-control-label label-type" for="type{{$type->id}}">{{$type->name}}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-btn row mb-0">
                            <div class="col-register box-btn">
                                <button href="#" type="submit" class="btn-register">
                                    {{ __('Registrati') }} <i class="ri-arrow-right-line"></i>
                                </button>
                                <a type="submit" class="btn-register" href="{{ route('login')}}">
                                    {{ __('Accedi') }} <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
