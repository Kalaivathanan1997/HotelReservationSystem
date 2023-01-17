   <!--modal style 1 start -->
	<!-- login modal 1 -->
	<div id="loginModal1" class="modal-style-1 dark modal ">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header p-0 mb-3 mt-3">				
					<h4 class="modal-title">login</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<!-- dont forget to add action and action method  -->
					<!-- <form action="#" method="POST"> -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon "><i class="fa fa-envelope"></i></span>
								<input type="email" class="form-control test" name="email" id="email" placeholder="Enter email address" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control test" id="pass" name="pass" placeholder="Enter password" required="required" autocomplete="on">
							</div>
						</div>
						<div class="row pl-1 pr-1">
                            <div class="col text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                    <span class="custom-control-label">&nbsp;Remember Me</span>
                                </label>
                            </div>
                            <div class="col text-right hint-text pt-0">
                                <a  href="#forgot-password" data-dismiss="modal" data-toggle="modal" class="text-danger">Forgot Password?</a>
                            </div>
                        </div>
						<div class="form-group text-center">
							<button type="submit" id="login" name="login " class="btn btn-primary btn-signin">login</button>
							
						</div>
						<p class="hint-text mt-3">or login with</p>
						<!-- social login area -->
						<div class="social-login text-center">
							<a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
							<a class=" btn-google  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
							<a class=" btn-twitter  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
						</div>
				
                        <!-- </form> -->
                    </div>
				<div class="text-center mb-3">Don't have an account? <a class="register" href="#registerModal1" data-dismiss="modal" data-toggle="modal">Register</a></div>
			</div>
		</div>
	</div>  

	<!-- register modal 1 -->
	<div id="registerModal1" class="modal-style-1 dark modal ">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header p-0 mb-3 mt-3">				
					<h4 class="modal-title">Register</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<!-- dont forget to add action and action method  -->
					
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control test  " name="c_name" id="c_name" placeholder="Enter your name" required="required">
                                @error('c_name')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="text" class="form-control test " name="address" id="address" placeholder="Enter Address" required="required">
                                @error('address')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="date" class="form-control test " name="birth" id="birth" required="required" >
                                @error('birth')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
							</div>
						</div>
                        <div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="tel" class="form-control test " name="phone" id="phone" placeholder="Enter Phone Number" required="required"  >
                                @error('phone')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
							</div>
						</div>
                        <div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="text" class="form-control test " name="national" id="national" placeholder="Type Your  Nationality" required="required" >
                                @error('national')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
							</div>
						</div>
                        <div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="text" class="form-control test " name="nic" id="nic" placeholder="NIC No / Passport No" required="required" >
                                @error('nic')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
							</div>
						</div>
                        <div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <select name="gender" id="gender" class=" test form-control @error('gender') is-invalid @enderror" required="" >
                                            <option value=""  selected disabled hidden>-- Selecte Gender--</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Shemale">Shemale</option>
                                        </select>
                                @error('gender')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>
                                <select name="stutas" id="stutas" class="test form-control @error('stutas') is-invalid @enderror" required="">
                                                <option value=""  selected disabled hidden>-- Selecte Stutas --</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorce">Divorce</option>
                                            </select>
                                @error('stutas')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
							</div>
						</div>
                        <div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="email" class="form-control test " name="email"  id="email" placeholder="Enter Email" required="required" >
                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
							</div>
						</div>
                        <div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control test " name="pass" id="pass" placeholder="Enter password" required="required"  >
                                @error('pass')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                @enderror
							</div>
						</div>
                        <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
						<div class="form-group text-center">
							<button type="submit" id="butsave"   class="btn btn-primary btn-signin butsave">Register</button>
							
						</div>
						<p class="hint-text mt-3">or register with</p>
						<!-- social login area -->
						<div class="social-login text-center">
							<a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
							<a class=" btn-google  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
							<a class=" btn-twitter  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
						</div>
					
                      
                    </div>

				<div class="text-center mb-3">Already have an account? <a class="login" href="#loginModal1" data-dismiss="modal" data-toggle="modal">Login</a></div>
			</div>
		</div>
	</div> 
