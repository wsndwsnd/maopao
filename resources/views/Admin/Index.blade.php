@extends('Admin.layout.Index')
@section('content')

<!-- <script src="/demos/googlegg.js"></script> -->

<div class="demo">
	<div class="container" >
		<div class="row"  >
			<div class="col-md-3 col-sm-6" style='float: left;margin-left: 150px;' >
				<div class="counter">
					<div class="counter-content">
						<div class="counter-icon fa fa-globe"></div>
						<span class="counter-value">{{ $user->count() }}</span>
					</div>
					<h3 class="title">注册人数</h3>
				</div>
			</div>

			<div class="col-md-3 col-sm-6" style='float: left;margin-left: 150px;'>
				<div class="counter red">
					<div class="counter-content">
						<div class="counter-icon fa fa-rocket"></div>
						<span class="counter-value">{{ $posts->count() }}</span>
					</div>
					<h3 class="title">帖子数量</h3>
				</div>
			</div>

			<div class="col-md-3 col-sm-6" style='float: left;margin-left: 150px;'>
				<div class="counter blue">
					<div class="counter-content">
						<div class="counter-icon fa fa-briefcase"></div>
						<span class="counter-value">{{ $articles->count() }}</span>
					</div>
					<h3 class="title">文章数量</h3>
				</div>
			</div>

			
		</div>
	</div>
</div>
	
<script src="/d/js/demo/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.counter-value').each(function(){
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		},{
			duration: 3500,
			easing: 'swing',
			step: function (now){
				$(this).text(Math.ceil(now));
			}
		});
	});
});
</script>
@endsection