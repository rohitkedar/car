@extends('layouts.app')

@section('content')
    
                            <p>Add Car</p>
                        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                                        <label>Owner</label>
                                        <select class="form-control" name="owner_id"  >
                                        <option value="">Select Owner</option>
                                        @foreach($owner as $item)
                                        <option value="{{ $item->id }}"  {{ old('owner_id') == $item->id ? 'selected' : ''}}>{{ $item->fullname }}</option>
                                        @endforeach
                                        </select>
                                        @error('owner_id')
                                        <span >{{ $message }}</span>
                                        @enderror
                                  <br>
                                    
                                            <label >Number</label>
                                            <input type="text" value="{{ old('number') }}" name='number' id="exampleInputEmail1" placeholder="Enter  number">
                                            @error('number')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                                            <label Model</label>
                                            <input type="text" value="{{ old('model') }}" name='model' id="exampleInputEmail1" placeholder="Enter  Model">
                                            @error('model')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                                            <label>Color</label>
                                            <input type="text" value="{{ old('color') }}" class="form-control"
                                                name='color' id="exampleInputEmail1" placeholder="Enter  Color">
                                            @error('color')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                                            <label for="exampleInputEmail1">Engine Type</label>
                                            <input type="text" value="{{ old('engine_type') }}"  name='engine_type' id="exampleInputEmail1" placeholder="Enter  Engine Type">
                                            @error('engine_type')
                                                <span >{{ $message }}</span>
                                            @enderror<br>
                                            <label >Description</label>
                                            <textarea name='description'  required>{{old('description')}}</textarea>
                                            
                                            @error('description')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                                <button type="submit" >Save</button>
                           
                        </form>
                    
@endsection




