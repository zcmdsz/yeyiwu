
<?php if ($this->_var['fittings']): ?>
<div class="recommend_collocation lshadow" >
      <div id="cn_b" class="recommend_collocation_title "> 
        <?php $_from = $this->_var['fittings_tab_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'tab_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['tab_item']):
?> 
        <?php if ($this->_var['key'] == 1): ?>
        <h2 class=>推荐搭配<?php echo $this->_var['comboTab'][$this->_var['key']]; ?></h2>
        <?php else: ?>
        <h2 class="h2bg">推荐搭配<?php echo $this->_var['comboTab'][$this->_var['key']]; ?></h2>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </div>
    <div id="cn_v"></div>
    <div id="cn_h" class="recommend_collocation_con  clearfix"> 
      <?php $_from = $this->_var['fittings_tab_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'tab_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['tab_item']):
?>
      <blockquote style="padding:0; margin:0;">
        <form name="m_goods_<?php echo $this->_var['key']; ?>" method="post" action="" onSubmit="return false;">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" style="width:670px; float:left;">
            <tr>
              <td align="center" valign="top"  class="master">
              <div class="p-img">
              <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="98" height="98"  /></a>
              </div>
              <div class="p-name">
               <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"> <?php echo sub_str($this->_var['goods']['goods_name'],28); ?></a>
               </div>
                <input class="m_goods_body m_goods_<?php echo $this->_var['key']; ?>" item="m_goods_<?php echo $this->_var['key']; ?>" type="checkbox" value="<?php echo $this->_var['goods']['goods_id']; ?>" data="<?php echo $this->_var['goods']['shop_price']; ?>" spare="0" stock="0" />
                <font class="p-price">￥<strong class="m_goods_<?php echo $this->_var['key']; ?>_display"><?php echo $this->_var['goods']['shop_price']; ?></strong>元</font><br />
                套餐基本件
                <div class="icon-add"></div>
                </td>
              
              <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['goods_list']):
?> 
              <?php if ($this->_var['goods_list']['group_id'] == $this->_var['key']): ?>
              <td align="center" valign="top"  class="master" style="padding: 0px 10px 0 0px;">
              <div class="p-img"><a href="<?php echo $this->_var['goods_list']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_list']['goods_name']); ?>"><img src="<?php echo $this->_var['goods_list']['goods_thumb']; ?>" width="100" /></a></div>
              <div class="p-name"> <a href="<?php echo $this->_var['goods_list']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_list']['goods_name']); ?>"> <?php echo sub_str($this->_var['goods_list']['goods_name'],28); ?></a></div>
                <input class="m_goods_list m_goods_<?php echo $this->_var['key']; ?>" item="m_goods_<?php echo $this->_var['key']; ?>" type="checkbox" value="<?php echo $this->_var['goods_list']['goods_id']; ?>" data="<?php echo $this->_var['goods_list']['fittings_price_ori']; ?>" spare="<?php echo $this->_var['goods_list']['spare_price_ori']; ?>" stock="0" />
                <font class="p-price">￥<strong class="m_goods_<?php echo $this->_var['key']; ?>_display"><?php echo $this->_var['goods_list']['fittings_price_ori']; ?></strong>元</font><br />
                搭配省<?php echo $this->_var['goods_list']['spare_price']; ?>
                </td>
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <td>&nbsp;</td>
            </tr>
          </table>
          <div class="infos">
         
          
              <div class="submit_<?php echo $this->_var['key']; ?>">
              <p class="tip_spare">搭配买共省<strong style="miqi_priceNum">0.00</strong>元</p>
               <p>套餐价：￥<span class="combo_price">0.00</span>元 × <input type="text" class="combo_stock" name="m_goods_<?php echo $this->_var['key']; ?>_number" value="1" size="1" style="text-align:center" /></p>
              </div>
             
          
             <p class="buy_btn"><a href="javascript:addMultiToCart('m_goods_<?php echo $this->_var['key']; ?>', '<?php echo $this->_var['goods']['goods_id']; ?>')"> 组合购买</a></p>
        
          </div>
        </form>
      </blockquote>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <script type="text/javascript">//reg("cn");</script> 
    </div>
