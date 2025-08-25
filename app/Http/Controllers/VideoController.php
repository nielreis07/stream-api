<?php

namespace App\Http\Controllers;

use App\Http\Services\VideoService;
use Illuminate\Http\Request;

class VideoController
{
    public function criarVideo(Request $request)
    {
        $videoService = new VideoService();
        $video = $videoService->criarVideo($request->all());
        return response()->json($video, 201);
    }

    public function atualizarVideo(Request $request, $id)
    {
        $videoService = new VideoService();
        $video = $videoService->atualizarVideo($request->all(), $id);
        return response()->json($video, 200);
    }
        
    public function deletarVideo($id)
    {
        $videoService = new VideoService();
        $video = $videoService->deletarVideo($id);
        return response()->json($video, 200);
    }
    
    public function buscarVideoPorId($id)
    {
        $videoService = new VideoService();
        $video = $videoService->buscarVideoPorId($id);
        return response()->json($video, 200);
    }
     
}