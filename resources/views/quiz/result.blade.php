@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>You've got {{$test_result}} out of 10</h1><br><br><hr>

                            <div style="align-content: center">
                                <a style="margin-left: 45%" href="{{route('home')}}"><button class="btn btn-info btn-sm">Dashboard</button></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
