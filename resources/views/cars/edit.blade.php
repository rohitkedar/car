

@extends('layouts.app')

@section('content')
    <br>
   
                            <p>Edit Car</h3>
                        </div>
                       
                        <form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                            <br>
                                        <label>Owner</label>
                                        <select  name="owner_id"  >
                                        <option value="">Select Owner</option>
                                        @foreach($owner as $item)
                                        <option value="{{ $item->id }}"  {{  $car->owner_id == $item->id ? 'selected' : ''}}>{{ $item->fullname }}</option>
                                        @endforeach
                                        </select>
                                        @error('owner_id')
                                        <span >{{ $message }}</span>
                                        @enderror
                                   <br>
                                    
                                            <label>Number</label>
                                            <input type="text" value="{{ $car->number  }}" name='number' placeholder="Enter  number">
                                            @error('number')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                                            <label>Model</label>
                                            <input type="text" value="{{ $car->model  }}"  name='model' placeholder="Enter  Model">
                                            @error('model')
                                                <span>{{ $message }}</span>
                                            @enderror
                                            <br>
                                            <label>Color</label>
                                            <input type="text" value="{{ $car->color }}" name='color'  placeholder="Enter  Color">
                                            @error('color')
                                                <span{{ $message }}</span>
                                            @enderror
                                            <br>
                                            <label >Engine Type</label>
                                            <input type="text" value="{{ $car->engine_type }}" name='engine_type'  placeholder="Enter  Engine Type">
                                            @error('engine_type')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                                             <label >Description</label>
                                            <textarea name='description'  required>{{ $car->description }}</textarea>
                                            
                                            @error('description')
                                                <span >{{ $message }}</span>
                                            @enderror
                                        <br>
                                            
                                <button type="submit" class="btn btn-primary">Save</button>
                           
                        </form>
                    
@endsection




