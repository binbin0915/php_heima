<%@ Page Language="C#" AutoEventWireup="true" CodeFile="UserRegister.aspx.cs" Inherits="UserRegister" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
   < title>用户注册</title>
   <script type="text/javascript" src="js/registerjs.js"></script> < !-- 引入判断用户输入的js文件 -->
   < style type="text/css">
        body {margin:0px 0px 0px 0px;font-size:11pt;text-align:center;color:#003399;}
       .mytext{border:1px solid #6699cc;background-color:White;}       <!-- 改变输入框的背景颜色 -->
        .mytextclick{border:1px solid #6699cc;background-color:#D4EDFF;}
   < /style>
</head>

<body onload="getFocus()">  <!-- 加载页面时“用户名”输入框自动获取焦点 -->
   < form id="form1" runat="server">
   < div>
       < table width="1000px" cellpadding="0" cellspacing="0">
           < tr>
               < td>
                   < div id="reg1">
                       < table style="text-align: left; width: 650px;">
                           < tr>
                               < td colspan="3">用户注册</td>
                           < /tr>
                           < tr>
                               < td style="width:80px;">用户名：</td>
                               < td style="width:200px;"><asp:TextBox ID="txtuname" runat="server" Width="180px" Height="20px" CssClass="mytext" onfocus="this.className='mytextclick'" onblur="this.className='mytext';checkname()"MaxLength="30"></asp:TextBox></td>
                               < td style="width:370px;"><div id="uname">用户名只能是数字、字母、下划线组成！</div></td><!-- 获得焦点是改变输入框的背景颜色，失去焦点时还原为白色，同时判断用户输入是否正确 -->
                           < /tr>
                           < tr>
                               < td>密码：</td>
                               < td><asp:TextBox ID="txtuserpassword" runat="server" TextMode="Password" Width="180px" Height="20px" CssClass="mytext" onfocus="this.className='mytextclick'" onblur="this.className='mytext';checkuserpassword()"MaxLength="30"></asp:TextBox></td>
                               < td><div id="userpassword">密码至少应为六位!</div></td>
                           < /tr>
                           < tr>
                               < td>确认密码：</td>
                               < td><asp:TextBox ID="txtpwdagin" runat="server" TextMode="Password" Width="180px" Height="20px" CssClass="mytext" onfocus="this.className='mytextclick'" onblur="this.className='mytext';checkpwdagin()"></asp:TextBox></td>
                               < td><div id="pwdagin">应与以上的密码相同!</div></td>
                           < /tr>
                           < tr>
                               < td>电话：</td>
                               < td><asp:TextBox ID="txttelephone" runat="server" Width="180px" Height="20px" CssClass="mytext" onfocus="this.className='mytextclick'" onblur="this.className='mytext';checktelephone()"MaxLength="20"></asp:TextBox></td>
                               < td><div id="telephone">请输入11位数字！例：13595144582或08514785214</div></td>
                           < /tr>
                           < tr>
                               < td>E-Mail：</td>
                               < td><asp:TextBox ID="txtemail" runat="server" Width="180px" Height="20px" CssClass="mytext" onfocus="this.className='mytextclick'" onblur="this.className='mytext';checkemail()"MaxLength="45"></asp:TextBox></td>
                               < td><div id="email">E-mail应包括'@'和'.',且'@'应在'.'之前!</div></td>
                           < /tr>
                           < tr>
                               < td>QQ号码：</td>
                               < td><asp:TextBox ID="txtqq" runat="server" Width="180px" MaxLength="10" Height="20px" CssClass="mytext" onfocus="this.className='mytextclick'" onblur="this.className='mytext';checkqq()"></asp:TextBox></td>
                               < td><div id="divqq">请输入10位以内的数字！</div></td>
                           < /tr>
                           < tr>
                               < td colspan="3">
                                   < asp:CheckBox ID="ckbxcjkx" runat="server" onclick="checkcjkx();"/>我接受《<a href="ServiceClause.aspx" target="_blank" style="color:Blue;">服务条款</a>》<!-- 复选框的选中与否来控制按钮的可用与不可用 -->
                               < /td>
                           < /tr>
                           < tr>
                               < td colspan="3">
                                   < asp:Button ID="btnregister" CssClass="common_button" runat="server" Text="注册" OnClientClick="return checkall();"disabled="disabled" /><!-- 所有验证通过后才能提交表单 -->
                               < /td>
                           < /tr>
                       < /table>
                   < /div>
               < /td>
           < /tr>
       < /table>
   < /div>
   < /form>
</body>
</html>

//registerjs.js文件代码：

function getFocus()  //设置用户名文本框获取焦点
{
    document.getElementById("txtuname").focus();
}

function checkname() //检查用户名
{
    var myname=document.getElementById("txtuname").value;
    var myDivname=document.getElementById("uname");
    if(myname=="")
    {
        myDivname.innerHTML="<font color='red'>用户名不能为空!</font>";
        return false;
    }
    for(var i=0;i<myname.length;i++)
    {
        var text=myname.charAt(i);
        if(!(text<=9&&text>=0)&&!(text>='a'&&text<='z')&&!(text>='A'&&text<='Z')&&text!="_")
        {
         myDivname.innerHTML="<font color='red'>用户名只能是数字、字母、下划线组成！</font>";
         break;
        }
    }
    if(i>=myname.length)
    {
        myDivname.innerHTML="<font color='red'>√</font>";
        return true;
    }
}

function checkuserpassword()  //检查密码
{
 var mypassword=document.getElementById("txtuserpassword").value;
 var myDivpassword=document.getElementById("userpassword");
 if(mypassword=="")
 {
  myDivpassword.innerHTML="<font color='red'>密码不能为空!</font>";
  return false;
 }
 else if(mypassword.length<6)
 {
  myDivpassword.innerHTML="<font color='red'>密码至少应为六位!</font>";
  return false;
 }
 else
 {
  myDivpassword.innerHTML="<font color='red'>√</font>";
  return true;
 } 
}

function checkpwdagin()  //检查确认密码
{
 var myispassword=document.getElementById("txtpwdagin").value;
 var myDivispassword=document.getElementById("pwdagin");
 if(myispassword=="")
 {
     myDivispassword.innerHTML="<font color='red'>确认密码不能为空!</font>";
     return false;
 }
 else if(document.getElementById("txtuserpassword").value!=document.getElementById("txtpwdagin").value)
 {
  myDivispassword.innerHTML="<font color='red'>确认密码与密码不一致!</font>";
  return false;
 } 
 else
 {
  myDivispassword.innerHTML="<font color='red'>√</font>";
  return true;
 } 
}

function checktelephone() //检查电话号码
{
 var mytelephone=document.getElementById("txttelephone").value;
 var myDivtelephone=document.getElementById("telephone");
 if(mytelephone!="")
 {
     var reg = /^[0-9]{11}$/i;
     if(!reg.test(mytelephone))
        {
            myDivtelephone.innerHTML="<font color='red'>只能输入11位数字！例：13595144582或08514785214</font>";
            return false;
        }
     else
     {
      myDivtelephone.innerHTML="<font color='red'>√</font>";
      return true;
     }
 }
 else
 {
     myDivtelephone.innerHTML="<font color='red'>√</font>";
     return true;
 }
}

function checkemail()  //检查E-mail
{
 var myemail=document.getElementById("txtemail").value;
 var myDivemail=document.getElementById("email");
 if(myemail!="")
 {
     if(myemail.indexOf("@")==-1||myemail.indexOf(".")==-1||(myemail.indexOf("@")>myemail.indexOf(".")))
     {
      myDivemail.innerHTML="<font color='red'>E-mail格式不正确！例：jiie@163.com</font>";
      return false;
     } 
     else
     {
      myDivemail.innerHTML="<font color='red'>√</font>";
      return true;
     }
 }
 else
 {
     myDivemail.innerHTML="<font color='red'>√</font>";
     return true;
 }
}

function checkqq()  //检查QQ号码
{
 var myqq=document.getElementById("txtqq").value;
 var myDivqq=document.getElementById("divqq");
 if(myqq!="")
 {
     if(myqq.match(/\D/)!=null)
     {
      myDivqq.innerHTML="<font color='red'>QQ号码只能输入数字！</font>";
      return false;
     }
     else
     {
      myDivqq.innerHTML="<font color='red'>√</font>";
      return true;
     }
 }
 else
 {
     myDivqq.innerHTML="<font color='red'>√</font>";
     return true;
 }
}

function checkall()  //检查所有
{
    if(checkname()&&checkuserpassword()&&checkpwdagin()&&checktelephone()&&checkemail()&&checkqq())
    {
        return true;
    }
    return false;
}

//复选框的选中与否是按钮的状态
function checkcjkx()
{
    var a=document.form1.btnregister;
    if(a==null)
    {
        return
    }
    if(document.form1.ckbxcjkx!=null)
    {
        if(document.form1.ckbxcjkx.checked)
        {
            a.disabled=false;
            return
        }
        else
        {
            a.disabled=true;
            return
        }
    }
    else
    {
        a.disabled=true;
        return
    }
}