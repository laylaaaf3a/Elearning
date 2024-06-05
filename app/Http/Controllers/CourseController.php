<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){
       $courses = Course::all();
 
    // manggil course
    return view('admin.contents.course.index',[
        'courses' => $courses,
    ]);
    }

    // Method untuk Menampilkan Form Tambah Course
    public function create()
    {
        return view('admin.contents.course.create');
    }

    // Method untuk Menyimpan Data Baru
    public function store(Request $request)
    {
        // Validasi Request
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        // Simpan ke Database
        Course::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        // Kemballikan ke Halaman Course
        return redirect('/admin/course')->with('message', 'Berhasil Menambahkan Course');
    }

    // Method untuk Menampilkan Halaman Edit
    public function edit($id)
    {
        // Cari Data Course Berdasarkan ID
        $courses = Course::find($id); // Select * From Course WHERE id = $id;

        return view('admin.contents.course.edit', [
            'course' => $courses
        ]);
    }

    // Method untuk Menyimpan Hasil Update    
    public function update($id, Request $request)
    {
        // Cari Data Course Berdasarkan ID
        $courses = Course::find($id); // Select * From Course WHERE id = $id;

        // Validasi Request
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);

        // Simpan ke Perubahan
        $courses->update([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        // Kemballikan ke Halaman Course
        return redirect('/admin/course')->with('message', 'Berhasil Mengedit Courses');
    }

    // Method untuk Menghapus Courses
    public function destroy($id){
        // Cari Data Courses Berdasarkan ID
        $courses = Course::find($id); // Select * From Courses WHERE id = $id;

        // Hapus Courses
        $courses->delete();

        // Kembalikan ke Halaman Courses
        return redirect('/admin/course')->with('message', 'Berhasil Mengedit Courses');
    }
}
