<?php
get_header();?>
<div class="container">
<div class="row">
<?php 

$args = array(
	//"posts_per_page"   => 3,
	"post_type"        => "post",
	"post_status"      => "publish"
);

$posts_array = get_posts($args); 

//echo "<pre>";
//print_r($posts_array);
//die();

//echo count($posts_array);
if(count($posts_array) > 0)
{ ?>
<div class="owl-carousel owl-theme blog-post">
	<?php
foreach($posts_array as $posts) { 
	$img = get_the_post_thumbnail($posts->ID, 'thumbnail');
	//$img = get_the_post_thumbnail_url($posts->ID, 'thumbnail');
	///print_r($img);
	//die("jhgjh");
		?>	
	<div class="item">
      <?php echo $img;?>
    	<!-- <img src=""> -->
                            <div class="blog-title">
                                <h3><?php echo $posts->post_title;?></h3>
                                <button class="btn btn-success mb-2"><a href="<?php echo get_permalink($posts->ID)?>">Read More</a></button><br>
                                <span><?php echo the_time('F j, Y');?></span>
    </div>
	</div>
    <?php
} ?>
</div>
<?php 
}
?>
</div>
</div>

<script>
	$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
		//items: 4,
		margin: 30,
		loop: true,
		nav: true,
		mouseDrag: true,
		resonsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
   
});
});

</script>
<?php

get_footer();

?>