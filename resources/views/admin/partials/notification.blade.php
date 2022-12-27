<li class="list-inline-item mb-0 ms-1">
                                <div class="dropdown dropdown-primary">
                                    <button type="button" class="btn btn-icon btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-bell"></i></button>
                                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                    
                                    <div class="dropdown-menu dd-menu bg-white shadow rounded border-0 mt-3 p-0" data-simplebar style="height: 320px; width: 290px;">
                                        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                            <h6 class="mb-0 text-dark">Notifications</h6>
                                           
                                            <span class="badge bg-soft-danger rounded-pill">{{ $user->notifications->count() }}</span>
                                        </div>
                                        @forelse ( $user->notifications as $notification )
                                            <div class="p-3">
                                            <a href="#!" class="dropdown-item features feature-primary key-feature p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon text-center rounded-circle me-2">
                                                        <i class="ti ti-shopping-cart"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title">{{ $notification->data['ticket_title'] }}</h6>
                                                        <small class="text-muted">15 min ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            
                                        </div>
                                        @empty
                                            
                                        @endforelse
                                        
                                    </div>
                                </div>
                            </li>