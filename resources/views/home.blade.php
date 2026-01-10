@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2 class="fw-bold" style="color: #0d1b2a;">Kelola Tugasmu dengan Mudah</h2>
            <p class="text-muted">Catat, atur prioritas, dan selesaikan semua tugasmu dalam satu tempat</p>

            <div class="mt-4">
                <button class="btn w-100 py-3 text-white fw-bold shadow-sm"
                        style="background-color: #4B2C6D; border: none; border-radius: 8px;"
                        data-bs-toggle="modal" data-bs-target="#modalTambah">
                    + Tambah Tugas Baru
                </button>
            </div>

            <div class="mt-5" id="task-list">
                </div>
        </div>
    </div>
</div>
@endsection
