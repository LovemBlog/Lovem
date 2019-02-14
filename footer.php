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
</body>
</html>
