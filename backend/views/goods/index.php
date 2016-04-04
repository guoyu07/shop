<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ECSHOP 管理中心 - 商品列表 </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="./Styles/general.css" rel="stylesheet" type="text/css" />
        <link href="./Styles/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>
            <span class="action-span"><a href="index.php?r=goods/add">添加新商品</a></span>
            <span class="action-span1"><a href="index.php?r=index/index">ECSHOP 管理中心</a></span>
            <span id="search_id" class="action-span1"> - 商品列表 </span>
            <div style="clear:both"></div>
        </h1>


        <!-- 商品列表 -->
        <form method="post" action="" name="listForm" onsubmit="">
            <div class="list-div" id="listDiv">
                <table cellpadding="3" cellspacing="1">
                    <tr>
                        <th>编号</th>
                        <th>商品名称</th>
                        <th>货号</th>
                        <th>价格</th>
                        <th>上架</th>
                        <th>库存</th>
                        <th>操作</th>
                    </tr>

                    <?php foreach ($data as $k => $v) { ?>
                         <tr>
                             <td align="center"><?php echo $v['id']; ?></td>
                             <td align="center" class="first-cell"><span><?php echo $v['goods_name']; ?></span></td>
                             <td align="center"><span onclick=""><?php echo $v['goods_sn']; ?></span></td>
                             <td align="center"><span><?php echo $v['shop_price']; ?></span></td>
                             <td align="center"><?php echo $v['is_sale']; ?></td>
                             <td align="center"><span><?php echo $v['count']; ?></span></td>
                             <td align="center">
                                 <a href="index.php?r=goods/update&id=<?php echo $v['id']; ?>"  title="查看">编辑</a>
                                 <a href="index.php?r=product/index&id=<?php echo $v['id']; ?>" onclick="" title="回收站">货品列表</a>
                                 <a href="index.php?r=goods/trash&id=<?php echo $v['id']; ?>" onclick="" title="回收站">移入回收站</a></td>
                         </tr>
                    <?php } ?>
                </table>

                <!-- 分页开始 -->
                <table id="page-table" cellspacing="0">
                    <tr>
                        <td width="80%">&nbsp;</td>
                        <td align="center" nowrap="true">
                        </td>
                    </tr>
                </table>
                <!-- 分页结束 -->
            </div>
        </form>

        <div id="footer">
            共执行 7 个查询，用时 0.028849 秒，Gzip 已禁用，内存占用 3.219 MB<br />
            版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
    </body>
</html>