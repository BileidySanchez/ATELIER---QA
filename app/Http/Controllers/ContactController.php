<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Inyección de dependencias:
     * Laravel proporciona ContactService mediante su contenedor
     * de servicios, sin que debamos instanciarlo manualmente.
     */
    public function __construct(
        private readonly ContactService $contactService
    ) {
    }

    /**
     * Valida y prepara los datos de una consulta de contacto.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $this->contactService->prepareMessage($validated);

        // Redirige al formulario y muestra una confirmación visual.
        return redirect()
            ->route('contact.show')
            ->with('success', '¡Gracias por escribirnos! Hemos recibido tu consulta.');
    }
}
