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
                                                <th class="border-bottom p-3" style="min-width: 220px;">Client Name</th>
                                                <th class="text-center border-bottom p-3" style="min-width: 200px;">Ticket Subject</th>
                                                <th class="text-center border-bottom p-3">Ticket Description</th>
                                                <th class="text-center border-bottom p-3" style="min-width: 150px;">Generate(Dt.)</th>
                                                <th class="text-center border-bottom p-3">Status</th>
                                                <th class="text-end border-bottom p-3" style="min-width: 200px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Start -->
                                           
                                           @foreach ($tickets as $ticket )
                                            <tr>
                                                <th class="p-3">{{ $loop->iteration }}</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/client/01.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                            <span class="ms-2">Howard Tanner</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">{{ $ticket->title }}</td>
                                                <td class="text-center p-3">{{ Illuminate\Support\Str::words($ticket->text_description, 5, '...') }}</td>
                                                <td class="text-center p-3">{{ $ticket->created_at->format('d-m-Y') }}</td>
                                                <td class="text-center p-3">
                                                    @if ($ticket->status == "Pending")
                                                    <div class="badge bg-soft-danger rounded px-3 py-1"   >
                                                        {{ ucfirst($ticket->status)}}
                                                    </div>
                                                    @elseif ($ticket->status == "Closed")
                                                    <div class="badge bg-soft-success rounded px-3 py-1"   >
                                                        {{ ucfirst($ticket->status)}}
                                                    </div>
                                                    @elseif ($ticket->status == "Processing")
                                                    <div class="badge bg-soft-warning rounded px-3 py-1"   >
                                                        {{ ucfirst($ticket->status)}}
                                                    </div>
                                                    @endif
                                                   
                                                    
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="{{ url("ticket/$ticket->id")}}" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="{{ url("ticket/$ticket->id")}}" class="btn btn-sm btn-soft-primary ms-2">Assign</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">#d02</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/client/02.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                            <span class="ms-2">Wendy Filson</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">(+12)85-4521-7568</td>
                                                <td class="text-center p-3">$482</td>
                                                <td class="text-center p-3">11th Sept 2021</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-success rounded px-3 py-1">
                                                        Paid
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">#d03</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/client/03.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                            <span class="ms-2">Faye Bridger</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">(+12)85-4521-7568</td>
                                                <td class="text-center p-3">$546</td>
                                                <td class="text-center p-3">2nd Sept 2021</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                                        Unpaid
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">#d04</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/client/04.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                            <span class="ms-2">Ronald Curtis</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">(+12)85-4521-7568</td>
                                                <td class="text-center p-3">$154</td>
                                                <td class="text-center p-3">1st Sept 2021</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                                        Unpaid
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">#d05</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/client/05.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                            <span class="ms-2">Melissa Hibner</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">(+12)85-4521-7568</td>
                                                <td class="text-center p-3">$458</td>
                                                <td class="text-center p-3">1st Sept 2021</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-success rounded px-3 py-1">
                                                        Paid
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">#d06</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/client/06.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                            <span class="ms-2">Randall Case</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">(+12)85-4521-7568</td>
                                                <td class="text-center p-3">$548</td>
                                                <td class="text-center p-3">28th Aug 2021</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-success rounded px-3 py-1">
                                                        Paid
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">#d07</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/client/07.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                            <span class="ms-2">Jerry Morena</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">(+12)85-4521-7568</td>
                                                <td class="text-center p-3">$658</td>
                                                <td class="text-center p-3">25th Aug 2021</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                                        Unpaid
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">#d08</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/client/08.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                            <span class="ms-2">Lester McNally</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">(+12)85-4521-7568</td>
                                                <td class="text-center p-3">$457</td>
                                                <td class="text-center p-3">20th Aug 2021</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                                        Unpaid
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">#d09</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/client/09.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                            <span class="ms-2">Christopher Burrell</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">(+12)85-4521-7568</td>
                                                <td class="text-center p-3">$586</td>
                                                <td class="text-center p-3">15th Aug 2021</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-success rounded px-3 py-1">
                                                        Paid
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">#d10</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/client/10.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                                            <span class="ms-2">Mary Skeens</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">(+12)85-4521-7568</td>
                                                <td class="text-center p-3">$325</td>
                                                <td class="text-center p-3">10th Aug 2021</td>
                                                <td class="text-center p-3">
                                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                                        Unpaid
                                                    </div>
                                                </td>
                                                <td class="text-end p-3">
                                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    <a href="#" class="btn btn-sm btn-soft-primary ms-2">Print</a>
                                                </td>
                                            </tr>
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
    </div>
</div><!--end col-->
@endsection