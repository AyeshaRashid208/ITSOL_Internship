@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('add_homesection5')}}" method="post" enctype="multipart/form-data>
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
                  <label class="hws_form_label">Home section 5:</label>
                  <br>
                  <label for="title">Title</label> 
                <br><input type="text" name="title" >
                <br>
                <br>
                <label for="title">Discription</label>  
                <br>
                <textarea name="description" id="" cols="500" rows="10"></textarea> 
                <br>
                <br>
                <label for="icon">Image</label> 
                <input type="file" class="form-control" name="image"><br>
                <br>
                <br>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                <input type="submit" name="Submit">
            </div>
            

        
                
        </div>
          
</div>

</form>
</div>


@endsection
@push('footer-scripts')
@endpush