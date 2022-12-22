 @extends('customer.layouts.app');
 @section('content')
 <div class="col-12 mt-4" id="forms">
    <div class="component-wrapper bg-white rounded shadow">
        <div class="p-4 border-bottom">
            <h4 class="title mb-0">Create Your Tickets </h4>
        </div>

        <div class="p-4">
            <form  action="{{ route('ticket.store') }}" method ="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Title<span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <i data-feather="user" class="fea icon-sm icons"></i>
                                <input name="title" value="{{ old('title') }}"  type="text" class="form-control ps-5" placeholder="Ticket Subject:" >
                               @error('title')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Ticket Description</label>
                            <div class="form-icon position-relative">
                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                <textarea name="text_description" id="comments" rows="4" class="form-control ps-5" placeholder="Your Message :">
                                    {{ old('text_description') }}
                                </textarea>
                                 {{-- <input type="file" id="file" name="file" multiple /> --}}
                                  @error('text_description')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Labels  <span class="text-danger">*</span></label>
                            <div class="form-icon position-absolute">
                                @foreach ($labels as $label )
                                  <input value="{{ $label->label_name  }}" class="checkoption2" name="labels" type="checkbox"  {{ old('labels') == "$label->label_name" ? 'checked' : '' }}  >
                                  <label for="javascript">{{ $label->label_name  }}</label>
                             @endforeach
                                @error('labels')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                     </div><!--end col--><br>
                     <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Categories  <span class="text-danger">*</span></label>
                            <div class="form-icon position-absolute">
                            @foreach ($categories  as $category )
                                <input type="checkbox" value="{{$category->category_name }}" name="categories" class="checkoption" {{ old('categories') == "$category->category_name" ? 'checked' : '' }} >
                                <label for="javascript">{{ $category->category_name }}</label>  
                            @endforeach
                                 @error('categories')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div><!--end col--><br>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Priority<span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <select name="priority" id=""  class="form-control ps-4"> 
                                    <option  value="" class="form-control ps-4">Select Priority</option>
                                    @foreach ($priorities as $priority )
                                         <option value="{{ $priority->priority_name }}" class="form-control ps-4">{{ $priority->priority_name }}</option>
                                    @endforeach
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
                        <input type="submit" id="submit" name="send" class="btn btn-primary" value="Submit Ticket">
                    </div><!--end col-->
                </div><!--end row-->
            </form><!--end form-->
        </div>
    </div>
</div>
 @endsection