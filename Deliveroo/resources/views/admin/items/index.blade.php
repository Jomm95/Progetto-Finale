@extends('admin.layouts.base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">

                    <a href="{{route('admin.items.create')}}" class="btn btn-warning mb-3">Crea nuovo piatto</a>

                    <thead>
                    <tr class="tr-list">
                        <th scope="col">ID piatto</th>
                        <th scope="col">Nome Piatto</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Visibile</th>
                        <th scope="col">Opzioni</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><a href="{{route('admin.items.show', $item->id)}}">{{$item->item_name}}</a></td>
                                <td>{{substr($item->description, 0, 30)}}</td>
                                <td>{{$item->slug}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>€&nbsp{{$item->price}}</td>

                                @if ($item->visible==1)
                                    <td>sì</td>
                                @else
                                    <td>no</td>
                                @endif

                                <td class="d-flex">
                                    <a href="{{route('admin.items.show', $item->id)}}" class="btn btn-primary m-2">Visualizza</a>
                                    <a href="{{route('admin.items.edit', $item->id)}}" class="btn btn-secondary m-2">Modifica</a>

                                    <form method="POST" action="{{route('admin.items.destroy', $item->id)}}">

                                        @csrf
                                        @method('DELETE')

                                        <button type="button" class="btn btn-danger m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Elimina
                                        </button>



                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Sei sicuro di volere eliminare il piatto?</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla Eliminazione</button>
                                                  <button class="btn btn-danger m-2" href="deletelink">Elimina</button>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
        })
    </script>
@endsection
