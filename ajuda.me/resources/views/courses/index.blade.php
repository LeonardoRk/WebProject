@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Courses
                </div>
                <div>
                    <form action="/courses/filter" method="POST"> 
                        {{ csrf_field() }}
                        <div class="col-md-3" >
                            <input class="form-control" type="text" maxlength="6" placeholder="ID" name="id" >
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Name" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary">  search</button>
                    </form> 
                </div>

                <div class="panel-body">
                    <table align="left">
                        @if (count($courses) != 0)
                            <th> </th>
                            <th></th>
                            <th>ID</th>
                            <th>Name</th>
                        @else
                            <!-- Nothing to show -->
                        @endif
                        @foreach ($courses as $course)
                            <tr>
                                <td width="10%" >
                                    <a href="{{URL::to('/course/'.$course->id) }}" class="btn btn-danger">
                                        Delete
                                    </a>
                                </td width="10%" >
                                <td>
                                    <a href="{{URL::to('/courses/edit/'.$course->id)}}" class="btn btn-info">
                                        Edit
                                    </a>
                                </td>
                                <td width="10%">
                                    {{ $course->id }}
                                </td>
                                <td width="50%">
                                    <a href="/courses/{{$course->id}}">
                                        {{ $course->name }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="panel-body" >
                    <a href="/courses/create" class="btn btn-success" >
                        Create new course
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
