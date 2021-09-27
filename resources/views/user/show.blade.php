<x-app-layout title="User show">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>Detail user</h2>
                <a href="{{ route('user.edit', $User->username) }}">edit profile</a>
                    <table class="table">
                        <thead class="text-white font-weight-bolder bg-secondary text-center">
                            <tr>
                                <td>Nama</td>
                                <td>Username</td>
                                <td>Email</td>
                                <td>images</td>
                                <td>Created_at</td>
                                <td>Updated_at</td>
                            </tr>
                            </thead>
                        <tbody class="text-secondary">
                            <td>{{ $User->name }}</td>
                            <td>{{ $User->username }}</td>
                            <td>{{ $User->email }}</td>
                            <td>
                                <img src="{{ $User->takeImage  }}" class="card-img-top" style="    height: 100px; object-fit: cover; object-position: cover;">
						
                            </td>
                            <td>{{ $User->created_at }}</td>
                            <td>{{ $User->updated_at }}</li>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</x-app-layout>