@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('display_banner')}}" method="post" enctype="multipart/form-data">
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

                    
                </div>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                         
        </div>
        
        
    
</div>

</form>
</div>


@endsection
@push('footer-scripts')
@endpush