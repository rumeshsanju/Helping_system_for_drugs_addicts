<?php
  
   
   $con = mysqli_connect("localhost","root","");
   
   if(!$con)
   {
	   die('could not connect: '.mysqli_error($con));
   }
   
   mysqli_select_db($con,"my_patient");
   
   if(isset($_POST["un1"]))
    {
	   $user="$_POST[un1]";
	   
	   
	   $query=mysqli_query($con,"SELECT * FROM patient WHERE username='$user'");
	   
	   if(mysqli_num_rows($query)>0)
	   {   
		   echo "<script>alert('username alredy exists!')</script>";
	   }   
      else
      {	
     
        $sql="INSERT INTO patient(fname,lname,phone,email,username,password)VALUES('$_POST[fn]','$_POST[ln]','$_POST[pn]','$_POST[em]','$_POST[un1]','$_POST[pw1]')";
      
	  
        if (!mysqli_query($con, $sql))
        {
         die('Error: ' . mysqli_error($con));
        }
		else
           echo "<script>alert('Registration Success!')</script>";  
	  }
	}
     mysqli_close($con);	

?>

<html>
   <head>
       <title>Registration</title>
	   <link rel="icon" type="image/x-icon" href="logo.png">
	   <script>
	     function validateForm(f) {
         
		  
		    
           if (f.fn.value == ""||f.fn.value == ""||f.ln.value == ""||f.pn.value == ""||f.em.value == ""||f.pw1.value ==""||f.pw2.value == ""||f.un1.value==""||f.un2.value=="") {
              alert("Please Fill all required Informations");
              return false;
            }
		   if(f.pw1.value.length<8)
		    {
		     alert("Your password consist with at least 8 Characters");
			 return false;
		    }
			else if(f.pw1.value!=f.pw2.value)
			 {
		       alert("Please confirm password correctlly");
			   return false;
		    }
			
			 if(f.un1.value.length<4)
		    {
		     alert("Your username consist with at least 4 Characters");
			 return false;
		    }
			else if(f.un1.value!=f.un2.value)
			{
			  alert("Please confirm username correctlly");
			   return false;
			}
			 var phoneno=/^\d{10}$/;
			if(!f.pn.value.match(phoneno))
			{
			  alert("phone number can consist with only 10 digits  does not allow other chracters");
			  return false;
			}
			
			var email= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(!f.em.value.match(email))
			{
			  alert("Email is not correct format");
			  return false;
			}
			return true;
          }
       </script>
       <style type="text/css">
	      body
		  {
		   width:100hw;
	       height:100%;
		  }
	      ul
		  {
		    list-style-type:none;
			margin:0;
			padding:0;
			
		  }
		  
		  li
		  {
		   float:right;
		  }
		  
		  a.nav:link, a.nav:visited
		  {
		   display:block;
		   width:95px;
		   font-weight:blod;
		   color:white;
		   text-decoration:none;
		   text-align:center;
		   padding:4px;
		   font-size:18px;
		    border:#008ecc solid 4px;
		  }
		  a.nav:hover, a.nav:active
		  {
		    background-color:#299617;
			border-radius:15px;
			 border:#008ecc solid 4px;
		  }
		  
		  #nav1
		  {
		    border:#299617 solid 4px;
			border-radius:15px;
		  }
		  .header
		  {
		    background-color:#008ecc;
			height:15%;
		
		  }
		  #lg
		  {
		   position:relative;
		   top:-59px;
		  }
		  #t1
		  {
		   position:relative;
		   left:-80px;
		   color:white;
		  
		  }
		  

		  
		  .mid
		  {
		   
		    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("home.jpg");
	        background-position:center;
	        background-size:cover;
	        background-attachment:fixed;
		    height:81%;
			
		  }
		  .footer
		  {
		    height:auto%;
			width:110%;
			background-color:#008ecc;
			
			
		  }
		  
		   .f1
		   {
		     border-radius:60%;
			 border:#299617 solid 2px;
		   }
		  
		   .tdf1
		   {
		    
		    color:white;
		   }
		   
		   .tdf2
		   {
		   position:relative;
		   left:54%;
		   width:80px;
		   }
		   
		   .imf
		   {
		     text-decoration:none;
			 color:white;
		   }
		 
		   .imf:hover
		   {
		    color:black;
		   }
		  
		   
		   
		   .d1
		   {
		      background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("home.jpg");
	          background-position:center;
	          background-size:cover;
	          background-attachment:fixed;
			   padding:30px;
			  width:100%;
		   }
		   
		   .d2
		   {
		     padding:30px;
			 border-radius:50px;
			 border:#008ecc ridge 5px;
			 background-position:center;
	         background-size:cover;
	         background-attachment:fixed;
		     background-image:url("b1.jpg");
			 width:60%;
			
		   }
		   
		  input,.tp
		   {
		    font-size:18px;
		   }
		
		   
		   h3
		   {
		     font-size:24px;
			 font-family: "Lucida Handwriting";
		   }
		  
		   input
		   {
		     border-radius:10px;
		   }
		   
		   input:hover 
		   {
		      background-position:center;
	          background-size:cover;
	          background-attachment:fixed;
		      background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("b2.jpg");
		      color:white;
	       }
		   
		   .btn2
		   {
		     position:relative;
			 left:80%;
			  padding: 4px;
			
			 background-color: #008ecc;
			 border-radius: 25px;
			 font-weight: bold;
			 width: 100px;
			 color:white;
			 font-size:20px
		   }
		   
		   .tp:hover
		   {
		     font-size:140%;
		   }  
		   
		   #al
		   {
		     background-position:center;
	          background-size:cover;
	          background-attachment:fixed;
		      background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("b2.jpg");
		      color:white;
		   }
		       .d2:hover
		   {
		      background-position:center;
	          background-size:cover;
	          background-attachment:fixed;
		      background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("b2.jpg");
		      color:white;
		      border:#008ecc ridge 15px;
		     transform:translateY(-20px);
		   }
		   .tc
		   {
		     color:blue;
		   }
		</style>
		
		
   </head>
   <body>
      <div Class="header">
	        <img  src="logo.png" width="7%" height="100%" align="left">
			<h1 id="t1" align="center">Care From Drugs</h1>
			<img id="lg"  src="logo.png" width="7%" height="100%" align="right">
	       <ul>
              <li><a class="nav" id="nav6"  href="details.html">Appoinment</a><li>	   
			  <li><a class="nav" id="nav1"  href="registration.html">Registration</a><li>
			  <li><a class="nav" id="nav7"  href="adictivity.html">Adictivity</a><li>
		      <li><a class="nav" id="nav2" href="treate.html">Treatements</a></li>
		      <li><a class="nav" id="nav3" href="motivation.html">Motivations</a></li>
		      <li><a class="nav" id="nav4" href="drugs.html">Drugs</a></li>
		      <li><a class="nav" id="nav5" href="home.html">Home</a></li>
		   </ul>
	  </div>
	         
	  
	  <div class="d1">
	     <center>
	        <div class="d2">
			     <form name="myForm" action="insert.php" method="post"  onsubmit="return validateForm(myForm)" >
					    <h3 class="pi">Patient Information</h3>
					 <table cellspacing="40px" class="tp">
					     <tr>
						    <td class="tc">First Name:<br><input type="text" name="fn"  size="30px" placeholder="type here">
						    <td class="tc">Last Name:<br><input type="text" name="ln" size="30px" placeholder="type here">
		
						 </tr>
						 <tr>
						    <td class="tc">Email:<br><input type="text" name="em"   placeholder="Someone@gmail.com">
							<td class="tc">phone Number:<br><input type="text" name="pn" size="30px" placeholder="0XXXXXXXX">
						 </tr>
						
					 </table>
		
					  <h3>Create Username and Password:</h3>					  
				      <table cellspacing="40px" class="tp">
					      <tr>
						    <td class="tc">Enter username:<br><input type="Password" name="un1" size="30px" placeholder="type here">
						    <td class="tc">Confirme username:<br><input type="password" name="un2" size="30px" placeholder="type here">
						 </tr>
					     <tr>
						    <td class="tc">Enter password:<br><input type="Password" name="pw1" size="30px" placeholder="type here">
						    <td class="tc">Confirme password:<br><input type="password" name="pw2" size="30px" placeholder="type here">
						 </tr>
						 <tr>
						    <td><input type="submit" name="submit" value="Submit" class="btn2">
						    <input type="reset" name="reset" value="Reset" class="btn2"></td>
						 </tr>
				  </table>
				</form> 
              			
			</div>
	    </center>		
	  </div>
	   <div class="footer">
	       <table class="tf1" cellspacing="5px">
			   <tr>
			    <td><img class="f1" src="f4.png" width="36px" height="36px"></td>
				<td class="tdf1">Telephone: 0112 9999498<br>
                    Fax: 0094 512 621 482
                </td>
				<td><img class="f1" src="f5.png" width="36px" height="36px"></td>
				<td class="tdf1">info@drugs.com</td>
				<td class="tdfe"></td>
				<td class="tdf2"><a class="imf" href="about.html">About Us</a></td>
	    	
		     </tr>
		</table>
	   
	 </div>
   </body>
</html>