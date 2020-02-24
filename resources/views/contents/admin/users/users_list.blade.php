@extends('layouts.template.template')

@section('content')
    <h3>Users Management</h3>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users and Roles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    @foreach($users as $user)
                    <tbody>
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{implode(', ',$user->roles()->get()->pluck('name')->toArray())}}</td>
                        <td>
                            @can('edit-users')
                            <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary btn-circle float-left">
                                <i class="far fa-edit"></i>
                            </a>
                            @endcan
                            @can('delete-users')
                            <form action="{{route('admin.users.destroy', $user)}}" method="POST" class="float-left">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            @endcan
                        </td>
                    </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
