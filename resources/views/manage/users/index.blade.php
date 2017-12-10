@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns">
      <div class="column m-t-20">
        <h1 class="title">Manage Users</h1>
      </div>
      <div class="column">
        <a href="{{route('users.create')}}" class="button is-primary is-pulled-right m-t-20"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
      </div>
    </div>

  <hr class="m-t-0">
  <div class="card">
    <div class="card-content">
        <table class="table is-narrow is-fullwidth">
          <thread>
            <tr>
              <td>Id</td>
              <td>Name</td>
              <td>Email</td>
              <td>Date Created</td>
              <td></td>
            </tr>
          </thread>
          <tbody>
          @foreach ($users as $user)
            <tr>
              <th>{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->created_at->toFormattedDateString()}}</td>
              <td class="pull-right"><a class="button is-outlined m-r-5" href="{{route('users.show',$user->id)}}">View</a>
                  <a class="button is-outlined" href="{{route('users.edit',$user->id)}}">Edit</a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
   </div><!-- end of card content -->
  </div> <!-- end of card-->
  {{$users->links()}}
</div>
@endsection