<!--modal style 1 end -->
   
   
   
   <div class="bot1-wrapper">
        <div class="container">
            <div class="bot1 clearfix">
                <div class="logo2_wrapper">
                    <a href="index.html" class="logo2">
                        <img src="{{ asset('customers/images/logo2.png')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="social2-wrapper">
                    <ul class="social2">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <p>
                    <i>The customer is very important, the customer will be followed by the customer. Two stories, sometimes from the valley, <br>I just don't want to put it on the bed, but I hate the result. </i>
                </p>
            </div>
        </div>
    </div>
    <div class="bot2-wrapper">
        <div class="container">
            <div class="bot2 clearfix">
                <div class="row">
                    <div class="col-md-4">
                        <div class="bot2-title">Contact Info</div>
                        <div class="contact1">
                            <b>A:</b> 101  2nd Cross Street, 11, Colombo, sl 43000
                        </div>
                        <div class="contact1">
                            <b>P:</b> (+94) 011-222-2101
                        </div>
                        <div class="contact1">
                            <b>F:</b> (00) 987 654 321
                        </div>
                        <div class="contact1">
                            <b>E:</b> <a href="#">info@hotelreservation.com</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- <div class="bot2-title">recent posts</div> -->
                        <!-- <div class="recent-post clearfix">
                            <a href="#">
                                <figure><img src="{{ asset('customers/images/recent01.jpg')}}" alt="" class="img-fluid"></figure>
                                <div class="caption">
                                    <div class="txt1">New Aqua Park <br>Near The Hotel Delvatore</div>
                                    <div class="txt2">11 March, 2021</div>
                                </div>
                            </a>
                        </div> -->
                        <!-- <div class="recent-post clearfix">
                            <a href="#">
                                <figure><img src="{{ asset('customers/images/recent02.jpg')}}" alt="" class="img-fluid"></figure>
                                <div class="caption">
                                    <div class="txt1">Botanic Garden <br>Near The Hotel Delvatore</div>
                                    <div class="txt2">23 March, 2021</div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <div class="col-md-4">
                        <div class="bot2-title">BEST PLACES DELVATORE</div>
                        <ul class="best1 clearfix">
                            <li><a href="#"><img src="{{ asset('customers/images/best01.jpg')}}" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="{{ asset('customers/images/best02.jpg')}}" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="{{ asset('customers/images/best03.jpg')}}" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="{{ asset('customers/images/best04.jpg')}}" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="{{ asset('customers/images/best05.jpg')}}" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="{{ asset('customers/images/best06.jpg')}}" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="{{ asset('customers/images/best07.jpg')}}" alt="" class="img-fluid"></a></li>
                            <li><a href="#"><img src="{{ asset('customers/images/best08.jpg')}}" alt="" class="img-fluid"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="bot3-wrapper">
        <div class="container">
            <div class="bot3 clearfix">
                <ul class="menu-bot">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

                <div class="copyrights">Copyright @2022 Made with <i class="fa fa-heart" aria-hidden="true"></i> By <a href="#">BEng Students</a>. All Rights Reserve
                </div>

            </div>
        </div>
    </div>

    <div id="loader" class="loader-holder">
        <div class="block"><img src="{{ asset('customers/images/hearts.svg')}}" width="100" alt="loader"></div>
    </div>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<script>


$(document).ready(function() {
$.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


   $(".butsave").click(function(e){
    var  c_name   =$('#c_name').val();
          var  address  =$('#address').val();
          var  birth    =$('#birth').val();
          var  phone    =$('#phone').val();
          var  national =$('#national').val();
          var  nic      =$('#nic').val();
          var  gender   =$('#gender').val();
          var  stutas   =$('#stutas').val();
          var  email    =$('#email').val();
          var  pass     =$('#pass').val();

          $.ajax({
          type:'POST',
          url:"{{ route('ajaxRequest.post') }}",
          data: {
                c_name  : c_name,
                address :  address ,
                birth   :  birth   ,
                phone   :  phone   ,
                national:  national,
                nic     :  nic     ,
                gender  :  gender  ,
                stutas  :  stutas  ,
                email   :  email   ,
                pass    :   pass   

              },
          success:function(data){
             alert(data.success);
             $('.test').val("");
             $("#registerModal1").modal('hide');
             $("#loginModal1").modal('show');
          }
       });


   });
});




