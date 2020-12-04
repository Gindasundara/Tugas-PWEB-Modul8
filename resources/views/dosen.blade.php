@extends('adminLayout/index')
@section('content') 
Tabel Dosen
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <td class="bg-success">nip</td>
        <td class="bg-warning">nmk</td>
        <td class="bg-danger">name</td>
        <td class="bg-info">mata_kuliah</td>
        <td class="bg-success">alamat</td>
      </tr>
    </thead>
    <tbody>
        @foreach ($dosen as $item)
            
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td class="bg-success"> {{$item->nip}} </td>
            <td class="bg-warning"> {{$item->nmk}} </td>
            <td class="bg-danger"> {{$item->name}}</td>
            <td class="bg-info"> {{$item->mata_kuliah}}</td>
            <td class="bg-success"> {{$item->alamat}}</td>
        </tr>
        
        @endforeach
    </tbody>
  </table>
@endsection