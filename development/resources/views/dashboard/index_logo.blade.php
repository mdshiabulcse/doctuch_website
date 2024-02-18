@extends('layouts.admin-layouts')

@section('content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Datatable Basic</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="index.html"
                                        >Home</a
                                        >
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Logo Settings</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n5">
                                <img
                                    src="assets/images/breadcrumb/ChatBc.png"
                                    alt=""
                                    class="img-fluid mb-n4"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="datatables">
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <!-- ---------------------
                                  start Zero Configuration
                              ---------------- -->
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h5 class="mb-0">Zero Configuration</h5>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                        <thead>
                                        <!-- start row -->
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                        <!-- end row -->
                                        </thead>
                                        <tbody>
                                        <!-- start row -->
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <!-- end row -->
                                        </tbody>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------
                                  end Zero Configuration
                              ---------------- -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
