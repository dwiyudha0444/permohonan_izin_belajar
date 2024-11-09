@extends('dashboard.indexAdmin')
@section('content')
    <style>
        .form-control[type="file"] {
            padding-right: 20px;
            /* Space on the right side of the input */
        }

        .form-control[type="file"]::-webkit-file-upload-button {
            padding-right: 10px;
            /* Adjust button padding */
        }

        /* Adjust text for 'No file chosen' */
        .form-control[type="file"]:not(:placeholder-shown) {
            padding-left: 10px;
            /* Add space on the left side */
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-gradient-dark text-white">
                        <h4 class="text-center">Update Barang</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_permohonan', $berkas->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Menggunakan method PUT untuk pembaruan -->

                            <!-- ID User -->
                            <input type="hidden" id="id_users" name="id_users" value="{{ $berkas->id_users }}">

                            <!-- Ijazah -->
                            <div class="form-group mb-3">
                                <!-- Menampilkan file yang sudah ada jika tidak diubah -->
                                @if ($berkas->ijazah)
                                    <small class="d-block mt-2">Ijazah yang ada: <a
                                            href="{{ asset('berkas/assets/ijazah/' . $berkas->ijazah) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
                                <!-- Menambahkan input file untuk ijazah -->
                                <input type="hidden" class="form-control" id="ijazah" name="ijazah" value="{{ $berkas->ijazah }}" accept=".jpg,.jpeg,.png,.gif,.svg">
                            </div>

                            <!-- Transkip Nilai -->
                            <div class="form-group mb-3">
                                <!-- Menampilkan file yang sudah ada jika tidak diubah -->
                                @if ($berkas->transkip_nilai)
                                    <small class="d-block mt-2">Transkip Nilai yang ada: <a
                                            href="{{ asset('berkas/assets/transkip_nilai/' . $berkas->transkip_nilai) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
                                <!-- Menambahkan input file untuk transkip nilai -->
                                <input type="hidden" class="form-control" id="transkip_nilai" value="{{ $berkas->transkip_nilai }}" name="transkip_nilai" accept=".jpg,.jpeg,.png,.gif,.svg">
                            </div>

                            <!-- Penilaian Prestasi Kerja -->
                            <div class="form-group mb-3">
                                <!-- Menampilkan file yang sudah ada jika tidak diubah -->
                                @if ($berkas->penilaian_prestasi_kerja)
                                    <small class="d-block mt-2">Penilaian Prestasi Kerja yang ada: <a
                                            href="{{ asset('berkas/assets/penilaian_prestasi_kerja/' . $berkas->penilaian_prestasi_kerja) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
                                <!-- Menambahkan input file untuk penilaian prestasi kerja -->
                                <input type="hidden" class="form-control" value="{{ $berkas->penilaian_prestasi_kerja }}" id="penilaian_prestasi_kerja" name="penilaian_prestasi_kerja" accept=".jpg,.jpeg,.png,.gif,.svg">
                            </div>

                            <!-- Jadwal Pendidikan -->
                            <div class="form-group mb-3">
                                <label for="jadwal_pendidikan">Jadwal Pendidikan</label>
                                <input type="date" class="form-control" id="jadwal_pendidikan" name="jadwal_pendidikan"
                                    value="{{ $berkas->jadwal_pendidikan }}">
                            </div>

                            <!-- Status (Only field that can be updated) -->
                            <div class="form-group mb-3">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="proses" {{ $berkas->status == 'proses' ? 'selected' : '' }}>Proses</option>
                                    <option value="selesai" {{ $berkas->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                    <option value="ditolak" {{ $berkas->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </div>

                            <!-- Button Update -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark w-100">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection