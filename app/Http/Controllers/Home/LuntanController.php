<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Posts;
use App\Models\Slide;
use App\Models\Postsinfo;
use App\Models\User;
use App\Models\Notices;
use App\Models\Articles;
use App\Models\Advertise;


use DB;
class LuntanController extends Controller
{
    public static function getPidCates($tid)
    {
        $data = Category::where('tid',$tid)->get();
        $arr = [];
        foreach($data as $key => $value){
            $value['sub'] = self::getPidCates($value->id);
            $arr[] = $value;
        }
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @param  $data2   轮播图
     * @param  $data3   推荐阅读
     * @param  $data4   会员排行
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data2 = Slide::where('slide_status','0')->get();

        //公告
        $notice = Notices::where('notice_status',1)->paginate(5);

        $data3 = Articles::where('article_status',1)->orderBy('article_comments','desc')->paginate(6);
        $data4 = User::where('status',1)->orderBy('score','desc')->paginate(9);
        //今日数量
        $date = substr(date('Y-m-d H:i:s',time()),0,10);
        $data5 = Posts::where('created_at','like',"%".$date."%")->get();
        //昨日数量
        $date1 = substr(date('Y-m-d H:i:s',time()-86400),0,10);
        $data6 = Posts::where('created_at','like',"%".$date1."%")->get();

        //总共帖子数量
        $data7 = Posts::where('status',1)->get();
        //总共用户数量
        $data8 = User::get();
        //新用户
        $data9 = User::orderBy('id','desc')->first();

        //黄金广告位
        $advertise = Advertise::where('position',1)->where('status',1)->first();
        return view('home.cates.luntan',['data'=>self::getPidCates(0),'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'notice'=>$notice,'data5'=>$data5,'data6'=>$data6,'data7'=>$data7,'data8'=>$data8,'data9'=>$data9,'advertise'=>$advertise]);


        





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'content' => 'required',
            'title' => 'required',

        ],[
            'content.required' => '内容必填', 
            'title.required' => '标题必填', 

        ]);
        DB::beginTransaction();
        $patt = "/\d+/";
        $str = $request->input('id');
        preg_match_all($patt,$str,$newstr);
        $cid = $newstr[0][0];

        $data['cid'] = $cid;
        $data['uid'] = session('user_id');
        $data['posts_title'] = $request->input('title');
        $data['created_at'] = date('Y-m-d H:i:s',time());
        $res = Posts::insertGetId($data);
        $data2['tid'] = $res;
        $data2['content'] = $request->input('content');
        $data2['created_at'] = date('Y-m-d H:i:s',time());
        $res2 = Postsinfo::insert($data2);

        //发帖增加积分 
        $score = User::find(session('user_id'))->score;
        $score += 10;
        $res1 = User::where('id',session('user_id'))->update(['score'=>$score]);

        if($res2 && $res1){
            DB::commit();
            return redirect('home/luntan/'.$cid)->with('success','发表成功');
        }else{
            DB::rollBack();

            return redirect('home/luntan/'.$cid)->with('error','发表失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  $data1   分类标题
     * @param  $data2   论坛分区  
     * @param  $data    帖子标题
     * @param  $data3   帖子内容标题
     * @param  $data4   所有分类
     * @param  $data3   分类下所有帖子
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data1 = Category::where('id',$id)->first();
        $data2 = Category::where('id',$data1->tid)->first();

        $data3 = Posts::where('cid',$id)->orderBy('label','desc')->get();

        $data4 = Category::where('tid',$data1->tid)->get();
        // dump($data2);
        


        //热门
        $rm =  Posts::where('cid',$id)->where('label','1')->get();
        $rm2 = Posts::where('label','1')->orderBy('post_view','desc')->paginate(12);
        //精品
        $jp = Posts::where('cid',$id)->where('label','2')->get();
        //置顶
        $zd = Posts::where('cid',$id)->where('label','3')->get();

        //长条广告
        $advertise = Advertise::where('status',1)->where('position',2)->get();

        return view('home.cates.show',[
            'data'=>self::getPidCates($id),
            'data1'=>$data1,'data2'=>$data2,
            'data3'=>$data3,

            'data4'=>$data4,

            'rm2'=>$rm2,
            'rm'=>$rm,
            'jp'=>$jp,
            'zd'=>$zd,
            'advertise'=>$advertise


        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
