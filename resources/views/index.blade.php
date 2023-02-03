@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull=left">
                <h2>Simple crud  step </h2>
</div>
</div>
</div>
<div class="row" align="left">
    <div class="pull-right">
        <a class="btn btn-success" href="{{route('student.create')}}">Register stundents</a>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-sucess">
    <p>{{$message}}</p> 
</div>
@endif 

<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>phone</th>
        <th>address</th>
        <th>options</th>
    <tr>
    
     @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->adress }}</td>
        <td>
            <form method="POST" action="{{ route('student.destroy',$student->id)}}">
                @csrf
                <a class="btn btn-primary" href="{{ route('student.edit' ,$student->id)}}">EDIT</a>
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input type="submit" class="btn btn-danger delete-user" value="Delete" >
            </form>
    </td>
</tr>

    @endforeach 

</table>



</table>


    
