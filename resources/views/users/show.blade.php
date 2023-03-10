@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center">
        <strong>Name:</strong>
        {{ $user->name }}

        <strong>Email:</strong>
        {{ $user->email }}
    </div>
@endsection
