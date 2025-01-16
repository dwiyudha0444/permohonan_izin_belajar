@extends('dashboard.indexAdmin')

@section('content')
    <div class="col-md-12 mb-lg-0 mb-4">
        <div class="card mt-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Detail Akun Admin</h6>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <tbody>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama</th>
                                <td class="text-sm font-weight-normal">{{ $admin->name }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Email</th>
                                <td class="text-sm font-weight-normal">{{ $admin->email }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nip</th>
                                <td class="text-sm font-weight-normal">{{ $admin->nip }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tanggal Lahir</th>
                                <td class="text-sm font-weight-normal">{{ $admin->tgl_lahir }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jenis Kelamin</th>
                                <td class="text-sm font-weight-normal">{{ $admin->jenis_kelamin }}</td>
                            </tr>

                            <tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Pangkat</th>
                                <td class="text-sm font-weight-normal">{{ $admin->pangkat }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    TMT</th>
                                <td class="text-sm font-weight-normal">{{ $admin->tmt }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jabatan</th>
                                <td class="text-sm font-weight-normal">{{ $admin->jabatan }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Lokasi Bekerja</th>
                                <td class="text-sm font-weight-normal">{{ $admin->lokasi_bekerja }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jejang Pendidikan</th>
                                <td class="text-sm font-weight-normal">{{ $admin->jejang_pendidikan }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Lulus Pendidikan</th>
                                <td class="text-sm font-weight-normal">{{ $admin->lulus_pendidikan }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tugas Pekerjaan</th>
                                <td class="text-sm font-weight-normal">{{ $admin->tugas_pekerjaan }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <a href="{{ route('akun_admin') }}" class="btn bg-gradient-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
