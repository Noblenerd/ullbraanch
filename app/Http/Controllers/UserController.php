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
use App\Models\Community;
use App\Models\Resource;
use App\Models\Tree;
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

    public function createtree(Request $request)
    {
            $profile = new Tree();
            $fav = Str::random(8);
            $profile->description = $request->description;
            $profile->website = $request->website;
            $profile->identifier = $request->identifier;
            $profile->code = $fav;
            if($request->hasFile('image')) {
                if($request->file('image')->getClientOriginalExtension() == 'jpg' || $request->file('image')->getClientOriginalExtension() == 'png' || $request->file('image')->getClientOriginalExtension() == 'gif' || $request->file('image')->getClientOriginalExtension() == 'webp') {
                $image = $request->file('image');
                $filename = time() . '_ulltree.jpg';
                $location = 'images/treelink/' . $filename;
                Image::make($image)->resize(800, 800)->save($location);
                $profile->image = $filename;
                }}
                $profile->save();
            for($i=1;$i<=$request->resnum;$i++) {
                if($i == 1) {
                    $res = new Resource();
                    $res->name = $request->resname_1;
                    $res->link = $request->reslink_1;
                    $res->code = $fav;
                    $res->save();
                }
                elseif($i == 2) {
                    $res = new Resource();
                    $res->name = $request->resname_2;
                    $res->link = $request->reslink_2;
                    $res->code = $fav;
                    $res->save();
                }
                elseif($i == 3) {
                    $res = new Resource();
                    $res->name = $request->resname_3;
                    $res->link = $request->reslink_3;
                    $res->code = $fav;
                    $res->save();
                }
                elseif($i == 4) {
                    $res = new Resource();
                    $res->name = $request->resname_4;
                    $res->link = $request->reslink_4;
                    $res->code = $fav;
                    $res->save();
                }
                elseif($i == 5) {
                    $res = new Resource();
                    $res->name = $request->resname_5;
                    $res->link = $request->reslink_5;
                    $res->code = $fav;
                    $res->save();
                }
                elseif($i == 6) {
                    $res = new Resource();
                    $res->name = $request->resname_6;
                    $res->link = $request->reslink_6;
                    $res->code = $fav;
                    $res->save();
                }
            }
              
            for($i=1;$i<=$request->comnum;$i++) {
                if($i == 1) {
                    $res = new Community();
                    $res->name = $request->comname_1;
                    $res->link = $request->comlink_1;
                    $res->desc = $request->comdes_1;
                    $res->code = $fav;
                    $res->save();
                }
                elseif($i == 2) {
                    $res = new Community();
                    $res->name = $request->comname_2;
                    $res->link = $request->comlink_2;
                    $res->desc = $request->comdes_2;
                    $res->code = $fav;
                    $res->save();
                }
                elseif($i == 3) {
                    $res = new Community();
                    $res->name = $request->comname_3;
                    $res->link = $request->comlink_3;
                    $res->desc = $request->comdes_3;
                    $res->code = $fav;
                    $res->save();
                }
                elseif($i == 4) {
                    $res = new Community();
                    $res->name = $request->comname_4;
                    $res->link = $request->comlink_4;
                    $res->desc = $request->comdes_4;
                    $res->code = $fav;
                    $res->save();
                }
                elseif($i == 5) {
                    $res = new Community();
                    $res->name = $request->comname_5;
                    $res->link = $request->comlink_5;
                    $res->desc = $request->comdes_5;
                    $res->code = $fav;
                    $res->save();
                }
                elseif($i == 6) {
                    $res = new Community();
                    $res->name = $request->comname_6;
                    $res->link = $request->comlink_6;
                    $res->desc = $request->comdes_6;
                    $res->code = $fav;
                    $res->save();
                }
            }
            //return back()->with('success', 'Link Generated!');
            /*return response()->json([
                'status' => 'success',
                'identifier' => $data
            ]);*/
            $data['tree'] = Tree::whereidentifier($request->identifier)->first();
            $data['resource'] = Resource::wherecode($fav)->get();
            $data['community'] = Community::wherecode($fav)->get();
             return view('/front/viewtree', $data);
        
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
                    $link->qrcode = base64_encode($img);
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

    public function checktree(Request $request)
    {
        $check = Tree::whereidentifier($request->identifier)->count();
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

    public function viewtree($id)
    {
        $check = Tree::whereidentifier($id)->count();
        if($check<1) {
            return back()->with('alert', 'Invalid Link');
        }
        else {
            $data['tree'] =$tree = Tree::whereidentifier($id)->first();
            $data['resource'] = Resource::wherecode($tree->code)->get();
            $data['community'] = Community::wherecode($tree->code)->get();
             return view('/front/viewtree', $data);
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
