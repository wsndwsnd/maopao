<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Articles;
use DB;
use App\Models\Comment;
use App\Models\User;



class ZixunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Articles::where('article_status',1)->orderBy('id','desc')->paginate(4);

        //阅读排行
        $data1 = Articles::where('article_status',1)->orderBy('article_pview','desc')->paginate(3);
        // 推荐阅读
        $data2 = Articles::where('article_status',1)->orderBy('article_comments','desc')->paginate(3);
        return view('Home.zixun.index',['data'=>$data,'data1'=>$data1,'data2'=>$data2]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.zixun.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 设置报错信息
        $this->validate($request,[
            'article_title' => 'required',
            'article_author' => 'required',
            'article_content' => 'required',
            'article_dec' => 'required',

            'article_img' => 'required|image',
        ],[
            'article_title.required' => '文章标题必填', 
            'article_author.required' => '文章作者必填', 
            'article_dec.required' => '内容简介必填', 

            'article_content.required' => '文章内容必填', 
            'article_img.required' => '封面图片必须上传', 
            'article_img.image' => '封面图片格式不正确',
            
        ]);
        $article = new Articles;
        //检测是否有文件上传
        if($request -> hasFile('article_img')){
            // 创建文件上传对象
            $pic = $request -> file('article_img');
            // 处理图片 路径和图片的名称
            // 获取后缀
            $ext = $pic ->getClientOriginalExtension();
            $filename = time().rand(1000,9999).'.'.$ext;
            $dir_name = './uploads/'.date('Ymd',time());
            $name = $dir_name.'/'.$filename;//拼接路径便于存储
            $article -> article_img = $name;
            $pic -> move($dir_name,$filename);
        }


        $article -> article_title = $request ->input('article_title','');
        $article -> article_content = $request ->input('article_content','');
        $article -> article_author = $request ->input('article_author','');
        $article -> article_pview = $request ->input('article_pview','0');
        $article -> article_dec = $request ->input('article_dec','');
        $article -> uid = session('user_id');
      
        $res = $article -> save();
         //发表文章加积分
        $score = User::find(session('user_id'))->score;
        $score += 15;
        $res1 = User::where('id',session('user_id'))->update(['score'=>$score]);

        if($res){
             return back()->with('success','发表成功,请等待审核');
        }else{
            return back()->with('error','发表失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {   
        $data = Articles::find($id);
        //阅读量
        $i = $data->article_pview;
        $i +=1;
        Articles::where('id',$id)->update(['article_pview'=>$i]);
        //上一篇文章
        $data1 = Articles::where('id','>',$id)->where('article_status',1)->first();
        //下一篇文章
        $data2 = Articles::where('id','<',$id)->where('article_status',1)->orderBy('id','desc')->first();

        
        //阅读排行
        $data3 = Articles::where('article_status',1)->orderBy('article_pview','desc')->paginate(3);
        //推荐阅读

        $data4 =Articles::where('article_status',1)->orderBy('article_comments','desc')->paginate(3);
        
        //显示评论

        $data5 = Comment::where('aid',$id)->orderBy('created_at','asc')->get();    
        //url路径    
        $path = $request -> path();

        return view('Home.zixun.show',['data'=>$data,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5,'path'=>$path]);

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
    public function ajax(Request $request)
    {
        $p = $request->input('p','');
        $num = 4;
        $star = ($p-1)*$num;
        $data = DB::select("select * from a_comment limit $star,$num");
        
        foreach($data as $v){
            $v->user_img = DB::select("select img from users where id = $v->uid");
            $v->user_name = DB::select("select user_name from users where id = $v->uid");

        }
        echo json_encode($data);

    }
}
