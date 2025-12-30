@extends('adminlte::page')

@section('title', 'Property List')

@section('content_header')
    <h1>Property List</h1>

    
@stop

@section('content')
  
    <div class="row mb-3">
        <div class="col-md-6">
            <!-- Search Form -->
            <form method="GET" action="{{ route('admin.list-property') }}" class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by title, address, or type..." 
                       value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <div class="col-md-6 text-end">
            <!-- Add Property Button -->
            <a href="{{ route('admin.property-add') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Add New Property
            </a>
        </div>
    </div>

    <!-- Properties Table -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Properties</h3>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            <a href="{{ route('admin.list-property', ['sort' => 'id', 'direction' => $sort === 'id' && $direction === 'asc' ? 'desc' : 'asc']) }}">
                                No ID
                                @if($sort === 'id')
                                    <i class="fas fa-sort-{{ $direction === 'asc' ? 'up' : 'down' }}"></i>
                                @endif
                            </a>
                        </th>
                        <th>Image</th>
                        <th>
                            <a href="{{ route('admin.list-property', ['sort' => 'title', 'direction' => $sort === 'title' && $direction === 'asc' ? 'desc' : 'asc']) }}">
                                Title
                                @if($sort === 'title')
                                    <i class="fas fa-sort-{{ $direction === 'asc' ? 'up' : 'down' }}"></i>
                                @endif
                            </a>
                        </th>
                        <th>
                            <a href="{{ route('admin.list-property', ['sort' => 'price', 'direction' => $sort === 'price' && $direction === 'asc' ? 'desc' : 'asc']) }}">
                                Price
                                @if($sort === 'price')
                                    <i class="fas fa-sort-{{ $direction === 'asc' ? 'up' : 'down' }}"></i>
                                @endif
                            </a>
                        </th>
                        <th>Address</th>
                        <th>Details</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($properties as $property)
                        <tr>
                            <td>{{ $property->id }}</td>
                            <td>
                                <img src="{{ $property->image ? asset($property->image) : asset('images/default.png') }}"  
                                                class="property-thumbnail">                            </td>
                            <td>{{ $property->title }}</td>
                            <td>${{ number_format($property->price) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($property->address, 25) }}</td>
                            <td>
                                {{ $property->bedrooms }} Beds • 
                                {{ $property->bathrooms }} Baths • 
                                {{ $property->size }} sqft
                            </td>
                            <td>{{ $property->type }}</td>
                            <td>
                                @if($property->status == 'Active')
                                    <span class="badge bg-success">{{ $property->status }}</span>
                                @elseif($property->status == 'Pending')
                                    <span class="badge bg-warning">{{ $property->status }}</span>
                                @else
                                    <span class="badge bg-secondary">{{ $property->status }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="#" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-sm btn-danger btn-delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center py-4">
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle"></i> 
                                    No properties found.
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($properties->hasPages())
            <div class="card-footer clearfix">
                {{ $properties->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
@stop

@section('css')
    <style>
        .property-thumbnail {
            width: 60px;
            height: 45px;
            object-fit: cover;
            border-radius: 4px;
        }
    </style>
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 6000
            });
        </script>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Confirm before deleting
            document.querySelectorAll('.btn-delete').forEach(button => {
                button.addEventListener('click', function(e) {
                    if (!confirm('Are you sure you want to delete this property?')) {
                        e.preventDefault();
                    }
                });
            });
        });
        
    </script>
    
@stop
