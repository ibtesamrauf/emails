@extends('layouts.app')
@section('content')
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="container">
        <div class="col-md-2"></div>  
        <div class="col-md-8">  
            {!! Form::open(array('url' => '/insert_email','files'=>'true')) !!}
            
                <div class="form-group {{ $errors->has('csv_file') ? ' has-error' : ''  }}" >
                    <label for="csv_file">Select Emails csv file to upload.</label>
                    {!! Form::file('csv_file',array('class' => 'form-control')) !!}
                    @if ($errors->has('csv_file'))
                        <div class="text-danger">{{ $errors->first('csv_file') }}</div>
                    @endif
                </div>
                {!! Form::submit('Upload File',array('class' => 'btn btn-success')) !!}

            {!! Form::close() !!}
        </div>
        <div class="col-md-2"></div>  
    </div>
@endsection