</div>
<div class="blank"></div>
<?php endif; ?> 
 
<style type="text/css">
.tip_spare {display:none}
</style>
<script type="text/javascript">
var btn_buy = "确定";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
var select_base = '请选择套餐基本件';
var select_shop = '请选择套餐商品';
var data_not_complete = '数据格式不完整';
var understock = '库存不足，请选择其他商品';

jQuery(function($){
	//组合套餐tab切换
	var _tab = $('#cn_b h2');
	var _con = $('#cn_h blockquote');
	var _index = 0;
	_con.eq(0).show().siblings('blockquote').hide();
	_tab.css('cursor','pointer');
	_tab.click(function(){
		_index = _tab.index(this);
		_tab.eq(_index).removeClass('h2bg').siblings('h2').addClass('h2bg');
		_con.eq(_index).show().siblings('blockquote').hide();
	})
	//选择基本件
	$('.m_goods_body').click(function(){
		if($(this).prop('checked')){
			ec_group_addToCart($(this).attr('item'), <?php echo $this->_var['goods']['goods_id']; ?>); //基本件(组,主件)
		}else{
			ec_group_delInCart($(this).attr('item'), <?php echo $this->_var['goods']['goods_id']; ?>); //删除基本件(组,主件)
			display_Price($(this).attr('item'),$(this).attr('item').charAt($(this).attr('item').length-1));
		}
	})
	//变更选购的配件
	$('.m_goods_list').click(function(){
		//是否选择主件
		if(!$(this).parents('form').find('.m_goods_body').prop('checked')){
			alert(select_base);
			return false;
		}
		if($(this).prop('checked')){
			ec_group_addToCart($(this).attr('item'), $(this).val(),<?php echo $this->_var['goods']['goods_id']; ?>); //新增配件(组,配件,主件)
		}else{
			ec_group_delInCart($(this).attr('item'), $(this).val(),<?php echo $this->_var['goods']['goods_id']; ?>); //删除基本件(组,配件,主件)
			display_Price($(this).attr('item'),$(this).attr('item').charAt($(this).attr('item').length-1));
		}
	})
	//可以购买套餐的最大数量
	$(".combo_stock").keyup(function(){
		var group = $(this).parents('form').attr('name');
		getMaxStock(group);//根据套餐获取该套餐允许购买的最大数
	});
})

//允许购买套餐的最大数量
function getMaxStock(group){
	var obj = $('input[name="'+group+'_number"]');
	var original = parseInt(Number(obj.val()));
	var stock = $("."+group).eq(0).attr('stock');
	//是否是数字
	if(isNaN(original)){
		original = 1;
		obj.val(original);
	}
	$("."+group).each(function(index){
		if($("."+group).eq(index).prop('checked')){
			var item_stock = parseInt($("."+group).eq(index).attr('stock'));
			stock = (stock > item_stock)?item_stock:stock;//取最小值
		}
	});
	//更新
	original = (original < 1)?1:original;
	stock = (stock < 1)?1:stock;
	if(original > stock){
		obj.val(stock);
	}
}

//统计套餐价格
function display_Price(_item,indexTab){
	var _size = $('.'+_item).size();
	var _amount_shop_price = 0;
	var _amount_spare_price = 0;
	indexTab = indexTab - 1;
	for(i=0; i<_size; i++){
		obj = $('.'+_item).eq(i);
		if(obj.prop('checked')){
			_amount_shop_price += parseFloat(obj.attr('data')); //原件合计
			_amount_spare_price += parseFloat(obj.attr('spare')); //优惠合计
		}
	}
	var tip_spare = $('.tip_spare:eq('+indexTab+')');//节省文本
	if(_amount_spare_price > 0){//省钱显示提示信息
		tip_spare.show();
		tip_spare.children('strong').text(_amount_spare_price);
	}else{
		tip_spare.hide();
	}
	//显示总价
	$('.combo_price:eq('+indexTab+')').text(_amount_shop_price);
}

