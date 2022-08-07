<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use App\Models\Qrcode;
use Validator;
use Carbon\Carbon;
use Browser;
use Session;
use Image;
use Redirect;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'ULLWEB Link Shortener';
        return view('/front/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $check = Item::whereurl($request->url)->count();
        if($check>0) {
            return response()->json([
                'status' => 'error',
                'message' => 'Link exists already!'
            ]);
        }
        else {
            $link = new Item();
            $link->url = $request->url;
            $link->identifier = $data = $request->identifier;
            $link->save();
            return back()->with('success', 'Link Generated!');
            /*return response()->json([
                'status' => 'success',
                'identifier' => $data
            ]);*/
        }
    }

    public function createqrcode(Request $request)
    {
        
            if($request->type == 'URL') {
                $data = preg_match("#^https?\:\/\/#", $request->url) ? $request->url : "http://{$url}";
            }
            else if($request->type == 'Phone') {
                $data = "TEL:{$request->pphone}";
            }
            else if($request->type == 'Text') {
                $data = $request->text;
            }
            else if($request->type == 'SMS') {
                $data = "SMSTO:{$request->sphone}:{$request->smsg}";
            }
            else if($request->type == 'Contact') {
                $data = "MECARD:N:{$request->cname};ADR:{$request->caddress};TEL:{$request->cphone};EMAIL:{$request->cemail};;";
            }

                $size = 400;
                $filename = '';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'http://chart.apis.google.com/chart');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "chs={$size}x{$size}&cht=qr&choe=UTF-8&chl=" . urlencode($data));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_TIMEOUT, 30);
                $img = curl_exec($ch);
                curl_close($ch);
                if ($img) {
                    $link = new Qrcode();
                    $link->info = $data;
                    $link->qrcode = $img;
                    $link->save();
                if ($filename) {
                if (!preg_match("#\.png$#i", $filename)) {
                $filename .= ".png";
                }
                return file_put_contents($filename, $img);
                } else {
                header("Content-type: image/png");
                
                
                $datas['imgg'] = base64_encode($img);
                
                return view('/front/result', $datas);
                }
                }
                return false;
                
            //return back()->with('success', 'Link Generated!');
            /*return response()->json([
                'status' => 'success',
                'identifier' => $data
            ]);*/
        
    }

    public function check(Request $request)
    {
        $check = Item::whereidentifier($request->identifier)->count();
        if($check>0) {
            $res = array([
                'status' => 'Error'
            ]);
            return $res;
        }
        else {
            $res = array([
                'status' => 'Success'
            ]);
            //$pi = json_decode($res, true);
            return $res;
        }

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $check = Item::whereidentifier($id)->count();
        if($check<1) {
            return back()->with('alert', 'Invalid Link');
        }
        else {
            $des = Item::whereidentifier($id)->first();
             return redirect()->away($des->url);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $data['list'] = Item::all();
        return view('/front/view', $data);
    }
    public function qrcodeview()
    {
        $data['list'] = Qrcode::all();
        return view('/front/qrcodeview', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
