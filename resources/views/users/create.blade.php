@extends('layouts.app')

@section('action_title', __('Create'))

@section('content')
<div class="row">

    @include('users._top-section')

    <div class="col-12 mb-4">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    value="{{ old('name') ?? null }}"
                    aria-describedby="nameHelp"
                    placeholder="Your name"
                    required>
                <div id="nameHelp" class="form-text">Your name</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    value="{{ old('email') ?? null }}"
                    aria-describedby="emailHelp"
                    placeholder="Your email"
                    required>
                <div id="emailHelp" class="form-text">Your email</div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    value="{{ old('password') ?? null }}"
                    aria-describedby="passwordHelp"
                    placeholder="Your password"
                    required>
                <div id="passwordHelp" class="form-text">Your password</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </div>
        </form>

    </div>
</div>
@endsection
