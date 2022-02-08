<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChaptersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return $request;
        return [
            'Version' => new VersionsResource($this->Versions),
            'Book' => new BooksResource($this->Books),
            'Verse' => [
            'text' => $this->text,
            'chapter' => $this->capitulo,
            'verse' => $this->verse
            ]
        ];
    }
}
