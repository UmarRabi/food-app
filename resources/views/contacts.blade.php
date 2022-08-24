@extends('layouts.white')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
{{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script> --}}
<style>
    table { table-layout: fixed; }
    table td { overflow: hidden; }
</style>
    <div class="div">
        @include('_partials.red-header', [($text = 'Contact List')])
    </div>
    <div class="card">
        <div class="crad-body">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th style="width: 100px !important">Email</th>
                        <th>Postal code</th>
                        <th>City</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{$contact->firstname}} {{$contact->lastname}} {{$contact->middlename}}</td>
                            <td>{{$contact->email}}</td>
                             <td>{{$contact->postal_code}}</td>
                            <td>{{$contact->city}}</td>
                            <td>{{$contact->address}}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
    </script>


@endsection()

