@extends('master')
@section('title')
    Manage Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <div class="row">
                                <div class="card-header fw-bold display-6 text-info text-center">Manage Category</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-success text-center">{{ Session::get('message') }}</p>
                            <p class="text-danger text-center">{{ Session::get('message_delete') }}</p>
                            <table class="table table-bordered table-hover table-dark  table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Blog Category</th>
                                    <th>Blog Title</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $categories[--$blog->category_id]->name }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td >{{substr( $blog->short_description , 0, 35).'...' }}</td>
                                        <td>{{ substr( $blog->long_description , 0, 35).'..'  }}</td>
                                        <td><img src="{{ asset($blog->image) }}" alt="" height="50" width="70"></td>
                                        <td style="width:15%">
                                            <a href="{{ route('blog.edit', ['id'=>$blog->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('blog.delete', ['id'=>$blog->id]) }}" onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
