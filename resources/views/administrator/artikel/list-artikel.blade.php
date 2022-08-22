@extends('layout.main-admin')
@section('container')
    <div class="card">
        <div class="card-body mt-0">
            <a href="/administrator/artikel/create" class="btn btn-primary">Tambah Data</a>
            <div class="table-responsive">
                <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead class="thead-dark text-primary">
                        <tr>
                            <th width="50px">No</th>
                            <th>Judul</th>
                            <th width="100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($art_count > 0)
                            @foreach ($artikels as $post)
                                <tr>
                                    <td width="50px">{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td width="100px">
                                        <a class="badge badge-success"
                                            href="/administrator/artikel/show/{{ $post->slug }}"><i
                                                class="fas fa-info-circle"></i></a>
                                        <a class="badge badge-warning" href=""><i class="fas fa-edit"></i></a>
                                        <a class="badge badge-danger" href=""><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <h4 class="text-danger text-center">Belum ada Data yang di Input</h4>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
