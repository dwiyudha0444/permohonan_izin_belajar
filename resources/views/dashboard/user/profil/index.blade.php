@extends('dashboard.indexUser')
@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
        </div>
        <div class="card card-body mx-2 mx-md-2 mt-n6">
            <div class="row">
                <div class="col-12">
                    <div class="card card-plain">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <h6 class="mb-0">Data Diri Pegawai</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <form action="{{ route('edit_profile_user', ['id' => Auth::id()]) }}" method="GET">
                                        <button type="submit" class="btn btn-primary btn-sm font-weight-bold"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile">
                                            <i class="fas fa-user-edit text-light"></i> Edit Data Diri
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Field</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Full Name</td>
                                        <td>{{ Auth::user()->name ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>NIP</td>
                                        <td>{{ Auth::user()->nip ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>{{ Auth::user()->tgl_lahir ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelaminr</td>
                                        <td>{{ Auth::user()->jenis_kelamin ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pangkat</td>
                                        <td>{{ Auth::user()->pangkat ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>TMT</td>
                                        <td>{{ Auth::user()->tmt ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <td>{{ Auth::user()->jabatan ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi Tempat Bekerja / Satuan Kerja</td>
                                        <td>{{ Auth::user()->lokasi_bekerja ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenjang Pendidikan</td>
                                        <td>{{ Auth::user()->jejang_pendidikan ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lulusan Pendidikan Terakhir</td>
                                        <td>{{ Auth::user()->lulus_pendidikan ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tugas Pekerjaan yang saya tangani saat ini</td>
                                        <td>{{ Auth::user()->tugas_pekerjaan ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Perguruan Tinggi</td>
                                        <td>{{ Auth::user()->peguruan_tinggi ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jurusan</td>
                                        <td>{{ Auth::user()->jurusan ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>{{ Auth::user()->alamat ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                    <tr>
                                        <td>OPD</td>
                                        <td>{{ Auth::user()->opd->opd ?? 'Data tidak tersedia' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
