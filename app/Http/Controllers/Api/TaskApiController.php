<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskApiController extends Controller
{
    // API untuk ambil semua tugas
    public function index() {
        $tasks = Task::where('user_id', auth()->id())->get();
        return response()->json(['success' => true, 'data' => $tasks], 200);
    }

    // API untuk simpan tugas baru (sesuai input di gambar)
    public function store(Request $request) {
        $task = Task::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'deadline' => $request->deadline,
        ]);
        return response()->json(['message' => 'Tugas berhasil dibuat', 'data' => $task], 201);
    }
}
