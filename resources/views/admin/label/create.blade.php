 @extends('admin.layouts.app');
 @section('content')
     <div class="col-12 mt-4" id="forms">
    <div class="component-wrapper bg-white rounded shadow">
        <div class="p-4 border-bottom">
            <h4 class="title mb-0">Create Label  <a href="{{ url('label') }}" class=" btn btn-sm  btn-outline-primary float-end">Back </a></h4>
            
            
            
        </div>

        <div class="p-4">
            <form  action="{{ route('label.store') }}" method ="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Label Name<span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <i data-feather="user" class="fea icon-sm icons"></i>
                                <input name="label_name" value="{{ old('label_name') }}"  type="text" class="form-control ps-5" placeholder="Label Name:" >
                               @error('label_name')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" id="submit" name="send" class="btn btn-primary" value="Add New label">
                    </div><!--end col-->
                </div><!--end row-->
            </form><!--end form-->
        </div>
    </div>
</div>
 @endsection