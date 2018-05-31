<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Posts;
use App\Models\Admin\Postsinfo;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $count = $request->input('count','5');
        $posts_title = $request -> input('posts_title','');
        
        $data = Posts::where('posts_title','like','%'.$posts_title.'%')->paginate($count);
        $num = Posts::count('id');
        return view('Admin.posts.index',['data'=>$data,'posts_title'=>$posts_title,'num'=>$num,'count'=>$count]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          
        return view('Admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        
        $data1 = $request -> only('posts_title');
        // dd($data1);
        $data1['uid'] = '21';
        $data1['cid'] = '1';
        $data1['created_at']=date('Y-m-d H:i:s',time());
        $res1 = Posts::insertGetId($data1);
        // dump($data1);
        $data2 = $request->only('content');
        //判断是否上传文件
        if($request->hasFile("pic")){
        //获取上传信息
        $file = $request->file("pic");
        //确认上传的文件是否成功
        if($file->isValid()){
           
            $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
            //执行移动上传文件
            $filename = time().rand(1000,9999).".".$ext;
            $dir_name = 'pic/'.date('Ymd',time());//拼接路径便于存储
            $name = '/'.$dir_name.'/'.$filename;          
            $data2['pic']=$name;
           
            $file ->move($dir_name,$filename);
        }
    }
        $data2['tid'] = $res1;
        
        $res2 = Postsinfo::insert($data2);
        if ($res1 && $res2) {
            DB::commit();
            return redirect('/admin/posts')->with('success','添加成功');
        }else{
            DB::rollBack();

            return back()->with('error','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Posts::find($id);
        
        return view('Admin.posts.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Posts::find($id);
        return view('Admin.posts.edit',['data'=>$data]);
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
        DB::beginTransaction();
        $data1 = $request -> only('posts_title','cid');
        $data2 = $request -> only('content');
             //判断是否上传文件
            if($request->hasFile("pic")){
            //获取上传信息
            $file = $request->file("pic");
            //确认上传的文件是否成功
            if($file->isValid()){
               
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $dir_name = 'pic/'.date('Ymd',time());//拼接路径便于存储
                $name = '/'.$dir_name.'/'.$filename;          
                $data2['pic']=$name;
               
                $file ->move($dir_name,$filename);
            }
        }
        $res1 = Posts::where('id',$id)->update($data1);
        $res2 = Postsinfo::where('tid',$id)->update($data2);
        if ($res1 && $res2) {
            DB::commit();
            return redirect('/admin/posts')->with('success','修改成功');
        }else{
            DB::rollBack();

            return back()->with('error','修改失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();

            $res1 = Posts::destroy($id);
            $res2 = Postsinfo::where('tid',$id)->delete();
             if ($res1 && $res2) {
                DB::commit();
                return redirect('/admin/posts')->with('success','删除成功');
            }else{
                DB::rollBack();

                return back()->with('error','删除失败');
            }
    }
    

     /**
     * 帖子状态-上线
     */
    public function up(Request $request,$id,$attr=1)
    {
        
        $data['attr'] = $attr;
        $res = Posts::where('id',$id)->update($data); 
        return redirect('/admin/posts');
    }

    /**
     * 帖子状态-待审
     */
    public function down($id,$attr=0)
    {
        $data['attr'] = $attr;
        $res = Posts::where('id',$id)->update($data); 
        return redirect('/admin/posts');
    }
}
