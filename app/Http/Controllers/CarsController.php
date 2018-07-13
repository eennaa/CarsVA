<?php
use App\Car;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $car = Car::all();
        return view ('cars', compact('car'));
    }
}
