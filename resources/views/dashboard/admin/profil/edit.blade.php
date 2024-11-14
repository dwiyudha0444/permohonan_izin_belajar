@extends('dashboard.indexAdmin')

@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="card card-body mx-2 mx-md-2 mt-n6">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">{{ Auth::guard('admin')->user()->name }}</h5>
                        <p class="mb-0 font-weight-normal text-sm">{{ Auth::guard('admin')->user()->jabatan }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Edit Profile</h6>
                        </div>
                        <div class="card-body p-3">
                            <form action="{{ route('update_profile_user', $Admin->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><label for="name">Full Name</label></td>
                                                <td><input type="text" class="form-control" id="name" name="name"
                                                        value="{{ old('name', $Admin->name) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="nip">NIP</label></td>
                                                <td><input type="text" class="form-control" id="nip" name="nip"
                                                        value="{{ old('nip', $Admin->nip) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="nip">Email</label></td>
                                                <td><input type="text" class="form-control" id="nip" name="email"
                                                        value="{{ old('nip', $Admin->email) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="tgl">Tempat Tanggal Lahir</label></td>
                                                <td><input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir', $Admin->tgl_lahir) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="pangkat">Pangkat</label></td>
                                                <td><input type="text" class="form-control" id="pangkat" name="pangkat"
                                                        value="{{ old('pangkat', $Admin->pangkat) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="jabatan">TMT</label></td>
                                                <td><input type="text" class="form-control" id="tmt" name="tmt"
                                                        value="{{ old('jabatan', $Admin->tmt) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="jabatan">Jabatan</label></td>
                                                <td><input type="text" class="form-control" id="jabatan" name="jabatan"
                                                        value="{{ old('jabatan', $Admin->jabatan) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="lokasi_bekerja">Lokasi Tempat Bekerja</label></td>
                                                <td><input type="text" class="form-control" id="lokasi_bekerja"
                                                        name="lokasi_bekerja"
                                                        value="{{ old('lokasi_bekerja', $Admin->lokasi_bekerja) }}" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="jejang_pendidikan">Jenjang Pendidikan</label></td>   
                                                <td><input type="text" class="form-control" id="jejang_pendidikan"
                                                        name="jejang_pendidikan"
                                                        value="{{ old('jejang_pendidikan', $Admin->jejang_pendidikan) }}"
                                                        required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="lulus_pendidikan">Lulusan Pendidikan Terakhir</label></td>
                                                <td><input type="text" class="form-control" id="lulus_pendidikan"
                                                        name="lulus_pendidikan"
                                                        value="{{ old('lulus_pendidikan', $Admin->lulus_pendidikan) }}"
                                                        required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="tugas_pekerjaan">Tugas Pendidikan</label></td>
                                                <td><input type="text" class="form-control" id="tugas_pekerjaan"
                                                        name="tugas_pekerjaan"
                                                        value="{{ old('tugas_pekerjaan', $Admin->tugas_pekerjaan) }}"
                                                        required></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
