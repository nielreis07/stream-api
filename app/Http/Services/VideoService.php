<?php

namespace App\Http\Services;

use App\Models\Video;

class VideoService
{
    public function criarVideo(array $data)
    {
        $video = new Video();
        $video->fill($data);
        $video->save();
        return $video;
    }
    
    public function atualizarVideo(array $data, $id)
    {
        $video = Video::find($id);
        $video->fill($data);
        $video->save();
        return $video;
    }
    
    public function deletarVideo($id)
    {
        $video = Video::find($id);
        $video->delete();
        return $video;
    }
    
    public function buscarVideoPorId($id)
    {
        $video = Video::find($id);
        return $video;
    }
    
}