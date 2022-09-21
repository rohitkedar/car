@extends('layouts.app')
@section('content')
   
                        <form action="{{ route('mechanics.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                                            <label >Name</label>
                                            <input type="text" value="{{ old('name') }}" name='name'  placeholder="Enter  name">
                                            @error('name')
                                                <span >{{ $message }}</span>
                                            @enderror
                                       <br>
                                <button type="submit" >Save</button>
                            
@endsection




