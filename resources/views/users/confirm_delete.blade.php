@extends('layouts.app')

@section('action_title', __('Confirm delete user'))

@section('content')
<div class="row">

    @include('users._top-section')
</div>

<div class="row d-flex justify-content-center mb-4">

    <div class="col-8 mb-4 d-flex justify-content-center">
        <h3>Are you sure you want to delete user {{ $user->name }} - #{{ $user->id }}</h3>
    </div>

    <div class="col-8 mb-4">

        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <div class="d-flex justify-content-evenly">
                <a href="{{ route('users.index') }}" class="btn btn-primary">No - keep user</a>
                <button type="submit" class="btn btn-outline-danger">Yes - Delete</button>
            </div>
        </form>
    </div>
</div>
@endsection
