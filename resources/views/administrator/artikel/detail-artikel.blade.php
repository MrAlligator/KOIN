@extends('layout.main-admin')
@section('container')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">{{ $title }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="card">
            <div class="card-header">
                <h5>Detail Artikel</h5>
            </div>
            <div class="card-body">
                <article class="mb-5">
                    <h2>{{ $post->title }}</h2>
                    {!! $post->body !!}
                </article>
            </div>
            <div class="card-footer">
                <div class="text-right">
                    <a href="/administrator/artikel" class="btn btn-info">Kembali ke Halaman Artikel</a>
                </div>
            </div>
        </div>
    </div>
@endsection
