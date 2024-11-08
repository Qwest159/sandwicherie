<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\SandwichCreateRequest;
use App\Http\Requests\SandwichUpdateRequest;
use App\Models\Sandwich;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class SandwichController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('viewAny', Sandwich::class);

        $Sandwichs = Sandwich::orderByDesc('updated_at')
            ->paginate(10);

        return view(
            'admin.Sandwichs.index',
            [
                'Sandwichs' => $Sandwichs,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Sandwich::class);
        return view('admin.Sandwichs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SandwichCreateRequest $request)
    {
        Gate::authorize('create', Sandwich::class);
        // On crée un nouvel Sandwich
        $Sandwich = Sandwich::make();

        // On ajoute les propriétés du Sandwich
        $Sandwich->body = $request->validated()['body'];
        $Sandwich->user_id = Auth::id();


        // Si il y a une image, on la sauvegarde
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('Sandwichs', 'public');
            $Sandwich->img_path = $path;
        }

        // On sauvegarde le Sandwich en base de données
        $Sandwich->save();

        return redirect()->route('front.Sandwichs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sandwich $Sandwich)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sandwich $Sandwich)
    {
        Gate::authorize('update', $Sandwich);
        return view('admin.Sandwichs.edit', [
            'Sandwich' => $Sandwich,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SandwichUpdateRequest $request, Sandwich $Sandwich)
    {
        Gate::authorize('update', $Sandwich);

        $Sandwich->body = $request->validated()['body'];

        // Si il y a une image, on la sauvegarde
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('Sandwichs', 'public');
            $Sandwich->img_path = $path;
        }

        // On sauvegarde les modifications en base de données
        $Sandwich->save();
        return redirect()->route('front.Sandwichs.index');
        // return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sandwich $Sandwich)
    {
        Gate::authorize('delete', $Sandwich);
        $Sandwich->delete();

        return redirect()->back();
    }
}
