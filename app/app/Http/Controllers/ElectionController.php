<?php

namespace App\Http\Controllers;

use App\Models\Election;
use App\Pipelines\LikesFilter;
use App\Traits\ApiTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Pipeline;

class ElectionController extends Controller
{
    use ApiTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Pipeline::send(Election::query())
            ->through([
                new LikesFilter('name', ['name', 'type']),
            ])
            ->thenReturn();

        return $this->sendResponse('Data successfully retrieved', data: $model->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|in:pemilu,pemilihan',
        ]);

        Election::create([
            'name' => $request->name,
            'type' => $request->type,
        ]);

        return $this->sendResponse('Data successfully added', code: 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Election $election)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|in:pemilu,pemilihan',
        ]);

        $election->name = $request->name;
        $election->type = $request->type;
        $election->save();

        return $this->sendResponse('Data successfully updated', code: 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Election $election)
    {
        $election->delete();
        return $this->sendResponse('Data successfully deleted', code: 200);
    }
}
