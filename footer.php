<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
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
</body>
</html>
