<x-app-layout title="Task page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card-header">
                    @isset($Tag)
                        <h2>Tag {{ $Tag->list }}</h2>
                    @endisset
                    
                    @if (!isset($Tag))
                        <h2>All Tasks</h2>
                    @endif
                    <h5>Result : {{ $tasks->count() }}</h5>
                </div>
                <div class="card-body bg-dark">
                    <form action="{{ route('task.store') }}" method="post">
                        @csrf
                        @include('task._form')
                    </form>
                </div>

                <div class="card-body">
                        @forelse ($tasks as $index => $task)
                        <div class="justify-content-between d-flex">
                            <div style="list-style-type: none">{{ $index + 1 }} - <a href="{{ route('task.show', $task->id) }}">
                                {{ $task->list }}
                            </a></div>
                        </div>
                        @empty
                            <div class="alert alert-success">
                                There is not fond data !   
                            </div> 
                        @endforelse
                        <div>
                            {{ $tasks->links() }}
                        </div>
                </div>
            </div>

            <div class="col-md-4 mt-4">
                <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, nisi.</h3>
            </div>
        </div>
    </div>
    


</x-app-layout>