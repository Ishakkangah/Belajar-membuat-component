<x-app-layout>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-8">
                <div class="card-header">
                    <h2>All user</h2>
                </div>
                <div class="card-body">
                    @forelse ($users as $index => $user)
                        <li style="list-style-type: none">{{ $index + 1 }} -  
                            <a href="{{ route('user.show', $user->username) }}">{{ $user->name }} </a>
                        </li>
                    @empty
                        <div class="alert alert-primary">
                            There is not found !
                        </div>
                    @endforelse
                </div>

                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-app-layout>