@extends('adminlte::page')

@section('title', 'Add Property')

@section('content_header')
    <h1>Add New Property</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <!-- Card -->
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Property Form</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.property.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <!-- Title -->
                        <div class="form-group">
                            <label for="title">Property Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Type -->
                        <div class="form-group">
                            <label for="type">Property Type <span class="text-danger">*</span></label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="">-- Select Type --</option>
                                <option value="House" {{ old('type') == 'House' ? 'selected' : '' }}>House</option>
                                <option value="Apartment" {{ old('type') == 'Apartment' ? 'selected' : '' }}>Apartment</option>
                                <option value="Condo" {{ old('type') == 'Condo' ? 'selected' : '' }}>Condo</option>
                                <option value="Land" {{ old('type') == 'Land' ? 'selected' : '' }}>Land</option>
                            </select>
                            @error('type') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Pending" {{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Sold" {{ old('status') == 'Sold' ? 'selected' : '' }}>Sold</option>
                            </select>
                            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Price -->
                        <div class="form-group">
                            <label for="price">Price ($)<span class="text-danger">*</span></label>
                            <input type="number" name="price" class="form-control" id="price" value="{{ old('price') }}" required>
                            @error('price') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" class="form-control" id="address" value="{{ old('address') }}" required>
                            @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Bedrooms & Bathrooms -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="bedrooms">Bedrooms</label>
                                <input type="number" name="bedrooms" class="form-control" id="bedrooms" value="{{ old('bedrooms') }}">
                                @error('bedrooms') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="bathrooms">Bathrooms</label>
                                <input type="number" name="bathrooms" class="form-control" id="bathrooms" value="{{ old('bathrooms') }}">
                                @error('bathrooms') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <!-- Size -->
                        <div class="form-group">
                            <label for="size">Size (sqft)</label>
                            <input type="number" name="size" class="form-control" id="size" value="{{ old('size') }}">
                            @error('size') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Property Image -->
                        <div class="form-group">
                            <label for="image">Property Image</label>
                            <input type="file" name="image" class="form-control-file" id="image">
                            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <hr>
                        <h5>Agent Information</h5>

                        <!-- Agent Name -->
                        <div class="form-group">
                            <label for="agent_name">Agent Name <span class="text-danger">*</span></label>
                            <input type="text" name="agent_name" class="form-control" id="agent_name" value="{{ old('agent_name') }}" required>
                            @error('agent_name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Agent Company -->
                        <div class="form-group">
                            <label for="agent_company">Agent Company</label>
                            <input type="text" name="agent_company" class="form-control" id="agent_company" value="{{ old('agent_company') }}">
                            @error('agent_company') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Agent Phone -->
                        <div class="form-group">
                            <label for="agent_phone">Agent Phone <span class="text-danger">*</span></label>
                            <input type="text" name="agent_phone" class="form-control" id="agent_phone" value="{{ old('agent_phone') }}" required>
                            @error('agent_phone') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="form-group text-right">
                            <a href="{{ route('admin.list-property') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success">Save Property</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
