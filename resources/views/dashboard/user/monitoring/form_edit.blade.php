@extends('dashboard.indexUser')
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
                        <form action="{{ route('update_monitoring', $monitoring->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Menggunakan method PUT untuk pembaruan -->

                            <!-- ID User -->
                            <input type="hidden" id="id_users" name="id_users" value="{{ Auth::user()->id }}">

                            <div class="form-group mb-3">
                                <label for="ptn">Nama PTN</label>
                                <input type="text" class="form-control" id="ptn" name="ptn"
                                    value="{{ $monitoring->ptn }}" required>
                            </div>

                            <!-- Ijazah -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_1">Transkip Nilai Semester 1</label>
                                <input type="file" class="form-control" id="transkip_nilai_1" name="transkip_nilai_1"
                                    accept="image/*">
                                <!-- Menampilkan file yang sudah ada jika tidak diubah -->
                                @if ($monitoring->transkip_nilai_1)
                                    <small class="d-block mt-2">Transkip Nilai Semester 1 yang ada: <a
                                            href="{{ asset('monitoring/assets/transkip_nilai_1/' . $monitoring->transkip_nilai_1) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
                            </div>

                            <!-- Transkip Nilai -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_2">Transkip Nilai Semester 2</label>
                                <input type="file" class="form-control" id="transkip_nilai_2" name="transkip_nilai_2"
                                    accept="image/*">
                                <!-- Menampilkan file yang sudah ada jika tidak diubah -->
                                @if ($monitoring->transkip_nilai_2)
                                    <small class="d-block mt-2">Transkip Nilai Semester 2 yang ada: <a
                                            href="{{ asset('monitoring/assets/transkip_nilai_2/' . $monitoring->transkip_nilai_2) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
                            </div>

                            <!-- Penilaian Prestasi Kerja -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_3">Transkip Nilai Semester 3</label>
                                <input type="file" class="form-control" id="transkip_nilai_3" name="transkip_nilai_3"
                                    accept="image/*">
                                <!-- Menampilkan file yang sudah ada jika tidak diubah -->
                                @if ($monitoring->transkip_nilai_3)
                                    <small class="d-block mt-2">Transkip Nilai Semester 3 yang ada: <a
                                            href="{{ asset('monitoring/assets/transkip_nilai_3/' . $monitoring->transkip_nilai_3) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="transkip_nilai_4">Transkip Nilai Semester 4</label>
                                <input type="file" class="form-control" id="transkip_nilai_4" name="transkip_nilai_4"
                                    accept="image/*">
                                <!-- Menampilkan file yang sudah ada jika tidak diubah -->
                                @if ($monitoring->transkip_nilai_4)
                                    <small class="d-block mt-2">Transkip Nilai Semester 4 yang ada: <a
                                            href="{{ asset('monitoring/assets/transkip_nilai_4/' . $monitoring->transkip_nilai_4) }}"
                                            target="_blank">Lihat</a></small>
                                @endif
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
