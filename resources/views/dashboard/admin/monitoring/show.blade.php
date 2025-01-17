@extends('dashboard.indexAdmin')

@section('content')
    <div class="col-md-12 mb-lg-0 mb-4">
        <div class="card mt-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Detail Monitoring</h6>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <tbody>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama</th>
                                <td class="text-sm font-weight-normal">{{ $monitoring->user->name }}</td>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Transkip Nilai Semester 1</th>
                                <td class="text-sm font-weight-normal">
                                    @if (!empty($monitoring->transkip_nilai_1))
                                        <a href="{{ asset('monitoring/assets/transkip_nilai_1/' . $monitoring->transkip_nilai_1) }}"
                                            target="_blank" class="btn btn-info btn-sm">
                                            Lihat Foto
                                        </a>
                                    @else
                                        <span>Data Kosong</span>
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Transkip Nilai Semester 2</th>
                                <td class="text-sm font-weight-normal">
                                    @if (!empty($monitoring->transkip_nilai_2))
                                        <a href="{{ asset('monitoring/assets/transkip_nilai_2/' . $monitoring->transkip_nilai_2) }}"
                                            target="_blank" class="btn btn-info btn-sm">
                                            Lihat Foto
                                        </a>
                                    @else
                                        <span>Data Kosong</span>
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Transkip Nilai Semester 3</th>
                                <td class="text-sm font-weight-normal">
                                    @if (!empty($monitoring->transkip_nilai_3))
                                        <a href="{{ asset('monitoring/assets/transkip_nilai_3/' . $monitoring->transkip_nilai_3) }}"
                                            target="_blank" class="btn btn-info btn-sm">
                                            Lihat Foto
                                        </a>
                                    @else
                                        <span>Data Kosong</span>
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    PTN</th>
                                <td class="text-sm font-weight-normal">{{ $monitoring->ptn }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <a href="{{ route('monitoring_admin') }}" class="btn bg-gradient-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
