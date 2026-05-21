<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;
use Exception;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view("games.index", compact("games"));
    }

    public function create()
    {
        return view("games.create");
    }

    public function store(StoreGameRequest $request)
    {
        Game::create([
            'title'=> $request->title
        ]);
        
        return redirect()
            ->route('games.index')
            ->with('success', 'Game created successfully');
    }

    public function show(Game $game)
    {
        //
    }

    public function edit(Game $game)
    {
        //
    }

    public function update(UpdateGameRequest $request, Game $game)
    {
        //
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()
            ->route('games.index')
            ->with('success', 'Game deleted successfully');
    }
}
