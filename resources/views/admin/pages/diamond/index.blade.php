@extends('admin.layouts.app')
@section('title', 'Diamantes')
@section('content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            {{-- <h3 class="fw-bold mb-3">Dashboard</h3> --}}
            {{-- <h6 class="op-7 mb-2"></h6> --}}
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            {{-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> --}}
            <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target=".bd-example-modal-lg">
                Adicionar
            </button>

            <!-- Large modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel">Adicionar</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.pages.diamond.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="customFile">Imagem</label>
                                    <input type="file" class="form-control" name="img">
                                </div>

                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Categoria</label>
                                    <select name="cat_id" class="form-control">
                                        @foreach ($cat as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Total</label>
                                            <input type="text" name="total" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Disponíveis</label>
                                            <input type="text" name="disponiveis" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Vendido</label>
                                            <input type="text" name="vendidos" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h3 for="">Características</h3>
                                    <label for="">Tipo do Anúncio</label>
                                    <input type="text" name="tipo_anuncio" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Conta
                                    </label>
                                    <input type="text" name="desc_anuncio" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Descrição anuncio
                                    </label>
                                    <textarea name="desc" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Valor</label>
                                    <input type="text" name="valor" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Adicionar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger text-center" style="margin: 10px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="text-align: center">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('msg'))
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="alert alert-success text-center" style="margin: 10px;">
                            {{ session('msg') }}
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-round">
            <div class="card-body">
                <div class="card-head-row card-tools-still-right">
                    <div class="card-title">
                        Diamantes
                    </div>
                    <div class="card-tools">
                        <div class="dropdown">
                            {{-- <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="card-list py-12">

                    <table class="table table-striped table-striped-bg-black mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Criado</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
