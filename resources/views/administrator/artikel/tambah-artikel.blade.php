@extends('layout.main-admin')
@section('container')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <form action="/administrator/artikel/" method="POST">
                    @csrf
                    <div class="card-header pb-2">
                        <h6>Tambah Artikel Baru</h6>
                    </div>
                    <div class="card-body pb-2">
                        <p class="text-uppercase text-sm">Form Artikel Baru</p>
                        <div class="form-group">
                            <label for="judul" class="form-control-label">Judul Artikel</label>
                            <input class="form-control" type="text" name="judul" id="judul"
                                placeholder="Judul Artikel" value="{{ old('judul') }}">
                        </div>
                        <div class="form-group">
                            <label for="slug" class="form-control-label">Slug</label>
                            <input class="form-control" type="text" name="slug" id="slug" placeholder="Slug"
                                value="{{ old('slug') }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success form-control">Simpan Artikel</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
                <img src="../../assets/assets-admin/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src="../../assets/assets-admin/img/team-2.jpg"
                                    class="rounded-circle img-fluid border border-2 border-white">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="text-center mt-4">
                        <h5>
                            {{ auth()->user()->name }}
                        </h5>
                        <div class="h6 font-weight-300">
                            {{ auth()->user()->email }}
                        </div>
                        <div class="h6 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>
                            @if (auth()->user()->isAdmin == 1)
                                Administrator
                            @else
                                User
                            @endif
                            - Komunitas Ekspor Indonesia
                        </div>
                        {{-- <div>
                            <i class="ni education_hat mr-2"></i>University of Computer Science
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
