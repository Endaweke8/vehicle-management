<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle::paginate(5); 
        return view('all_vehicle',compact('vehicles'));
    }
    public function create(){
        return view('create_vehicle');
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'license_plate' => 'required|string|max:20|unique:vehicles',
        ]);
       
        $vehicle = new Vehicle($validatedData);
        $vehicle->save();

        return redirect()->route('fetch_all_vehicles')->with('success', 'Vehicle created successfully.');
    }
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('edit_vehicle', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::findOrFail($id);

        $validatedData = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'license_plate' => 'required|string|max:20|unique:vehicles,license_plate,' . $id,
        ]);

        $vehicle->update($validatedData);

        return redirect()->route('fetch_all_vehicles')->with('success', 'Vehicle updated successfully.');
    }

    public function show($id)
    {
        // Fetch the vehicle by its ID
        $vehicle = Vehicle::findOrFail($id);

        // Return the view with the vehicle details
        return view('show_vehicle', compact('vehicle'));
    }
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('fetch_all_vehicles')->with('success', 'Vehicle deleted successfully.');
    }

}
