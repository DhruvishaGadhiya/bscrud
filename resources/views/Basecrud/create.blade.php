@extends('welcome')
@section('content')
    <div class="container">
        <form action="{{route('Basecrud.store')}}"  enctype="multipart/form-data" method="POST">
            @csrf
           
            <div class="form-group mt-4">
                <label for="Name" class="form-label">Name:</label> 
                 <input type="text" class="form-control" name="name" id="Name">
              </div>

              <div class="form-group mt-4">
                <label class="form-label">Gender&nbsp;:</label><br>
                <input type="radio" name="status" value="male" >male
                <input type="radio" name="status" value="female" >female
            </div>

            <div class="form-group mt-4">
                <label class="form-label">Hobby&nbsp;:</label><br>
                <input type="checkbox" name="hobby[]" id="Dance" value="Dance" >Dance
                <input type="checkbox" name="hobby[]" id="Music" value="Music" >Music
                <input type="checkbox" name="hobby[]" id="Cricket" value="Cricket" >Cricket
            </div>

            <div class="form-group mt-4">
                <label for="Name" class="form-label">Image</label> 
                 <input type="file"  name="image" id="Name">
              </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection