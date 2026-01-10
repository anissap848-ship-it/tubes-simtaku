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
                    <div class="mt-5">
   @foreach($tasks as $task)
<div class="card mb-3 shadow-sm border-0 text-start" style="border-radius: 15px; border-left: 5px solid #4B2C6D;">
    <div class="card-body d-flex justify-content-between align-items-center">
        <div>
            <h5 class="fw-bold mb-1">{{ $task->title }}</h5>
            <p class="text-muted small mb-2">{{ $task->description }}</p>
            <span class="badge bg-danger-subtle text-danger rounded-pill px-3">{{ $task->priority }}</span>
            <span class="ms-2 text-muted small">{{ $task->deadline }}</span>
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-sm btn-outline-primary border-0"
                    data-bs-toggle="modal"
                    data-bs-target="#modalEdit{{ $task->id }}">
                <i class="bi bi-pencil-square"></i> Edit
            </button>

            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus tugas ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger border-0">
                    <i class="bi bi-trash"></i> Hapus
                </button>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEdit{{ $task->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">Edit Tugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="fw-bold">Judul</label>
                        <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="fw-bold">Prioritas</label>
                            <select name="priority" class="form-select">
                                <option value="Sedang" {{ $task->priority == 'Sedang' ? 'selected' : '' }}>Sedang</option>
                                <option value="Tinggi" {{ $task->priority == 'Tinggi' ? 'selected' : '' }}>Tinggi</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="fw-bold">Deadline</label>
                            <input type="date" name="deadline" class="form-control" value="{{ $task->deadline }}" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="submit" class="btn text-white" style="background-color: #4B2C6D;">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
</div>
            </div>

            <div class="mt-5" id="task-list">
                </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="modalTambahLabel">Tugas Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="fw-bold">Judul Tugas</label>
                        <input type="text" name="title" class="form-control" placeholder="Masukkan judul tugas..." required>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Masukkan deskripsi tugas..."></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="fw-bold">Prioritas</label>
                            <select name="priority" class="form-select">
                                <option value="Sedang">Sedang</option>
                                <option value="Tinggi">Tinggi</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="fw-bold">Deadline</label>
                            <input type="date" name="deadline" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white" style="background-color: #4B2C6D; padding: 10px 25px;">Simpan Tugas</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
