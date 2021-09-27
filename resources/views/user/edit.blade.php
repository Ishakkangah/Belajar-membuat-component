<x-app-layout title="edit user">

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card-header">
                <h2>Edit user</h2>
            </div>

            <form action="{{ route('user.update', $User->username) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') ?? $User->name }}">
                        @error('name')
                            <div class="text-danger invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="thumbnail">thumbnail</label>
                        <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') ?? $User->email }}">
                        @error('email')
                            <div class="text-danger invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">update</button>
                    </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>