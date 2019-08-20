<?php
/**
 * 自定义页面模板：追番列表
 *
 * @package custom
 */
$this->need('header.php'); ?>
  <div class="title-with-vertical-line sub-title">我的B站追番列表</div>
  <div class="sub-list-container"></div> 
  <div class="pagination">PS：只展示正在追番的第一页信息</div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
<?php
  $opts = array(
    'http'=>array(
      'method'=>"GET",
      'header'=>"Accept-language: en\r\n" .
                "Cookie: SESSDATA=2e6c0ed8%2C1568913650%2Ca122c781\r\n"
    )
  );

  $context = stream_context_create($opts);
  $json_string = file_get_contents('https://api.bilibili.com/x/space/bangumi/follow/list?type=1&follow_status=2&pn=1&ps=21&vmid=33144699&ts=1566026348296', false, $context); 
  $data = json_decode($json_string);
  $list = $data->data->list;
  $str = '';
  $num = count($list);
  for ($i = 0; $i < $num; $i++) {
    $ss = $list[$i]->season_id;
    $cover = $list[$i]->cover;
    $title = $list[$i]->title;
    $evaluate = $list[$i]->evaluate;
    $season_type_name = $list[$i]->season_type_name;
    $area = $list[$i]->areas[0]->name;
    $progress = $list[$i]->progress;
    $progress = $progress === '' ? '尚未观看' : $progress;
    $index_show = $list[$i]->new_ep->index_show;
    $str .= "<a class='sub-item' href='https://www.bilibili.com/bangumi/play/ss$ss/' target='_blank'><div class='img-box'><img referrer='no-referrer|origin|unsafe-url' src='$cover@220w_280h.webp' alt=''><span></span></div><div class='sub-info'><div class='name ellipsis'>$title</div><div class='desc ellipsis-2lines'>$evaluate</div><div class='channel'><span>$season_type_name </span><i>&nbsp;&nbsp;</i><span>$area</span></div><div class='progress'><span>$progress </span><i>&nbsp;&nbsp;</i><span>$index_show</span></div></div></a>";
  };
  $str = preg_replace('/\\n*/', '', $str);
  echo "<script> var container = jQuery('.sub-list-container'); if (container) { container.append(\"$str\") }</script>";
?>
