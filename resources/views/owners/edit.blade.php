@extends('layouts.app')

@section('content')

                        <h3 >Edit Owner</h3>
                   
                    <form action="{{ route('owners.update', $owner->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        
                                        <label>Full Name</label>
                                        <input type="text" value="{{ $owner->fullname }}"  name='fullname'  placeholder="Enter fullname">
                                        @error('fullname')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    <br>
                                        <label>Email </label>
                                        <input type="email" value="{{ $owner->email }}" name='email' placeholder="Enter email">
                                        @error('email')
                                        <span >{{ $message }}</span>
                                        @enderror
                                    <br>
                                            <label>Number</label>
                                            <input type="number" value="{{ $owner->number }}" 
                                                name='number' placeholder="Enter Number">
                                            @error('number')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        <br>
                                            <label for="exampleInputEmail1">Address</label>
                                            <textarea name='address' required>{{$owner->address }}</textarea>
                                            
                                            @error('address')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                        
</section>
@endsection
