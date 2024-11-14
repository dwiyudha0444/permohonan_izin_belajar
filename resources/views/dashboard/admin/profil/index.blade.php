@extends('dashboard.indexAdmin')
@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <span class="mask  bg-gradient-dark  opacity-6"></span>
        </div>
        <div class="card card-body mx-2 mx-md-2 mt-n6">
            {{-- <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ Auth::guard('admin')->user()->name }}
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            {{ Auth::guard('admin')->user()->jabatan }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">

                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="row">

                    <div class="col-12 col-xl-12">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Profile Information</h6>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a href="{{ route('edit_profile_admin', ['id' => Auth::guard('admin')->id()]) }}">
                                            <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit Profile"></i>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                        <strong class="text-dark">Full Nama:</strong> &nbsp;
                                        {{ Auth::guard('admin')->user()->name ?? 'Data tidak tersedia' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Nip:</strong> &nbsp;
                                        {{ Auth::guard('admin')->user()->nip ?? 'Data tidak tersedia' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Tempat Tanggal Lahir:</strong> &nbsp;
                                        {{ Auth::guard('admin')->user()->tgl ?? 'Data tidak tersedia' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Pangkat:</strong> &nbsp;
                                        {{ Auth::guard('admin')->user()->pangkat ?? 'Data tidak tersedia' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 pb-0">
                                        <strong class="text-dark text-sm">TMT:</strong> &nbsp;
                                        {{ Auth::guard('admin')->user()->tmt ?? 'Data tidak tersedia' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Jabatan:</strong> &nbsp;
                                        {{ Auth::guard('admin')->user()->jabatan ?? 'Data tidak tersedia' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Lokasi Tempat Bekerja / Satuan Kerja:</strong> &nbsp;
                                        {{ Auth::guard('admin')->user()->lokasi_bekerja ?? 'Data tidak tersedia' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Jenjang Pendidikan:</strong> &nbsp;
                                        {{ Auth::guard('admin')->user()->jejang_pendidikan ?? 'Data tidak tersedia' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Lulusan Pendidikan Terakhir:</strong> &nbsp;
                                        {{ Auth::guard('admin')->user()->lulus_pendidikan ?? 'Data tidak tersedia' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Tugas Pekerjaan yang saya tangani saat ini:</strong>
                                        &nbsp; {{ Auth::guard('admin')->user()->tugas_pekerjaan ?? 'Data tidak tersedia' }}
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-4  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                                Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection
