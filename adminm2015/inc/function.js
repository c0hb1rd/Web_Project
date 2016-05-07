function $(ObjID){
	return document.getElementById(ObjID);
}

function Ajax(TagID,UrlStr){
	xmlHttp=GetXmlHttpObject();
	if (xmlHttp==null){
  		alert ("您的浏览器不支持AJAX!");
		return false;
	}
	var Url="ajax.php"+UrlStr+"&sid="+Math.random();
	xmlHttp.onreadystatechange=function(){
		if (xmlHttp.readyState==4){
			if (xmlHttp.status==200){
				$(TagID).innerHTML=xmlHttp.responseText;
			}
		}
	}
	xmlHttp.open("GET",Url,true);
	xmlHttp.send(null);
}

function GetXmlHttpObject(){
var XmlHttp=null;
	try{
		XmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
	}
	catch (e){
 	 	// Internet Explorer
  		try{
			XmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
  		catch (e){
			XmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
 	}
	return XmlHttp;
}
function Confirmquxiao(){
	return confirm("您确认要删除该数据吗？取消之后会导致对所有已经缴费的考生重新分配准考证号！请谨慎处理");
}
function ConfirmDel(){
	return confirm("您确认要删除该数据吗？");
}
function ConfirmDel2(){
	return confirm("您确认要删除该数据吗？\n\n这是一个非常危险的操作，请谨慎处理！");
}
function ConfirmDel3(){
	return confirm("您确认要删除该分类吗？\n\n同时会删除该分类下的所有数据，\n\n这是一个非常危险的操作，请谨慎处理！");
}
function Confirmmake(){
	return confirm("您确定要生成新的准考证号码吗？\n\n会删除之前生成的所有数据哦，\n\n这是一个非常危险的操作，请谨慎处理！");
}
var checkflag="false";
function CheckboxAll(){
	if(checkflag=="false"){
		for(i=0;i<document.form1.length;i++){
			document.form1[i].checked=true;
			}
			checkflag="true";
			return "反选";
	}
	else {
		for(i=0;i<document.form1.length;i++){
			document.form1[i].checked=false;
			}
			checkflag="false";
			return "全选";
	}
}

function DelSelect(){
	var Checkbox=false;
	for(i=0;i<document.form1.length;i++){
		if (document.form1[i].checked){
			Checkbox=true;
		}
	}
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t) document.form1.submit();
	}
	else{
		alert("请选择删除内容!");
	}
}

function Order(TablaName,ObjID){
	var Order_Val=$("inputorder_"+ObjID).innerHTML;
	$("inputorder_"+ObjID).innerHTML="<p></p>";
	Ajax("inputorder_"+ObjID,"?meter=orders&table_name="+TablaName+"&order_val="+Order_Val+"&id="+ObjID);
}

function ShowHidden(ObjName){
	if (ObjName=="item1"){
		$("item1").style.display="block";
		$("item2").style.display="none";
	}
	if (ObjName=="item2"){
		$("item1").style.display="none";
		$("item2").style.display="block";
	}
}
function ShowHidden2(Num){
	if (Num==0){
		$("item1").style.display="block";
		$("item2").style.display="none";
	}
	if (Num==1){
		$("item1").style.display="none";
		$("item2").style.display="block";
	}
}

