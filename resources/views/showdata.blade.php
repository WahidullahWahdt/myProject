

@extends('layout.master')
@section('main_content')
<table class="table">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <thead>

    <tr>
      <th scope="col">Name:</th>
      <th scope="col">Email:</th>
      <th scope="col">Category:</th>
    
      <th scope="col">Massage:</th>
     
    </tr>
    </thead>
    
    @foreach($data as $item)
    <tr>
  
      <td>{{$item->name }}</td>
      <td>{{$item->email }}</td>
      <td>{{$item->category}}</td> 
      <td>{{$item->massage}}</td> 
      <td>
        <!-- delete and update data -->
      
        <a href="{{route('delete',$item->id)}}" class="btn btn-danger" onClick="return confirm('Are you want to delete this student!')">Delete</a>
        <a href="{{route('update',$item->id)}}" class="btn btn-info" onClick="return confirm('Are you want to Edit this student!')">Edit</a>
       
      </td>
      
    </tr>
    
  
    @endforeach

  <tbody>

  </tbody>
  <!-- bootstrap javascript -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</table>
@endsection()