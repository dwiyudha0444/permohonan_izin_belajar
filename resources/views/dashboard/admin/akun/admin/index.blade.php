@extends('dashboard.indexAdmin')
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Akun Admin</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th class="text-align: center;">Nama</th>
                                        <th class="text-align: center;"">Email</th>
                                        <th class="text-align: center;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($admin as $adm)
                                        <tr>
                                            <td style="text-align: center;">{{ $no++ }}</td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $adm->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $adm->email }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('show_akun_admin', ['id' => $adm->id]) }}"
                                                    class="btn btn-primary btn-sm text-xs font-weight-bold me-1"
                                                    data-toggle="tooltip" data-original-title="Show">
                                                    Show
                                                </a>

                                                <form action="{{ route('akun_admin_destroy', $adm->id) }}" method="POST"
                                                    style="display: inline;"
                                                    onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm text-xs font-weight-bold"
                                                        data-toggle="tooltip" data-original-title="Hapus admin">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>


                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
