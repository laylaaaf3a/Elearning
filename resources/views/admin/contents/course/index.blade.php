@extends('admin.main')
@section('contents')
    <div class="pagetitle">
        <h1>Courses</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item active">Course</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="/admin/course/create" class="btn btn-primary mt-3">+ Courses</a>
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($courses as $course)
                        <tr>
                            <td>1</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->category }}</td>
                            <td>{{ $course->description }}</td>
                            <td>
                                <a href="/admin/course/edit/{{ $course->id }}" class="btn btn-primary me-2">Edit</a>
                        <form action="/admin/course/delete/{{ $course->id }}" method="post">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                        </form>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection
