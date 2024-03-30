<x-app-web-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Update
                          User
                            <a href="{{url('users')}}" class="btn btn-primary">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('users/'.$user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="">User Name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">User Email</label>
                                <input type="text" name="email" value="{{$user->email}}" readonly class="form-control">
                              
                            </div>
                            <div class="mb-3">
                                <label for=""> User Password</label>
                                <input type="text " value="" name="password" class="form-control">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Role</label>
                                <select name="roles[]" class="form-control" multiple>
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                        <option
                                         value="{{ $role }}"
                                        {{in_array($role, $userRoles) ? 'selected': ''}}
                                        >{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('roles')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="mb-3">

                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>
