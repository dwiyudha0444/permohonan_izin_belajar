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
                        <h4 class="text-center text-white">Update</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_permohonan', $berkas->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Menggunakan method PUT untuk pembaruan -->

                            <!-- ID User -->
                            <input type="hidden" id="id_users" name="id_users" value="{{ $berkas->id_users }}">

                            <div class="form-group mb-3">
                                <label for="peguruan_tinggi">Perguruan Tinggi</label>
                                <input type="text" class="form-control" id="peguruan_tinggi" name="peguruan_tinggi"
                                    value="{{ $berkas->peguruan_tinggi }}" readonly required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    value="{{ $berkas->jurusan }}" readonly required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="{{ $berkas->alamat }}" readonly required>
                            </div>

                            <!-- Ijazah -->
                            <div class="form-group mb-3">
                                @if ($berkas->ijazah)
                                    <small class="d-block mt-2">Ijazah yang ada: <a
                                            href="{{ asset('berkas/assets/ijazah/' . $berkas->ijazah) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
                                <input type="file" class="form-control" id="ijazah" name="ijazah"
                                    accept=".jpg,.jpeg,.png,.gif,.svg" disabled>
                            </div>

                            <!-- Transkip Nilai -->
                            <div class="form-group mb-3">
                                @if ($berkas->transkip_nilai)
                                    <small class="d-block mt-2">Transkip Nilai yang ada: <a
                                            href="{{ asset('berkas/assets/transkip_nilai/' . $berkas->transkip_nilai) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
                                <input type="file" class="form-control" id="transkip_nilai" name="transkip_nilai"
                                    accept=".jpg,.jpeg,.png,.gif,.svg" disabled>
                            </div>

                            <!-- Penilaian Prestasi Kerja -->
                            <div class="form-group mb-3">
                                @if ($berkas->penilaian_prestasi_kerja)
                                    <small class="d-block mt-2">Penilaian Prestasi Kerja yang ada: <a
                                            href="{{ asset('berkas/assets/penilaian_prestasi_kerja/' . $berkas->penilaian_prestasi_kerja) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
                                <input type="file" class="form-control" id="penilaian_prestasi_kerja"
                                    name="penilaian_prestasi_kerja" accept=".jpg,.jpeg,.png,.gif,.svg" disabled>
                            </div>



                            <!-- Jadwal Pendidikan -->
                            <div class="form-group mb-3">
                                @if ($berkas->jadwal_pendidikan)
                                    <small class="d-block mt-2">Jadwal Pendidikan yang ada: <a
                                            href="{{ asset('berkas/assets/jadwal_pendidikan/' . $berkas->jadwal_pendidikan) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
                                <input type="file" class="form-control" id="jadwal_pendidikan" name="jadwal_pendidikan"
                                    accept=".jpg,.jpeg,.png,.gif,.svg" disabled>
                            </div>

                            <div class="form-group mb-3">
                                @if ($berkas->surat_persetujuan)
                                    <small class="d-block mt-2">Surat Persetujuan yang ada: <a
                                            href="{{ asset('berkas/assets/surat_persetujuan/' . $berkas->surat_persetujuan) }}"
                                            target="_blank">Lihat</a></small>
                                @else
                                    <small class="d-block mt-2 text-danger">Surat Persetujuan belum ada.</small>
                                @endif

                                <input type="file" class="form-control" id="surat_persetujuan" name="surat_persetujuan"
                                    accept=".jpg,.jpeg,.png,.gif,.svg">
                            </div>


                            <!-- Status (Only field that can be updated) -->
                            <div class="form-group mb-3">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="proses" {{ $berkas->status == 'proses' ? 'selected' : '' }}>Proses
                                    </option>
                                    <option value="terverifikasi"
                                        {{ $berkas->status == 'terverifikasi' ? 'selected' : '' }}>Terverifikasi
                                    </option>
                                    <option value="revisi" {{ $berkas->status == 'revisi' ? 'selected' : '' }}>Revisi
                                    </option>
                                </select>
                            </div>

                            <!-- Jadwal Pendidikan -->
                            <div class="form-group mb-3">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    value="{{ $berkas->keterangan }}">
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
