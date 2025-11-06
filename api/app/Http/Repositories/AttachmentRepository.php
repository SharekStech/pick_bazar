<?php


namespace App\Http\Repositories;

use App\Models\Attachment;
use App\Http\Repositories\BaseRepository;




class AttachmentRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Attachment::class;
    }
}
