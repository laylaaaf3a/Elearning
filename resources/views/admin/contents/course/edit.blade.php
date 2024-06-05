@extends('admin.main')
@section('contents')
    <div class="pagetitle">
        <h1>Edit Course</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Course</li>
                <li class="breadcrumb-item active">Edit Course</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="/admin/course/update/{{ $course->id }}" method="post" class="mt-3">
                  @csrf
                  @method('PUT')
                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $course->name ?? '' }}">
                    </div>

                    <div class="mb-2">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-select">
                            <option value="">Pilih Category</option>
                        <option value="Technology & Software" {{ $course->category == 'Technology & Software' ? 'selected' : '' }}>Technology & Software</option>
                            <option value="Personal Development" {{ $course->category == 'Personal Development' ? 'selected' : '' }}>Personal Development</option>
                            <option value="Health & Fitness" {{ $course->category == 'Health & Fitness' ? 'selected' : '' }}>Health & Fitness</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ $course->description ?? '' }}">
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection