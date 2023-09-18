<?PHP

namespace App\Http\Controllers;

use App\Models\Vente;
use App\Models\Montre;
use Illuminate\Http\Request;


class MontreController extends Controller
{
    //

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string',
            'marque' => 'required|string',
            'description' => 'required|string',
            'prix' => 'required',
            'matiere' => 'required|string',
            'bracelet' => 'required|string',
            'mecanisme' => 'required|string',
            'fonction' => 'required|string',
            'image' => 'nullable|image',
            'quantite' => 'required|numeric',
        ]);

     //   $data = $request->all();
        
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('public/images');
            $data['image'] = $path;
        }
    
        $montre = Montre::create($data);
    
        return redirect()->back()->with('success', 'La montre a été enregistrée avec succès.');
        
    }

    public function index()
    {
        $montres = Montre::all();
        return view('admin.listeMontre')->with('montres', $montres);
        
    }

    public function destroy($id)
{
    $montre = Montre::findOrFail($id);
    $montre->delete();

    return redirect()->back()->with('success', 'L\'enregistrement a été supprimé avec succès.');
}

public function edit($id)
{
    $montre = Montre::findOrFail($id);

    return view('admin.misajour')->with('montre', $montre);
}
public function update(Request $request, $id)
{
    $montre = Montre::findOrFail($id);

    $data = $request->validate([
        'nom' => 'required|string',
        'marque' => 'required|string',
        'description' => 'required|string',
        'prix' => 'required',
        'matiere' => 'required|string',
        'bracelet' => 'required|string',
        'mecanisme' => 'required|string',
        'fonction' => 'required|string',
        'image' => 'nullable|image',
        'quantite' => 'required|numeric',
        // Ajoutez ici les autres champs que vous souhaitez mettre à jour
    ]);

    $montre->update($data);

    return redirect()->back()->with('success', 'L\'enregistrement a été mis à jour avec succès.');
}

public function vente($id)
{
    $montre = Montre::findOrFail($id);

    return view('admin.vente')->with('montre', $montre);
}

public function enregistrerVente(Request $request, $id)
{
    $montre = Montre::findOrFail($id);

    $quantiteVendue = $request->input('quantiteVend');
    $montre->quantite -= $quantiteVendue;
    $montre->save();

      // Enregistrer la vente dans la table "ventes" avec les informations de nom et marque
      Vente::create([
        'montre_id' => $montre->id,
        'nom_montre' => $request->input('nom'),
        'marque_montre' => $request->input('marque'),
        'quantite_vendue' => $quantiteVendue,
        'montant_total' => $quantiteVendue * $montre->prix,
    ]);

    return redirect()->back()->with('success', 'Vente enregistrée avec succès. La quantité de montre disponible a été mise à jour.');
}

public function derniersEnregistrements()
{
    $derniersMontres = Montre::orderBy('created_at', 'desc')
        ->limit(8)
        ->get();

    return view('index', compact('derniersMontres'));
}
public function boutique()
{
    $Rolex = Montre::where('marque', 'Rolex')->orderBy('prix')->get();
    $Patek = Montre::where('marque', 'Patek Philippe')->orderBy('prix')->get();
    $Audemars = Montre::where('marque', 'Audemars Piguet')->orderBy('prix')->get();
    $Cartier = Montre::where('marque', 'Cartier')->orderBy('prix')->get();
    $Richard = Montre::where('marque', 'Richard Mille')->orderBy('prix')->get();
    $Diesel = Montre::where('marque', 'Diesel')->orderBy('prix')->get();
    $Hugo = Montre::where('marque', 'Hogo Boss')->orderBy('prix')->get();
    $Calvin = Montre::where('marque', 'Calvin Klein')->orderBy('prix')->get();
    $Tommy = Montre::where('marque', 'Tommy Hilfiger')->orderBy('prix')->get();
    $Casio = Montre::where('marque', 'Casio')->orderBy('prix')->get();
    $Timex = Montre::where('marque', 'Timex')->orderBy('prix')->get();
    $Orient = Montre::where('marque', 'Orient')->orderBy('prix')->get();
    $Omega = Montre::where('marque', 'Omega Seamaster')->orderBy('prix')->get();
    $Citizen = Montre::where('marque', 'Citizen Promaster')->orderBy('prix')->get();
    $Oris = Montre::where('marque', 'Oris Divers')->orderBy('prix')->get();
    $Apple = Montre::where('marque', 'Apple Watch')->orderBy('prix')->get();
    $Samsung = Montre::where('marque', 'Samsung Galaxy Watch')->orderBy('prix')->get();
    $Huawei = Montre::where('marque', ' Huawei Watch')->orderBy('prix')->get();
    $TicWatch = Montre::where('marque', 'TicWatch Pro')->orderBy('prix')->get();

    return view('watches', [
        'Rolex' => $Rolex,
        'Patek' => $Patek,
        'Audemars' => $Audemars,
        'Cartier'=>$Cartier,
        'Richard' => $Richard,
        'Diesel' => $Diesel,
        'Hugo' => $Hugo,
        'Calvin' => $Calvin,
        'Tommy' => $Tommy,
        'Casio' => $Casio,
        'Timex' => $Timex,
        'Orient' => $Orient,
        'Omega' => $Omega,
        'Citizen' => $Citizen,
        'Oris' => $Oris,
        'Apple' => $Apple,
        'Samsung' => $Samsung,
        'Huawei' => $Huawei,
        'TicWatch' => $TicWatch,
    ]);
}



}
