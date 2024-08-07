<?php

namespace App\Http\Controllers; 
use App\Http\Requests\ProfileRequest; 
use App\Models\Profile; use Illuminate\Http\Request; 

class ProfileController extends Controller { 
	
	public function store(ProfileRequest $request) { 
		$profile = Profile::create($request->validated()); 
		return response()->json($profile, 201); } 
	
	public function index() { $profiles = Profile::where('statut', 'actif')->get(); 
		return response()->json($profiles); } 
	
	public function update(ProfileRequest $request, Profile $profile) { 
		$profile->update($request->validated()); 
		return response()->json($profile); } 
	
	public function destroy(Profile $profile) { $profile->delete(); 
		return response()->json(null, 204); } } 
	
?>