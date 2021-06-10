<?php
/*
Template Name: Новости
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
  
h1{
    font-size:inherit;
}
 
 .osnov{display: flex;
    flex-direction: row;
    margin-top:30px;
    margin-bottom:40px;
     flex-wrap: wrap;
    

 }
.osnov img {
    border-radius: 10px;
    max-height: 140px;
    width: 100%;
}

.osnov a{
    width:24%;
    color:#ff4e4f;
    margin-right:1%;
    transition:.3s;
    position:relative;
    margin-bottom:30px;
       
}

.osnov a:before {
    content: 'Читать';
    width: 130px;
    height: 43px;
    background-color: #ffffff;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    left: 0;
    right: 0;
    margin: auto;
    color: #0083c3;
    font-weight:bold;
      opacity:0;
    top: 0;
    bottom: 0;
     transition:.3s;
    z-index:2;
}

.osnov a:after{
    width:100%;
    opacity:0;
    height:100%;
    content: '';
    background:rgba(99,175,215,.5);
    transition:.3s;
    position:absolute;
    top:0px;
    border-radius:15px;
}


.osnov a:hover:before,.osnov a:hover:after{
opacity:1;
}


.tit{
    font-size: 18px;
    line-height: 1.3;
    color:#0c94d6;
    margin: 15px 0px 10px;
    font-weight: 600;
    width:100%;
  
}

.tit1{height:70px;
    overflow:hidden;
      margin-bottom: 10px;
    position:relative;
}





p{
    margin:0px;
    color:#485e69;
        font-size: 14px;
}

 @media screen and (min-width: 1000px) and (max-width: 1400px) {
.tit{
    font-size:14px;
}

.tit1{height:55px;}

.tit1:before{
    font-size:12px;
    bottom:-2px;
}


p{
    margin:0px;
        font-size: 12px;
}     
 }

 @media screen and (max-width: 1000px) {
     
     .tit1:before{
         display:none;
     }
     
    .osnov {
    display: flex;
    flex-direction: column-reverse;
    margin-top: 30px;
    margin-bottom: 10px;
} 
 
  

.bread img {
    margin: 0px 3px;
    transform: rotate(180deg);
    margin-left: 0px;
    margin-right: 5px;
    margin-bottom: -2px;
}

.bread {
    color: #ff4e4f;
    margin: 30px 0px 0px;
    font-size: 11px;
}


.bread a:nth-child(1) {
display:none;
}

.osnov img {
    border-radius: 10px;
    max-height: 1000px;
    width: 100%;
}

.osnov a {
    width: 100%;
    color: #ff4e4f;
    margin-right: 0%;
    transition: .3s;
    margin-bottom: 30px;
}

  
 }
      
  </style>  
    
    
    
    
<div class="bread">
    
<a href="/">  Казино X   </a> <a href="/"><img src="/img/str.png"> </a>
<a > <h1 style="display:inline"><?php the_title(); ?></h1>  </a>

    
    
</div>
    
    
   
 <div class="osnov">
     
     
    <?php global $wp_query;
            $wp_query = new WP_Query(array(
               'post_parent' => get_the_ID(),
                'post_type' => 'page',
                 'posts_per_page'    => 30,
               'orderby' => 'post__in', 
                'order' => 'ASC',
            ));
            while( have_posts() ) { the_post(); ?>
			
						
   	        <a  href="<?php the_permalink(); ?>"> 

   	    
   	        <img src="<?php the_field('img') ?>">
   	<div class="tit">       <?php the_title(); ?></div> 
   	          	<div class="tit1">            <?php the_excerpt(); ?>                       </div> 
   	        
   	        </a>
							
		<?php }  ?>
	    <?php wp_reset_query(); ?>

     
     
     
     
     
     
     
     
     
     
     
     

 
 
 </div>  
   
 
    

    

	<script src="/script.js" ></script>
</div>


<?php
get_footer();