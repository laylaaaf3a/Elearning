@extends('admin.main')
@section('contents')
    <div class="pagetitle">
        <h1>+ Courses</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Courses</li>
                <li class="breadcrumb-item active">+ Courses</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="/admin/course/store" method="post" class="mt-3">
                    @csrf
                    @method('POST')
                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-2">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-select">
                            <option value="">Pilih Category</option>
                            <option value="Technology & Software">Technology & Software</option>
                            <option value="Personal Development">Personal Development</option>
                            <option value="Health & Fitness">Health & Fitness</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control">
                    </div>

                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
