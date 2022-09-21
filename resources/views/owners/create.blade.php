@extends('layouts.app')

@section('content')
    <br>
   
                        <form action="{{ route('owners.store') }}" method="POST" >
                            @csrf
                         
                                            <label>Full Name</label>
                                            <input type="text" value="{{ old('fullname') }}" 
                                                name='fullname'  placeholder="Enter Full name">
                                            @error('fullname')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                                            <label >Email </label>
                                            <input type="email" value="{{ old('email') }}"
                                                name='email'  placeholder="Enter email">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        <br>
                                            <label >Number</label>
                                            <input type="number" value="{{ old('number') }}" 
                                                name='number' placeholder="Enter Number">
                                            @error('number')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                                            <label >Address</label>
                                            <textarea name='address'  required>{{old('address')}}</textarea>
                                            
                                            @error('address')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                                <button type="submit" >Save</button>
                            
    </section>
    <!-- /.content -->
@endsection




