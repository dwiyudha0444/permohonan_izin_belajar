@extends('dashboard.indexAdmin')

@section('content')
    <div class="col-md-12 mb-lg-0 mb-4">
        <div class="card mt-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Detail Akun Pegawai</h6>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <tbody>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama</th>
                                <td class="text-sm font-weight-normal">{{ $user->name }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Email</th>
                                <td class="text-sm font-weight-normal">{{ $user->email }}</td>
                            </tr>
                            
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nip</th>
                                <td class="text-sm font-weight-normal">{{ $user->nip }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tanggal Lahir</th>
                                <td class="text-sm font-weight-normal">{{ $user->tgl_lahir }}</td>
                            </tr>

<tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Pangkat</th>
                                <td class="text-sm font-weight-normal">{{ $user->pangkat }}</td>
                            </tr>

<tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    TMT</th>
                                <td class="text-sm font-weight-normal">{{ $user->tmt }}</td>
                            </tr>

<tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jabatan</th>
                                <td class="text-sm font-weight-normal">{{ $user->jabatan }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Lokasi Bekerja</th>
                                <td class="text-sm font-weight-normal">{{ $user->lokasi_bekerja }}</td>
                            </tr>

<tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jejang Pendidikan</th>
                                <td class="text-sm font-weight-normal">{{ $user->jejang_pendidikan }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Lulus Pendidikan</th>
                                <td class="text-sm font-weight-normal">{{ $user->lulus_pendidikan }}</td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tugas Pekerjaan</th>
                                <td class="text-sm font-weight-normal">{{ $user->tugas_pekerjaan }}</td>
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
