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

                        <form method="POST" action="{{ route('test_res') }}">
                            @csrf
                            @foreach($questions_to_be_asked as $question)
                                <div class="card" style="width: 50rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $question->category }}</h5>
                                        <h3 class="card-text">{{ $question->text }}</h3>
                                        <h6 class="card-subtitle mb-2 text-muted">*{{ $question->comment }}</h6><br>
                                        <label for="portals_{{ $question->id }}" class="form-label">Options</label>
                                        <select id="portals_{{ $question->id }}" name="answer_{{ $question->id }}" class="form-control">
                                            <option value="first_option" {{ old('portals') == 'first_option' ? 'selected' : '' }}>{{$question->first_option}}</option>
                                            <option value="second_option" {{ old('portals') == 'second_option' ? 'selected' : '' }}>{{$question->second_option}}</option>
                                            <option value="third_option" {{ old('portals') == 'third_option' ? 'selected' : '' }}>{{$question->third_option}}</option>
                                            <option value="fourth_option" {{ old('portals') == 'fourth_option' ? 'selected' : '' }}>{{$question->fourth_option}}</option>
                                        </select>
                                        <input type="hidden" value="{{ $question->id }}" name="id_{{ $question->id }}">
                                    </div>
                                </div><br><br><hr><br><br>
                            @endforeach
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
