<!doctype html>
<html>
<head>
<title>Pandit Deendayal UpadhyayGovernance Platform</title>
<meta charset="utf-8" />
<link href="css/bootstrap_new.min.css" rel="stylesheet" />
<link href="css/login_signup.css" rel="stylesheet" />
</head>
<body>
<img src="img/img1.jpg" class="img-responsive"/>
<div class="overlay">
      <div class="container-fluid">
            <div id="main_head">Pandit Deendayal UpadhyayGovernance Platform<hr width="200%" style="margin-top: -8px;"></div>
                        <div class="col-lg-5 col-md-7 col-sm-8 col-xs-12" style="float: right">
                        
                        <form id="form1" action="process.php" method="post" style="display: none;">
                        <h3>Login</h3>
                        <tr>
                        <td>UserId</td>
                        <td><input type="text" name="username" placeholder="User Name" class="form-control"></td>
		            </tr>
		      
                        <tr>
			      <td>Password</td>
		            <td><input type="password" name="password" class="form-control" placeholder="Password"></td>
			      </tr>
			
                        <tr>
			      <td>User Type</td>
		            <td><select class="form-control" name='s1'>
		            <option value="u1">Goverment Department</option>
                        <option value="u2">Citizens</option>
                        <option value="u3">NGO</option>
                        <option value="u4">Politicak Parties</option>
		            </td>
			      </tr>

		            <tr>
			      <td colspan=2><input type="submit"  class="btn btn-primary form-control"name="submit"></td>
		            </tr>
                        
                        <p id="opt">Don't have an account ??
                        <span id="sign_up"> Sign Up </span></p>                                  
                        </form>
							   
                        
                        <form id="form2" action="connection.php" method="post" style="display: none;">
                        <h3>Sign Up</h3>
                        <div class="form-group">
				<label for="first_name">First Name</label>
                        <input type="text" class="form-control"  name='firstname' style="float:left" placeholder="Enter Your First Name" required />
                        
                        <div class="form-group">
				<label for="last_name">Last Name</label>                                   
				<input type="text" class="form-control" name='lastname' style="float: right" placeholder="Enter Your Last Name" required />
                        </div>
                                    
                        <div class="form-group">
                        <label for="input_email">User Id / Email</label>
                        <input type="email" class="form-control" name='inputemail' placeholder="Enter your User Id or Email Address" required />
                        <div class="alert alert-danger" style="display:none;" id="error_email">
                        </div>
                        
                        <label for="input_pass">Password</label>
                        <input type="password" class="form-control" name='inputpass' placeholder="Enter your password" required />
                        <div class="alert alert-danger" style="display:none" id="error_pwd">
                        </div>
                        
                        <label for="input_pass">Re-enter Password</label>
                        <input type="password" class="form-control" id="re_input_pass" placeholder="Re-enter your password" required />
                        <div class="alert alert-danger" style="display:none;" id="error_pwd_copy"></div>
                        <label for="input_gender">Gender</label>     						
				<select class="form-control" name='gender' placeholder="Gender">
                        <option value="Male" name='male'>Male</option>
                        <option value="Female" name='female'>Female</option>
				</select>
				<label for="input_phnum">Phone Number</label> 
				<input type="text" class="form-control" name='phnum' placeholder="Phone Number">
                  	<label for="input_state">BhamashaID/Adhar ID</label>  
				<input type="text" class="form-control" name='state' placeholder="AdharID">
				<label for="input_city">User Type</label> 
				<select class="form-control" name='account_type' placeholder="Type">
                        <option value="NGO" name='client1'>NGO</option>
                        <option value="Citizens" name='client2'>Citizens</option>
                        <option value="Political Parties" name='client3'>Political Parties</option>
				</select>
				<button type="submit"  name='submit' value="submit" class="btn btn-primary form-control">Submit</button>
                        <p id="opt">Already have an account ??
                        <span id="sign_in"> Sign In</span></p>
                        </form>
                        </div>
                  </div>
             </div>
      </div>                     
</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script type="js/text/javascript" src="jquery.js"></script>
            <script type="js/text/javascript" src="bootstrap.min.js"></script>
            <script type="text/javascript">
                  $(document).ready(function(){
                        $('#main_head').fadeIn(1000);
                        $('#sub_head').fadeIn(1500);
                        $('#form1').fadeIn(2000);
                  });
                  $('#sign_up').click(function(){
                        $('#form1').hide(600);
                        $('#form2').fadeIn(1000);
                  });
                  $('#sign_in').click(function(){
                        $('#form2').hide();
                        $('#form1').fadeIn(1000);
                  });
            </script>
      </body>
</html>