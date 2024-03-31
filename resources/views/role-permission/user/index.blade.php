<x-app-web-layout>
    @include('role-permission.nav-links');
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                <div class="alert alert-susscss">{{session('status')}}</div>
                @endif
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>
                           User
                            <a href="{{url('users/create')}}" class="btn btn-primary">Add User</a>
                        </h4>
                    </div>
                    <div class="cart-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Action</th>
                               
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user )
                                <tr>
                               
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                           @foreach ($user->getRoleNames() as $rolename)
                                           <label for="" class="badge bg-primary">{{$rolename}}</label>

                                               
                                           @endforeach 
                                       @endif
                                    </td>
                                    <td>
                                        @can('delete user')
                                        <a href="{{url('users/'.$user->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        @endcan
                                        @can('delete user')
                                        <a href="{{url('users/'.$user->id.'/delete')}}" class="btn btn-success">Delete</a>
                                        @endcan
                                    </td>
                               
                                  </tr>
                                @endforeach
                           
                              
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout >