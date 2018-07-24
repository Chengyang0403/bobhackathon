<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PicsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth()->id());

        return view('/', compact('user'));
    }


    /**
     * ファイルアップロード処理
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 最小縦横2000px 最大縦横2000px
                //'dimensions:min_width=120,min_height=120,max_width=2000,max_height=2000',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
           // $filename = $request->file->st tore('public/avater');
            $image_data = file_get_contents($request->file);
            $mime_type = $request->file('file')->getMimeType();
            
            //var_dump(file_get_contents($file));exit;
            $user = \Auth::user();
            $user->image_data = base64_encode($image_data);
            $user->mime_type = $mime_type;
            
            //$user->avater_filename = basename($filename);
           
            $user->save();
    
            return redirect()->back();
            
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}