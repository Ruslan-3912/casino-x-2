<?php
/*
Template Name: main5
*/
get_header();
?>
<div class="main">



   <div class="slider">


<div class="h1ab"><h1 style="margin:0px;font-size:inherit"> <?php the_title(); ?></h1></div>

      <a class="href" href="#">  

      
      <img style="    margin: 0 auto; display: block;" class="nemob" src="/img/ban.jpg" alt="">
        <img style="    margin: 0 auto; display: block;" class="mob" src="/img/ban1.jpg" alt="">
        </a>
   </div> 
    




<div class="container">
    
    

        
<div style="display:flex;flex-direction:row">
    
  <div class="for-left">









  <div class="main-left" >
      
  <div class="main1"> </div>
      <p>Игроки Казино Х скачать программу-клиент клуба могут бесплатно. Оператор онлайн-заведения самостоятельно выпускает приложение, которое сегодня доступно в версиях на ПК и на Андроид.	</p>
 

    <div class="for-f">
       
  <a class="href"> <div class="for-f-0"></div> <div class="for-f1">      </div>       </a>
    <a class="href"> <div class="for-f-0"></div> <div class="for-f1">       </div>     </a>
      <a class="href"> <div class="for-f-0"></div> <div class="for-f1">        </div>       </a>
        <a class="href"> <div class="for-f-0"></div> <div class="for-f1">        </div>    </a>
          <a class="href"> <div class="for-f-0"></div> <div class="for-f1">        </div>    </a>
            <a class="href"> <div class="for-f-0"></div> <div class="for-f1">        </div>   </a>
       
 


         

         
         

    
     </div> 

      <a class="href"> <div class="fixor-end">       Показать еще  </div>  </a>

    


			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
			

			endwhile; // End of the loop.
			?>






  
      
</div>

    

<div class="main-right">
    <div class="vurr">
    <a href="" class="href">
        <img src="/img/a1.jpg" alt="">
<img src="/img/a2.jpg" alt="">
</a>
</div>
</div>


</div>  



</div>

    
    
    

	<script src="/script.js" ></script>
</div>

<style>
.for-f a:nth-child(1) .for-f1 {
    background: url(/img/16.png) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(2) .for-f1 {
    background: url(/img/15.png) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(3) .for-f1 {
    background: url(/img/14.png) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(4) .for-f1 {
    background: url(/img/13.png) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(5) .for-f1 {
    background: url(/img/12.png) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(6) .for-f1 {
    background: url(/img/11.png) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(7) .for-f1 {
    background: url(/img/7.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
.for-f a:nth-child(8) .for-f1 {
    background: url(/img/8.jpg) no-repeat!important;
    background-size: 100% 100%!important;
    background-position: center top!important;
}
 
</style>

<?php
get_footer();