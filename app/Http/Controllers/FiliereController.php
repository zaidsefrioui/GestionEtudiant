<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filiere;
class FiliereController extends Controller
{
    public function index()
    {
        $filieres = Filiere::all();
        return view('filiere.list',compact(['filieres']));
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data['nom']=$request->nom;
        $filiere = Filiere::create($data);

        return redirect()->route('filiereList');
    }
    public function show(int $id=0)
    {
        if($id>0)
            $filiere= Filiere::find($id);
        else
            $filiere = new Filiere();

        return view('filiere.page',compact(['filiere','id']));
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
        $filiere = Filiere::find($id);
        $data['nom']=$request->nom;

        $filiere->update($data);

        return redirect()->route('filiereList');
    }
    public function destroy(string $id)
    {
        //
        $filiere= Filiere::find($id);
        $filiere->delete();
        return redirect()->route('filiereList');
    }
}
