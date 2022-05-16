@extends('template.main')

@section('container')
    <div class="p-5">
            {{-- <form action="/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control" name="upload-file">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form> --}}

            <form action="/logout" method="post" class="mb-0">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>



            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama File</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                        $increment = 0;
                    @endphp
                    @foreach ($files as $file)                        
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $file }}</td>
                            <td><a href="/download/{{ $increment++ }}/{{ $file }}" class="btn btn-primary">Download</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

    </div>
@endsection
