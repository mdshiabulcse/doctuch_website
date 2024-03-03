@extends('layouts.admin-layouts')

@section('content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Setting</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="{{asset('/')}}"
                                        >Home</a
                                        >
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Basic Setting Form</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n5">
                                <img
                                    src="{{asset('admin/assets/images/breadcrumb/ChatBc.png')}}"
                                    alt=""
                                    class="img-fluid mb-n4"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-with-tabs">
                <h5 class="card-title fw-semibold mb-4">Form with Tabs</h5>
                <div class="card">
                    <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-personal-info-tab" data-bs-toggle="pill" data-bs-target="#pills-personal-info"
                                type="button" role="tab" aria-controls="pills-personal-info" aria-selected="true"> Web Info
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-account-details-tab" data-bs-toggle="pill" data-bs-target="#pills-account-details"
                                type="button" role="tab" aria-controls="pills-account-details" aria-selected="false"> Web
                                Details </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-social-links-tab" data-bs-toggle="pill" data-bs-target="#pills-social-links" type="button"
                                role="tab" aria-controls="pills-social-links" aria-selected="false"> Social Links </button>
                        </li>
                    </ul>
                    <div class="card-body p-4">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-personal-info" role="tabpanel"
                                 aria-labelledby="pills-personal-info-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold col-sm-3 col-form-label">Full
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputtext" placeholder="John">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Country</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">India</option>
                                                    <option value="1">United Kingdom</option>
                                                    <option value="2">Srilanka</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Birth Date</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input id="startDate" class="form-control" type="date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9">
                                                <div class="d-flex align-items-center gap-3">
                                                    <button class="btn btn-primary">Submit</button>
                                                    <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold col-sm-3 col-form-label">Last
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputtext" placeholder="Deo">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Language</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">English</option>
                                                    <option value="1">French</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Phone no</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputtext" placeholder="123 4567 201">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-account-details" role="tabpanel"
                                 aria-labelledby="pills-account-details-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold col-sm-3 col-form-label">Full
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputtext" placeholder="John.Deo">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <div class="input-group border rounded-1">
                                                    <input type="password" class="form-control border-0" id="inputPassword"
                                                           placeholder="John Deo">
                                                    <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1">
                                <i class="ti ti-eye fs-6"></i>
                              </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9">
                                                <div class="d-flex align-items-center gap-3">
                                                    <button class="btn btn-primary">Submit</button>
                                                    <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <div class="input-group border rounded-1">
                                                    <input type="text" class="form-control border-0" placeholder="John Deo">
                                                    <span class="input-group-text bg-transparent px-6 border-0"
                                                          id="basic-addon1">@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Confirm</label>
                                            <div class="col-sm-9">
                                                <div class="input-group border rounded-1">
                                                    <input type="password" class="form-control border-0" id="inputPassword"
                                                           placeholder="John Deo">
                                                    <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1">
                                <i class="ti ti-eye fs-6"></i>
                              </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-social-links" role="tabpanel"
                                 aria-labelledby="pills-social-links-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Twitter</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputtext"
                                                       placeholder="https://twitter.com/abc">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Google</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputtext"
                                                       placeholder="https://plus.google.com/abc">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Instagram</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputtext"
                                                       placeholder="https://instagram.com/abc">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9">
                                                <div class="d-flex align-items-center gap-3">
                                                    <button class="btn btn-primary">Submit</button>
                                                    <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Facebook</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputtext"
                                                       placeholder="https://facebook.com/abc">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Linkedin</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputtext"
                                                       placeholder="https://linkedin.com/abc">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputPassword1"
                                                   class="form-label fw-semibold col-sm-3 col-form-label">Quora</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputtext"
                                                       placeholder="https://quora.com/abc">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <link rel="stylesheet" href=" {{asset('admin/assets/css/image-preview.css') }}">
@endpush

@push('script')
    <script src="{{ asset('admin/assets/js/image-preview.js') }}"></script>
@endpush
