@extends('Post.Layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h2 class="text-center">Post Upload</h2>
                <form action="{{ url('postcreate') }}" method="post">
                   {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="author" id="author" class="form-control">
                    </div>
                      <div class="form-group">
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                      <div class="form-group">
                       <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                      <div class="form-group">
                        <input type="date" name="uploaddate" id="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
