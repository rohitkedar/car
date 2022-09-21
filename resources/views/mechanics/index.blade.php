@extends('layouts.app')

@section('content')
<style>
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

<a href="{{ route('mechanics.create') }}"> Add Mechanics </a>
<?php $i = 1;?>
            <table >
              <thead >
                <tr>
                  <th>Sr. No.</th>
                  <th>Name</th>                             
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($mechanics as $key => $data)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$data->name}}</td>                                               
                  <td><a  href="{{ route('mechanics.edit',$data->id) }}"> Edit </a></td>
                  
                </tr>
                @endforeach
              </tbody>
            </table>
         
@stop