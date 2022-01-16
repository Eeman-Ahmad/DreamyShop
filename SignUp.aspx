<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="SignUp.aspx.cs" Inherits="SignUp.SignUp" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml"lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #578f8f;
  padding: 30px;
}
.container{
  position: relative;
  max-width: 850px;
  width: 150%;
  background: #fff;
  padding: 40px 30px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  perspective: 2700px;
}
.container .cover{
  position: absolute;
  top: 0;
  left: 50%;
  height: 100%;
  width: 50%;
  z-index: 98;
  transition: all 1s ease;
  transform-origin: left;
  transform-style: preserve-3d;
}
.container #flip:checked ~ .cover{
  transform: rotateY(-180deg);
}
 .container .cover .front,
 .container .cover .back{
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}

.cover .back{
  transform: rotateY(180deg);
  backface-visibility: hidden;
}



.container .cover::before,
.container .cover::after{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: #7d2ae8;
  opacity: 0.5;
  z-index: 12;
}
.container .cover::after{
  opacity: 0.3;
  transform: rotateY(180deg);
  backface-visibility: hidden;
}
.container .cover img{
  position: absolute;
  height: 100%;
  width: 100%;
  object-fit: cover;
  z-index: 10;
}
.container .cover .text{
  position: absolute;
  z-index: 130;
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.cover .text .text-1,
.cover .text .text-2{
  font-size: 26px;
  font-weight: 600;
  color:white;
  text-align: center;
}
.cover .text .text-2{
  font-size: 15px;
  font-weight: 500;
}
.back .text .text-1,
.back .text .text-2{
    color: white;

}

.back .text .text-2 {
    font-size: 18px;
}

.container .forms{
  height: 100%;
  width: 100%;
  background: #fff;
}
.container .form-content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.form-content .login-form,
.form-content .signup-form{
  width: calc(100% / 2 - 25px);
}
.forms .form-content .title{
  position: relative;
  font-size: 24px;
  font-weight: 500;
  color: #333;
            top: 0px;
            left: 0px;
        }
.forms .form-content .title:before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 25px;
  background: #7d2ae8;
}
.forms .signup-form  .title:before{
  width: 20px;
}
.forms .form-content .input-boxes{
  margin-top: 30px;
}
.forms .form-content .input-box{
  display: flex;
  align-items: center;
  height: 50px;
  width: 100%;
  margin: 10px 0;
  position: relative;
}
.form-content .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  padding: 0 30px;
  font-size: 16px;
  font-weight: 500;
  border-bottom: 2px solid rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}
.form-content .input-box input:focus,
.form-content .input-box input:valid{
  border-color: #7d2ae8;
}
.form-content .input-box i{
  position: absolute;
  color: #7d2ae8;
  font-size: 17px;
}
.forms .form-content .text{
  font-size: 14px;
  font-weight: 500;
  color: #333;
}
.forms .form-content .text a{
  text-decoration: none;
}
.forms .form-content .text a:hover{
  text-decoration: underline;
}
.forms .form-content .button{
  color: #fff;
  margin-top: 40px;
}
.forms .form-content .button input{
  color: #fff;
  background: #7d2ae8;
  border-radius: 6px;
  padding: 0;
  cursor: pointer;
  transition: all 0.4s ease;
}
.forms .form-content .button input:hover{
  background: #5b13b9;
}
.forms .form-content label{
  color: #5b13b9;
  cursor: pointer;
}
.forms .form-content label:hover{
  text-decoration: underline;
}
.forms .form-content .login-text,
.forms .form-content .sign-up-text{
  text-align: center;
  margin-top: 25px;
}
.container #flip{
  display: none;
}
@media (max-width: 730px) {
  .container .cover{
    display: none;
  }
  .form-content .login-form,
  .form-content .signup-form{
    width: 100%;
  }
  .form-content .signup-form{
    display: none;
  }
  .container #flip:checked ~ .forms .signup-form{
    display: block;
  }
  .container #flip:checked ~ .forms .login-form{
    display: none;
  }
}

    </style>
</head>
<body>
    <form id="form1" runat="server">
 <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9__lA2SNMA1Z_j_T-AIoWQ5xzvh9C4b88lg&usqp=CAU" alt="" >
        <div class="text">
          <span class="text-1">Welcome Back!</span>
          <span class="text-2">To keep connected with us please<br />  login with your personal info</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="data:image/jpeg;base64,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" alt="">
        <div class="text">
          <span class="text-1">Glad to see you!</span>
            <br />
          <span class="text-2">Enter your personal details <br />and start your journey with us.</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope">
                    <asp:Label runat="server" AssociatedControlID="txt_mail">&nbsp  &nbsp Enter your Email</asp:Label>
                   <asp:TextBox runat="server" ID="txt_mail" TextMode="Email" Required="true"></asp:TextBox>
                </i>
                  </div>
              <div class="input-box">
                <i class="fas fa-lock">
                <asp:Label runat="server" AssociatedControlID="pswd">&nbsp  &nbsp Enter your Password</asp:Label>
               <asp:TextBox runat="server" ID="pswd" TextMode="Password" Required="true"></asp:TextBox>
                    </i>
       
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
              <asp:Button runat="server" ID="btn_login" Text="Login" OnClick="btn_login_Click"/>
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">SignUp now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Sign Up</div>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"> 
                 
                  <asp:Label runat="server" AssociatedControlID="txt_fname" >&nbsp  &nbsp  Enter your First Name</asp:Label>
                   <asp:TextBox runat="server" ID="txt_fname" Required="true"></asp:TextBox>
                    </i>
                    </div>

                <div class="input-box">
                  <i class="fas fa-user"> 
                 <asp:Label runat="server" AssociatedControlID="txt_lname" >&nbsp  &nbsp Enter your Last Name</asp:Label>
                    <asp:TextBox runat="server" ID="txt_lname" Required="true"></asp:TextBox>
                    </i>
                    </div>
               
              <div class="input-box">
                <i class="fas fa-envelope">
                           <asp:Label runat="server" AssociatedControlID="txt_email">&nbsp  &nbsp Enter your Email </asp:Label>
                        <asp:TextBox runat="server" ID="txt_email" TextMode="Email" Required="true"></asp:TextBox>
                    </i>
                    </div>
              <div class="input-box">
                <i class="fas fa-lock">
                    <asp:Label runat="server" AssociatedControlID="pwd">&nbsp  &nbsp  Enter your Password</asp:Label>
                   <asp:TextBox runat="server" ID="pwd"  TextMode="Password"  Required="true"></asp:TextBox>
                    </i>
                    </div>
                <div class="input-box">
                    <i class="fas fa-lock">
                         <asp:Label runat="server" AssociatedControlID="cpwd"> &nbsp  &nbsp Confirm Password</asp:Label>
                        <asp:TextBox runat="server" ID="cpwd"  TextMode="Password"  Required="true"></asp:TextBox>
                        </i>
                    </div>
                <div>
                        <asp:CompareValidator runat="server" ControlToCompare="pwd" ControlToValidate="cpwd" ErrorMessage="Password did not match" ForeColor="red"></asp:CompareValidator>
                        </div>
              <div class="button input-box">
                 <asp:Button runat="server" ID="btn_create" Text="Submit"/>
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">LogIn now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  
        </form>
</body>
</html>