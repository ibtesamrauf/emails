@extends('layouts.app')
@section('content')
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="container">
        <div class="col-md-12">  
            <p>Total number of emails: {{ $total_email }}</p>
            <table class="table table-striped">
                <thead>
                    <th>S.no</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($email as $key => $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->email }}</td>
                        </tr>       
                    @endforeach
                </tbody>
            </table>
            {!! $email->render() !!}
        </div>
    </div>
@endsection