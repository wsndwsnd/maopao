<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Models\Articles;
use App\Models\Comment;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //接收分页的条数
        $count = $request -> input('count',5);
        // $count = 1;
        $search_title = $request -> input('article_title','');
        //以数组的方式接收所有参数
        $params = $request -> all();
        //加载视图
        $data = Articles::where('article_title','like','%'.$search_title.'%') -> paginate($count);
        return view('admin.article.index',['data'=>$data,'params'=>$params]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * 文章图片
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
            
            $pic -> move($dir_name,$filename);
        }
        
        $article = new Articles;
        $article -> article_img = $name;
        $article -> article_title = $request ->input('article_title','');
        $article -> article_content = $request ->input('article_content','');
        $article -> article_author = $request ->input('article_author','');
        $article -> article_pview = $request ->input('article_pview','0');
        $article -> article_dec = $request ->input('article_dec','');

      
        $res = $article -> save();

        if($res){
            return redirect('/admin/article')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    /**
     * 文章详情
     */
    public function show($id)
    {
        $data = Articles::where('id',$id)->first();
        return view('admin.article.show',['data'=>$data]);
    }

    /**
     * 修改展示页面
     */
    public function edit($id)
    {
        $data = Articles::find($id);
        // dump($data);
        return view('admin.article.edit',['data'=>$data]);
    }

    /**
     * 执行修改
     */
    public function update(Request $request, $id)
    {
        //设置报错信息
        $this->validate($request,[
            'article_title' => 'required',
            'article_author' => 'required',
            'article_content' => 'required',
            'article_img' => 'image',
             'article_dec' => 'required',
        ],[
            'article_title.required' => '文章标题必填', 
            'article_author.required' => '文章标题必填', 
            'article_content.required' => '文章标题必填', 
            'article_dec.required' => '内容简介必填', 
            'article_img.image' => '图片格式不正确',
            
        ]);

        DB::beginTransaction();
        $data = $request -> only('article_title','article_author','article_content','article_dec');
        //判断是否上传文件
        if($request->hasFile("article_img")){
            //获取上传信息
            $file = $request->file("article_img");
            //确认上传的文件是否成功
            if($file->isValid()){
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $dir_name = './uploads/'.date('Ymd',time());//拼接路径便于存储
                $name = $dir_name.'/'.$filename;         
                $data['article_img']=$name;
                $file ->move($dir_name,$filename);
            }
        }
        $res = Articles::where('id',$id)->update($data);
        if ($res) {
            DB::commit();
            return redirect('/admin/article')->with('success','修改成功');
        }else{
            DB::rollBack();
            return back()->with('error','修改失败');
        }

    }

    /**
     * 删除
     */
    public function destroy($id)
    {   
        //执行删除 返回影响行数
        $res = Articles::destroy($id);
        if($res){
            return redirect('/admin/article')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }

    /**
     * 文章权限-发布
     */
    public function up($id,$status=1)
    {
        $data['article_status'] = $status;
        $res =  Articles::where('id',$id)->update($data); 
        return redirect('/admin/article');
    }

    /**
     * 文章权限-待审
     */
    public function down($id,$status=0)
    {
        $data['article_status'] = $status;
        $res =  Articles::where('id',$id)->update($data); 
        return redirect('/admin/article');
    }

    /**
     * 查看评论
     */
    public function read(Request $request,$id)
    {   $count = $request -> input('count','');
        $data = Comment::where('aid',$id)->paginate($count);
        $num = Comment::where('aid',$id)->count('id');

        return view('Admin.article.read',['data'=>$data,'count'=>$count,'id'=>$id,'num'=>$num]);
    }
    /**
     * 删除评论
     */
    public function del($id)
    {
        $res = Comment::destroy($id);
         if($res){
            return  back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }
}
