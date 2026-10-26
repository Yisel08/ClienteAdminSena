<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ComputerController extends Controller
{
     private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');
        $computers = $this->fetchDataFromApi($url . '/computers');

        return view('computer.index', compact('computers'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');
        $computer = $this->fetchDataFromApi($url . '/computers/' . $id);

        return view('computer.show', compact('computer'));
    }

    public function create()
    {
        return view('computer.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'required|integer',
            'brand' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $url = env('URL_SERVER_API') . '/computers';

        unset($data['urlFoto']);

        if ($request->hasFile('urlFoto')) {
            $file = $request->file('urlFoto');

            Http::attach(
                'urlFoto',
                file_get_contents($file->getRealPath()),
                $file->getClientOriginalName()
            )->post($url, $data);
        } else {
            Http::post($url, $data);
        }

        return redirect()->route('computer.list');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $computer = $this->fetchDataFromApi($url . '/computers/' . $id);

        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'number' => 'required|integer',
            'brand' => 'required|string|max:255',
            'urlFoto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $url = env('URL_SERVER_API') . '/computers/' . $id;

        unset($data['urlFoto']);

        if ($request->hasFile('urlFoto')) {
            $file = $request->file('urlFoto');

            Http::attach(
                'urlFoto',
                file_get_contents($file->getRealPath()),
                $file->getClientOriginalName()
            )->post($url, array_merge($data, ['_method' => 'PUT']));
        } else {
            Http::put($url, $data);
        }

        return redirect()->route('computer.list');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/computers/' . $id);

        return redirect()->route('computer.list');
    }
}