<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PelajaranResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'mata_pelajaran' => $this->mata_pelajaran,
            'waktu_mulai' => $this->waktu_mulai,
            'waktu_akhir' => $this->waktu_akhir,
        ];
    }
}
