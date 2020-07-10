<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $games = Game::paginate(6);
        return view('games.index',['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $game = new Game;
        return view('games.create',["game"=>$game]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $options = [
            'videogamename' => $request->videogamename,
            'consoletype' => $request->console,
            'price' => $request->price,
            'description'=> $request->description,
        ];

        if(Game::create($options)){
              return  redirect('/games');
        }else{
            return view('games.create');
        }
    }

    /**
     * Display the specified resource.
     *git
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //muestra un recurso
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::find($id);
        return view("games.edit",["game" =>$game]); // De esta manera se envia dantos hacia la vista
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game = Game::find($id);

           $game->videogamename = $request->videogamename;
           $game->consoletype = $request->console;
           $game-> price = $request->price;
           $game-> description= $request->description;


        if($game->save()){
            return  redirect('/');
        }else{
            return view("games.edit",["game" =>$game]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
