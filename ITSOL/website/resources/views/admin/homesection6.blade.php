@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('add_homesection6')}}" method="post" enctype="multipart/form-data>
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
                  <label class="hws_form_label">Home section 6:</label>
                  <br>
                  <label for="title"> Main Heading</label> 
                <br><input type="text" name="heading" >
                <br>
                
                <label for="icon">Image</label> 
                <br>
                <input type="file" class="form-control" name="image"><br>
                
                <label for="title">Reviews</label>  
                <br>
                <textarea name="reviews" id="" cols="500" rows="10"></textarea> 
                <br>
                
                <label for="name">Name</label>  
                <br><input type="text" name="name" >
                
                <br>
                <label for="designation">Designation</label> 
                <br><input type="text" name="designation" > 
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