//处理添加商品到购物车
function ec_group_addToCart(group,goodsId,parentId){
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var quick		   = 0;
  var group_item   = (typeof(parentId) == "undefined") ? goodsId : parseInt(parentId);

  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group = group + '_' + group_item;//组名

  Ajax.call('flow.php?step=add_to_cart_combo', 'goods=' + $.toJSON(goods), ec_group_addToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}

//处理添加商品到购物车的反馈信息
function ec_group_addToCartResponse(result)
{
  if (result.error > 0)
  {
    // 如果需要缺货登记，跳转
    if (result.error == 2)
    {
      alert(understock);
	  cancel_checkboxed(result.group, result.goods_id);//取消checkbox
    }
    // 没选规格，弹出属性选择框
    else if (result.error == 6)
    {
      ec_group_openSpeDiv(result.message, result.group, result.goods_id, result.parent);
    }
    else
    {
      alert(result.message);
	  cancel_checkboxed(result.group, result.goods_id);//取消checkbox
    }
  }
  else
  {
	//处理Ajax数据
	var group = result.group.substr(0,result.group.lastIndexOf("_"));
	$("."+group).each(function(index){
		if($("."+group).eq(index).val()==result.goods_id){
			//主件显示价格、配件显示基本件+属性价
			var goods_price = (result.parent > 0) ? (parseFloat(result.fittings_price)+parseFloat(result.spec_price)):result.goods_price;
			$("."+group).eq(index).attr('data',goods_price);//赋值到文本框data参数
			$("."+group).eq(index).attr('stock',result.stock);//赋值到文本框stock参数
			$('.'+group+'_display').eq(index).text(goods_price);//前台显示
		}
	});
	getMaxStock(group);//根据套餐获取该套餐允许购买的最大数
	display_Price(group,group.charAt(group.length-1));//显示套餐价格
  }
}

//处理删除购物车中的商品
function ec_group_delInCart(group,goodsId,parentId){
  var goods        = new Object();
  var group_item   = (typeof(parentId) == "undefined") ? goodsId : parseInt(parentId);

  goods.goods_id = goodsId;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group = group + '_' + group_item;//组名

  Ajax.call('flow.php?step=del_in_cart_combo', 'goods=' + $.toJSON(goods), ec_group_delInCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}

//处理删除购物车中的商品的反馈信息
function ec_group_delInCartResponse(result)
{
	var group = result.group;
	if (result.error > 0){
		alert(data_not_complete);
	}else if(result.parent == 0){
		$('.'+group).attr("checked",false);
	}
	display_Price(group,group.charAt(group.length-1));//显示套餐价格
}

//生成属性选择层
function ec_group_openSpeDiv(message, group, goods_id, parent) 
{
  var _id = "speDiv";
  var m = "mask";
  if (docEle(_id)) document.removeChild(docEle(_id));
  if (docEle(m)) document.removeChild(docEle(m));
  //计算上卷元素值
  var scrollPos; 
  if (typeof window.pageYOffset != 'undefined') 
  { 
    scrollPos = window.pageYOffset; 
  } 
  else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') 
  { 
    scrollPos = document.documentElement.scrollTop; 
  } 
  else if (typeof document.body != 'undefined') 
  { 
    scrollPos = document.body.scrollTop; 
  }

  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "hidden";
    i++;
  }

  // 新激活图层
  var newDiv = document.createElement("div");
  newDiv.id = _id;
  newDiv.style.position = "absolute";
  newDiv.style.zIndex = "10000";
  newDiv.style.width = "300px";
  newDiv.style.height = "260px";
  newDiv.style.top = (parseInt(scrollPos + 200)) + "px";
  newDiv.style.left = (parseInt(document.body.offsetWidth) - 200) / 2 + "px"; // 屏幕居中
  newDiv.style.overflow = "auto"; 
  newDiv.style.background = "#FFF";
  newDiv.style.border = "3px solid #59B0FF";
  newDiv.style.padding = "5px";

  //生成层内内容
  newDiv.innerHTML = '<h4 style="font-size:14; margin:15 0 0 15;">' + select_spe + "</h4>";

  for (var spec = 0; spec < message.length; spec++)
  {
      newDiv.innerHTML += '<hr style="color: #EBEBED; height:1px;"><h6 style="text-align:left; background:#ffffff; margin-left:15px;">' +  message[spec]['name'] + '</h6>';

      if (message[spec]['attr_type'] == 1)
      {
        for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++)
        {
          if (val_arr == 0)
          {
            newDiv.innerHTML += "<input style='margin-left:15px;' type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' checked /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';      
          }
          else
          {
            newDiv.innerHTML += "<input style='margin-left:15px;' type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';      
          }
        } 
        newDiv.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
      }
      else
      {
        for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++)
        {
          newDiv.innerHTML += "<input style='margin-left:15px;' type='checkbox' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='spec_value_" + message[spec]['values'][val_arr]['id'] + "' /><font color=#555555>" + message[spec]['values'][val_arr]['label'] + ' [' + message[spec]['values'][val_arr]['format_price'] + ']</font><br />';     
        }
        newDiv.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
      }
  }
  newDiv.innerHTML += "<br /><center>[<a href='javascript:ec_group_submit_div(\"" + group + "\"," + goods_id + "," + parent + ")' class='f6' >" + btn_buy + "</a>]&nbsp;&nbsp;[<a href='javascript:ec_group_cancel_div(\"" + group + "\"," + goods_id + ")' class='f6' >" + is_cancel + "</a>]</center>";
  document.body.appendChild(newDiv);


  // mask图层
  var newMask = document.createElement("div");
  newMask.id = m;
  newMask.style.position = "absolute";
  newMask.style.zIndex = "9999";
  newMask.style.width = document.body.scrollWidth + "px";
  newMask.style.height = document.body.scrollHeight + "px";
  newMask.style.top = "0px";
  newMask.style.left = "0px";
  newMask.style.background = "#FFF";
  newMask.style.filter = "alpha(opacity=30)";
  newMask.style.opacity = "0.40";
  document.body.appendChild(newMask);
} 

