<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DrinkResource;
use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DrinkResource::collection(Drink::latest()->paginate());
    }

    /**
     * Display the specified resource.
     */
    public function show(Drink $drink)
    {
        return new DrinkResource($drink);
    }

    public function petition(Drink $drink, Request $request)
    {
        $user = $request->user();

        $user->drinks()->attach($drink);

        return response()->json([
            'message' => 'Bebida solicitada correctamente'
        ]);
    }
}
