@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('add_aboutsection4')}}" method="post" enctype="multipart/form-data">
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
                <div class="form-group">
                <label for="formGroupExampleInput">Message</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="message">
                </div> 
                <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="title">
                </div> 
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
               </div>
               <div class="form-group">
                <label for="formGroupExampleInput">Heading 1</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="first_heading">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Heading 1 Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="first_description"></textarea>
               </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Heading 2</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="second_heading">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Heading 2 Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="second_description"></textarea>
               </div>
               <div class="form-group">
                <label for="formGroupExampleInput">Heading 3</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="third_heading">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Heading 3 Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="third_description"></textarea>
               </div>

               <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                 </div>
                 
                
                <br>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </div>
           
         

           
                

        
                
        </div>
        
        
    
</div>

</form>
</div>


@endsection
@push('footer-scripts')
@endpush