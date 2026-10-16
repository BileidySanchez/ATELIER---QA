<?php

namespace App\Services;

class ContactService
{
    /**
     * Prepara y limpia los datos del formulario de contacto.
     */
    public function prepareMessage(array $data): array
    {
        return [
            'name' => trim($data['name']),
            'email' => trim($data['email']),
            'subject' => trim($data['subject']),
            'message' => trim($data['message']),
        ];
    }
}
