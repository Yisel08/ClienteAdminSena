<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');

        $centers = $this->fetchDataFromApi($url . '/centers');

        return view('training_center.index', compact('centers'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');
        $center = $this->fetchDataFromApi($url . '/centers/' . $id);

        return view('training_center.show', compact('center'));
    }

    public function create()
    {
        return view('training_center.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $url = env('URL_SERVER_API');
        Http::post($url . '/centers', $data);

        return redirect()->route('training_center.list');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $center = $this->fetchDataFromApi($url . '/centers/' . $id);

        return view('training_center.edit', compact('center'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $url = env('URL_SERVER_API');
        Http::put($url . '/centers/' . $id, $data);

        return redirect()->route('training_center.list');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/centers/' . $id);

        return redirect()->route('training_center.list');
    }
}