<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments; // Model comments

class CommentsController extends Controller
{
    // Menampilkan halaman komunitas beserta komentar
    public function index()
    {
        // Ambil semua komentar dari database
        $comments = comments::orderBy('created_at', 'desc')->get();

        // Kirim data ke view
        return view('community', compact('comments'));
    }

    // Mengupdate komentar yang ada
public function update(Request $request, $id)
{
    $request->validate([
        'user_name' => 'required|string|max:255',
        'reply' => 'required|string|max:1000',
    ]);

    $comment = comments::findOrFail($id);
    $comment->update($request->all());

    return redirect()->route('comments.index')->with('success', 'Comment updated successfully!');
}

// Menghapus komentar
public function destroy($id)
{
    $comment = comments::findOrFail($id);
    $comment->delete();

    return redirect()->route('comments.index')->with('success', 'Comment deleted successfully!');
}


    // Menyimpan komentar baru ke database
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'user_name' => 'required|string|max:255',
            'reply' => 'required|string|max:1000',
        ]);

        // Simpan data ke database
        comments::create([
            'user_name' => $request->input('user_name'),
            'reply' => $request->input('reply'),
        ]);

        // Redirect ke halaman komunitas dengan pesan sukses
        return redirect()->route('comments.index')->with('success', 'Comment posted successfully!');
    }
}