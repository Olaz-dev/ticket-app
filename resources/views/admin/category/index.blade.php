@extends('admin.layouts.app')
@section('content')
@if(Session::has('status'))
      <p class="alert alert-success">{{ Session::get('status') }}</p>
 @endif
        <div class="container-fluid">
                    <div class="layout-specing">
                        <div class="d-md-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Invoice List</h5>
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                                    <li class="breadcrumb-item text-capitalize"><a href="#">Invoice</a></li>
                                    <li class="breadcrumb-item text-capitalize active" aria-current="page">List</li>
                                </ul>
                            </nav>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="table-responsive shadow rounded">
                                    <table class="table table-center bg-white mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom p-3">Category Number</th>
                                                <th class="text-center border-bottom p-3">Category Name</th>
                                                <th class="text-center border-bottom p-3">Ticket Number </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Start -->
                                            @foreach ($categories as $category )
                                                 <tr>
                                                <th class="p-3">{{ $loop->iteration }}</th>
                                                
                                                <td class="text-center p-3">{{ $category->category_name }}</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                                        Category Name
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="{{ route('category.edit', $category) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                           
                                            <!-- End -->
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row text-center">
                            <!-- PAGINATION START -->
                            <div class="col-12 mt-4">
                                <div class="d-md-flex align-items-center text-center justify-content-between">
                                    <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                                    <ul class="pagination mb-0 justify-content-center mt-4 mt-sm-0">
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next</a></li>
                                     </ul>
                                </div>
                            </div><!--end col-->
                            <!-- PAGINATION END -->
                        </div><!--end row-->
                    </div>
                </div><!--end container-->       
@endsection