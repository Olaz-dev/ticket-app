 @extends('admin.layouts.app');
 @section('content')
     <div class="col-12 mt-4" id="forms">
    <div class="component-wrapper bg-white rounded shadow">
        <div class="p-4 border-bottom">
            <h4 class="title mb-0">Edit Category </h4>
        </div>

        <div class="p-4">
            <form  action="{{ route('category.update',$category) }}" method ="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Category Name<span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <i data-feather="user" class="fea icon-sm icons"></i>
                                <input name="category_name" value="{{ old('category_name',$category->category_name) }}"  type="text" class="form-control ps-5" placeholder="{{ $category->category_name }}" >
                               @error('category_name')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" id="submit" name="send" class="btn btn-primary" value="Edit Category">
                    </div><!--end col-->
                </div><!--end row-->
            </form><!--end form-->
        </div>
    </div>
</div>
 @endsection