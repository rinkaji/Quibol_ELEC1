<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimalController extends Controller
{
    public function findingAnimal(Request $request)
    {
        $apiKey = "vftEu8xipkpnTOuKdleIiw==NNpzQqspfwfBRUdS";
        $animals = ['cheetah', 'lion', 'rhino'];
        $results = [];

        foreach ($animals as $animal) {
            $response = Http::withHeaders([
                'X-Api-Key' => $apiKey
            ])->get("https://api.api-ninjas.com/v1/animals", [
                'name' => $animal
            ]);

            if ($response->successful()) {
                $data = $response->json();
                if (!empty($data)) {
                    $results[] = [
                        'name' => $animal,
                        'kingdom' => $data[0]['taxonomy']['kingdom'],
                        'family' => $data[0]['taxonomy']['family'],
                        'order' => $data[0]['taxonomy']['order'],
                    ];
                } else {
                    $results[] = ['name' => $animal, 'error' => 'No data found.'];
                }
            } else {
                $results[] = ['name' => $animal, 'error' => 'API request failed.'];
            }
        }

        return view('find', compact('results'));
    }
}
