@extends('layouts.template.template')

@section('content')
    <h3>Edit User {{$user->name}}</h3>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User {{$user->name}}</h6>
        </div>
        <br>

        <div class="card-body">
            <form action="{{route('admin.users.update', $user)}}" method="POST">
                @csrf
                {{method_field('PUT')}}

                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                    <div class="col-md-2">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-2">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                    <div class="col-md-3">
                        @foreach($roles as $role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{$role->id}}"
                                @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                <label>{{$role->name}}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary float-left">
                        Update
                    </button>
            </form>
        </div>
    </div>

@endsection
