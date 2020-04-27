<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InmuebleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'oferta' => $this->oferta,
            'tipo_inmueble' => $this->tipo_inmueble,
            'estado' => $this->estado,
            'imagen' => $this->imagen,
            'direccion' => $this->estado,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'precio' => $this->precio,
            'celular' => $this->celular,
            'telefono' => $this->telefono,
            'whatsapp' => $this->telefono,
        ];
    }
}
