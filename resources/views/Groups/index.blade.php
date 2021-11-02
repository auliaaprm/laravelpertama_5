@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<h2>MY GROUP LIST</h2>
<a href="/groups/create" class="card-link btn-primary">Tambah Group</a>
<div class="mb-3"></div>
<div class="row">
@foreach ($groups as $group)
<div class="col-sm-4">
<div class="card text-white bg-success mb-3" style="width: 18rem;">
<div class="card-header">
    Group Detail
</div>
<div class="card-body text-dark bg-light border-success">
    <a href="/groups/{{$group['id']}}" class="card-title">{{ $group['name'] }}</a>
    <p class="card-text">{{ $group['description'] }}</p>
    <hr>
    <a href="" class="card-link btn-primary">Tambah Anggota Group</a>
    @foreach ($group->friends as $friend)
    <li> {{$friend->nama}} </li>
    @endforeach

    <hr>
    <a href="/groups/{{$group['id']}}/edit" class="card-link btn-warning">Edit Group</a>
    <form action="/groups/{{ $group['id'] }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete Group</button>
    </form>
  </div>
</div>
</div>


@endforeach
<div>
    {{ $groups->links() }}
</div>
<div class="mb-3"></div>
@endsection
</div>

    