function ChangeClass(Val){
	location.href="?meter="+Val;
}
function ChangeSubClass(ID,Val){
	location.href="?meter="+ID+"&meter2="+Val;
}
function ChangeThdClass(ID,IDs,Val){
	location.href="?meter="+ID+"&meter2="+IDs+"&meter3="+Val;
}
function ProductsClass(ID){
	if (ID=="0"){
		$("p_tid").innerHTML="<select name=\"p_tid\"><option value=\"0\">请选择</option></select>";
	}
	else{
		Ajax("p_tid","?meter=ProductsClass&id="+ID);
	}
}
function ProSubClass(ID,Val){
	if (ID==""){
		$("p_subclass").innerHTML="<select name=\"p_subclass\"><option value=\"0\">请选择</option></select>";
		if (Val==1){
			$("p_thdclass").innerHTML="<select name=\"p_thdclass\"><option value=\"0\">请选择</option></select>";
		}
	}
	else{
		Ajax("p_subclass","?meter=ProSubClass&id="+ID);
		if (Val==1){
			$("p_thdclass").innerHTML="<select name=\"p_thdclass\"><option value=\"0\">请选择</option></select>";
		}
	}
}
function ProThdClass(ID){
	if (ID=="0"){
		$("p_thdclass").innerHTML="<select name=\"p_thdclass\"><option value=\"0\">请选择</option></select>";
	}
	else{
		Ajax("p_thdclass","?meter=ProThdClass&id="+ID);
	}
}
function DownSubClass(ID){
	if (ID==""){
		$("d_subclass").innerHTML="<select name=\"d_subclass\"><option value=\"0\">请选择</option></select>";
	}
	else{
		Ajax("d_subclass","?meter=DownSubClass&id="+ID);
	}
}

function CheckAdmin(ObjForm){
	var AdminUser=ObjForm.a_user;
	var NewPass=ObjForm.a_pass;
	var ConfirmPass=ObjForm.a_pass2;

	var Reg=/^[\w-@.]{5,20}$/;
	if (!Reg.test(AdminUser.value)){
		alert('管理员账号只能由5~20个字符(字母、数字、下划线)组成！');
		AdminUser.value="";
		AdminUser.focus();
		return false;
	}
	if (!Reg.test(NewPass.value)){
		alert('管理员密码只能由5~20个字符(字母、数字、下划线)组成！');
		NewPass.value="";
		ConfirmPass.value="";
		NewPass.focus();
		return false;
	}
	if (ConfirmPass.value==""){
		alert("请输入确认密码！");
		ConfirmPass.focus();
		return false;
	}
	if (NewPass.value!=ConfirmPass.value){
		alert("确认密码不正确！");
		ConfirmPass.value="";
		ConfirmPass.focus();
		return false;
	}
}

function CheckAd(ObjForm){
	if (ObjForm.a_image.value==""){
		alert('请上传图片!');
		ObjForm.a_image.focus();
		return false;
	}
	if (ObjForm.a_order.value==""){
		alert('请输入图片排序!');
		ObjForm.a_order.focus();
		return false;
	}
	if (isNaN(ObjForm.a_order.value)){
		alert('排序必须输入数字!');
		ObjForm.a_order.focus();
		return false;
	}
}

function CheckOL(ObjForm){
	if (ObjForm.o_class.value==""){
		alert('请选择客服类型！');
		ObjForm.o_class.focus();
		return false;
	}
	if (ObjForm.o_name.value==""){
		alert('请输入客服名称！');
		ObjForm.o_name.focus();
		return false;
	}
	if (ObjForm.o_number.value==""){
		alert('请输入客服账号！');
		ObjForm.o_number.focus();
		return false;
	}
	if (ObjForm.o_order.value==""){
		alert('请输入客服排序！');
		ObjForm.o_order.focus();
		return false;
	}
	if (isNaN(ObjForm.o_order.value)){
		alert('排序必须输入数字！');
		ObjForm.o_order.focus();
		return false;
	}
}

function CheckAboutUs(ObjForm){
	if (ObjForm.a_name.value==""){
		alert('请输入子栏目名称！');
		ObjForm.a_name.focus();
		return false;
	}
	if (ObjForm.a_order.value==""){
		alert('请输入子栏目排序！');
		ObjForm.a_order.focus();
		return false;
	}
	if (isNaN(ObjForm.a_order.value)){
		alert('排序必须为数字！');
		ObjForm.a_order.focus();
		return false;
	}
}

function CheckAboutImage(ObjForm){
	if (ObjForm.a_name.value==""){
		alert('请输入图片名称！');
		ObjForm.a_name.focus();
		return false;
	}
	if (ObjForm.a_image.value==""){
		alert('请上传图片！');
		ObjForm.a_image.focus();
		return false;
	}
	if (ObjForm.a_order.value==""){
		alert('请输入图片排序！');
		ObjForm.a_order.focus();
		return false;
	}
	if (isNaN(ObjForm.a_order.value)){
		alert('排序必须为数字！');
		ObjForm.a_order.focus();
		return false;
	}
}

