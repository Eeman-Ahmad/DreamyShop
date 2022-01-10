<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebForm1.aspx.cs" Inherits="Login_Form.WebForm1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title> Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>
     

        .wrapper1
        {
            height:100vh !important;
            display:flex;
            align-items:center;
            flex-direction:column;
            justify-content:center;
            width:100% !important;
            padding:20px;
            background-color:#f5f5f5 !important;
            background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFw4Fnol583xAWLMuWNOXngn1qayF5AAnGuA&usqp=CAU)  ;background-size:cover; background-repeat:no-repeat;
                
            
        }

        .logincontainer
        {
            border-radius:0px;
            background-color:#fff;
            width:90%; 
            max-width:450px;
            position:relative;
            padding:20px;
            border:1px white solid ;
            box-shadow:0 15px 10px -10px #acacac;
        }

    </style>

</head>
<body>
    <form id="form1" runat="server">
     
            
           
        <div class="wrapper1">
      
            <div class="logincontainer">

                <h3>
                    <img src="Content/login.png" width="50px" height="50px" />  Login
                </h3>

                <hr />

                <asp:TextBox runat="server" ID="txtUserId" placeholder="Enter Email"  TextMode="Email"  CssClass="form-control"/>
                <br />

                <asp:TextBox runat="server" ID="txtPassword" placeholder="Enter Password"  TextMode="Password" 
                    CssClass="form-control"/>
                <br />

                <asp:Button runat="server" ID="login" CssClass="btn btn-info form-control" Text="Login" OnClick="login_Click"
           />
                <br />
                
            </div>

        </div>
           
    </form>
</body>
</html>