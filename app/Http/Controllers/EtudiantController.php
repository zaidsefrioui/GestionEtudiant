<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Filiere;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.list',compact(['etudiants']));
    }
    public function create()
    {
        //

    }
    public function store(Request $request)
    {
        validator($request->all(),[
            'nom' => ['required'],
            'prenom' => ['required'],
            'sexe' => ['required'],
            'filiere_id' => ['required'],
            'email' => ['required','email'],
            'password' => ['required']
        ])->validate();

        $data['nom']=$request->nom;
        $data['prenom']=$request->prenom;
        $data['sexe']=$request->sexe;
        $data['filiere_id']=$request->filiere_id;

        $userData['name']= $request->nom.' '.$request->prenom;
        $userData['email']=$request->email;
        $userData['password']=Hash::make($request->password);

        $user = User::create($userData);

        $data['user_id']=$user->id;

        $etudiant = Etudiant::create($data);

        return redirect()->route('etudiantList');
    }
    public function show(int $id=0)
    {
        if($id>0)
        $etudiant= Etudiant::find($id);
        else
        $etudiant = new Etudiant();

        $filieres= Filiere::all();
        return view('etudiant.page',compact(['etudiant','id','filieres']));
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
        $etudiant = Etudiant::find($id);
        $data['nom']=$request->nom;
        $data['prenom']=$request->prenom;
        $data['sexe']=$request->sexe;
        $data['filiere_id']=$request->filiere_id;

        $etudiant->update($data);

        return redirect()->route('etudiantList');
    }
    public function destroy(string $id)
    {
        //
        $etudiant= Etudiant::find($id);
        $etudiant->delete();
        return redirect()->route('etudiantList');
    }

  

}
