@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('add_homesection3')}}" method="post" enctype="multipart/form-data">
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
                <label for="formGroupExampleInput">Main Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="main_title">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 1 Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_one_name">
                </div>
                <label for="formGroupExampleInput">Tab 2 Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_two_name">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 3 Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_three_name">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 1 Main Heading</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_one_heading">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 1 Main description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_one_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 1 Sub Heading 1</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_one_sub_heading_one">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 1 Sub Heading 1 Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_one_sub_heading_one_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 1 Sub Heading 2</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_one_sub_heading_two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 1 Sub Heading 2 Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_one_sub_heading_two_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 1 Sub Heading 3</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_one_sub_heading_three">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 1 Sub Heading 3 Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_one_sub_heading_three_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 2 Main Heading</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_two_heading">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 2 Main description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_two_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 2 Sub Heading 1</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_two_sub_heading_one">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 2 Sub Heading 1 Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_two_sub_heading_one_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 2 Sub Heading 2</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_two_sub_heading_two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 2 Sub Heading 2 Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_two_sub_heading_two_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 2 Sub Heading 3</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_two_sub_heading_three">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 2 Sub Heading 3 Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_two_sub_heading_three_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 3 Main Heading</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_thr_heading">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 3 Main description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_thr_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 3 Sub Heading 1</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_thr_sub_heading_one">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 3 Sub Heading 1 Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_thr_sub_heading_one_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 3 Sub Heading 2</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_thr_sub_heading_two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 3 Sub Heading 2 Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_thr_sub_heading_two_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 3 Sub Heading 3</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_thr_sub_heading_three">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tab 3 Sub Heading 3 Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_thr_sub_heading_three_desc">
                </div>

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