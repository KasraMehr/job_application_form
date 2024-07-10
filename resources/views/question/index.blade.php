@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('questions') }}</div>

                    <div class="card-body">
                        <table id="example" class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                            <thead>
                            <tr>

                                <th> No.</th>
                                <th>Category</th>
                                <th>Text</th>
                                <th>First Option</th>
                                <th>Second Option</th>
                                <th>Third Option</th>
                                <th>Fourth Option</th>
                                <th>Answer</th>
                                <th>Comment</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>

                                    <td>{{$question->id}}</td>
                                    <td>{{$question->category}}</td>
                                    <td>{{$question->text}}</td>
                                    <td>{{$question->first_option}}</td>
                                    <td>{{$question->second_option}}</td>
                                    <td>{{$question->third_option}}</td>
                                    <td>{{$question->fourth_option}}</td>
                                    <td>{{$question->answer}}</td>
                                    <td>{{$question->comment}}</td>
                                    <td>
                                        <a href="{{route('question.edit', $question->id)}}"><button class="btn btn-primary btn-sm"> edit</button></a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{route('question.destroy', $question->id)}}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete question" onclick="return confirm(&quot;question delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
