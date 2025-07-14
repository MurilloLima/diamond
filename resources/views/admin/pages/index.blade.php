@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="card card-round">
        <div class="card-header">
            <div class="card-head-row card-tools-still-right">
                <h4 class="card-title">Categorias</h4>
                <div class="card-tools">

                    <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card">
                        <span class="fa fa-sync-alt"></span>
                    </button>

                </div>
            </div>
            <p class="card-category">
                Cadastrar categorias
            </p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-hover table-sales">
                        <!-- Projects table -->
                        <table class="table align-items-center mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col" class="text-end">Data</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                    <td class="text-end">
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
