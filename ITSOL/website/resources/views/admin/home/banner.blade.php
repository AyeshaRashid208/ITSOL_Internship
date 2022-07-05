@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('add_banner')}}" method="post" enctype="multipart/form-data">
@csrf
    @if($errors->any())
    <div class = "alert alert-danger">
       @foreach($errors->all() as $error)
       <li>{{$error}}</li>
       @endforeach
    </div>
    @endif
<div class="x_panel">
    <div class="x_title">
      <h2 class="sub_title">Page Content</h2>
        <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
        </ul>
        
        <div class="clearfix"></div>
    </div>
        
        <div class="x_content">
                <div class="form-group has-feedback" style="position:relative;">
        
                <div class="table table-bordered">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                           <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->title}}</td>
                            <td>{{$users->description}}</td>
                            <td>
                                <img src="{{ asset('images/resource/'.$users->image) }}" width="100px" alt="Banner Image">
                            </td>
                            <td> <a href="{{url('edit_banner',[$users->id])}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
                            <a href="{{url('add_banner')}}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Create</a>
                           </td>

                        </tr>
                    </tbody>
                    </table>


                <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="title">

                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
               </div>
               <div class="form-group">
               <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                 </div>
                <br>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
                <button type="button" class="btn btn-primary">Update</button>
               

            </div>
           
         

           
                

        
                
        </div>
        
        
    
</div>

</form>
</div>


@endsection
@push('footer-scripts')
@endpush