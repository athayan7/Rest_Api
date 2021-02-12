<?php

namespace App\Http\Controllers;

use App\article;
use Illuminate\Http\Request;
use app\ArticleModel;

class apicontroller extends Controller
{
    public function index(){
        $article=article::all();
        return response()->json(article::all(),200);
    }

    public function input($id){
        $article1=article::find($id);
        if(is_null($article1)){
            return response()->json("Tidak Ditemukan",404);
        }
        return response()->json($article1,200);
    }

    public function postdata(Request $request){
        $insert_article = new article;
        $insert_article->list = $request->list;
        $insert_article->save();
        return response([
            'status' => 'OK',
            'message' => 'Data Posted',
            'data' => $insert_article
        ],200);
    }

    public function update_data(Request $request, $id){
        $check_data = article::firstWhere('id',$id);
        if($check_data){
            $data_article = article::find($id);
            $data_article->list = $request->list;
            $data_article->save();
            return response([
                'status' => 'OK',
                'message' => 'Data Updated',
                'update-data' => $data_article
            ],200);
        }else{
            return response([
                'status' => 'Not Found',
                'message' => 'ID tidak ditemukan',
            ],404);
        }
    }

    public function delete_data($id){
        $check_data = article::firstWhere('id',$id);
        if($check_data){
            article::destroy($id);
            return response([
                'status' => 'OK',
                'message' => 'Data Deleted',
            ],200);
        } else{
            return response([
                'status' => 'ID Tidak Ada'
            ],404);
        }
    }

}
