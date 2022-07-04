@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('add_servicesection4')}}" method="post" enctype="multipart/form-data">
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
                <label for="formGroupExampleInput">Tab 2 Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tab_two_name">
                </div>
                
                <div class="form-group">
                <label for="formGroupExampleInput">Plan 1 Main Heading</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="plan_one_heading">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan 1 Main description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="plan_one_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan one Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="price_one">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan one Feature 1</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="feature_one">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan one Feature 2</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="feature_two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan one Feature 3</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="feature_thr">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan one Feature 4</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="feature_four">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Recomendation</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="recom">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan 2 Main Heading</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="plan_two_heading">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan 2 Main description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="plan_two_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan two Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="price_two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan two Feature 1</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="P_feature_one">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan two Feature 2</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="P_feature_two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan two Feature 3</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="P_feature_thr">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan two Feature 4</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="P_feature_four">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan 3 Main Heading</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="plan_thr_heading">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan 3 Main description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="plan_thr_desc">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan three Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="price_thr">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan three Feature 1</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="Pt_feature_one">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan three Feature 2</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="Pt_feature_two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan three Feature 3</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="Pt_feature_thr">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Plan three Feature 4</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="Pt_feature_four">
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