//获取选择属性后，再次提交到购物车
function ec_group_submit_div(group, goods_id, parentId) 
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var input_arr      = document.getElementById('speDiv').getElementsByTagName('input'); //by mike
  var quick		   = 1;

  var spec_arr = new Array();
  var j = 0;

  for (i = 0; i < input_arr.length; i ++ )
  {
    var prefix = input_arr[i].name.substr(0, 5);

    if (prefix == 'spec_' && (
      ((input_arr[i].type == 'radio' || input_arr[i].type == 'checkbox') && input_arr[i].checked)))
    {
      spec_arr[j] = input_arr[i].value;
      j++ ;
    }
  }

  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goods_id;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group    = group;//组名

  Ajax.call('flow.php?step=add_to_cart_combo', 'goods=' + $.toJSON(goods), ec_group_addToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike

  document.body.removeChild(docEle('speDiv'));
  document.body.removeChild(docEle('mask'));

  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "";
    i++;
  }

}

//关闭mask和新图层的同时取消选择
function ec_group_cancel_div(group, goods_id){
  document.body.removeChild(docEle('speDiv'));
  document.body.removeChild(docEle('mask'));

  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "";
    i++;
  }
  cancel_checkboxed(group, goods_id);//取消checkbox
}

/*
*套餐提交到购物车 by mike
*/
function addMultiToCart(group,goodsId){
	var goods     = new Object();
	var number    = $('input[name="'+group+'_number"]').val();
	
	goods.group = group;
	goods.goods_id = goodsId;
	goods.number = (number < 1) ? 1:number;
	
	//判断是否勾选套餐
	if(!$("."+group).is(':checked')){
		alert(select_shop);
		return false;	
	}
	
	Ajax.call('flow.php?step=add_to_cart_group', 'goods=' + $.toJSON(goods), addMultiToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}

//回调
function addMultiToCartResponse(result){
	if(result.error > 0){
		alert(result.message);
	}else{
		window.location.href = 'flow.php';
	}
}

//取消选项
function cancel_checkboxed(group, goods_id){
	//取消选择
	group = group.substr(0,group.lastIndexOf("_"));
	$("."+group).each(function(index){
		if($("."+group).eq(index).val()==goods_id){
			$("."+group).eq(index).attr("checked",false);			  
		}
	});
}

/*
//sleep
function sleep(d){
	for(var t = Date.now();Date.now() - t <= d;);
}
*/
</script>