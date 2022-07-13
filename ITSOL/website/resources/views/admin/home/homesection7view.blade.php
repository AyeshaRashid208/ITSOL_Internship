@extends('admin.layout')
@section('content')
<div class="row">

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
                
                <a href="{{ url('create_homesection7') }}" class="btn btn-primary float-end">Add New</a>
                <br>
                <div class="table table-bordered">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Blog Image</th>
                           <th scope="col">Blog Title</th>
                            <th scope="col">Author image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Post Time</th>
                            
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($info as $info)
                        <tr>
                            <td>{{$info->id}}</td>
                            <td>
                                <img src="{{ asset('images/resource/'.$info->image) }}" width="100px" width="50px" alt="Image">
                            </td>
                            <td>{{$info->title}}</td>
                            <td>
                                <img src="{{ asset('images/resource/'.$info->author_image) }}"  width="50px" alt="Image">
                            </td>
                            <td>{{$info->name}}</td>
                            <td>{{$info->time}}</td>
                            
                            <td> <a href={{"edit_homesection7/".$info['id']}} class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
                            <a href="del_homesection7/{{ $info->id }}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Delete</a>
                           <!-- <a href="{{url('view_banner')}}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Delete</a> -->
                           </td>

                        </tr>
                    @endforeach
                    </tbody>
                    </table>



        
                
        </div>
        
        
    
</div>

</form>
</div>


@endsection
@push('footer-scripts')
@endpush