<? php
  include('login.php');
  include('signup.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8ss">
<link rel="website icon" type="https://www.bing.com/images/blob?bcid=SxXznqde6IQFfMohwkQF9bdQh4yA......A" />
    <title>Unifin</title>
    <style>

#SS{
  text-decoration: none;
  color:ghostwhite;
}
#GFG{
  text-decoration:none;
  color:ghostwhite;
}
#GF{
  text-decoration: none;
  color:teal;
}
header {
        background-color: cadetblue;
        color: paleturquoise;
        display: flex;
        justify-content: center;
        padding-bottom: px;
       height: 18vh;
}
td {
justify-contents:center;
  padding-top:px;
  padding-bottom:200px;
  padding-left: 200px;
  padding-right: 200px;
}

      #welcome-section {
        font-color:blue;
        text-align: center;
        width: 100%;
justify-content: flex-end;
position : absolute;
      }
      #img-section{
top:0;
height=90px;
}

      #degree-section {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10vh;
      }

      select {
        height: 30px;
        margin: 10px;
        padding: 0 10px;
        width: 200px;
      }

footer {
  background-color: cadetblue;
  color: paleturquoise;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10vh;
}

body {
  font-family: sans-serif;
  height: 100vh;
  background-repeat:no-repeat;
  background-size:1500px 1500px;
}

      footer a {
        color: cadetblue;
        margin-right: 50px;
        text-decoration: none;
      }

    </style>
  </head>

  <header >
  <table>
    <tr>
      <td>
        <img id="ss" src="https://lh3.googleusercontent.com/WamI0i5Y4b9ev7fH9Js3sdML9CG3pBTT7HYLEfWc6pv8iASs_Qld-QT0UFustykYFwjA8M9kXaAteGhDihK43pPQSHJkMzavMsV4JMna" height="100px" width="100px">
      </td>
    <td>
      <h1><font face="verdana" size="8">Unifin</font></h1></td>
      <td>
      <ul class="menu">
        <li><a href="about.html" id="SS">About</a></li><br>
        <li><a href="developer.html"id="SS">Developers</a></li><br>
        <li><a href="contactus.html"id="SS">Contact Us</a></li><br>
    </td>
    </tr>
    </table>
    </header>
<body background="data:image/jpeg;base64,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">
<br>
<br>
<img src = "https://lh3.googleusercontent.com/joJNy_bxxGNrnIwN_KjUY3x4zmc-Zyj2dwyEOnPqFv1s60-yszXRa7SOrYf-agZUDxprEqUoE5YT4_wPZMwqXOVzdy8dAVwS6Y8Qgg7v" align="left" width="400px" height="300px">
<i><h1 ><p align = "right" style="font-family:'Dancing-Script'">Want to compare universities around the world? </p></h1>

<p style="font-family:'sans-serif' size:30px" align="right" >Seeking international study options to match your own interests and resources?<br> 
<br>Make life easier for yourself with our new University Finder tool – a searchable database of universities <br>
<br>worldwide, with options to customize results based on your own preferences.
This new university search platform <br>includes details of many universities around the world. Information provided includes data on university <br>
<br>rankings, available courses, fees, institution size, location and more.</p><br>
<img src = "https://lh3.googleusercontent.com/RGSUPbxp1q9hSmK8RyALlGuAg-Tvti11wlPPYoIDGqiiM-piAO2MJPFiQe3i9USsZ5mKwqfOoWEC8TZkV_weYKQTjfsZVeeL2geS2-8" align="right" width="400px" height="300px">
<br><i><h1><p align = "left" style="font-family:'Dancing-Script'">How does the University Finder work?</p></h1>
<p style="font-family:'sans-serif' size:30px" align="left" >
To get started, visit the <b>Unifin</b> landing page. <br>From here, you can either search for information about a specific university, or create your own personalized <br>university search, to identify institutions that match your requirements.<br><br>Once you have your set of results, you can then click on each institution <br>profile to access more information and compare universities on a range of criteria.</p>
<br><br>
<img src = "https://lh3.googleusercontent.com/ya4XMQjTi-1Q1XXyDsODPVPyDhMA2ug7z8JcEdeWZpLaoCzZeHnsLvMTt1MnyA9vXAbZuQggFJWXOG_s4HFJ0m_1LWbEvW4BBRGLtK2Z" align="left" width="400px" height="300px">
<br>
<br>
    
<h3><p align="center"> Select The Best Universities From The Following Degrees </h3></p>
<a id="GF" href ="bca.html"><h4><p align="center">Bachelor's in Computer Application</h4></a></p>
<a id="GF" href ="bcom.html"><h4><p align="center">Bachelor's in Commerce</h4></a></p>
<a id="GF" href ="bba.html"><h4><p align="center">Bachelor's in Business Administration</h4></a></p>
<a id="GF" href ="BA.html"><h4><p align="center">Bachelor's in Arts</h4></a></p>
<a id="GF" href ="prj_mba.html"><h4><p align="center">Master's in Business Administration</h4></a></p>
<img src = "https://lh3.googleusercontent.com/R2QNu0hmlJtHqiKH9yHrY-bioyVkiENe6WyqQZTPq4Nm_hfnErWjt0UjLOoMUuEv7q5E2twQEf52nhW01eaPGUnp5ajYISZ9__YNaBk" align="right" width="400px" height="300px">
<br><i><h1><p align = "center" style="font-family:'Dancing-Script'">Why Unifin ?</p></h1>

   
      
      <p style="font-family:'sans-serif' size:30px" align="left" >Our platform is designed to provide accurate and up-to-date information about universities and colleges,<br> including program offerings, admission requirements, tuition fees, and student life, among others.<br><br> By doing so, we aim to equip students with the knowledge and tools they need to make informed decisions about their education and future.<br>

<br>
We believe that higher education is not just a means to an end but also a<br> transformative experience that can shape an individual's personal and professional growth.</p>
<br>
<br>
<br><br>

<footer>
<p align="left"> All rights are reserved by Unifin. For further queries, Contact : <a href= "https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfqchZRcSRBzXQThjDxBrBCpnpjmDfHSclLSGrCzFwdBvdjbpFkQNPRfHnnXkNKFrgvSgq" id="GFG"> Unifin & Team. </a>
    </footer>
  </body>
</html>
