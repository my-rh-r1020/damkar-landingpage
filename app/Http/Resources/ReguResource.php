<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReguResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama_regu' => $this->nama_regu,
            'lokasi' => $this->lokasi,
            'created_at' => $this->created_at->format('d M Y, h:m:s'),
            'updated_at' => $this->updated_at->format('d M Y, h:m:s'),
        ];
    }
}
