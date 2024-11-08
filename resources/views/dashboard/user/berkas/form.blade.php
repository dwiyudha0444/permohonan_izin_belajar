@extends('dashboard.indexUser')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-gradient-dark text-white">
                        <h4 class="text-center">Input Barang</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store_form_upload_berkas') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- ID User -->
                            <input type="hidden" id="id_users" name="id_users" value="{{ Auth::user()->id }}">

                            <!-- Ijazah -->
                            <div class="form-group mb-3">
                                <label for="ijazah">Ijazah</label>
                                <input type="file" class="form-control" id="ijazah" name="ijazah" accept="image/*"
                                    required>
                            </div>

                            <!-- Transkip Nilai -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai">Transkip Nilai</label>
                                <input type="file" class="form-control" id="transkip_nilai" name="transkip_nilai"
                                    accept="image/*" required>
                            </div>

                            <!-- Penilaian Prestasi Kerja -->
                            <div class="form-group mb-3">
                                <label for="penilaian_prestasi_kerja">Penilaian Prestasi Kerja</label>
                                <input type="file" class="form-control" id="penilaian_prestasi_kerja"
                                    name="penilaian_prestasi_kerja" accept="image/*" required>
                            </div>

                            <!-- Jadwal Pendidikan -->
                            <div class="form-group mb-3">
                                <label for="jadwal_pendidikan">Jadwal Pendidikan</label>
                                <input type="date" class="form-control" id="jadwal_pendidikan" name="jadwal_pendidikan"
                                    required>
                            </div>

                            <!-- Button Simpan -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark w-100">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
