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
                        <h4 class="text-center text-white">Input</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store_opd_admin') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="opd">OPD</label>
                                <input type="text" class="form-control" id="opd" name="opd"
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
