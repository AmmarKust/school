@push('css')
<script type="text/javascript">
	var thumbnail_height = "250";
	var thumbnail_width = "226";
</script>
<style type="text/css">
.sptb .form-control {
    padding: 0 .75rem !important;
}

.dhamall_title {
    text-align: center;
    background: #eee;
    padding: 15px 0;
}

.desc_head {
    font-size: 20px;
    color: #000;
}
</style>
@endpush
<input type="hidden" id="attached_file" <?php if(isset($seeker)){echo 'value="'.$seeker->attached_file.'"';} ?> name="attached_file">

<div class="controls">
  <div class="dhamall_title">
          <h3 class="desc_head mt30">Professional Informations</h3>
        </div>
        <hr>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                  {!! Form::select('sub_category', [''=>'Select Role']+dropdown(16), null, array('class'=>'form-control', 'id'=>'sub_category', 'required'=>'required')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'sub_category') !!}
              </div>
            </div>
            <div class="col-md-4">
                          <div class="form-group">
                            
                            {!! Form::select('country', [''=>'Select Country']+dropdown(11), null, array('class'=>'form-control select2', 'id'=>'country', 'required'=>'required')) !!}
                            {!! APFrmErrHelp::showErrors($errors, 'country') !!}
                             </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            
                            <span id="dd-states">
                              {!! Form::select('state', [''=>'Select State'], null, array('class'=>'form-control select2', 'id'=>'state', 'required'=>'required')) !!}
                            </span>
                            
                            {!! APFrmErrHelp::showErrors($errors, 'state') !!}
                             </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                           
                            <span id="dd-cities">
                            {!! Form::select('city', [''=>'Select City'], null, array('class'=>'form-control select2', 'id'=>'city', 'required'=>'required')) !!}
                            </span>
                            {!! APFrmErrHelp::showErrors($errors, 'city') !!}
                             </div>
                        </div>
            <div class="col-lg-12">
              <div class="form-group  ">
                {!! Form::text('looking_for', null, array('class'=>'form-control', 'id'=>'looking_for', 'placeholder'=>'Describe the job you are looking for', 'required'=>'required')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'looking_for') !!}
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-group  ">
                {!! Form::select('gender', [''=>'Select Gender']+dropdown(20), null, array('class'=>'form-control', 'id'=>'gender', 'required'=>'required')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'gender') !!}
              </div>
            </div>


            
          </div>
          <div id="dynamic_form">
          <div class="dhamall_title">
            <h3 class="desc_head mt30">Work Experience</h3>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group  ">
                {!! Form::text('company', null, array('class'=>'form-control', 'id'=>'company', 'placeholder'=>'Company Name', 'required'=>'required')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'company') !!}
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-group  ">
                {!! Form::text('position', null, array('class'=>'form-control', 'id'=>'position', 'placeholder'=>'Current Position', 'required'=>'required')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'position') !!}
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group  ">
                {!! Form::select('career_level', [''=>'Career Level']+dropdown(21), null, array('class'=>'form-control', 'id'=>'career_level', 'required'=>'required')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'career_level') !!}
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group  ">
                {!! Form::select('work_experience', [''=>'Work Experience']+dropdown(18), null, array('class'=>'form-control', 'id'=>'work_experience', 'required'=>'required')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'work_experience') !!}
              </div>
            </div>
            <?php 
              $years_range = range(1900, strftime("%Y", time()));
              $years = array();
              foreach ($years_range as $key => $year) {
                 $years[$year] = $year;
              } 
            ?>
            <div class="col-lg-6">
              <div class="form-group  ">
                {!! Form::select('from_year', [''=>'From Year ']+$years, null, array('class'=>'form-control', 'id'=>'from_year', 'required'=>'required')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'from_year') !!}
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group  ">
                {!! Form::select('to_year', [''=>'To Year ']+$years, null, array('class'=>'form-control', 'id'=>'to_year', 'required'=>'required')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'to_year') !!}
              </div>
            </div>

            <div class="col-lg-12">
              <div class="button-group text-right">
                <label class="input-group-append"></label>
                  <a href="javascript:void(0)" class="btn btn-primary" id="plus">+ Add Work Experience</a>
                  <a href="javascript:void(0)" class="btn btn-danger" id="minus">- Remove Work Experience</a>
              </div>
             <br> 
            </div>

           
            </div>
          
          </div>
          <div class="dhamall_title">
            <h3 class="desc_head mt30">Personal Information</h3>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                {!! Form::text('skills', null, array('class'=>'form-control', 'id'=>'skills', 'placeholder'=>'Your  Skills', 'required'=>'required')) !!}
                   
                  
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                {!! APFrmErrHelp::showErrors($errors, 'skills') !!}
                  {!! Form::select('education_level', [''=>'Education Level']+dropdown(17), null, array('class'=>'form-control', 'id'=>'education_level', 'required'=>'required')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'education_level') !!}
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                {!! Form::text('desired_salary', null, array('class'=>'form-control', 'id'=>'desired_salary', 'placeholder'=>'Desired Salary', 'required'=>'required')) !!}
                   
                  {!! APFrmErrHelp::showErrors($errors, 'desired_salary') !!}
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                {!! Form::text('name', Auth::guard('applicant')->user()->name, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Full Name', 'required'=>'required')) !!}
                   
                  {!! APFrmErrHelp::showErrors($errors, 'email') !!}
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                {!! Form::text('email', Auth::guard('applicant')->user()->email, array('class'=>'form-control', 'id'=>'email', 'readonly'=>'readonly', 'placeholder'=>'Email Address', 'required'=>'required')) !!}
                   
                  {!! APFrmErrHelp::showErrors($errors, 'email') !!}
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                {!! Form::text('contact', null, array('class'=>'form-control', 'id'=>'contact', 'placeholder'=>'Contact', 'required'=>'required')) !!}
                   
                  {!! APFrmErrHelp::showErrors($errors, 'contact') !!}
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                {!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'description', 'placeholder'=>'Enter Description', 'required'=>'required')) !!}
                   
                  {!! APFrmErrHelp::showErrors($errors, 'description') !!}
              </div>
            </div>
            
          </div>
          <div class="dhamall_title">
            <h3 class="desc_head mt30">Upload Your Cv</h3>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                  <input type="file" name="image" id="filer_input1">
                </div>
            </div>

            <div class="col-lg-12 contact-wrap">
              <div class="contact-btn">
                <button type="submit" class="sub">Update Your Informations</button>
              </div>
            </div>
          </div>
        </div>
