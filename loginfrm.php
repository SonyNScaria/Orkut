 <!doctype html>
<html lang="en-US">
<head>
   <meta charset="utf-8">
    <title> Aby Designs </title>
   

    <style type="text/css">
        
body {
font-family:  helvetica, arial;
font-size: 100%;
line-height: 1.5;
margin:0;
padding:0;
-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;
-webkit-font-smoothing: antialiased;
}
.form_1 {
width: 320px;
height:250px;
margin: 60px auto;
font-family: 'Anaheim', sans-serif;
background-color: #fff; 
background-image:-webkit-linear-gradient(left, transparent 9%,  rgb(144,228,63) 9%,  rgb(144,227,63)  10%, transparent 10.2%),
-webkit-linear-gradient(-90deg, transparent 22px, rgba(124,191,43, .14)  22px, rgba(144,211,63, .6)  23px, transparent 23px);
background-image:-moz-linear-gradient(left, transparent 9%,  rgb(144,228,63) 9%,  rgb(144,227,63)  10.3%, transparent 10%),
-moz-linear-gradient(-90deg, transparent 21px, rgba(124,201,43, .14)  22px, rgba(144,231,63, .63)  23px, transparent 21px);
background-image:-ms-linear-gradient(left, transparent 9%,  rgb(144,228,63) 9%,  rgb(144,227,63)  10.3%, transparent 10%),
-ms-linear-gradient(-90deg, transparent 21px, rgba(124,201,43, .1)  22px, rgba(144,231,63, .9)  23px, transparent 21px);
background-size: 100% 1.62em;
border-radius: 0 4px 4px 0;
color: rgb(125,126,125);
position:relative;
border: 1px solid rgba(170,170,175, .25);
box-shadow: 1px 1px 2px rgba(159,209,108, .4), inset 0 0 12px 1px rgba(180,223,88, .2);

}

.form_1 .field_wrap{
margin: 18px 30px;
padding: 6px 15px 6px;
}
.form_1 .field_wrap label {
display: block;
width: 35%;
float:left;
line-height: 1.5;
vertical-align: middle;
text-shadow: 0 1px 1px rgba(194,196, 198, .2);
}

.form_1 .field_wrap  input {
width: 140px;
font-size: 14px;
outline:none;
border:none;
background: transparent;
}

.form_1 .submit_form input{
-webkit-appearance: button;
position:absolute;
right:0px;
outline: none;
width: 25%;
padding: 4px;
margin-top: 10px;
background: -webkit-linear-gradient(top, rgb(144,214,58) 0%,rgb(144,211,63) 24%,rgb(115,195,23) 80%,rgb(108,188,10) 100%); 
background: -moz-linear-gradient(top, rgb(144,214,58) 0%,rgb(144,211,63) 24%,rgb(115,195,23) 80%,rgb(108,188,10) 100%); 
background: -ms-linear-gradient(top, rgb(144,214,58) 0%,rgb(144,211,63) 24%,rgb(115,195,23) 80%,rgb(108,188,10) 100%); 
color:rgb(252, 253, 252);
text-shadow: 0 1px 1px rgba(57,130,53, .4);
border: none;
border-radius: 4px;
box-shadow: 0 1px 1px rgba(86,123,25, .8);
}
.form_1 .submit_form input:active {
-webkit-transform:translate(0, 1px);
-moz-transform:translate(0, 1px);
-ms-transform:translate(0, 1px);
background: -webkit-linear-gradient(top, rgb(102, 180, 12) 0%, rgb(138, 198, 28) 26%, rgb(122, 200, 63) 80%, rgb(148, 218, 56) 100%);
background: -moz-linear-gradient(top, rgb(102, 180, 12) 0%, rgb(138, 198, 28) 26%, rgb(122, 200, 63) 80%, rgb(148, 218, 56) 100%);
background: -ms-linear-gradient(top, rgb(102, 180, 12) 0%, rgb(138, 198, 28) 26%, rgb(122, 200, 63) 80%, rgb(148, 218, 56) 100%);
box-shadow: 0 1px rgba(90, 148, 30, .5);
}


@font-face
{
@font-face {
  font-family: 'Anaheim';
  font-style: normal;
  font-weight: 400;
  src: local('Anaheim'), local('Anaheim-Regular'), url(css login frmcollections\greenpaper\f.woff) format('woff');
}
}
#h4
{
position:relative;
left:120px;
}
#acc
{
position:relative;
left:110px;
width:120px;
}
    </style>


</head>

<body>

<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
<form method="post" action="loginprocess.php" class="form_1">
<h4 id="h4">SHELL</h4>
   <div class="field_wrap">
     <label>Username:</label>
     <input type="text" placeholder=" " name="t1">
     <label>Password:</label>
     <input type="password" placeholder=" " name="t2">
   </div>  
   <div class="submit_form">
   
   <input type="submit" name="submit" value="Create account" id="acc">
    <input type="submit" name="submit" value="Sign In">
   </div>
  </form>
</body>
</html>
