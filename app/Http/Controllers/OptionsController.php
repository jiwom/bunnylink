<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Breed;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\RabbitStatus;

class OptionsController extends Controller
{
    public function index()
    {
        inertia::setrootview('layouts/app');

        return inertia::render('Options', [
            'data' => [
                'breeds_get_link'             => route('options.breeds'),
                'breed_add_link'              => route('options.add.breed'),
                'breed_remove_link'           => route('options.remove.breed'),
                'rabbit_statuses_get_link'    => route('options.rabbit.statuses'),
                'rabbit_statuses_add_link'    => route('options.rs.add'),
                'rabbit_statuses_remove_link' => route('options.rs.remove'),
                'category_link'               => route('options.category'),
                'category_add_link'           => route('options.add.category'),
                'category_remove_link'        => route('options.remove.category'),
            ],
        ]);
    }

    public function breeds()
    {
        return Breed::query()->orderBy('name')->get();
    }

    public function addBreed(Request $request)
    {
        Breed::create([
            'name' => strtolower($request->breed),
        ]);
    }

    public function removeBreed(Request $request)
    {
        Breed::destroy($request->id);
    }

    public function rabbitStatuses()
    {
        return RabbitStatus::query()->orderBy('name')->get();
    }

    public function addRabbitStatus(Request $request)
    {
        RabbitStatus::create([
            'name'  => strtolower($request->name),
            'color' => strtolower($request->color),
        ]);
    }

    public function removeRabbitStatus(Request $request)
    {
        RabbitStatus::destroy($request->id);
    }

    public function categories()
    {
        return Category::query()->orderBy('name')->get();
    }

    public function addCategory(Request $request)
    {
        Category::create([
            'name' => $request->category,
        ]);
    }

    public function removeCategory(Request $request)
    {
        Category::destroy($request->id);
    }
}
