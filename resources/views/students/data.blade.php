@extends('layout.main')

@section('content')
<h3>Data Students</h3>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" >
        <i class="fas fa-plus-circle"></i> Add new data
      </button>
    </div>
    <div class="card-body">
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>
                        NO
                    </th>
                    <th>
                        Id Students
                    </th>
                    <th>
                        Full Name
                    </th>
                    <th>
                        Genre
                    </th>
                    <th>
                        Addres
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Phone
                    </th>
                    <th>
                        #
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->idstudents }}</td>
                        <td>{{ $row->fullname }}</td>
                        <td>{{ ($row -> genre =='M')? 'Male' : 'Female'}}</td>
                        <td>{{ $row->addres }}</td>
                        <td>{{ $row->emailaddres }}</td>
                        <td>{{ $row->phone }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
@endsection