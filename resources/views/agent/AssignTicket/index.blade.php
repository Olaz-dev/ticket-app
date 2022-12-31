
{{-- @foreach ($user->ticketAssigned as $olaz )
    @if ($id = $olaz->ticket_id )
        {{ $smith =$ticket->where('id',$id) }}
        <br><br>
    @endif
@endforeach --}}

@extends('admin.layouts.app');
@section('content')
<div class="col-12 mt-4" id="forms">
    <div class="component-wrapper bg-white rounded shadow">
    
        <div class="layout-specing">
                        <div class="d-md-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Invoice List</h5>

                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                                    <li class="breadcrumb-item text-capitalize"><a href="#">{{ Route::current()->uri }}</a></li>
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
                                                <th class="border-bottom p-3">Ticket No.</th>
                                                <th class="border-bottom p-3" style="min-width: 220px;">Ticket Title</th>
                                                <th class="text-center border-bottom p-3" style="min-width: 200px;">Ticket Description</th>
                                                <th class="text-center border-bottom p-3">Created By</th>
                                                <th class="text-center border-bottom p-3" style="min-width: 150px;">Generate(Dt.)</th>
                                                <th class="text-center border-bottom p-3">Status</th>
                                                <th class="text-end border-bottom p-3" style="min-width: 200px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($tickets as $ticket )
                                            <tr>
                                                <th class="p-3">{{ $loop->iteration }}</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-2">{{ $ticket->title }}</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">{{ $ticket->text_description }}</td>
                                                <td class="text-center p-3">{{ $ticket->getUser->implode('firstname'); }}</td>
                                                <td class="text-center p-3">{{ $ticket->created_at->diffForHumans() }}</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-warning rounded px-3 py-1">
                                                        {{ $ticket->status }}
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                                </td>
                                            </tr>
                                            <!-- End -->
                                            @endforeach
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
    </div>
</div><!--end col-->
@endsection