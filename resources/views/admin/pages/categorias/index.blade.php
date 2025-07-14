@extends('admin.layouts.app')
@section('title', 'Categorias')
@section('content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            {{-- <h3 class="fw-bold mb-3">Dashboard</h3> --}}
            {{-- <h6 class="op-7 mb-2"></h6> --}}
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            {{-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> --}}
            <a href="#" class="btn btn-primary btn-round" data-toggle="modal" data-target="#exampleModal">Adicionar</a>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.categoria.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <label for="">Nome</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
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
                        Categorias
                    </div>
                    <div class="card-tools">
                        <div class="dropdown">
                            <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-list py-12">
                    @foreach ($data as $item)
                        <div class="item-list">

                            <div class="info-user ms-3">
                                <div class="username">{{ $item->name }}</div>
                                <div class="status">{{ $item->slug }}</div>
                            </div>
                            <button class="btn btn-icon btn-link op-8 me-1">
                                <i class="far fa-envelope"></i>
                            </button>
                            <button class="btn btn-icon btn-link btn-danger op-8">
                                <i class="fas fa-ban"></i>
                            </button>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
