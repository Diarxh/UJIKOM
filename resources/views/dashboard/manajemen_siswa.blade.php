 @@extends('layouts.dashboard.app')
 {{--  @('resources/js/app.js')  --}}
 @section('content')
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">Manajemen Siswa</h1>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->nis }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->alamat }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger">Hapus</a>
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
 @endsection
