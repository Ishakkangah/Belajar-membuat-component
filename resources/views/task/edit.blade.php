<x-app-layout title="Edit task">

    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h2>Edit Task</h2>
                   <form action="{{ route('task.update', $Task->id) }}" method="post">
                    @csrf
                    @method('patch')
                   @include('task._form')
                </form>
            </div>
        </div>
    </div>
        
    </x-app-layout>