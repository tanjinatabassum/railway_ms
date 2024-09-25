@extends('layouts.app')


@section('content')
<div class="container">
    
    <h1>Train: RANGPUR EXPRESS (771)</h1>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('CSS/styles.css') }}">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Classes</th>
                <th>Times</th>
                <th>Stopages</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul>
                        <li>Class: AC_S - Capacity: 200</li>
                        <li>Class: AC_B - Capacity: 150</li>
                        <li>Class: SHOVAN - Capacity: 400</li>
                        <li>Class: S.CHAIR - Capacity: 100</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>Saturday - 7:30 AM</li>
                        <li>Sunday - 7:30 AM</li>
                        <li>Monday - 7:30 AM</li>
                        <li>Tuesday - 7:30 AM</li>
                        <li>Friday - 6:00 AM</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>Chattogram</li>
                        <li>Comilla</li>
                        <li>Dhaka</li>
                    </ul>
                </td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-primary">Update</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
