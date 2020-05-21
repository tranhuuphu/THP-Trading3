<?php echo "<?xml version='1.0' encoding='UTF-8'?>"; ?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->

	<url>
	  <loc>{{asset('/')}}</loc>
	  <lastmod>{{ date('Y-m-d')}}T{{date('H:i:s')}}+00:00</lastmod>
	  <priority>1.00</priority>
	</url>

	<!-- Page -->
	@foreach($page as $pg)
		<url>
		  <loc>{{asset('/'.$pg->page_slug.'.html')}}</loc>
		  <lastmod>{{ date('Y-m-d')}}T{{date('H:i:s')}}+00:00</lastmod>
		  <priority>0.8</priority>
		</url>
	@endforeach

	<!-- Cate -->
	@foreach($cate as $ct)
		<url>
		  <loc>{{asset('/'.$ct->cate_slug)}}</loc>
		  <lastmod>{{ date('Y-m-d')}}T{{date('H:i:s')}}+00:00</lastmod>
		  <priority>0.8</priority>
		</url>
	@endforeach

	<!-- Post -->
	@foreach($post as $pt)
		<url>
			<?php
				foreach($cate as $ct2){
					if($ct2->cate_id == $pt->post_cate_id){
						$cate_slug = $ct2->cate_slug;
					}
				}
			?>
			<loc>{{asset('/'.$cate_slug.'/'.$pt->post_slug.'-'.$pt->post_id.'.html')}}</loc>
			<lastmod>{{ date('Y-m-d')}}T{{date('H:i:s')}}+00:00</lastmod>
			<priority>0.8</priority>
		</url>
	@endforeach




</urlset>