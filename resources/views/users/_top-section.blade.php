<div class="col-12 mb-4">
    <div class="row">
        <div class="col-12 mb-3">
            <h1 class="mb-4">Users</h1>
            <h4 class="mb-4">
                @yield('action_title', \App\Http\Controllers\Controller::actionTitle())
            </h4>
        </div>

        <div class="col-12 mb-3">
            <div class="d-flex justify-content-between">
                <a href="{{ route('users.index') }}" class="btn btn-outline-primary">User list</a>
                <a href="{{ route('users.create') }}" class="btn btn-outline-primary">New user</a>
            </div>
        </div>
    </div>
</div>
