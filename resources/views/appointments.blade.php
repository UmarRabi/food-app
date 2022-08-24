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
        @include('_partials.multiple-white-header', [($text = 'Upload Files')])
    </div>
    <div class="card">
        <div class="crad-body">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th style="width: 100px !important">Location</th>
                        <th>Date</th>
                        <th>Channel</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td>{{$appointment->title}}</td>
                            <td>{{$appointment->location}}</td>
                            <td>{{$appointment->booked_date}} {{$appointment->booked_time}}</td>
                            <td>{{$appointment->channel}}</td>
                            <td></td>
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

