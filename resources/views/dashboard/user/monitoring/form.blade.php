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
                        <h4 class="text-center text-white">Input</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store_form_monitoring') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- ID User -->
                            <input type="hidden" id="id_users" name="id_users" value="{{ Auth::user()->id }}">

                            <div class="form-group mb-3">
                                <label for="ptn">Nama PTN</label>
                                <input type="text" class="form-control" id="ptn" name="ptn"
                                    placeholder="Masukkan nama PTN" required>
                            </div>


                            <!-- Ijazah -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_1">Transkip Nilai Semester 1</label>
                                <input type="file" class="form-control" id="transkip_nilai_1" name="transkip_nilai_1"
                                    accept="image/*" required>
                            </div>

                            <!-- Transkip Nilai -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_2">Transkip Nilai Semester 2</label>
                                <input type="file" class="form-control" id="transkip_nilai_2" name="transkip_nilai_2"
                                    accept="image/*" required>
                            </div>

                            <!-- Penilaian Prestasi Kerja -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_3">Transkip Nilai Semester 3</label>
                                <input type="file" class="form-control" id="transkip_nilai_3"
                                    name="transkip_nilai_3" accept="image/*" required>
                            </div>

                            <!-- Penilaian Prestasi Kerja -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_4">Transkip Nilai Semester 4</label>
                                <input type="file" class="form-control" id="transkip_nilai_4" name="transkip_nilai_4"
                                    accept="image/*" required>
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
