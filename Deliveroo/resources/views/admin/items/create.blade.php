@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Ciao {{ Auth::user()->name }}! Crea un nuovo piatto</h1>
                <h4>i campi con l'asterisco sono obbligatori</h4>

                <form method="POST" action={{route('admin.items.store')}} enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="user_id">Stai creando un nuovo piatto per:*</label>
                        <select class="form-control" id="user_id" name="user_id">

                            <option value="">Nessun user selezionato...</option>
                            {{-- @foreach ($users as $user) --}}
                            <option {{(old('user_id') == Auth::user()->id) ? 'selected': ''}} value="{{ Auth::user()->id }}" selected>{{Auth::user()->name}} al ristorante: {{Auth::user()->restaurant_name}}</option>
                            {{-- @endforeach --}}

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image">Cover</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>


                    <div class="form-group">
                        <label for="category_id">Categoria*</label>
                        <select class="form-control" id="category_id" name="category_id">

                            <option value="">Nessuna categoria selezionata...</option>

                            @foreach ($categories as $category)
                                <option {{(old('category_id') == $category->id) ? 'selected': ''}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                      <label for="item_name">Nome piatto*</label>
                      <input type="text" class="form-control" id="item_name" name="item_name" value="{{old('item_name')}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Descrizione*</label>
                        <textarea class="form-control" id="description" rows="10" name="description">{{old('description')}}</textarea>
                    </div>
                    <label class="mt-3" for="tags">Seleziona indicazioni speciali del piatto (optional): </label>
                    <div class="m-3">
                        @foreach ($tags as $tag)
                            <div class="custom-control custom-checkbox m-2">
                                <input name="tags[]" type="checkbox" class="custom-control-input" id="tag_{{$tag->id}}" value={{$tag->id}} {{in_array($tag->id, old('tags', []))?'checked':''}}>
                                <label class="custom-control-label" for="tag_{{$tag->id}}">{{$tag->name}}</label>
                            </div>
                        @endforeach
                    </div>

                    <div class="mb-3 form-group">
                        <label for="price" class="ms_title_price">Prezzo*</label>
                            <input type="number" step="0.01" name="price" class="p-1 form-control col-3 col-md-3 col-lg-2 ms_form_price @error('price') is-invalid @enderror" min="0" max="999" value="{{old('price')}}">
                    </div>
                    @error('price')
                    <div class="mt-0 alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror

                    {{-- visibile --}}
                    <div class="mt-4 mb-1 form-group">
                        <span>Vuoi rendere visibile questo piatto nel menù?</span>

                        <span class="ms_input_yes">
                            <input id="visible" {{(old("visible") == "yes") ? "checked" : ""}} value="yes" type="radio" name="visible" checked>
                            <label class="visible" for="visible">
                                SI
                            </label>
                        </span>

                        <span class="ms_input_no">
                            <input id="not-visible" {{(old("visible") == "no") ? "checked" : ""}} value="no" type="radio" name="visible">
                            <label class="not-visible" for="not-visible">
                                NO
                            </label>
                        </span>

                        @error('visible')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                    <button type="submit" class="btn btn-primary">Salva</button>


                </form>

            </div>
        </div>
    </div>
@endsection


