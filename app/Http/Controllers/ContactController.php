<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactConfirmation;
use App\Models\Message;
class ContactController extends Controller
{
    //
    public function send(Request $request)
    {
        // Valider les données du formulaire de contact
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Enregistrer le message de contact dans la base de données
        $contactMessage = Message::create($validatedData);

        // Envoyer l'e-mail à l'administrateur
        Mail::to($request->email)->send(new ContactConfirmation($contactMessage));

        // Retourner une réponse de succès
        return redirect()->back()->with('success', 'Votre message a été envoyer avec succes.');
    }
}