function CheckProClass(ObjForm){
	if (ObjForm.p_name.value==""){
		alert('请输入分类名称!');
		ObjForm.p_name.focus();
		return false;
	}
	if (ObjForm.p_order.value==""){
		alert('请输入分类排序!');
		ObjForm.p_order.focus();
		return false;
	}
	if (isNaN(ObjForm.p_order.value)){
		alert('排序必须输入数字!');
		ObjForm.p_order.focus();
		return false;
	}
}
function Checkminzu(ObjForm){
	if (ObjForm.p_name.value==""){
		alert('请输入名称!');
		ObjForm.p_name.focus();
		return false;
	}

}
function Checkzkz(ObjForm){
	if (ObjForm.shuliang.value==""){
		alert('请输入要生成准考证的数量!');
		ObjForm.p_name.focus();
		return false;
	}

}
function Checkshengma(ObjForm){
	if (ObjForm.p_name.value==""){
		alert('请输入名称!');
		ObjForm.p_name.focus();
		return false;
	}
	if (ObjForm.p_zhi.value==""){
		alert('请输入省码值!');
		ObjForm.p_zhi.focus();
		return false;
	}
}
function CheckProducts(ObjForm){
	if (ObjForm.p_class.value==""){
		alert('请选择分类!');
		ObjForm.p_class.focus();
		return false;
	}
	if (ObjForm.p_name.value==""){
		alert('请输入名称!');
		ObjForm.p_name.focus();
		return false;
	}
	if (ObjForm.p_image.value==""){
		alert('请上传菜品图片!');
		ObjForm.p_image.focus();
		return false;
	}
	if (ObjForm.p_price.value==""){
		alert('请输入菜品价格!');
		ObjForm.p_price.focus();
		return false;
	}
	if (isNaN(ObjForm.p_price.value)){
		alert('价格必须输入数字!');
		ObjForm.p_price.focus();
		return false;
	}
	if (ObjForm.p_order.value==""){
		alert('请输入菜品排序!');
		ObjForm.p_order.focus();
		return false;
	}
	if (isNaN(ObjForm.p_order.value)){
		alert('排序必须输入数字!');
		ObjForm.p_order.focus();
		return false;
	}
}

function CheckProducts2(ObjForm){
	if (ObjForm.p_name.value==""){
		alert('请输入菜品名称!');
		ObjForm.p_name.focus();
		return false;
	}
	if (ObjForm.p_image.value==""){
		alert('请上传菜品图片!');
		ObjForm.p_image.focus();
		return false;
	}
	if (ObjForm.p_order.value==""){
		alert('请输入菜品排序!');
		ObjForm.p_order.focus();
		return false;
	}
	if (isNaN(ObjForm.p_order.value)){
		alert('排序必须输入数字!');
		ObjForm.p_order.focus();
		return false;
	}
}

function CheckProducts2Image(ObjForm){
	if (ObjForm.p_name.value==""){
		alert('请输入名称!');
		ObjForm.p_name.focus();
		return false;
	}
	if (ObjForm.p_image.value==""){
		alert('请上传图片!');
		ObjForm.p_image.focus();
		return false;
	}
	if (ObjForm.p_price.value==""){
		alert('请输入价格!');
		ObjForm.p_price.focus();
		return false;
	}
	if (isNaN(ObjForm.p_price.value)){
		alert('价格必须输入数字!');
		ObjForm.p_price.focus();
		return false;
	}
	if (ObjForm.p_order.value==""){
		alert('请输入排序!');
		ObjForm.p_order.focus();
		return false;
	}
	if (isNaN(ObjForm.p_order.value)){
		alert('排序必须输入数字!');
		ObjForm.p_order.focus();
		return false;
	}
}

function CheckNewsClass(ObjForm){
	if (ObjForm.n_name.value==""){
		alert('请输入分类名称!');
		ObjForm.n_name.focus();
		return false;
	}
	if (ObjForm.n_order.value==""){
		alert('请输入分类排序!');
		ObjForm.n_order.focus();
		return false;
	}
	if (isNaN(ObjForm.n_order.value)){
		alert('排序必须输入数字!');
		ObjForm.n_order.focus();
		return false;
	}
}

function CheckNews(ObjForm){
	if (ObjForm.n_class.value==""){
		alert('请选择新闻分类!');
		ObjForm.n_class.focus();
		return false;
	}
	if (ObjForm.n_title.value==""){
		alert('请输入新闻标题!');
		ObjForm.n_title.focus();
		return false;
	}
}

function CheckArticle(ObjForm){
	if (ObjForm.a_class.value==""){
		alert('请选择文章分类!');
		ObjForm.a_class.focus();
		return false;
	}
	if (ObjForm.a_title.value==""){
		alert('请输入文章标题!');
		ObjForm.a_title.focus();
		return false;
	}
}

function CheckLinks1(ObjForm){
	if (ObjForm.l_name.value==""){
		alert('请输入链接名称!');
		ObjForm.l_name.focus();
		return false;
	}
	if (ObjForm.l_url.value==""){
		alert('请输入链接地址!');
		ObjForm.l_url.focus();
		return false;
	}
}

function CheckLinks2(ObjForm){
	if (ObjForm.l_image.value==""){
		alert('请上传链接图片!');
		ObjForm.l_image.focus();
		return false;
	}
	if (ObjForm.l_url.value==""){
		alert('请输入链接地址!');
		ObjForm.l_url.focus();
		return false;
	}
}


function edit(x) {
	var sub_id = "sub_bt" + x
	var edit_id = "edit_bt" + x
	var cel_id = "cel_bt" + x

	var s_seat_num = "s_seat_num" + x
	var s_exam_id = "s_exam_id" + x
	var s_exam_num = "s_exam_num" + x
	var s_exam_subject = "s_exam_subject" + x
	var s_exam_room = "s_exam_room" + x
	var s_exam_venue = "s_exam_venue" + x
	var s_exam_date1 = "s_exam_date" + x
	var s_exam_date2 = "s_exam_date" + x + "_"+ x
	var s_exam_date3 = "s_exam_date" + x + "_" + x + "_" + x

	var u_seat_num = "u_seat_num" + x
	var u_exam_id = "u_exam_id" + x
	var u_exam_num = "u_exam_num" + x
	var u_exam_subject = "u_exam_subject" + x
	var u_exam_room = "u_exam_room" + x
	var u_exam_venue = "u_exam_venue" + x
	var u_exam_date = "u_exam_date" + x

	tagMode(sub_id, false);
	showTag(cel_id);
	hiddenTag(edit_id);

	// showTag(s_seat_num);
	// hiddenTag(u_seat_num);

	showTag(s_exam_num);
	hiddenTag(u_exam_num);

	showTag(s_exam_date1);
	// showTag(s_exam_date2);
	// showTag(s_exam_date3);
	// showTag(s_exam_date);
	hiddenTag(u_exam_date);

	showTag(s_exam_room);
	hiddenTag(u_exam_room);

	showTag(s_exam_venue);
	hiddenTag(u_exam_venue);

	showTag(s_exam_subject);
	hiddenTag(u_exam_subject);

	showTag(s_exam_id);
	hiddenTag(u_exam_id);

	changeValue(u_seat_num, s_seat_num)
	changeValue(u_exam_num, s_exam_num)
	changeValue(u_exam_room, s_exam_room)
	changeValue(u_exam_venue, s_exam_venue)
	changeValue(u_exam_subject, s_exam_subject)
	changeValue(u_exam_date, s_exam_date1)
	changeValue(u_exam_id, s_exam_id)
	// changeDateValue(u_exam_date, s_exam_date1, s_exam_date2, s_exam_date3)
}

