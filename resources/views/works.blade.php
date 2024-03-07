@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Education') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('works') }}">
                        @csrf

                        <h2>works</h2>

                        <div class="row mb-3">
                            <label for="first-work" class="col-md-4 col-form-label text-md-end">{{ __('First-Work') }}</label>

                            <div class="col-md-6">
                                <input id="first_work" type="text" name="first_work">

                                @error('first_work')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="second_work" class="col-md-4 col-form-label text-md-end">{{ __('Second_Work') }}</label>

                            <div class="col-md-6">
                                <input id="second_work" type="text" name="second_work">

                                @error('second_work')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="third_work" class="col-md-4 col-form-label text-md-end">{{ __('Third_Work') }}</label>

                            <div class="col-md-6">
                                <input id="third_work" type="text" name="third_work">

                                @error('third_work')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fourth_work" class="col-md-4 col-form-label text-md-end">{{ __('Fourth_Work') }}</label>

                            <div class="col-md-6">
                                <input id="fourth_work" type="text" name="fourth_work">

                                @error('fourth_work')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br><hr><hr>
                        <h2>projects</h2>
                        <div class="row mb-3">
                            <label for="first_project" class="col-md-4 col-form-label text-md-end">{{ __('First_Project') }}</label>

                            <div class="col-md-6">
                                <input id="first_project" type="text" name="first_project">

                                @error('first_project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="second_project" class="col-md-4 col-form-label text-md-end">{{ __('Second_Project') }}</label>

                            <div class="col-md-6">
                                <input id="second_project" type="text" name="second_project">

                                @error('second_project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="third_project" class="col-md-4 col-form-label text-md-end">{{ __('Third_Project') }}</label>

                            <div class="col-md-6">
                                <input id="third_project" type="text" name="third_project">

                                @error('third_project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fourth_project" class="col-md-4 col-form-label text-md-end">{{ __('Fourth_Project') }}</label>

                            <div class="col-md-6">
                                <input id="fourth_project" type="text" name="fourth_project">

                                @error('fourth_project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
