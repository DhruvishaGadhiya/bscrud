@extends('welcome')
@section('content')
    <div class="container">
        <a href="{{route('Basecrud.create')}}" class="btn btn-outline-success mt-4 float-end">
          <b>Add</b></a>

        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Hobby</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->name}}</td>
                  <td>{{$item->status}}</td>
                  <td>{{$item->hobby}}</td>
                  <td><img src="{{asset('image/'.$item->image)}}" style="height:50px;width:50px;"></td>
                  <td><a href="/edit/{{$item->id}}">Edit</a>
                    <a href="delete/{{$item->id}}">Delete</a>
                  </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
@endsection