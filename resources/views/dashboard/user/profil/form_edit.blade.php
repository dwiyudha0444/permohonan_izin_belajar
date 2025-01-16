@extends('dashboard.indexUser')

@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="card card-body mx-2 mx-md-2 mt-n6">
            <div class="row gx-4 mb-2">

            </div>
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Edit Data Diri</h6>
                        </div>
                        <div class="card-body p-3">
                            <form action="{{ route('update_profile_user', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><label for="name">Nama Lengkap</label></td>
                                                <td><input type="text" class="form-control" id="name" name="name"
                                                        value="{{ old('name', $user->name) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="nip">NIP</label></td>
                                                <td><input type="text" class="form-control" id="nip" name="nip"
                                                        value="{{ old('nip', $user->nip) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="nip">Email</label></td>
                                                <td><input type="text" class="form-control" id="nip" name="email"
                                                        value="{{ old('nip', $user->email) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="tgl">Tempat, Tanggal Lahir</label></td>
                                                <td><input type="date" class="form-control" id="tgl_lahir"
                                                        name="tgl_lahir" value="{{ old('tgl_lahir', $user->tgl_lahir) }}"
                                                        required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                                                <td>
                                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                                                        required>
                                                        <option value="" disabled selected>Pilih Jenis Kelamin
                                                        </option>
                                                        <option value="Laki-laki"
                                                            {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                                                            Laki-laki
                                                        </option>
                                                        <option value="Perempuan"
                                                            {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                                                            Perempuan
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><label for="pangkat">Pangkat / Golongan Ruang Akhir</label></td>
                                                <td><input type="text" class="form-control" id="pangkat" name="pangkat"
                                                        value="{{ old('pangkat', $user->pangkat) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="jabatan">TMT Pangkat Golongan Terakhir</label></td>
                                                <td><input type="text" class="form-control" id="tmt" name="tmt"
                                                        value="{{ old('jabatan', $user->tmt) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="jabatan">Jabatan</label></td>
                                                <td><input type="text" class="form-control" id="jabatan" name="jabatan"
                                                        value="{{ old('jabatan', $user->jabatan) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="lokasi_bekerja">Alamat Tempat Bekerja</label></td>
                                                <td><input type="text" class="form-control" id="lokasi_bekerja"
                                                        name="lokasi_bekerja"
                                                        value="{{ old('lokasi_bekerja', $user->lokasi_bekerja) }}"
                                                        required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="jejang_pendidikan">Jenjang Pendidikan Terakhir</label></td>
                                                <td><input type="text" class="form-control" id="jejang_pendidikan"
                                                        name="jejang_pendidikan"
                                                        value="{{ old('jejang_pendidikan', $user->jejang_pendidikan) }}"
                                                        required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="lulus_pendidikan">Tahun Lulusan Pendidikan Terakhir</label></td>
                                                <td><input type="text" class="form-control" id="lulus_pendidikan"
                                                        name="lulus_pendidikan"
                                                        value="{{ old('lulus_pendidikan', $user->lulus_pendidikan) }}"
                                                        required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="tugas_pekerjaan">Tugas Pendidikan Yang Saya Tangani</label></td>
                                                <td><input type="text" class="form-control" id="tugas_pekerjaan"
                                                        name="tugas_pekerjaan"
                                                        value="{{ old('tugas_pekerjaan', $user->tugas_pekerjaan) }}"
                                                        required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="peguruan_tinggi">Peguruan Tinggi Yang Saya Pilih</label></td>
                                                <td><input type="text" class="form-control" id="peguruan_tinggi"
                                                        name="peguruan_tinggi"
                                                        value="{{ old('peguruan_tinggi', $user->peguruan_tinggi) }}"
                                                        required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="jurusan">Jurusan / Program Studi</label></td>
                                                <td><input type="text" class="form-control" id="jurusan" name="jurusan"
                                                        value="{{ old('jurusan', $user->jurusan) }}" required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="alamat">Alamat Perkuliahan</label></td>
                                                <td><input type="text" class="form-control" id="alamat"
                                                        name="alamat" value="{{ old('alamat', $user->alamat) }}"
                                                        required></td>
                                            </tr>
                                            <tr>
                                                <td><label for="id_opd">Nama Instasi Tempat Berkerja</label></td>
                                                <td>
                                                    <select class="form-control" id="id_opd" name="id_opd" required>
                                                        <option value="" disabled selected>Pilih OPD</option>
                                                        @foreach ($opds as $opd)
                                                            <option value="{{ $opd->id }}"
                                                                {{ old('id_opd', $user->id_opd) == $opd->id ? 'selected' : '' }}>
                                                                {{ $opd->opd }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>
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
