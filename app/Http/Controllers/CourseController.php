<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);

        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');

        $cursos = $this->fetchDataFromApi($url . '/cursos');

        return view('course.index', compact('cursos'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');
        $curso = $this->fetchDataFromApi($url . '/cursos/' . $id);

        return view('course.show', compact('curso'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $areas = $this->fetchDataFromApi($url . '/areas');
        $training_centers = $this->fetchDataFromApi($url . '/centers');

        return view('course.create', compact('areas', 'training_centers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'course_number' => 'required|integer',
            'day' => 'required|string|max:50',
            'area_id' => 'required|integer',
            'training_center_id' => 'required|integer',
        ]);

        $url = env('URL_SERVER_API');
        Http::post($url . '/cursos', $data);

        return redirect()->route('course.list');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $curso = $this->fetchDataFromApi($url . '/cursos/' . $id);
        $areas = $this->fetchDataFromApi($url . '/areas');
        $training_centers = $this->fetchDataFromApi($url . '/centers');

        return view('course.edit', compact('curso', 'areas', 'training_centers'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'course_number' => 'required|integer',
            'day' => 'required|string|max:50',
            'area_id' => 'required|integer',
            'training_center_id' => 'required|integer',
        ]);

        $url = env('URL_SERVER_API');
        Http::put($url . '/cursos/' . $id, $data);

        return redirect()->route('course.list');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/cursos/' . $id);

        return redirect()->route('course.list');
    }
}