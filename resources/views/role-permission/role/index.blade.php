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
                            Role
                            <a href="{{url('roles/create')}}" class="btn btn-primary">Add Role</a>
                        </h4>
                    </div>
                    <div class="cart-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                               
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role )
                                <tr>
                               
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        <a href="{{url('roles/'.$role->id.'/give-permissions')}}"
                                             class="btn btn-success">Add / Edit Role Permission</a>
                                             @can('update role')
                                        <a href="{{url('roles/'.$role->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        @endcan
                                        @can('delete role')
                                        <a href="{{url('roles/'.$role->id.'/delete')}}" class="btn btn-success">Delete</a>
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