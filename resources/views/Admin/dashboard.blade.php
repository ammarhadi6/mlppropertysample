@extends('adminlte::page')

@section('title', 'Admin Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <!-- Stats Cards -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>$53k</h3>
                    <p>Today's Sales</p>
                </div>
                <div class="icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>540</h3>
                    <p>Today's Message </p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>3,462</h3>
                    <p>New Leads</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>1436 </h3>
                    <p>Number of vistors</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Property Table Section -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title ">List Of Properties</h2>
                    <div class="card-tools">
                        <form method="GET" action="{{ route('admin.dashboard') }}" class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search by title, address, or type..." 
                                value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="{{ route('admin.dashboard', ['sort' => 'id', 'direction' => $sort === 'id' && $direction === 'asc' ? 'desc' : 'asc']) }}">
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
                                                alt="{{ $property->title }}" 
                                                class="property-thumbnail">
                                        </td>
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
                                             <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewModal{{ $property->id }}">
                                                    <i class="fas fa-eye"></i>
                                             </button>                                   
                                                
                                            <button class="btn btn-sm btn-warning"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-4">
                                            <div class="alert alert-warning">
                                                <i class="fas fa-exclamation-triangle"></i> 
                                                No properties found or properties data not loaded.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        @foreach($properties as $property)
                            <div class="modal fade" id="viewModal{{ $property->id }}" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel{{ $property->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewModalLabel{{ $property->id }}">
                                                Property Details - {{ $property->title ?? '—' }}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    @php
                                                        $img = $property->image;
                                                        if (!$img) {
                                                            $imageUrl = asset('images/default.png');
                                                        } elseif (preg_match('/^https?:\/\//', $img) || str_starts_with($img, '/')) {
                                                            // already absolute or starts with slash
                                                            $imageUrl = $img;
                                                        } else {
                                                            // stored in storage/app/public, use storage symlink
                                                            $imageUrl = asset('storage/' . $img);
                                                        }
                                                    @endphp
                                                    <img src="{{ $imageUrl }}" alt="{{ $property->title }}" class="img-fluid rounded mb-3">
                                                </div>

                                                <div class="col-md-7">
                                                    <table class="table table-borderless table-sm">
                                                        <tr><th>ID</th><td>{{ $property->id }}</td></tr>
                                                        <tr><th>Title</th><td>{{ $property->title ?? '—' }}</td></tr>
                                                        <tr><th>Description</th><td>{{ $property->description ?? '—' }}</td></tr>
                                                        <tr><th>Price</th><td>${{ number_format($property->price ?? 0, 2) }}</td></tr>
                                                        <tr><th>Address</th><td>{{ $property->address ?? '—' }}</td></tr>
                                                        <tr><th>Bedrooms</th><td>{{ $property->bedrooms ?? '—' }}</td></tr>
                                                        <tr><th>Bathrooms</th><td>{{ $property->bathrooms ?? '—' }}</td></tr>
                                                        <tr><th>Size</th><td>{{ $property->size ?? '—' }} sqft</td></tr>
                                                        <tr><th>Type</th><td>{{ $property->type ?? '—' }}</td></tr>
                                                        <tr><th>Status</th><td>{{ $property->status ?? '—' }}</td></tr>
                                                        <tr><th>Created</th><td>{{ optional($property->created_at)->format('d M Y') ?? '—' }}</td></tr>
                                                        <tr><th>Updated</th><td>{{ optional($property->updated_at)->format('d M Y') ?? '—' }}</td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        
                    </div>
                    
                    <!-- Pagination -->
                    @if(isset($properties) && $properties->hasPages())
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            @if($properties->onFirstPage())
                            <li class="page-item disabled">
                                <a class="page-link" href="#">&laquo;</a>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $properties->previousPageUrl() }}">&laquo;</a>
                            </li>
                            @endif
                            
                            @for($i = 1; $i <= $properties->lastPage(); $i++)
                            <li class="page-item {{ $properties->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $properties->url($i) }}">{{ $i }}</a>
                            </li>
                            @endfor
                            
                            @if($properties->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $properties->nextPageUrl() }}">&raquo;</a>
                            </li>
                            @else
                            <li class="page-item disabled">
                                <a class="page-link" href="#">&raquo;</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
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
        .small-box {
            border-radius: 0.25rem;
            box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
            display: block;
            margin-bottom: 20px;
            position: relative;
        }
        .small-box > .inner {
            padding: 10px;
        }
        .small-box h3 {
            font-size: 2.2rem;
            font-weight: bold;
            margin: 0 0 10px;
            padding: 0;
            white-space: nowrap;
        }
        .small-box p {
            font-size: 1rem;
        }
        .small-box .icon {
            color: rgba(0,0,0,.15);
            z-index: 0;
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 70px;
            transition: all .3s linear;
        }
        .small-box:hover .icon {
            font-size: 80px;
        }
        .small-box > .small-box-footer {
            background: rgba(0,0,0,.1);
            color: rgba(255,255,255,.8);
            display: block;
            padding: 3px 0;
            position: relative;
            text-align: center;
            text-decoration: none;
            z-index: 10;
        }
        .small-box > .small-box-footer:hover {
            background: rgba(0,0,0,.15);
            color: #fff;
        }
        .card-title {
            font-weight: bold;
            font-size: 1.75rem; /* around h2 size */
        }
    </style>
    
@stop

@section('js')
    <script>
        console.log("Admin dashboard loaded successfully!");
        
        // Add any custom JavaScript for the dashboard here
        document.addEventListener('DOMContentLoaded', function() {
            // Example: Confirm before deleting a property
            const deleteButtons = document.querySelectorAll('.btn-delete');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (!confirm('Are you sure you want to delete this property?')) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
@stop