@extends('dashboard.indexAdmin')

@section('content')
    <div class="col-md-12 mb-lg-0 mb-4">
        <div class="card mt-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Detail Berkas Persyaratan</h6>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <tbody>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama</th>
                                <td class="text-sm font-weight-normal">{{ $berkas->user->name }}</td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Ijazah</th>
                                <td class="text-sm font-weight-normal">
                                    <a href="{{ asset('berkas/assets/ijazah/' . $berkas->ijazah) }}" target="_blank"
                                        class="btn btn-info btn-sm">
                                        Lihat File
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Transkip Nilai</th>
                                <td class="text-sm font-weight-normal">
                                    <a href="{{ asset('berkas/assets/transkip_nilai/' . $berkas->transkip_nilai) }}"
                                        target="_blank" class="btn btn-info btn-sm">
                                        Lihat File
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Penilaian Prestasi Kerja</th>
                                <td class="text-sm font-weight-normal">
                                    <a href="{{ asset('berkas/assets/penilaian_presentasi_kerja/' . $berkas->penilaian_prestasi_kerja) }}"
                                        target="_blank" class="btn btn-info btn-sm">
                                        Lihat File
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jadwal Pendidikan</th>
                                <td class="text-sm font-weight-normal">
                                    <a href="{{ asset('berkas/assets/jadwal_pendidikan/' . $berkas->jadwal_pendidikan) }}"
                                        target="_blank" class="btn btn-info btn-sm">
                                        Lihat File
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Surat Persetujuan
                                </th>
                                <td class="text-sm font-weight-normal">
                                    <a href="{{ asset('berkas/assets/surat_persetujuan/' . $berkas->surat_persetujuan) }}"
                                        target="_blank" class="btn btn-info btn-sm">
                                        Lihat File
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Status</th>
                                <td class="text-sm font-weight-normal">
                                    <span
                                        style="background-color: {{ $berkas->status === 'proses' ? 'blue' : ($berkas->status === 'terverifikasi' ? 'green' : 'gray') }};
                                        color: white; padding: 5px 10px; border-radius: 5px;">
                                        {{ $berkas->status }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Keterangan
                                </th>
                                <td class="text-sm font-weight-normal">
                                    <span>
                                        @if ($berkas->keterangan)
                                            {{ $berkas->keterangan }}
                                        @else
                                            Keterangan belum ada
                                        @endif
                                    </span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <a href="{{ route('permohonan_izin_belajar') }}" class="btn bg-gradient-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
