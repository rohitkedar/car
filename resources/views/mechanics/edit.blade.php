@extends('layouts.app')
@section('content')

                    <form action="{{ route('mechanics.update', $mechanic->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        
                                        <label > Name</label>
                                        <input type="text" value="{{ $mechanic->name }}"  name='name'  placeholder="Enter fullname">
                                        @error('name')
                                        <span >{{ $message }}</span>
                                        @enderror
                                    <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                        
@endsection
