@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit course</div>
                <div class="panel-body">
                    <form class="" action="/courses" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="inputId">ID:</label>
                            <input type="text" name="id" maxlength="6" class="form-control" id="inputId" placeholder="leo">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Name:</label>
                            <input type="text" name="name" class="form-control" id="inputName" placeholder="texto2">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