function sub(x) {
	// var sub_id = "sub_bt" + x
	// var edit_id = "edit_bt" + x
	// var cel_id = "cel_bt" + x
	//
	// var s_seat_num = "s_seat_num" + x
	// var s_exam_id = "s_exam_id" + x
	// var s_exam_num = "s_exam_num" + x
	// var s_exam_subject = "s_exam_subject" + x
	// var s_exam_room = "s_exam_room" + x
	// var s_exam_venue = "s_exam_venue" + x
	// var s_exam_date = "s_exam_date" + x
	//
	// var u_seat_num = "u_seat_num" + x
	// var u_exam_id = "u_exam_id" + x
	// var u_exam_num = "u_exam_num" + x
	// var u_exam_subject = "u_exam_subject" + x
	// var u_exam_room = "u_exam_room" + x
	// var u_exam_venue = "u_exam_venue" + x
	// var u_exam_date = "u_exam_date" + x
	//
	// tagMode(sub_id, true);
	// // document.getElementById(sub_id).disabled = true;
	// showTag(edit_id);
	// hiddenTag(cel_id);
	//
	// hiddenTag(s_seat_num);
	// showTag(u_seat_num);
	//
	// hiddenTag(s_exam_num);
	// showTag(u_exam_num);
	//
	// hiddenTag(s_exam_date);
	// showTag(u_exam_date);
	//
	// hiddenTag(s_exam_room);
	// showTag(u_exam_room);
	//
	// hiddenTag(s_exam_venue);
	// showTag(u_exam_venue);
	//
	// hiddenTag(s_exam_subject);
	// showTag(u_exam_subject);
	//
	// hiddenTag(s_exam_id);
	// showTag(u_exam_id);
}

function cancel(x) {
	var sub_id = "sub_bt" + x
	var edit_id = "edit_bt" + x
	var cel_id = "cel_bt" + x

	var s_seat_num = "s_seat_num" + x
	var s_exam_id = "s_exam_id" + x
	var s_exam_num = "s_exam_num" + x
	var s_exam_subject = "s_exam_subject" + x
	var s_exam_room = "s_exam_room" + x
	var s_exam_venue = "s_exam_venue" + x
	var s_exam_date1 = "s_exam_date" + x
	var s_exam_date2 = "s_exam_date" + x + "_"+ x
	var s_exam_date3 = "s_exam_date" + x + "_" + x + "_" + x

	var u_seat_num = "u_seat_num" + x
	var u_exam_id = "u_exam_id" + x
	var u_exam_num = "u_exam_num" + x
	var u_exam_subject = "u_exam_subject" + x
	var u_exam_room = "u_exam_room" + x
	var u_exam_venue = "u_exam_venue" + x
	var u_exam_date = "u_exam_date" + x

	tagMode(sub_id, true);
	hiddenTag(cel_id);
	showTag(edit_id);

	// hiddenTag(s_seat_num);
	// showTag(u_seat_num);

	hiddenTag(s_exam_num);
	showTag(u_exam_num);

	hiddenTag(s_exam_date1);
	// hiddenTag(s_exam_date2);
	// hiddenTag(s_exam_date3);
	// hiddenTag(s_exam_date);
	showTag(u_exam_date);

	hiddenTag(s_exam_room);
	showTag(u_exam_room);

	hiddenTag(s_exam_venue);
	showTag(u_exam_venue);

	hiddenTag(s_exam_subject);
	showTag(u_exam_subject);

	hiddenTag(s_exam_id);
	showTag(u_exam_id);
}

function hiddenTag(id) {
	document.getElementById(id).style = "display: none";
}

function showTag(id) {
	document.getElementById(id).style = "display: true";
}

function tagMode(id, bool) {
	document.getElementById(id).disabled = bool;
}

function changeValue(id1, id2) {
	document.getElementById(id2).value = document.getElementById(id1).innerHTML;
	document.getElementById(id1).innerHTML = document.getElementById(id2).value;
}
function changeDateValue(id, id1, id2, id3) {
	var date = document.getElementById(id).innerHTML
	document.getElementById(id1).value = date.substring(0, 5)
	document.getElementById(id2).value = date.substring(5, 8)
	document.getElementById(id3).value = date.substring(8, 11)
}
