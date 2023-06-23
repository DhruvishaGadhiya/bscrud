@extends('welcome')
@section('content')
    <div class="container">
        <form action="{{route('Basecrud.update')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="form-group mt-4">
            <input type="hidden" name="id" id="id" value="{{$data->id}}">            
            <input type="text" class="form-control" name="name" id="Name" placeholder="Enter Name" value="{{$data->name}}"><br>
            
            <label class="form-label">Gender&nbsp;:</label>
            <input type="radio"  name="status" id="Name"  value="male"{{($data->status == 'male'? 'checked':'')}}>male
            <input type="radio"  name="status" id="Name"  value="female"{{($data->status == 'female'? 'checked':'')}}>female<br><br> 
            
            <label class="form-label">Hobby&nbsp;:</label><br>
            <input type="checkbox"  name="hobby[]" id="Name"  value="Dance">Dance
            <input type="checkbox"  name="hobby[]" id="Name"  value="Music">Music
            <input type="checkbox"  name="hobby[]" id="Name"  value="Cricket">Cricket<br><br>

            <label for="Name" class="form-label">Image</label> 
            <span><img src="{{asset('image/'.$data->image)}}" style="height:50px;width:50px;"></span><br><br>
          
            <label for="Name" class="form-label">New Image</label> 
                 <input type="file"  name="image" id="Name">

        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

    </div>
@endsection