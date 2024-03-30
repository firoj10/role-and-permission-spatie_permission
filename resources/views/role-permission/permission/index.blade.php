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
                            Permission
                            <a href="{{url('permissions/create')}}" class="btn btn-primary">Add Permission</a>
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
                                @foreach ($permissions as $permission )
                                <tr>
                               
                                    <td>{{$permission->id}}</td>
                                    <td>{{$permission->name}}</td>
                                    <td>
                                        <a href="{{url('permissions/'.$permission->id.'/edit')}}" class="btn btn-success">Edit</a>
                                        <a href="{{url('permissions/'.$permission->id.'/delete')}}" class="btn btn-success">Delete</a>
                                       
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