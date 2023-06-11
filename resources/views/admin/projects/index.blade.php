@extends('layouts.admin')

@section('content')
    <h1>Project List</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Created</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td><img src="{{ $project->image }}" alt="{{ $project->title }}"></td>
                    <td>{{ $project->create_at }}</td>
                    <td><i class="fa-solid fa-eye"></i><i class="fa-solid fa-pencil"></i><i class="fa-solid fa-trash"></i>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
