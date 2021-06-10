<?php
/*
Template Name: Новость
*/
get_header();
?>
<div class="main">






<div class="container">
    
  <style>
 

  
      .bread {
          color:#0082c1;
          margin:50px 0px 15px;
      }
  
    .bread a{
    color:#6f6f6f;
}
    .bread img{
        margin:0px 3px;
    }
  
  
.time {
    color: #898989;
    font-size: 16px;
    color: #41485a;
    display: flex;
    align-items: baseline;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;

}

.main-left {
    width: 100%;
    padding-right: 0%;

}
 
 
 .osnov{display: flex;
    flex-direction: row-reverse;
        justify-content: flex-end;
    margin-top:10px;
    margin-bottom:40px;
 }
 
.pic {
    width: 45%;
    margin-right: 0px;
    float: left;
    margin-right: 5%;
}
 
 .pic img{
     border-radius:10px;
 }
 
h1 {
    font-size: 25px;
    color: #0082c1;
    width: 80%;
    line-height: 1.1;
    font-weight: bold;
    text-transform: uppercase;
    margin: 0px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
}
 
h1:before {
    content: ' ';
    height: 5px;
    width: 40px;
    background: #0082c1;
    position: relative;
    display: inline-block;
    margin-right: 20px;
}
 
h1  span{
    color:#ff4e4f;
} 

 @media screen and (min-width: 1000px) and (max-width: 1400px) {
h1 {
     font-size: 25px;
}
     
 }

 @media screen and (max-width: 1000px) {
    .osnov {
    display: flex;
    flex-direction: column-reverse;
    margin-top: 30px;
    margin-bottom: 10px;
} 
 .palka{
     display:none;
 }
 
 h1:before {
    content: ' ';
    height: 5px;
    width: 40px;
    background: #0082c1;
    position: relative;
    display: inline-block;
    margin-right: 20px;
    display: block;
    position: absolute;
    margin-top: -50px;
}
 
 
 h1 {
    font-size: 18px;
    width: 100%;
    line-height: 1.5;
    margin: 30px 0px 15px;
}    

.bread img {
    margin: 0px 3px;
    transform: rotate(180deg);
    margin-left: 0px;
    margin-right: 5px;
    margin-bottom: -2px;
}
.time {
    width: 100%;
    margin-bottom: 25px;
    flex-direction: column;
}

.bread {
    margin: 20px 0px 0px;
    font-size: 12px;
}

.bread  a{
    display:none;
}
.bread img:nth-child(2) {
display:none;
}

.pic {
    width: 100%;
    margin-right: 0px;
}

.pic img{
    max-width:100%;
}
     
 }
      
  </style>  
    
    
    
    
<div class="bread">
    
<a href="/">  Казино X    </a> <img src="/img/str.png">
<a href="/turniri-i-yvlekatelnie-akcii-ot-casino-x">  Новости   </a> <a style="display:inline" href="/turniri-i-yvlekatelnie-akcii-ot-casino-x"><img src="/img/str.png">  </a>
<?php the_title(); ?>
    
    
</div>



 <div class="palka"></div>       
   
 <div class="osnov">
     
     
 
     
     
     <div class="time">
         
<h1><?php the_title(); ?></h1>         
         
<?php the_time(' j F Y '); ?> <?php the_time('G:i'); ?>



 </div>
 
 
 </div>  
   
 
    

        
<div style="display:flex;flex-direction:row">
    
  <div class="for-left">









  <div class="main-left">

    <div class="pic">
         
   <img src="<?php the_field('img') ?>"  >    
         
     </div>
     


			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
			

			endwhile; // End of the loop.
			?>

      
</div>







</div>  



</div>

    
    
    

	<script src="/script.js" ></script>
</div>

<style>
.for-f a:nth-child(1) .for-f1 {
    background: url(/img/11.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(2) .for-f1 {
    background: url(/img/12.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(3) .for-f1 {
    background: url(/img/13.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(4) .for-f1 {
    background: url(/img/14.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(5) .for-f1 {
    background: url(/img/15.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(6) .for-f1 {
    background: url(/img/16.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(7) .for-f1 {
    background: url(/img/10.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(8) .for-f1 {
    background: url(/img/8.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(9) .for-f1 {
    background: url(/img/9.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(10) .for-f1 {
    background: url(/img/7.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
 
</style>


<script>
$('p:nth-child(2)').after('<a class="href" style="     display: flex;  align-items: center;   justify-content: center;    color: #fff;    font-size: 18px;    width: 200px;    height: 50px;margin:auto;   background: #0083c3;  "> Играть</a>');    
    
    
</script>

<?php
get_footer();