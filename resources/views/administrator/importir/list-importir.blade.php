@extends('layout.main-admin')
@section('container')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead class="thead-dark text-primary">
                        <tr>
                            <th width="50px">No</th>
                            <th>Nama Perusahaan</th>
                            <th>Negara</th>
                            <th>Website</th>
                            <th>Contact Person</th>
                            <th width="100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($imp_count > 0)
                            @foreach ($importirs as $importir)
                                <tr>
                                    <td width="50px">{{ $loop->iteration }}</td>
                                    <td>{{ $importir->company_name }}</td>
                                    <td>{{ $importir->country }}</td>
                                    <td>{{ $importir->website }}</td>
                                    <td>{{ $importir->contact_person }}</td>
                                    <td>
                                        <a class="badge badge-success" href=""><i class="fas fa-info-circle"></i></a>
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
