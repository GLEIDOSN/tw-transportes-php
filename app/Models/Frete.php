<?php

namespace App\Models;

use App\Enums\FreteStatus;
use Illuminate\Database\Eloquent\Model;

class Frete extends Model
{
    protected $fillable = ['origem', 'destino', 'codigo_rastreio', 'status', 'remetente_id', 'destinatario_id'];

    protected $casts = [
        'status' => FreteStatus::class
    ];

    public function etapas()
    {
        return $this->hasMany(Etapa::class);
    }
}
