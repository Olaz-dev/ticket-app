 @extends('admin.layouts.app');
 @section('content')
     <div class="col-12 mt-4" id="forms">
    <div class="component-wrapper bg-white rounded shadow">
        <div class="p-4 border-bottom">
            <h4 class="title mb-0">Edit  Role </h4>
        </div>

        <div class="p-4">
            <form  action="{{ route('user.update',$user) }}" method ="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Name<span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <i data-feather="user" class="fea icon-sm icons"></i>
                                <input name="user_name" value="{{ old('user_name',$user->firstname,$user->lastname) }}"  type="text" class="form-control ps-5" placeholder="{{ $user->user_name }}" >
                               @error('user_name')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Role<span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <select name="Role" id=""  class="form-control ps-4"> 
                                    <option   class="form-control ps-4">Select Role</option>
                                         <option value="0" class="form-control ps-4">Admin</option>
                                         <option value="1" class="form-control ps-4">Agent</option>
                                         <option value="2" class="form-control ps-4">User</option>
                                </select>
                            </div>
                        </div>  
                        @error('priority')
                           <span class="alert-danger">{{ $message }}</span>
                         @enderror                                                                             
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" id="submit" name="send" class="btn btn-primary" value="Edit user">
                    </div><!--end col-->
                </div><!--end row-->
            </form><!--end form-->
        </div>
    </div>
</div>
 @endsection