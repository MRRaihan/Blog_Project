@extends('layouts.admin.master')
@section('title', 'Post Details')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">View Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">View Post</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">View Post</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-pimary">
                            <tbody>
                                <tr>
                                    <th style="width: 200px">Image</th>
                                    <td>
                                        <div style="max-width: 300px; max-height:300px;overflow:hidden">
                                            <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Title</th>
                                    <td>{{ $post->title }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Category Name</th>
                                    <td>{{ $post->category->name }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Post Tags</th>
                                    <td>
                                        @foreach($post->tags as $tag)
                                            <span class="badge badge-primary">{{ $tag->name }} </span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Author Name</th>
                                    <td>{{ $post->author->name }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Description</th>
                                    <td>{!! $post->description !!}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Published date</th>
                                    <td>{!! $post->published_at->format('Y-m-d,  H:i:s') !!}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Status</th>
                                    <td>{!! ucfirst($post->status) !!}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-footer text-right">
                            <a href="{{ route('post.index') }}"  class="btn btn-lg btn-dark">Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
