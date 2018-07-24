@extends('layouts.admin')


@section('content')

    <h1>Users</h1>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @if($users)
                @foreach($users as $user)
                    {{--<tr onclick="document.location='users/'+ {{$user->id}} + '/edit' " style="cursor:pointer">--}}
                    <tr style="cursor:pointer" onclick="location.href='{{route('admin.users.edit',['id'=>$user->id])}}'" class="pointer">
                        <td>{{$user->id}}</td>
                        <td><img height="20px" src="{{$user->photo ? asset($user->photo->file) : 'http://placehold.it/400x400'}}"></td>
                        <td>
                            <a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a>
                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role ? $user->role ->name : 'has no role'}}</td>
                        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>

                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-xs-12 text-center">
            {{$users->render()}}
        </div>
    </div>

@endsection