<style>



.cp_btn {
display: block;
position: relative;
width: 160px;
padding: 0.8em;
text-align: center;
text-decoration: none;
color: #fff;
border:1px solid #eb8d4d;
background: #eb8d4d;
overflow: hidden;
z-index: 1 !important;
}
.cp_btn:after {
content:"";
position: absolute;
top: 50%;
left: 50%;
height: 0;
width: 100%;
background : #fff;
opacity: 0;
transform: translateX(-50%) translateY(-50%) rotate(45deg);
transition: 0.3s;
z-index: -1;
}
.cp_btn:hover {
color: #da3c41;
}
.cp_btn:hover:after {
height: 250%;
opacity: 1;
}
.cp_btn:active:after {
height: 350%;
opacity: 1;
}

 .modal-header {
      background-color: #eb8d4d;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header h4, .close {
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }

.nav-tabs li a {
      color: #777;
  }
  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.7;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #e14646 !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  
   .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
</style>



@if (Auth::check())
        <?php $user = Auth::user(); ?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">BoBの森</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li>{!! link_to_route('events.index', 'HOME') !!} </li>
        <li><a href="#aruaru">ABOUT</a></li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">ユーザー：{{$user->username}}さん
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>{!! link_to_route('events.create', '新規イベントの投稿') !!}</li>
            
            <li>{!! link_to_route('users.profile','My profile',['user_name' => $user->id])!!}</li>
            <li>{!! link_to_route('logout.get', 'Logout')!!}</li>
           </ul>
        
        <li><a href="#contact">Team BoB</a></li>
    </div>
  </div>
</nav>
@else
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">BoBの森</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li>{!! link_to_route('events.index', 'HOME') !!} </li>
        <li><a href="#aruaru">ABOUT</a></li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a data-toggle="modal" data-target="#signup">SignUp</a></li>
             <li><a data-toggle="modal" data-target="#login">Login</a></li>
           </ul>
        
        <li><a href="#contact">Team BoB</a></li>
    </div>
  </div>
</nav>

<div class="modal fade" id="signup" role="dialog">　
    <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Sign Up</h4>
        </div>
        <div class="modal-body">
          {!! Form::open(['route' => 'signup.post']) !!}
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span> Please enter your Nickname</label>
              <input  class="form-control" name="username" type="text" value= "{{old('username')}}" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-piggy-bank"></span> Please enter your gender</label>
               <input  class="form-control" name="gender" type="text" value= "{{old('gender')}}" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Please enter your intro</label>
              <textarea  class="form-control" name="intro" type="textarea" value= "{{old('intro')}}" autocomplete="off"></textarea>
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Please enter your password</label>
              <input  class="form-control" name="password" type="text" " autocomplete="off">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-user"></span> Please comfire your password </label>
              <input  class="form-control" name="password_confirmation" type="text" " autocomplete="off">
            </div>
              <center><button type = "sumbit" class="cp_btn">Signup
          
        </button></center> 
          
              
          {!! Form::close() !!}
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          {!! Form::open(['route' => 'login.post']) !!}
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-piggy-bank"></span> Please enter your Nickname</label>
               <input  class="form-control" name="username" type="text" value= "{{old('username')}}" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Please enter your password</label>
              <input  class="form-control" name="password" type="text" value= "{{old('password')}}" autocomplete="off">
            </div>
              
        <center><button type = "sumbit" class="cp_btn">Login
          
        </button></center>  
        {!! Form::close() !!}
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          
        </div>
      </div>
    </div>
  </div>
</div>

@endif