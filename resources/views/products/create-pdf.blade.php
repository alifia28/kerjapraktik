@extends('products.layout')

@section('content')
    <div class="form-group">
        <p align="center"><b>Laporan Data</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Divisi</th>
                <th>Aktivities</th>
            </tr>
        @foreach ($products as $pro)
            <tr>
                <td>{{ $pro->id }}</td>        
                <td>{{ $pro->name }}</td>
                <td>{{ $pro->divisi }}</td>
                <td>{{ $pro->aktivities }}</td>
            </tr>
        @endforeach    
        </table>
    </div>
 
@endsection
