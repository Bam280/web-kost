@extends('admin.partials.master')
@section('content')
    @include('admin.postingan.partials.modal')
    <div class="container-xl">
        <div class="col">
            <div class="card mb-grid">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Daftar Kost</div>
                    <div class="justify-content-end m-0 p-0">
                        <a class="btn btn-sm btn-labeled-right btn-success" data-bs-toggle="modal"
                            data-bs-target="#ModalPosts">
                            <span class="btn-label">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-in-down-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6.364 2.5a.5.5 0 0 1 .5-.5H13.5A1.5 1.5 0 0 1 15 3.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 2 13.5V6.864a.5.5 0 1 1 1 0V13.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H6.864a.5.5 0 0 1-.5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M11 10.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L1.146 1.854a.5.5 0 1 1 .708-.708L10 9.293V5.5a.5.5 0 0 1 1 0v5z" />
                                </svg>
                            </span>
                            <span class="btn-text">
                                Tambah Kost
                            </span>
                        </a>
                    </div>
                </div>
                <div class="table-responsive-md">
                    <table class="table table-actions table-striped table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <label class="custom-control custom-checkbox m-0 p-0">
                                        <input type="checkbox" class="custom-control-input table-select-all">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </th>
                                {{-- <th scope="col">Judul</th>
                                <th scope="col">Post pertama pada</th>
                                <th scope="col">Edit Post</th>
                                <th scope="col">Action</th> --}}
                                <th scope="col">Nama Kos</th>
                                <th scope="col">status</th>
                                <th scope="col">Edit kost</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $posts = \App\PostManage::all();
                            @endphp
                            @foreach ($posts as $w)
                                <tr>
                                    <th scope="row row-cols-2">
                                        <label class="custom-control custom-checkbox m-0 p-0">
                                            <input type="checkbox" class="custom-control-input table-select-row">
                                            <span class="custom-control-indicator"></span>
                                        </label>
                                    </th>
                                    <td>{{ $w->namaKos }}</td>
                                    <td>{{ $w->created_at->format('d-m-Y') }}</td>
                                    <td><a href="#ModalPosts{{ $w->id }}"
                                            class="btn btn-sm btn-primary">Edit</a></td>
                                    <td>
                                        <a href="{{ route('managepost.destroy', ['id' => $w->id]) }}"
                                            class="btn btn-sm btn-danger">Delete</a>
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
