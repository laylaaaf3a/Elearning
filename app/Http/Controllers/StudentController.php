<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // methode untuk menampilkan data student
    public function index(){
        // tarik data dari database
        $students = Student::all();

        // panggil view dan kirim data students
        return view('admin.contents.student.index', [
            'students' => $students,
        ]);
    }

    // Method untuk Menampilkan Form Tambah Student
    public function create()
    {
        //mendapatkan data courses
        $courses = Course::all();

        // panggil view
        return view('admin.contents.student.create',[
            'courses' => $courses,
        ]);
    }

    // Method untuk Menyimpan Data Baru
    public function store(Request $request)
    {
        // Validasi Request
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'courses_id' => 'nullable',
        ]);

        // Simpan ke Database
        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'courses_id' => $request->courses_id,
        ]);

        // Kemballikan ke Halaman Student
        return redirect('/admin/student')->with('message', 'Berhasil Menambahkan Student');
    }

    // Method untuk Menampilkan Halaman Edit
    public function edit($id)
    {
        // Cari Data Student Berdasarkan ID
        $student = Student::find($id); // Select * From Students WHERE id = $id;

        $courses = Course::all();

        return view('admin.contents.student.edit', [
            'student' => $student,
            'courses' => $courses,
        ]);
    }

    // Method untuk Menyimpan Hasil Update    
    public function update($id, Request $request)
    {
        // Cari Data Student Berdasarkan ID
        $student = Student::find($id); // Select * From Students WHERE id = $id;

        // Validasi Request
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'courses_id' => 'nullable',
        ]);

        // Simpan ke Perubahan
        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'courses_id' => $request->courses_id,
        ]);

        // Kemballikan ke Halaman Student
        return redirect('/admin/student')->with('message', 'Berhasil Mengedit Student');
    }

    // Method untuk Menghapus Student
    public function destroy($id){
        // Cari Data Student Berdasarkan ID
        $student = Student::find($id); // Select * From Students WHERE id = $id;

        // Hapus Student
        $student->delete();

        // Kembalikan ke Halaman Student
        return redirect('/admin/student')->with('message', 'Berhasil Mengedit Student');
    }
}

