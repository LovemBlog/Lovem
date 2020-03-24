<?php
/**
 * 自定义页面模板：友情链接
 *
 * @package custom
 */
$this->need('header.php'); ?>
  <div class="Lovem-friends-page">
    <div class="friends-list">
      <a target="_blank" href="https://zhangxin.blog" class="box friend-item">
        <div class="logo-box">
          <img src="http://qny.lovem.fun/blog/20200325/9DP7Tyo8mmIe.png" alt="">
        </div>
        <div class="friend-info">
          <div class="name ellipsis">ZhangXin's BLOG</div>
          <div class="desc ellipsis-2lines">Just a BLOG</div>
        </div>
      </a>
      <a target="_blank" href="https://shezw.com/" class="box friend-item">
        <div class="logo-box">
          <img src="https://secure.gravatar.com/avatar/d5ee0629f1b7aac3b94ecb4584969671?s=32&r=G&d=" alt="">
        </div>
        <div class="friend-info">
          <div class="name ellipsis">半隐小筑 - 佘志伟的技术笔记</div>
          <div class="desc ellipsis-2lines">主要记录一些技术方面的要点、问题 以及过往的随笔</div>
        </div>
      </a>
      <a target="_blank" href="http://code-fe.lovem.fun" class="box friend-item">
        <div class="logo-box">
          <img src="http://qny.lovem.fun/blog/20200325/9DP7Tyo8mmIe.png" alt="">
        </div>
        <div class="friend-info">
          <div class="name ellipsis">前端资源共享</div>
          <div class="desc ellipsis-2lines">仅作为组内前端技术记录和总结之用</div>
        </div>
      </a>
      <a target="_blank" href="http://code.lovem.fun" class="box friend-item">
        <div class="logo-box">
          <img src="http://qny.lovem.fun/blog/20200325/9DP7Tyo8mmIe.png" alt="">
        </div>
        <div class="friend-info">
          <div class="name ellipsis">Vue练手项目Demo</div>
          <div class="desc ellipsis-2lines">自己平时用来试验想法的 Vue 项目</div>
        </div>
      </a>
    </div>
    <div class="box notice-box">
      <div class="title">公告</div>
      <div class="notice-item">1. 想加友链的同学注意一下</div>
      <div class="notice-item">2. 添加我的友链后，在评论里留下自己的站点信息</div>
      <div class="notice-item">3. 站点信息包括，站名、链接、简介和头像，站名和链接是必须的，其他的可选</div>
      <div class="notice-item">4. 看到消息后会将你的站点加入我的友链列表</div>
      <div class="notice-item">5. 为保持简洁，站名超出一行省略，简介超出两行省略</div>
    </div>
  </div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
