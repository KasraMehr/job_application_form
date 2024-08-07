@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <a href="{{route('questions.index')}}"><button class="btn btn-primary btn-sm"> questions</button></a>
                        <br><hr><br>
                        <a href="{{route('test')}}"><button class="btn btn-info btn-sm"> take a test</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
