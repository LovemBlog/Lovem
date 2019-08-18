<?php
/**
 * 自定义页面模板：追番列表
 *
 * @package custom
 */
$this->need('header.php'); ?>
    <div id="body">
        <div class="container">
            <div class="title-with-vertical-line sub-title">我的B站追番列表</div>
            <div class="sub-list-container">
            </div> 
            <div class="pagination">
              PS：只展示一页信息
            </div>
        </div>
    </div>
<?php $this->need('footer.php'); ?>
<script>
  getSubList()
  function getSubList () {
    var listData = [],
    pn = 1,
    ps = 15,
    total = 0;
    $.get("/bilibili-api/x/space/bangumi/follow/list?type=1&follow_status=0&pn=1&ps=21&vmid=33144699&ts=1566026348296",function(res,status){
      if (res.code === 0) {
        listData = res.data.list
        pn = res.data.pn
        ps = res.data.ps
        total = res.data.total
        fillData(listData)
        generatePagination(pn, ps, total)
      }
    }, dataType: 'json')
  }
  function fillData (list) {
    var str = '',
    timestamp = new Date().getTime();
    for (var i = 0; i < list.length; i++) {
      let item = list[i]
      str = str + 
      `<a class="sub-item" href="https://www.bilibili.com/bangumi/play/ss${item.season_id}/" target="_blank">
        <div class="img-box">
          <img referrer="no-referrer|origin|unsafe-url" src="${item.cover}@220w_280h.webp" alt="">
          <span></span>
        </div>
        <div class="sub-info">
          <div class="name ellipsis">${item.title}</div>
          <div class="desc ellipsis-2lines">${item.evaluate}</div>
          <div class="channel">
            <span>${item.season_type_name}</span>
            <i></i>
            <span>${item.areas[0].name}</span>
          </div>
          <div class="progress">
            <span>看到第${item.new_ep.title}话 </span>
            <i></i>
            <span>${item.new_ep.index_show}</span>
          </div>
        </div>
      </a>`
    }
    console.log(str)
    let subListEle = $('.sub-list-container')
    console.log(subListEle)
    if (subListEle) {
      subListEle.append(str)
    }
  }
  function generatePagination (pn, ps, total) {
    if (total < ps) return
  }
</script>