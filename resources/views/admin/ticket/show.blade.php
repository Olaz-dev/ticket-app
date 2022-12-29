@extends('admin.layouts.app');

@section('content')
<div class="col-lg-12 mt-4">
                            
                                <div class="card border-0 rounded shadow p-4 mt-4">
                                    <h5 class="mb-0">Ticket Info :</h5>

                                    <form  action="{{ route('ticket.update',$ticket) }}" method ="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Ticket Title</label>
                                                    <div class="form-icon position-relative">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                        <input name="number" id="number" value="{{ $ticket->title }}" type="text" class="form-control ps-5">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Ticket Description</label>
                                                    <div class="form-icon position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check fea icon-sm icons"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                                                        <input name="number" id="number" value="{{ $ticket->text_description }}" type="text" class="form-control ps-5">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Ticket Status</label>
                                                    <div class="form-icon position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check fea icon-sm icons"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                                                        <input name="number" id="number" value="{{ $ticket->status }}" type="text" class="form-control ps-5">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                             <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Agent Available<span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <select name="agent" id=""  class="form-control ps-4"> 
                                                        <option   class="form-control ps-4">Select Agent</option>
                                                        @foreach ($user as $user_agent )
                                                            <option value="{{ $user_agent->id }}" class="form-control ps-4">{{ Str::ucfirst($user_agent->firstname)  }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>  
                                            @error('agent')
                                            <span class="alert-danger">{{ $message }}</span>
                                            @enderror                                                                             
                                        </div><!--end col-->
                                            <div class="col-lg-12 mt-2 mb-0">
                                                <a class="btn btn-primary"  href="{{ url('user') }}">Back</a>
                                                <input type="submit" id="submit" name="send" class="btn btn-primary" value="Assign Agent">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div>
                            </div>

@endsection
