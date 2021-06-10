<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>


<footer>


  

   

  <div class="footer-bot container"> 

<div class="vul1 "> 
<img src="/img/logo.png" alt="">

 </div>

 <div class="vul2" > 
<?php
if( is_front_page() ){
echo "";
}
else {
	 echo "	<a href='/'> <div> Сайт</div></a>";
}


?>


<a href="/rabochee-casino-x"> <div> Зеркало</div> </a> 
<a href="/casino-x-mobilnaya-versiya"> <div> Мобильная версия</div> </a> 
<a href="/vhod-casino-x"> <div> Вход</div> </a> 
<a href="/bonus-promokod-casino-x"> <div> Бонусы</div> </a> 
<a href="/promokod-casino-x"> <div> Промокод</div> </a> 
 <a href="/registraciya-casino-x"> <div> Регистрация</div> </a> 
  <a href="/skachat-casino-x"> <div> Скачать</div> </a> 
  <a href="/obzor-casino-x"> <div>Обзор</div> </a>
  <a href="/turniri-i-yvlekatelnie-akcii-ot-casino-x"> <div>Турниры</div> </a> 
 </div>





<div class="vul3 "> 
<img src="/img/opl.png" alt="">


<a href="" class="href">
    Другие способы оплаты
</a>

 </div>


   

   
   

   
   
 </div>   
</footer>


 <script>
$('.href').attr('href','https://casino-x-best.net');





</script>

<script>
  $('.men5').click(function(){
     $('header .container div').toggleClass('acriv'); 
         $('.open').toggle(); 
          $('.close').toggle(); 
  });  
    
    
    
    
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56457154, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56457154" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>

</body>
</html>