@push('js')
<script type="text/javascript">
	<?php if(isset($seeker) && null!==($seeker->attached_file)){ $realfile = public_path('images/'.$seeker->attached_file);?>

		var file_size = "{{filesize($realfile)}}";
	<?php } ?>
</script>
<script src="{{asset('admin/assets/pages/filer/jquery.cvuploads.init.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://www.jqueryscript.net/demo/dynamic-forms-fields/js/dynamic-form.js"></script>
@include('admin.ckeditor.index')

@include('includes.cityStateCountryapplicant')
<script type="text/javascript">
  

  images_limit = 1;
	$(document).ready(function() {
	 	if ($(".form").length > 0) {
            $(".form").validate({
                validateHiddenInputs: true,
                ignore: "",

                rules: {
                    sub_category: {
                        required: true,
                    },
                    country: {
                        required: true,
                    },
                    city: {
                        required: true,
                    },
                    looking_for: {
                        required: true,
                    },
                    gender: {
                        required: true,
                    },
                    skills: {
                        required: true,
                    },
                    required: {
                        required: true,
                    },
                    desired_salary: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    contact: {
                        required: true,
                    },
                },
            })
        }
    })
  $(document).ready(function() {
    var dynamic_form = $("#dynamic_form").dynamicForm("#dynamic_form", "#plus", "#minus", {
        limit: 10,
        formPrefix: "dynamic_form",
        normalizeFullForm: false,
        // JSON data which will prefill the form
        //data: [{reference_links:'ttttttt'}]

    });
    @if(isset($seeker))
    dynamic_form.inject({!!$seeker->work_experience!!});
    @else
    dynamic_form.inject();
    @endif
    //dynamic_form.inject([{p_name: 'Hemant',quantity: '123',remarks: 'testing remark'},{p_name: 'Harshal',quantity: '123',remarks: 'testing remark'}]);

    $("#dynamic_form #minus").on('click', function() {
        var initDynamicId = $(this).closest('#dynamic_form').parent().find(
                "[id^='dynamic_form']")
            .length;
        if (initDynamicId === 2) {
            $(this).closest('#dynamic_form').next().find('#minus').hide();
        }
        $(this).closest('#dynamic_form').remove();
    });

    $('form').on('submit', function(event) {
        var values = {};
        $.each($('form').serializeArray(), function(i, field) {
            values[field.name] = field.value;
        });
        console.log(values)
        //event.preventDefault();
    })
});

</script>

@endpush