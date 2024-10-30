@extends('layouts.master')
@section('title','Dashboard')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data User</h3>
                            <a class="btn btn-primary" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{$users->id}}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama User</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id="name"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $users->name}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $users->email}}"
                                    />
                                    <div class="mb-3">
                                    <label for="level" class="form-label">level</label>
                                    <input
                                        type="level"
                                        class="form-control"
                                        name="level"
                                        id="level"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $users->level}}"
                                    />
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection