<?php
/**
 * 自定义页面模板：关于
 *
 * @package custom
 */
$this->need('header.php'); ?>
  <div class="Lovem-about-page">
    <div class="avatar-box">
      <img src="http://thirdwx.qlogo.cn/mmopen/MsAfWtSDbmuF6kMFibia7MicjcHQJAAUtatibF6H19NthuibzInbnzWCMiapRt2qwlibsjibFJQXs85Zva4OPjYZs6IorSRhEdmicxXKT/132" alt="">
    </div>
    <div class="link-me">
      <a target="_blank" class="link" href="https://github.com/L-cw">Github</a>
      <a target="_blank" class="link" href="//lovem.fun">主页</a>
    </div>
    <div class="intro">
      <div class="intro-item">
        前端从业者，业余喜欢捣鼓点自己喜欢的东西，对新技术、有趣的技术都很感兴趣，喜欢记录总结，所以有了这个网站，目前的自己还是菜鸟一只，需要不断进步，变得更强。
      </div>
      <div class="intro-item">
        每写出一篇文章都很有成就感，希望通过记录增长自己的写作知识，同时也是给自己一个回顾，看以前的文章，就能想起以前的自己，看到文章增加，总归是有进步的嘛，嘿嘿
      </div>
      <div class="intro-item">
        2020 给自己列了很多计划要做的事，希望自己能完成
      </div>
    </div>
  </div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
