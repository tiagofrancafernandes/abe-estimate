@extends('layouts.app')

{{-- @section('action_title', __('List')) --}}

@section('content')
<div class="row">
    @include('users._top-section')

    <div class="col-12 mb-4">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row" class="text-center">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('users.confirm_delete', $user->id) }}" class="btn btn-danger mx-1">Delete</a>
                        <a href="{{ route('users.edit', $user->id) }}"           class="btn btn-outline-primary mx-1">Edit</a>
                        <a href="{{ route('users.show', $user->id) }}"           class="btn btn-outline-info mx-1">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-12 mb-4">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
