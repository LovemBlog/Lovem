<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> 鲁ICP备18003483号 <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
    <?php if($this->user->hasLogin()): ?>
        <a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a>
        <a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
    <?php else: ?>
        <a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a>
    <?php endif; ?>
</footer><!-- end #footer -->
<?php $this->footer(); ?>
<script src="//cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad()</script>
<script>
    var str = `
    く__,.ヘヽ.　　　　/　,ー､ 〉
    　　　　　＼ ', !-─‐-i　/　/´
    　　　 　 ／｀ｰ'　　　 L/／｀ヽ､            
    　　 　 /　 ／,　 /|　 ,　 ,　　　 ',                                          
    　　　ｲ 　/ /-‐/　ｉ　L_ ﾊ ヽ!　 i                            
    　　　 ﾚ ﾍ 7ｲ｀ﾄ　 ﾚ'ｧ-ﾄ､!ハ|　 |  
    　　　　 !,/7 '0'　　 ´0iソ| 　 |　　　
    　　　　 |.从"　　_　　 ,,,, / |./ 　 |             
    　　　　 ﾚ'| i＞.､,,__　_,.イ / 　.i 　|                   
    　　　　　 ﾚ'| | / k_７_/ﾚ'ヽ,　ﾊ.　|           
    　　　　　　 | |/i 〈|/　 i　,.ﾍ |　i　|    
    　　　　　　.|/ /　ｉ： 　 ﾍ!　　＼　|          
    　　　 　 　 kヽ>､ﾊ 　 _,.ﾍ､ 　 /､!            
    　　　　　　 !'〈//｀Ｔ´', ＼ ｀'7'ｰr'          
    　　　　　　 ﾚ'ヽL__|___i,___,ンﾚ|ノ
    　　　　　 　　　ﾄ-,/　|___./
    　　　　　 　　　'ｰ'　　!_,.
    `
    console.log(str)
</script>
<script type="text/javascript"> 
(function(){ 
var appid = 'cyu7Tt8Do'; 
var conf = 'prod_c886ddf8f5fd205929cac6257fcfebf8'; 
var width = window.innerWidth || document.documentElement.clientWidth; 
if (width < 960) { 
window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
</body>
</html>
