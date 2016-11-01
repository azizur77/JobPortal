@extends('layouts.master')
@section('title')
Post New Job
@endsection
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Post New Job</h5>
            </div>
            <div class="ibox-content">
                {!! Form::open(array('url'=>'admin/job/post-new-job', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'role'=>'form')) !!}
                    <div class="form-group <?php  if($errors->has('jobTitle')){ echo 'has-error'; }?> ">
                        <label for="jobTitle" class="col-lg-3 control-label">
                           Job Title
                        </label>
                        <div class="col-lg-9">
                            <input type="text" name="jobTitle" id="jobTitle" value="{{ Input::old('jobTitle') }}" placeholder="Title" class="form-control">
                            @if ($errors->has('jobTitle')) <p class="help-block m-b-none">{{ $errors->first('jobTitle') }}</p> @endif
                        </div>
                    </div>
                    <div class="form-group <?php  if($errors->has('departmentId')){ echo 'has-error'; }?> ">
                        <label for="departmentId" class="col-lg-3 control-label">
                            Department
                        </label>
                        <div class="col-lg-9">
                            <select name="departmentId" id="departmentId" class="form-control">
                                <option value="">Select a Department</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->autoGeneratedDepartmentId }}">{{ $department->departmentName }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('departmentId')) <p class="help-block m-b-none">{{ $errors->first('departmentId') }}</p> @endif
                        </div>
                    </div>
                    <div class="form-group <?php  if($errors->has('deadline')){ echo 'has-error'; }?> ">
                        <label for="deadline" class="col-lg-3 control-label">
                            Deadline
                        </label>
                        <div class="col-lg-9">
                            <input type="date" name="deadline" id="deadline" value="{{ Input::old('deadline') }}" placeholder="Deadline" class="form-control">
                            @if ($errors->has('deadline')) <p class="help-block m-b-none">{{ $errors->first('deadline') }}</p> @endif
                        </div>
                    </div>
                    <div class="form-group <?php  if($errors->has('jobDescription')){ echo 'has-error'; }?> ">
                        <label for="jobDescription" class="col-lg-3 control-label">
                            Description
                        </label>
                        <div class="col-lg-9">
                            <textarea placeholder="Description" name="jobDescription" id="jobDescription" class="form-control">{{ Input::old('jobDescription') }}</textarea>
                            @if ($errors->has('jobDescription')) <p class="help-block m-b-none">{{ $errors->first('jobDescription') }}</p> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-9">
                            <button class="btn btn-sm btn-white" type="submit">Post Job</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection