@extends('admin.layouts.app');

@section('content')
<div class="col-lg-12 mt-4">
                            
                                <div class="card border-0 rounded shadow p-4 mt-4">
                                    <h5 class="mb-0">User Info :</h5>

                                    <form>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">First Name</label>
                                                    <div class="form-icon position-relative">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                        <input name="number" id="number" value="{{ $user->firstname }}" type="text" class="form-control ps-5">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                                                                        <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Last Name</label>
                                                    <div class="form-icon position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check fea icon-sm icons"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                                                        <input name="number" id="number" value="{{ $user->lastname }}" type="text" class="form-control ps-5">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Email :</label>
                                                    <div class="form-icon position-relative">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-sm icons"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><input name="url" id="url" type="text" value="{{ $user->email }}" class="form-control ps-5" placeholder="Url :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Role :</label>
                                                    <div class="form-icon position-relative">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-sm icons"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                       <input name="url" id="url" type="text" value="@if ($user->role_as === 1) {{ "Admin" }} @elseif($user->role_as === 2){{ "Agent"  }}@else{{"User"}}  @endif " class="form-control ps-5" placeholder="Url :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12 mt-2 mb-0">
                                                <a class="btn btn-primary"  href="{{ url('user') }}">Back</a>
                                                
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div>
                            </div>

@endsection
