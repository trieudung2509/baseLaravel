<?php
namespace App\Services;

use App\Enum\SystemEnum;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostService extends BaseService {
    public function model()
    {
        return Post::class;
    }
    public function getAllPost($idPost) {
        return Cache::rememberForever('posts', function () {
            return $this->_model->where([
                "status" => SystemEnum::SYSTEM_STATUS,

            ]);
        });
    }
}
