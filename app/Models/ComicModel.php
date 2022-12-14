<?php 

namespace App\Models;

use CodeIgniter\Model;

class ComicModel extends Model 
{
    protected $table         = 'comic';
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'slug', 'author', 'cover', 'release_date'];

    public function getComic($slug = false) 
    {
        if($slug == false) {
            return $this->findAll();
        } 

        return $this->where(['slug' => $slug])->first();
    }
}