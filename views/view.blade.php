@extends('layouts.app')
@section('content')

<div class="container" >
  <h1>Dashboard</h1>
  <div class="float-right mb-5">
    <a class="btn btn-info" href="{{url('/create')}}">Add </a>   
  </div>
   

    <table class="table">
        <thead>
          <tr>
            <th scope="col" >Id</th>
            <th scope="col" >Fullname</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($students as $student)               
           
          <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->fullname}}</td>
          <td>{{$student->email}}</td>
          <td>{{$student->password}}</td>
          <td ><a href="{{ route('edit',$student->id)}}" class="btn btn-info">Edit</a>
        
          <a type="submit" class="btn btn-danger" onclick="if(confirm('are you sure want to delete?')){ event.preventDefault(); 
          document.getElementById('delete-form-{{$student->id}}').submit();} else{event.preventDefault();}">delete</a></td>

<form method="POST" id="delete-form-{{$student->id}}" action="{{route('delete', $student->id)}}">
  {{ csrf_field() }}
  {{method_field('delete')}}          
  </form>              
                     
          </tr> 
          
          @endforeach

        </tbody>
      </table>
</div>

@endsection