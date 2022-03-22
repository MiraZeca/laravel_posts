
@section('title')
    Users
@endsection

@extends('master')

@section('main')
    <div class="container">
        <div class="row">
            <h1>Users View</h1>
            <div class="col-8 offset-2">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Email</th>
                            <th>Posts</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->author }}</td>
                                <td>rrr</td>
                                <td>rrr</td>
                                <td>rrr</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection