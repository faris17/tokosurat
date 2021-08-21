@extends('layouts.admin_master')
@section('admincontent')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Letter</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Tambah</a>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Letters</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name Letter</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>File</th>
                                <th width="200px"></th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($dataLetters as $index => $row)
                            <tr>
                                <th>{{ $index + $dataLetters->firstItem() }}</th>
                                <td>{{ $row->nameletter }}</td>
                                <td>{{ $row->descriptionletter }}</td>
                                <td>{{ $row->typeletter }}</td>
                                <td><a href="{{ $row->fileletter }}">Download</a></td>
                                <td>
                                    <button class='btn btn-warning btn-sm'>
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <button class='btn btn-danger btn-sm'>
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $dataLetters->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

</div>
@endsection
