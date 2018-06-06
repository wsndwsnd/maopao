@extends('Home.layout.master')
@section('sidebar')   
      <div id="wp" class="wp xuxian">
        <link rel="stylesheet" type="text/css" href="/home/css/index.css">
        <style id="diy_style" type="text/css"></style>
        <div class="wp">
          <div id="pt" class="bm cl">
            <div class="z">
              <a href="/" class="nvhm" title="首页">Discuz! Board</a>
              <a href="/">&nbsp;&nbsp;首页</a>
              <em>&rsaquo;</em>资讯</div></div>
          <!--[diy=diyab]-->
          <div id="diyab" class="area"></div>
          <!--[/diy]--></div>
        <div id="ct" class="ct2 wp cl">
          <div class="mn">
            <div class="bm2">
              <div class="tttop">
                <div class="bm_h cl">
                @if(session('user_name'))
                <a href="/zixun/create" class="y xi2 rss btn btn-danger" target="_blank" title="发表文章">发表文章</a>
                @endif
                <h1 class="xs2">资讯</h1>
                </div>
                
              </div>
              <div class="bm_c xld zxlblb">
                @foreach($data as $v)
                <div class="top_new cl newss_1" >
                
                  <div class="box01 cl">
                    <div class="new_pic pic02">
                      <a class="zwul" href="portal.php?mod=view&aid=12" target="_blank">
                        <img src="{{ ltrim($v->article_img,'.') }}" alt="{{ $v->article_title }}" class="tn" />
                        <i class="wuliao"></i>
                      </a>
                    </div>
                    <div class="rig">
                      <h2>
                        <a href="/zixun/{{ $v->id }}" target="_blank" class="xi2" style="">{{ $v->article_title }}</a></h2>
                      <div class="new_weibo">
                        <span class="ftime">
                          <i>
                          </i>{{ $v->created_at }}</span>
                        <span class="zuoz">
                          <i>
                          </i>{{ $v->article_author }}</span>
                        <!-- Baidu Button BEGIN -->
                        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                          <span class="bds_more">分享到：</span>
                          <a class="bds_qzone"></a>
                          <a class="bds_tsina"></a>
                          <a class="bds_tqq"></a>
                          <a class="bds_renren"></a>
                          <a class="bds_t163"></a>
                        </div>
                        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0"></script>
                        <script type="text/javascript" id="bdshell_js"></script>
                        <script type="text/javascript">document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000)</script>
                        <!-- Baidu Button END --></div>
                      <div id="weibo_info01" class="new_body body02 grey64" style=" display: block;display: -webkit-box;margin: 0 auto;font-size: 12px;line-height: 1.4;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{!! $v->article_dec !!}</div>
                      <a class="readmore" href="/zixun/{{ $v->id }}" target="_blank">read more</a></div>
                  </div>
                </div>
        @endforeach
            <div class="list-page-a current">
              {!! $data->render() !!}
            </div>
              </div>
              <!--[diy=listloopbottom]-->
              <div id="listloopbottom" class="area"></div>
              <!--[/diy]--></div>
          </div>
          <div class="sd pph">
            <div class="drag">
              <!--[diy=diyrighttop]-->
              <div id="diyrighttop" class="area">
                <div id="frameDiLuf0" class="frame move-span cl frame-1">
                  <div id="frameDiLuf0_left" class="column frame-1-c">
                    <div id="frameDiLuf0_left_temp" class="move-span temp"></div>
                    <div id="portal_block_71" class="zxlbyad block move-span">
                      <div id="portal_block_71_content" class="dxb_bc">
                        <div class="portal_block_summary">
                          <img  src="/Home/picture/ad2.jpg" width="100%" /></div>
                      </div>
                    </div>
                    <div id="portal_block_72" class="zxlbyltph block move-span">
                      <div class="blocktitle title">
                        <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">阅读排行</span></div>
                      <div id="portal_block_72_content" class="dxb_bc">
                        <div class="module cl xl xl1">
                          <ul>
                            @foreach($data1 as $k=>$v)
                            <li class="cc{{ $k+1 }}">
                              <span>1</span>
                              <a href="/zixun/{{ $v->id }}"  target="_blank" style=" display: block;display: -webkit-box;max-width: 400px;margin: 0 auto;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">{{ $v->article_title }}</a></li>
                            @endforeach
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div id="portal_block_69" class="syzttj block move-span">
                        <div class="blocktitle title">
                          <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">推荐阅读</span></div>
                        <div id="portal_block_69_content" class="dxb_bc">
                          <div class="module cl ml">
                            <ul>
                              @foreach($data2 as $v)
                              <li style="width: 292px;">
                                <p>{{ $v->article_title }}</p>
                                <a class="tupian" href="/zixun/{{ $v->id }}" target="_blank" title="{{ $v->article_title }}">
                                  <img src="{{ ltrim($v->article_img,'.') }}" width="292" height="180" alt="{{ $v->article_title }}"></a>
                              </li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <!--[/diy]--></div>
            <div class="bm wd_sd" style="display:none;">
              <div class="bm_h cl">
                <span class="titletext">相关分类</span></div>
              <div class="bm_c">
                <ul class="xl xl2 cl">
                  <li>
                    <a href="http://29.92zyb.com/portal.php?mod=list&catid=1">资讯</a></li>
                </ul>
              </div>
            </div>
            <div class="drag">
              <!--[diy=diy2]-->
              <div id="diy2" class="area"></div>
              <!--[/diy]--></div>
            <!--[diy=wd_new_t02]-->
            <div id="wd_new_t02" class="area"></div>
            <!--[/diy]-->
            <!--[diy=wd_new_t03]-->
            <div id="wd_new_t03" class="area"></div>
            <!--[/diy]-->
            <!--[diy=wd_new_t04]-->
            <div id="wd_new_t04" class="area"></div>
            <!--[/diy]--></div>
        </div>
      </div>

@endsection

