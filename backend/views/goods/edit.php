<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 编辑商品 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./Styles/general.css" rel="stylesheet" type="text/css" />
<link href="./Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span"><a href="__GROUP__/Goods/goodsList">商品列表</a>
    </span>
    <span class="action-span1"><a href="__GROUP__">ECSHOP 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 编辑商品 </span>
    <div style="clear:both"></div>
</h1>

<div class="tab-div">
    <div id="tabbar-div">
        <p>
            <span class="tab-front" id="general-tab">通用信息</span>
        </p>
    </div>
    <div id="tabbody-div">
        <form enctype="multipart/form-data" action="__GROUP__/Goods/goodsEdit" method="post">
            <table width="90%" id="general-table" align="center">
                <tr>
                    <td class="label">商品名称：</td>
                    <td><input type="text" name="goods_name" value="<{$row.goods_name}>"size="30" />
                    <span class="require-field">*</span></td>
                </tr>
                <tr>
                    <td class="label">商品货号： </td>
                    <td>
                        <input type="text" name="goods_sn" value="<{$row.goods_sn}>" size="20"/>
                        <span id="goods_sn_notice"></span><br />
                        <span class="notice-span"id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品分类：</td>
                    <td>
                        <select name="cat_id">
                            <option value="0">请选择...</option>
                            <foreach name="cat_list" item="cat_val">
                            <option value="<{$cat_val.cat_id}>" <if condition="$cat_val['cat_id'] eq $row['cat_id']"> selected="true"</if> ><{$cat_val.lev|str_repeat='&nbsp;&nbsp;',###}><{$cat_val.cat_name}></option>
                            </foreach>
                        </select>
                        <span class="require-field">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品品牌：</td>
                    <td>
                        <select name="brand_id">
                            <option value="0">请选择...</option>
                            <foreach name="brand_list" item="brand_val">
                            <option value="<{$brand_val.brand_id}>"><{$brand_val.brand_name}></option>
                            </foreach>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="label">本店售价：</td>
                    <td>
                        <input type="text" name="shop_price" value="<{$row.shop_price}>" size="20"/>
                        <span class="require-field">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品数量：</td>
                    <td>
                        <input type="text" name="goods_number" size="8" value="<{$row.goods_number}>"/>
                    </td>
                </tr>
                    <td class="label">是否上架：</td>
                    <td>
                        <input type="radio" name="is_onsale" value="1" <if condition="$val.is_onsale eq 1"> checked="true" </if> /> 是
                        <input type="radio" name="is_onsale" value="0" <if condition="$val.is_onsale eq 0"> checked="true" </if> /> 否
                    </td>
                </tr>
                <tr>
                    <td class="label">加入推荐：</td>
                    <td>
                        <input type="checkbox" name="is_best" value="1" <if condition="$row.is_best eq  1"> checked="true" </if> /> 精品 
                        <input type="checkbox" name="is_new" value="1" <if condition="$row.is_new eq  1"> checked="true" </if> /> 新品 
                        <input type="checkbox" name="is_hot" value="1" <if condition="$row.is_hot eq  1"> checked="true" </if> /> 热销
                    </td>
                </tr>
                <tr>
                    <td class="label">推荐排序：</td>
                    <td>
                        <input type="text" name="sort_order" size="5" value="<{$val.sort_order}>"/>
                    </td>
                </tr>
                <tr>
                    <td class="label">市场售价：</td>
                    <td>
                        <input type="text" name="market_price" value="<{$row.market_price}>" size="20" />
                    </td>
                </tr>
                <tr>
                    <td class="label">商品关键词：</td>
                    <td>
                        <input type="text" name="keywords" value="<{$row.keywords}>" size="40" /> 用空格分隔
                    </td>
                </tr>
                <tr>
                    <td class="label">商品简单描述：</td>
                    <td>
                        <textarea name="goods_brief" cols="40" rows="3"><{$row.goods_brief}></textarea>
                    </td>
                </tr>
            </table>
            <div class="button-div">
                <input type="submit" value=" 确定 " class="button"/>
                <input type="reset" value=" 重置 " class="button" />
            </div>
        </form>
    </div>
</div>

<div id="footer">
共执行 9 个查询，用时 0.025161 秒，Gzip 已禁用，内存占用 3.258 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>