@extends('dashboard.indexUser')
@section('content')
    <div class="col-md-12 mb-lg-0 mb-4">
        <div class="card mt-4">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">Payment Method</h6>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn bg-gradient-dark mb-0" href="{{ route('form_upload_berkas')}}"><i
                                class="material-symbols-rounded text-sm">add</i>&nbsp;&nbsp;Add New Card</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ijazah</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Transkip Nilai</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penilaian Prestasi Kerja</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jadwal Pendidikan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/logos/mastercard.png" class="avatar avatar-sm me-3"
                                                alt="Mastercard logo">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Mastercard</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm">**** **** **** 7852</h6>
                                </td>
                                <td class="align-middle text-center">
                                    <i class="material-symbols-rounded text-dark cursor-pointer" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit Card">edit</i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/logos/visa.png" class="avatar avatar-sm me-3"
                                                alt="Visa logo">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Visa</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm">**** **** **** 5248</h6>
                                </td>
                                <td class="align-middle text-center">
                                    <i class="material-symbols-rounded text-dark cursor-pointer" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit Card">edit</i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
