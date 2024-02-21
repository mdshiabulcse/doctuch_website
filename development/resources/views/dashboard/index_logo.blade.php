@extends('layouts.admin-layouts')

@section('content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Logo Data</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="{{route('dashboard-home')}}"
                                        >Home</a
                                        >
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Logo Setting</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n5">
                                <img
                                    src="{{asset('admin')}}/assets/images/breadcrumb/ChatBc.png"
                                    alt=""
                                    class="img-fluid mb-n4"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card w-100 position-relative overflow-hidden">
                <div class="px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0 lh-sm">Basic Table</h5>
                </div>
                <div class="card-body p-4">
                    <button id="addRow" class="btn btn-primary mb-2">
                        <i class="ti ti-plus fs-4"></i>&nbsp; Add Logo
                    </button>
                    <div class="table-responsive rounded-2 mb-4">
                        <table class="table border text-nowrap customize-table mb-0 align-middle">
                            <thead class="text-dark fs-4">
                            <tr>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">User</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Project Name</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Team</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                                </th>
                                <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Budget</h6>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('admin')}}/assets/images/profile/user-1.jpg" class="rounded-circle" width="40"
                                             height="40" />
                                        <div class="ms-3">
                                            <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                                            <span class="fw-normal">Web Designer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">Elite Admin</p>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#"
                                           class="text-bg-secondary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                                           style="width: 39px; height: 39px;">
                                            S
                                        </a>
                                        <a href="#"
                                           class="text-bg-danger text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                                           style="width: 39px; height: 39px;">
                                            D
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-success-subtle text-success fw-semibold fs-2">Active</span>
                                </td>
                                <td>
                                    <h6 class="fs-4 fw-semibold mb-0">$3.9k</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('admin')}}/assets/images/profile/user-2.jpg" class="rounded-circle" width="40"
                                             height="40" />
                                        <div class="ms-3">
                                            <h6 class="fs-4 fw-semibold mb-0">Andrew McDownland</h6>
                                            <span class="fw-normal">Project Manager</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">Real Homes WP Theme</p>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#"
                                           class="text-bg-primary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                                           style="width: 39px; height: 39px;">
                                            A
                                        </a>
                                        <a href="#"
                                           class="text-bg-warning text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                                           style="width: 39px; height: 39px;">
                                            X
                                        </a>
                                        <a href="#"
                                           class="text-bg-secondary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                                           style="width: 39px; height: 39px;">
                                            N
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-warning-subtle text-warning fw-semibold fs-2">Pending</span>
                                </td>
                                <td>
                                    <h6 class="fs-4 fw-semibold mb-0">$24.5k</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('admin')}}/assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                                             height="40" />
                                        <div class="ms-3">
                                            <h6 class="fs-4 fw-semibold mb-0">Christopher Jamil</h6>
                                            <span class="fw-normal">Project Manager</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">MedicalPro WP Theme</p>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#"
                                           class="text-bg-danger text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                                           style="width: 39px; height: 39px;">
                                            X
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-primary-subtle text-primary fw-semibold fs-2">Completed</span>
                                </td>
                                <td>
                                    <h6 class="fs-4 fw-semibold mb-0">$12.8k</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('admin')}}/assets/images/profile/user-4.jpg" class="rounded-circle" width="40"
                                             height="40" />
                                        <div class="ms-3">
                                            <h6 class="fs-4 fw-semibold mb-0">Nirav Joshi</h6>
                                            <span class="fw-normal">Frontend Engineer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#"
                                           class="text-bg-primary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                                           style="width: 39px; height: 39px;">
                                            Y
                                        </a>
                                        <a href="#"
                                           class="text-bg-danger text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                                           style="width: 39px; height: 39px;">
                                            X
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-success-subtle text-success fw-semibold fs-2">Active</span>
                                </td>
                                <td>
                                    <h6 class="fs-4 fw-semibold mb-0">$2.4k</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('admin')}}/assets/images/profile/user-5.jpg" class="rounded-circle" width="40"
                                             height="40" />
                                        <div class="ms-3">
                                            <h6 class="fs-4 fw-semibold mb-0">Micheal Doe</h6>
                                            <span class="fw-normal">Content Writer</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#"
                                           class="text-bg-secondary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                                           style="width: 39px; height: 39px;">
                                            S
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-danger-subtle text-danger fw-semibold fs-2">Cancel</span>
                                </td>
                                <td>
                                    <h6 class="fs-4 fw-semibold mb-0">$9.3k</h6>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
