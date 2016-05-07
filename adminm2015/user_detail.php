<?php
require '../conn.php';
require 'config.php';
require '../inc/function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../css/admin.css" type="text/css" />
    <script type="text/javascript" src="inc/function.js"></script>
    <script type="text/javascript" src="../js/idcard.js"></script>
    <script src="../laydate/laydate.js"></script>
    <style type="text/css">
        .edit td {
            line-height:20px;
        }
    </style>
    <style type="text/css">
        select{ border:1px solid #CCC; width: auto; max-width:80px;padding-left:3px; margin-left:2px;}
        input{ width:90%; height:20px; line-height:20px;  border:1px solid #CCC; float:left; padding-left:3px; margin-left:2px;}
        .userinput table tr,.userinput table tr td{ border:1px solid #f2f2f2; font-size:12px;}
    </style>
</head>
<body>
<?php
$user_id=$_GET['id'];
if ($_GET['act']=='modok'){

    $u_school_id=ReStr($_POST['u_school_id']);
    $u_email=ReStr($_POST['u_email']);
    $u_user=ReStr($_POST['u_user']);
    $u_name=ReStr($_POST['u_name']);
    $u_name_old=ReStr($_POST['u_name_old']);
    $u_zk_num=ReStr($_POST['u_zk_num']);
    $u_czby_date=ReStr($_POST['u_czby_date']);
    $u_zj_num=ReStr($_POST['u_zj_num']);
    $u_birth=ReStr($_POST['u_birth']);
    $u_sex=ReStr($_POST['u_sex']);
    $u_image=ReStr($_POST['u_image']);
    $u_address_hk=ReStr($_POST['u_address_hk']);
    $u_address_city=ReStr($_POST['u_address_city']);
    $u_address_xian=ReStr($_POST['u_address_xian']);
    $u_huji=ReStr($_POST['u_huji']);
    $u_minzu=ReStr($_POST['u_minzu']);
    $u_zzmm=ReStr($_POST['u_zzmm']);
    $u_at_school=ReStr($_POST['u_at_school']);
    $u_vocational=ReStr($_POST['u_vocational']);
    $u_applyfor=ReStr($_POST['u_applyfor']);
    $u_tel=ReStr($_POST['u_tel']);
    $u_address=ReStra($_POST['u_address']);
    $u_addressee=ReStra($_POST['u_addressee']);
    $u_code=ReStra($_POST['u_code']);
    $u_skills=ReStra($_POST['u_skills']);
    $u_skills_grade=ReStra($_POST['u_skills_grade']);
    $u_match=ReStra($_POST['u_match']);
    $u_match_grade=ReStra($_POST['u_match_grade']);

    $u_resume1_date_star=ReStra($_POST['u_resume1_date_star']);
    $u_resume1_date_end=ReStra($_POST['u_resume1_date_end']);
    $u_resume1_content=ReStra($_POST['u_resume1_content']);
    $u_resume1_position=ReStra($_POST['u_resume1_position']);

    $u_resume2_date_star=ReStra($_POST['u_resume2_date_star']);
    $u_resume2_date_end=ReStra($_POST['u_resume2_date_end']);
    $u_resume2_content=ReStra($_POST['u_resume2_content']);
    $u_resume2_position=ReStra($_POST['u_resume2_position']);

    $u_resume3_date_star=ReStra($_POST['u_resume3_date_star']);
    $u_resume3_date_end=ReStra($_POST['u_resume3_date_end']);
    $u_resume3_content=ReStra($_POST['u_resume3_content']);
    $u_resume3_position=ReStra($_POST['u_resume3_position']);

    $u_members1_name=ReStra($_POST['u_members1_name']);
    $u_members1_relationship=ReStra($_POST['u_members1_relationship']);
    $u_members1_work=ReStra($_POST['u_members1_work']);
    $u_members1_chief=ReStra($_POST['u_members1_chief']);

    $u_members2_name=ReStra($_POST['u_members2_name']);
    $u_members2_relationship=ReStra($_POST['u_members2_relationship']);
    $u_members2_work=ReStra($_POST['u_members2_work']);
    $u_members2_chief=ReStra($_POST['u_members2_chief']);

    $u_members3_name=ReStra($_POST['u_members3_name']);
    $u_members3_relationship=ReStra($_POST['u_members3_relationship']);
    $u_members3_work=ReStra($_POST['u_members3_work']);
    $u_members3_chief=ReStra($_POST['u_members3_chief']);

    $sql="update user set
    u_school_id='$u_school_id',
	u_name='$u_name',
	u_name_old='$u_name_old',
	u_zk_num='$u_zk_num',
	u_czby_date='$u_czby_date',
	u_zj_num='$u_zj_num',
	u_birth='$u_birth',
	u_sex='$u_sex',
	u_address_hk='$u_address_hk',
	u_address_city='$u_address_city',
	u_address_xian='$u_address_xian',
	u_huji='$u_huji',
	u_minzu='$u_minzu',
	u_zzmm='$u_zzmm',
	u_at_school='$u_at_school',
	u_vocational='$u_vocational',
	u_applyfor='$u_applyfor',
	u_tel='$u_tel',
	u_address='$u_address',
	u_addressee='$u_addressee',
	u_code='$u_code',
	u_skills='$u_skills',
	u_skills_grade='$u_skills_grade',
	u_match='$u_match',
	u_match_grade='$u_match_grade',
	u_resume1_date_star='$u_resume1_date_star',
	u_resume1_date_end='$u_resume1_date_end',
	u_resume1_content='$u_resume1_content',
	u_resume1_position='$u_resume1_position',

	u_resume2_date_star='$u_resume2_date_star',
	u_resume2_date_end='$u_resume2_date_end',
	u_resume2_content='$u_resume2_content',
	u_resume2_position='$u_resume2_position',

	u_resume3_date_star='$u_resume3_date_star',
	u_resume3_date_end='$u_resume3_date_end',
	u_resume3_content='$u_resume3_content',
	u_resume3_position='$u_resume3_position',

	u_members1_name='$u_members1_name',
	u_members1_relationship='$u_members1_relationship',
	u_members1_work='$u_members1_work',
	u_members1_chief='$u_members1_chief',

	u_members2_name='$u_members2_name',
	u_members2_relationship='$u_members2_relationship',
	u_members2_work='$u_members2_work',
	u_members2_chief='$u_members2_chief',

	u_members3_name='$u_members3_name',
	u_members3_relationship='$u_members3_relationship',
	u_members3_work='$u_members3_work',
	u_members3_chief='$u_members3_chief'

	where u_id=$user_id";

    mysql_query($sql) or die(mysql_error($sql));
    Msg('','user.php');

}



?>
<div id="container">
    <div class="edit">
        <h1>会员管理</h1>
        <?php
        $query=mysql_query('select * from user where u_id='.$id);
        $row=mysql_fetch_array($query);
        ?>

        <form name="form1" method="post" action="user_detail.php?act=modok&id=<?php echo $row['u_id']?>" onsubmit="return CheckUserInfo(this)">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="141" class="edit_title">用 户 名</td>
                    <td width="180"><?php echo $row['u_user'] ?>&nbsp;</td>
                    <td width="174" align="right">考生姓名</td>
                    <td width="418"><input name="u_name" type="text"  value="<?php echo $row['u_name'] ?>"     id="u_name" size="10" maxlength="30" /></td>
                    <td width="419">曾用名:</td>
                    <td width="837"><input name="u_name_old" type="text"  value="<?php echo $row['u_name_old'] ?>"  id="u_name_old" size="10" maxlength="30" /></td>

                </tr>
                <tr>
                    <td class="edit_title">性别</td>
                    <td><select name="u_sex">
                            <option value="0">请选择</option>
                            <option value="1">男</option>
                            <option value="2">女</option>
                        </select>              &nbsp;</td>
                    <td align="right">身份证号</td>
                    <td><input name="u_zj_num" type="text"  value="<?php echo $row['u_zj_num'] ?>"    id="u_zj_num" size="10" maxlength="30" /></td>
                    <td>出生年月</td>
                    <td><input  id="u_birth" name="u_birth"  value="<?php  if ($row['u_birth']!='0000-00-00') echo date('Y-m-d',strtotime($row['u_birth'])) ?>"  placeholder="请输入日期" /></td>
                </tr>
                <tr>
                    <td class="edit_title">户口所在地</td>
                    <td><input name="u_address_city" type="text"  value="<?php echo $row['u_address_city'] ?>"   id="u_address_city" size="10" maxlength="30" /></td>
                    <td align="right">市</td>
                    <td><input name="u_address_xian" type="text"   value="<?php echo $row['u_address_xian'] ?>"   id="u_address_xian" size="10" maxlength="30" /></td>
                    <td>县(市、区)</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="edit_title">民族</td>
                    <td><select name="u_minzu" id="u_minzu" >
                            <option value="">请选择</option> 
                            <?php
                            $str1='';
                            $query1=mysql_query('select * from dz_minzu  order by p_id');
                            if(mysql_num_rows($query1)>0){
                                while($row1=mysql_fetch_array($query1)){
                                    $str1.='<option value="'.$row1['p_id'].'">'.$row1['p_name'].'</option>';
                                }
                            }
                            echo $str1;
                            ?>
                        </select></td>
                    <td align="right">政治面貌</td>
                    <td><select name="u_zzmm" id="u_zzmm">
                            <option value="">请选择</option>
                            <option value="0" >党员</option>
                            <option value="1">团员</option>
                            <option value="2">其他</option>
                        </select></td>
                    <td>户籍类型</td>
                    <td><select name="u_huji" id="u_huji">
                            <option value="">请选择</option>
                            <option value="0">城镇</option>
                            <option value="1">农村</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="edit_title">中考段考生号</td>
                    <td><input name="u_zk_num" type="text"    id="u_zk_num"  value="<?php echo $row['u_zk_num'] ?>"  size="10" maxlength="30" /></td>
                    <td align="right">初中毕业年月</td>
                    <td><input   id="u_czby_date" name="u_czby_date"  value="<?php  if ($row['u_czby_date']!='0000-00-00') echo $row['u_czby_date'] ?>"  placeholder="请输入日期" /></td>
                    <td>现就读学校</td>
                    <td><input name="u_at_school" type="text"   value="<?php echo $row['u_at_school'] ?>"  id="u_at_school" size="10" maxlength="30" /></td>
                </tr>
                <tr>
                    <td class="edit_title">中职专业</td>
                    <td><input name="u_vocational" type="text"   value="<?php echo $row['u_vocational'] ?>"   id="u_vocational" size="10" maxlength="30" /></td>
                    <td align="right">报考专业</td>
                    <td><input name="u_applyfor" type="text" value="<?php echo $row['u_applyfor'] ?>"   id="u_applyfor" size="10" maxlength="30" /></td>
                    <td>联系电话</td>
                    <td><input name="u_tel" type="text"  value="<?php echo $row['u_tel'] ?>"  id="u_tel" size="10" maxlength="30" /></td>
                </tr>
                <tr>
                    <td class="edit_title">通信地址</td>
                    <td><input name="u_address" type="text"  value="<?php echo $row['u_address'] ?>"  id="u_address" size="10" maxlength="30" /></td>
                    <td>收件人</td>
                    <td><input name="u_addressee2" type="text"    id="u_addressee2" value="<?php echo $row['u_addressee'] ?>" size="10" maxlength="30" /></td>
                    <td>邮政编码</td>
                    <td><input name="u_code" type="text"  value="<?php echo $row['u_code'] ?>"  id="u_code" size="10" maxlength="30" /></td>
                </tr>
                <tr>
                    <td class="edit_title">技能证书名称</td>
                    <td><input name="u_skills" type="text"  value="<?php echo $row['u_skills'] ?>"  id="u_skills" size="10" maxlength="30" /></td>
                    <td align="right">等级</td>
                    <td><input name="u_skills_grade" type="text"   value="<?php echo $row['u_skills_grade'] ?>" id="u_skills_grade" size="10" maxlength="30" /></td>
                    <td>学校编号</td>
                    <td><input name="u_school_id" type="text"   value="<?php echo $row['u_school_id'] ?>" id="u_school_id" size="10" maxlength="30" /></td>
                </tr>
                <tr>
                    <td class="edit_title">技能比赛名称</td>
                    <td><input name="u_match" type="text"  value="<?php echo $row['u_match'] ?>"  id="u_match" size="10" maxlength="30" /></td>
                    <td align="right">获奖等级</td>
                    <td><input name="u_match_grade" type="text"   value="<?php echo $row['u_match_grade'] ?>"  id="u_match_grade" size="10" maxlength="30" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="left" class="edit_title">个人简历</td>
                    <td colspan="5" align="left" class="edit_title">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" class="edit_title">起至时间</td>
                    <td colspan="2" align="right">在何地、何单位学习</td>
                    <td colspan="2">担任职务</td>
                </tr>
                <tr>
                    <td class="edit_title"><input name="u_resume1_date_star" type="text"
                                                  value="<?php if ($row['u_resume1_date_star']!='0000-00-00') echo $row['u_resume1_date_star'];  ?>"  id="u_resume1_date_star" size="20" maxlength="30" /></td>
                    <td><input name="u_resume1_date_end" type="text"    value="<?php if ($row['u_resume1_date_end']!='0000-00-00') echo $row['u_resume1_date_end'] ?>" id="u_resume1_date_end" size="20" maxlength="30" /></td>
                    <td colspan="2" align="right"><input name="u_resume1_content" type="text"  value="<?php echo $row['u_resume1_content'] ?>"  id="u_resume1_content" size="10" maxlength="30" /></td>
                    <td colspan="2"><input name="u_resume1_position" type="text"  value="<?php echo $row['u_resume1_position'] ?>"  id="u_resume1_position" size="10" maxlength="30" /></td>
                </tr>
                <tr>
                    <td class="edit_title"><input name="u_resume2_date_star" type="text"  value="<?php if ($row['u_resume2_date_star']!='0000-00-00') echo $row['u_resume2_date_star'] ?>"  id="u_resume2_date_star" size="10" maxlength="30" /></td>
                    <td><input name="u_resume2_date_end" type="text"  value="<?php  if ($row['u_resume2_date_end']!='0000-00-00') echo $row['u_resume2_date_end'] ?>"  id="u_resume2_date_end" size="10" maxlength="30" /></td>
                    <td colspan="2" align="right"><input name="u_resume2_content" type="text"  value="<?php echo $row['u_resume2_content'] ?>"  id="u_resume2_content" size="10" maxlength="30" /></td>
                    <td colspan="2"><input name="u_resume2_position" type="text"  value="<?php echo $row['u_resume2_position'] ?>"   id="u_resume2_position" size="10" maxlength="30" /></td>
                </tr>
                <tr>
                    <td class="edit_title"><input name="u_resume3_date_star"  type="text"  value="<?php if ($row['u_resume3_date_star']!='0000-00-00') echo $row['u_resume3_date_star'] ?>"  id="u_resume3_date_star" size="10" maxlength="30" /></td>
                    <td><input name="u_resume3_date_end" type="text"  id="u_resume3_date_end" size="10" value="<?php if ($row['u_resume3_date_end']!='0000-00-00')  echo $row['u_resume3_date_end'] ?>"  maxlength="30" /></td>
                    <td colspan="2" align="right"><input name="u_resume3_content" type="text"  value="<?php  echo $row['u_resume3_content'] ?>"  id="u_resume3_content" size="10" maxlength="30" /></td>
                    <td colspan="2"><input name="u_resume3_position" type="text"   value="<?php echo $row['u_resume3_position'] ?>" id="u_resume3_position" size="10" maxlength="30" /></td>
                </tr>
                <tr>
                    <td class="edit_title">主要家庭成员</td>
                    <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <td rowspan="4" class="edit_title">主要家<br />
                        庭成员</td>
                    <td>姓 名</td>
                    <td align="right">关 系</td>
                    <td align="right">单           位</td>
                    <td>职   务</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><input name="u_members1_name" type="text"  value="<?php echo $row['u_members1_name'] ?>"  id="u_members1_name" size="10" maxlength="30" /></td>
                    <td align="right"><input name="u_members1_relationship" type="text"  value="<?php echo $row['u_members1_relationship'] ?>"  id="u_members1_relationship" size="10" maxlength="30" /></td>
                    <td align="right"><input name="u_members1_work" type="text"   value="<?php echo $row['u_members1_work'] ?>" id="u_members1_work" size="10" maxlength="30" /></td>
                    <td><input name="u_members1_chief" type="text"   value="<?php echo $row['u_members1_chief'] ?>" id="u_members1_chief" size="10" maxlength="30" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><input name="u_members2_name" type="text"   value="<?php echo $row['u_members2_name'] ?>"  id="u_members2_name" size="10" maxlength="30" /></td>
                    <td align="right"><input name="u_members2_relationship" type="text"   value="<?php echo $row['u_members2_relationship'] ?>"  id="u_members2_relationship" size="10" maxlength="30" /></td>
                    <td align="right"><input name="u_members2_work" type="text"   value="<?php echo $row['u_members2_work'] ?>"  id="u_members2_work" size="10" maxlength="30" /></td>
                    <td><input name="u_members2_chief" type="text"   value="<?php echo $row['u_members2_chief'] ?>"  id="u_members2_chief" size="10" maxlength="30" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><input name="u_members3_name" type="text"  value="<?php echo $row['u_members3_name'] ?>"   id="u_members3_name" size="10" maxlength="30" /></td>
                    <td align="right"><input name="u_members3_relationship" type="text"    value="<?php echo $row['u_members3_relationship'] ?>" id="u_members3_relationship" size="10" maxlength="30" /></td>
                    <td align="right"><input name="u_members3_work" type="text"   value="<?php echo $row['u_members3_work'] ?>"  id="u_members3_work" size="10" maxlength="30" /></td>
                    <td><input name="u_members3_chief" type="text"   value="<?php echo $row['u_members3_chief'] ?>"  id="u_members3_chief" size="10" maxlength="30" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="edit_title">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="2" align="right">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="edit_title">注册时间：</td>
                    <td><?php echo $row['u_date'] ?></td>
                    <td align="right">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td height="30">&nbsp;</td>
                    <td><input name="button" type="button" value=" 返回 " class="button"  style="line-height:12px;"  onclick="history.back();" /></td>
                    <td><input name="button" type="submit" value=" 提交更改 " style="line-height:12px;" class="button"/></td>
                    <td colspan="3"> <a href="print.php?id=<?php echo $row['u_id'] ?>" target="_blank"  style="width:60px; height:22px; margin-left:50px; text-align:center; line-height:22px; float:left; display:block; background:#0CF">打印 </a></td>
                </tr>
            </table>
            <script type="text/javascript">document.form1.u_sex.value="<?php echo $row['u_sex']?>";</script>
            <script type="text/javascript">document.form1.u_minzu.value="<?php echo $row['u_minzu']?>";</script>
            <script type="text/javascript">document.form1.u_zzmm.value="<?php echo $row['u_zzmm']?>";</script>
            <script type="text/javascript">document.form1.u_huji.value="<?php echo $row['u_huji']?>";</script>


            <script>
                var u_czby_date = {
                    elem: '#u_czby_date',
                };
                var u_birth = {
                    elem: '#u_birth',
                };

                var u_resume1_date_star = {
                    elem: '#u_resume1_date_star',

                    choose: function(datas){
                        u_resume1_date_end.min = datas; //开始日选好后，重置结束日的最小日期
                        end.u_resume1_date_star = datas //将结束日的初始值设定为开始日
                    }
                };
                var u_resume1_date_end = {
                    elem: '#u_resume1_date_end',
                    choose: function(datas){
                        u_resume1_date_star.max = datas; //结束日选好后，重置开始日的最大日期
                    }
                };
                //-------------
                var u_resume2_date_star = {
                    elem: '#u_resume2_date_star',

                    choose: function(datas){
                        u_resume2_date_end.min = datas; //开始日选好后，重置结束日的最小日期
                        end.u_resume2_date_star = datas //将结束日的初始值设定为开始日
                    }
                };
                var u_resume2_date_end = {
                    elem: '#u_resume2_date_end',
                    choose: function(datas){
                        u_resume2_date_star.max = datas; //结束日选好后，重置开始日的最大日期
                    }
                };
                //-------------
                var u_resume3_date_star = {
                    elem: '#u_resume3_date_star',

                    choose: function(datas){
                        u_resume3_date_end.min = datas; //开始日选好后，重置结束日的最小日期
                        end.u_resume3_date_star = datas //将结束日的初始值设定为开始日
                    }
                };
                var u_resume3_date_end = {
                    elem: '#u_resume3_date_end',
                    choose: function(datas){
                        u_resume3_date_star.max = datas; //结束日选好后，重置开始日的最大日期
                    }
                };
                laydate(u_resume1_date_star);
                laydate(u_resume1_date_end);
                laydate(u_resume2_date_star);
                laydate(u_resume2_date_end);
                laydate(u_resume3_date_star);
                laydate(u_resume3_date_end);


                laydate(u_czby_date);
                laydate(u_birth);



            </script>
        </form>

    </div>
</div>
</body>
</html>
