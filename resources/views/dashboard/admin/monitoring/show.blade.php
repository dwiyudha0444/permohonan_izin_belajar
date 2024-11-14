@extends('dashboard.indexAdmin')
@section('content')
    <style>
        .form-control[readonly],
        .form-control[disabled] {
            background-color: #f8f9fa;
            color: #6c757d;
            cursor: not-allowed;
        }
        
        .form-group label {
            font-weight: bold;
        }

        .card-header h4 {
            margin-bottom: 0;
        }
    </style>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-gradient-dark text-white">
                        <h4 class="text-center text-white">Monitoring</h4>
                    </div>
                    <div class="card-body">
                        <form>

                        
                            <!-- PTN Field -->
                            <div class="form-group mb-3">
                                <label for="ptn">Nama PTN</label>
                                <input type="text" class="form-control" id="ptn" name="ptn"
                                    value="{{ $monitoring->ptn }}" readonly>
                            </div>

                            <!-- Transkip Nilai Semester 1 -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_1">Transkip Nilai Semester 1</label>
                                
                                @if ($monitoring->transkip_nilai_1)
                                    <small class="d-block mt-2">File yang ada: 
                                        <a href="{{ asset('monitoring/assets/transkip_nilai_1/' . $monitoring->transkip_nilai_1) }}" target="_blank">Lihat</a>
                                    </small>
                                @endif
                            </div>

                            <!-- Transkip Nilai Semester 2 -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_2">Transkip Nilai Semester 2</label>
                                
                                @if ($monitoring->transkip_nilai_2)
                                    <small class="d-block mt-2">File yang ada: 
                                        <a href="{{ asset('monitoring/assets/transkip_nilai_2/' . $monitoring->transkip_nilai_2) }}" target="_blank">Lihat</a>
                                    </small>
                                @endif
                            </div>

                            <!-- Transkip Nilai Semester 3 -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_3">Transkip Nilai Semester 3</label>
                                
                                @if ($monitoring->transkip_nilai_3)
                                    <small class="d-block mt-2">File yang ada: 
                                        <a href="{{ asset('monitoring/assets/transkip_nilai_3/' . $monitoring->transkip_nilai_3) }}" target="_blank">Lihat</a>
                                    </small>
                                @endif
                            </div>

                            <!-- Transkip Nilai Semester 4 -->
                            <div class="form-group mb-3">
                                <label for="transkip_nilai_4">Transkip Nilai Semester 4</label>
                                
                                @if ($monitoring->transkip_nilai_4)
                                    <small class="d-block mt-2">File yang ada: 
                                        <a href="{{ asset('monitoring/assets/transkip_nilai_4/' . $monitoring->transkip_nilai_4) }}" target="_blank">Lihat</a>
                                    </small>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
