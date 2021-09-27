<x-app-layout title="Show task">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                    <H2>Show</H2>
                <div class="card">
                    <table class="table text-center">
                        <thead class="bg-secondary">
                            <tr>
                                <td>List</td>
                                <td>Mark</td>
                                <td>User_id</td>
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{ $Task->list }}</td>
                            <td>{{ $Task->Mark }}</td>
                            <td>{{ $Task->user_id }}</td>
                            <td>
                                {{-- update --}}
                                @can('update', $Task)
                                <a href="{{ route('task.edit', $Task->id) }}" class="btn btn-sm btn-primary my-1">edit</a>
                                <form action="{{ route('task.delete', $Task->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                </form>
                                @endcan
                                @foreach ($Task->tags as $tag)
                                    <a href="{{ route('tag.index', $tag->slug) }}">{{ $tag->list }}</a>
                                @endforeach
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>