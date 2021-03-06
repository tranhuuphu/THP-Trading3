{{-- Breadcrum --}}

	<div class="container">
		<nav aria-label="breadcrumb" class="" style="margin: 40px 0px;">
		  <ol class="breadcrumb" style="border-radius: 0;">
		  	
		    <li class="breadcrumb-item"><a href="{{asset('')}}" class="text">Home</a></li>
		    

		    @if(isset($cate_detail))
		    	<li class="breadcrumb-item"><a href="{{asset('/'.$cate_detail->cate_slug)}}" class="text-bold">{{$cate_detail->cate_name}}</a></li>
		    @endif

		    @if(isset($cate_data))
		    	<li class="breadcrumb-item"><a href="{{asset('/'.$cate_slug)}}" class="text-bold">{{$cate_data->cate_name}}</a></li>
		    @endif

		    @if(isset($post_detail))
			<li class="breadcrumb-item active" aria-current="page" style="color: blue">{{$post_detail->post_title}}</li>
			@endif
		  </ol>
		</nav>
	</div>
