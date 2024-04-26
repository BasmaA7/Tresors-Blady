@extends('layout.dashboard')
@section('content')
<div class="text-gray-900 bg-gray-200">
  <div class="p-4 flex">
      <h1 class="text-3xl">
          Users
      </h1>
  </div>
 

  <div class="px-3 py-4 flex justify-center">
    <table class="w-full text-md bg-white shadow-md rounded mb-4">
      <tbody>
        <tr class="border-b">
            <th class="text-left p-3 px-5">ID</th>
            <th class="text-left p-3 px-5">User Name</th>
            <th class="text-left p-3 px-5">User Email</th>
            <th class="text-left p-3 px-5">Action</th>
          <th></th>
        </tr>
        @foreach ($users as $user)
        <tr class="border-b hover:bg-orange-100 bg-gray-100">
          <td class="p-3 px-5">{{$user->id}}</td>
          <td class="p-3 px-5">{{$user->name}}</td>
          <td class="p-3 px-5">{{$user->email}}</td>

          <td class="p-3 px-5">
          
          <td class="p-3 px-5 flex justify-start">
            <form action="{{route('users.destroy',$user)}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  {{ $users->links() }}

</div>



@endsection
