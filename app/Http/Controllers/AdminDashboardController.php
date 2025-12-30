<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {
         $query = \App\Models\Property::query();

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('title', 'like', "%$search%")
                ->orWhere('address', 'like', "%$search%")
                ->orWhere('type', 'like', "%$search%");
        }
            // Sorting
        $sort = $request->get('sort', 'id');       // default sort column
        $direction = $request->get('direction', 'asc'); // default direction

        $properties = $query->orderBy($sort, $direction)->paginate(8);
                 
        // Return the admin dashboard view with properties data
        return view('admin.dashboard', compact('properties', 'sort', 'direction'));
    }

    public function listingProperty(Request $request)
    {
        $query = \App\Models\Property::query();

    // Search
    if ($request->filled('search')) {
        $search = $request->search;
        $query->where('title', 'like', "%$search%")
              ->orWhere('address', 'like', "%$search%")
              ->orWhere('type', 'like', "%$search%");
    }

    // Sorting
    $sort = $request->get('sort', 'id');       // default sort column
    $direction = $request->get('direction', 'asc'); // default direction

    $properties = $query->orderBy($sort, $direction)->paginate(10);

    return view('admin.list-property', compact('properties', 'sort', 'direction'));

    }

    public function createProperty()
    {
        return view('admin.property-add');
    }

    // Handle form submit
    public function storeProperty(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'status' => 'required|string',
            'price' => 'required|numeric',
            'address' => 'required|string|max:255',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'size' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'agent_name' => 'required|string|max:255',
            'agent_company' => 'nullable|string|max:255',
            'agent_phone' => 'required|string|max:20',
            'agent_avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            // Save file into public/properties folder
            $request->file('image')->move(public_path('properties'), $fileName);
            // Store path in database
            $validated['image'] = 'properties/' . $fileName;
        }


        if ($request->hasFile('agent_avatar')) {
            $validated['agent_avatar'] = $request->file('agent_avatar')->store('agents', 'public');
        }

        Property::create($validated);

        return redirect()->route('admin.list-property')->with('success', 'Your Data Has Completely Save!');
    }
}
