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

// app/Http/Controllers/Api/TaskApiController.php

public function store(Request $request) {
    \App\Models\Task::create([
        'user_id' => auth()->id(),
        'title' => $request->title,
        'description' => $request->description,
        'priority' => $request->priority,
        'deadline' => $request->deadline,
    ]);

    return redirect('/home'); // Pakai cara manual ini biar pasti balik ke dashboard
}
// Fungsi untuk Update
public function update(Request $request, $id) {
    $task = Task::findOrFail($id);
    $task->update([
        'title' => $request->title,
        'description' => $request->description,
        'priority' => $request->priority,
        'deadline' => $request->deadline,
    ]);

    return redirect('/home')->with('success', 'Tugas berhasil diperbarui!');
}

// Fungsi untuk Delete
public function destroy($id) {
    $task = Task::findOrFail($id);
    $task->delete();

    return redirect('/home')->with('success', 'Tugas berhasil dihapus!');
}
}