// var  c_name   =$("input[name=c_name]").val();
        //   var  address  = $("input[name=address]").val();
        //   var  birth    = $("input[name=birth]").val();
        //   var  phone    = $("input[name=phone]").val();
        //   var  national = $("input[name=national]").val();
        //   var  nic      = $("input[name=nic]").val();
        //   var  gender   = $("input[name=gender]").val();
        //   var  stutas   = $("input[name=stutas]").val();
        //   var  email    = $("input[name=email]").val();
        //   var  pass     = $("input[name=pass]")val();

    //   if(phone!="" && email!="" && pass!="" && national!=""){
        /*  $("#butsave").attr("disabled", "disabled"); */
        //   $.ajax({
        //       url: "{{ route('ajaxRequest.post') }}",
        //       type: "POST",
            //   data: {
            //     _token : $("#csrf").val(),
            //     c_name  : c_name,
            //     address :  address ,
            //     birth   :  birth   ,
            //     phone   :  phone   ,
            //     national:  national,
            //     nic     :  nic     ,
            //     gender  :  gender  ,
            //     stutas  :  stutas  ,
            //     email   :  email   ,
            //     pass    :   pass   

            //   },
        //       cache: false,
        //       success:function(data){
        //       alert(data.success);
            //   success: function(dataResult){
            //       console.log(dataResult);
            //       var dataResult = JSON.parse(dataResult);
            //       if(dataResult.statusCode==200){
            //         alert("Success occured !");				
            //       }
            //       else if(dataResult.statusCode==201){
            //          alert("Error occured !");
            //       }
                  
            //   }
    //       });
    //   }
    //   else{
    //       alert('Please fill all the field !');
    //   }
  
    // });

    


</script>

<script>
 $(document).ready(function() {

    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            

document.getElementById("login").onclick = function() {  
                Login() ;
                }; 
document.getElementById("logout").onclick = function() {  
                Logout() ;
                }; 

        function Logout (){
        $.ajax({
            type:'POST',
            url:"{{ route('customerLogout.post') }}",
            data: { },
                success:function(data){
                    sessionStorage.setItem('CustomerName',data.CustomerName) ;
                    sessionStorage.setItem('CustomerId',data.CustomerId) ;
                    
                    if(sessionStorage.getItem('CustomerName') == 'CustomerName')
                        {
                            sessionStorage.removeItem("CustomerName");
                            sessionStorage.removeItem("CustomerId");
                            alert('Customer Logout Success ');
                            location.reload();

                            
                        }
                }
                
            });
            

        };




  function Login (){

    var  email    =$('#email').val();
    var  pass     =$('#pass').val();

    // alert(email);

    $.ajax({
          type:'POST',
          url:"{{ route('customerLogin.post') }}",
          data: {
                email   :  email,
                pass    :   pass   

              },
              success:function(data){
                sessionStorage.setItem('CustomerName',data.CustomerName) ;
                sessionStorage.setItem('CustomerId',data.CustomerId) ;
                
                if(sessionStorage.getItem('CustomerName') == 'CustomerName')
                    {
                        // sessionStorage.removeItem("CustomerName");
                        // sessionStorage.removeItem("CustomerId");
                        alert('User Name Or PassWord Wrong Please Try Again');
                        $('.test').val("");

                        
                    }else
                    {
                        alert(sessionStorage.getItem('CustomerName') +" "+ sessionStorage.getItem('CustomerId') + "  Customer Login Success");
                        
                        location.reload();
                    }
             
              }
             
    });
    
};

 });






</script> 


</body>
</html>