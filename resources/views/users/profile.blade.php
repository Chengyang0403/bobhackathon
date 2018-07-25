<style>
.info h2{
    
    font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
}
.midashi1 {
  margin-top:50px;
  margin-bottom:50px;
  position: relative;
  padding: 1em 4em 1em 1em;
  -webkit-background: linear-gradient(-155deg, rgba(0, 0, 0, 0) 1.5em, #f6f6f6 0%);
  background: linear-gradient(-155deg, rgba(0, 0, 0, 0) 1.5em, #f6f6f6 0%);
  border-radius: 6px;
  font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
}
.midashi::after {
  position: absolute;
  top: 0;
  right: 0;
  content: '';
  width: 1.65507em;
  height: 3.5493em;
  background: -webkit-linear-gradient(to left bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, .1) 0%, rgba(0, 0, 0, .2));
  background: linear-gradient(to left bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, .1) 0%, rgba(0, 0, 0, .2));
  border-bottom-left-radius: 6px;
  box-shadow: -.2em .2em .3em -.1em rgba(0, 0, 0, .15);
  -webkit-transform: translateY(-1.89424em) rotate(-40deg);
  transform: translateY(-1.89424em) rotate(-40deg);
  -webkit-transform-origin: bottom right;
  transform-origin: bottom right;
}

h3 {
               color: white;
            }
            h4 {
                color: white;
            }
            #shortevent {
                padding: 10px;
            }
            .shortevent {
              
              font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
              padding: 40px 70px 70px 70px;
              text-align: center;
              height: 400px;
                }
            .shortevent h3{
                color:white;
            }    
            .shortevent h4{
                color:white;
            }
            .shortevent h3{
                color:white;
            }
            #shortevent:hover{ 
                
              transform: scale(1.05);
              transition: 1.5s;
              box-shadow: 6px 6px 6px 8px gray;
                
            }
            #btn {
                display: inline-block;
                padding: 0.8em 1.3em;
                text-decoration: none;
                color: #FFF;
                border-bottom: solid 4px #627295;
                border-radius: 3px;
                font-size: larger;
                font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
            }
            #btn:active {
                -ms-transform: translateY(4px);
                -webkit-transform: translateY(4px);
                transform: translateY(4px);/*下に動く*/
                border-bottom: none;/*線を消す*/
                font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
            }
            .drink_btn {
                background: #3ecf7a;
            }
            .sports_btn {
                background-color: #f2c200;
            }
            .shopping_btn {
                background-color: #3498db;
            }
            .entertainment_btn {
                background-color: #ff4d52;
            }
            .hobby_btn {
                background-color: #a52faa;
            }
            .outdoor_btn {
                background-color: #808080;
            }
            .learning_btn {
                background-color: #f02475;
            }
            .social_btn {
                background-color: #1bc1a0;
            }
            .career_btn {
                background-color: #3ecf7a;
            }
  
 .profilemoji{
     font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
     
     
 }
 /*.img{*/
 /*   border: 10px solid transparent;*/
 /*   margin-bottom: 25px;*/
 /*   width: 80%;*/
 /*   height:50%;*/
 /*   opacity: 0.9;*/
 /*   transition: 1.5s;*/
 /*   filter: grayscale(0%);*/
 /*}*/
  .carousel-inner img {
      
      width: 100%;
      height: 40px;
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }

  .carousel-inner img {
      
      width: 100%;
      height: 40px;
      margin: auto;
  }
  .midashi{
              padding: .5em;
              border: 3px solid #7ED1E6;
              border-radius: 5em .7em 2em .7em/.7em 2em .7em 3em;
              font-family: 'Josefin Sans', sans-serif;
               margin-bottom: 20px;
               margin-top: 40px;
              font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
          }
#editbtn{
    margin: 47px 0px 0px 0px;
    padding: 0px;
}
.namae{
    font-size: 89;
     font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
}

</style>

@extends('layouts.app')

<div id="myCarousel"class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="{{ secure_asset('header4.jpg') }}"length = 50 , width = 100>
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
</div>

@section('content')
   @if (Auth::check())
   
 <div class = "midashi1">
  <center><h3>Personal Page</h3></center>
 </div>
    <div class="row" style="width:100%;">
     <div class="col-sm-3">
      <div class ="img">
      @if ($user->image_data)　　　　　　　
                    <img src="data:{{$user->mime_type }};base64, {!!$user->image_data!!}">

                @else
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="avater">

                @endif    
      <br>
    
  
    
    {!! Form::open(['url' => '/upload', 'method' => 'post', 'files' => true]) !!}
    
    {{--成功時のメッセージ--}}
    @if (session('success'))
        {!! Form::open(['route' => 'posts.store', 'files' => 'true']) !!}
        <!--@include('users.profile', ['title' => null, 'submitButton' => 'Add post'])-->
        {!! Form::close() !!}
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    {{-- エラーメッセージ --}}
    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif
    
    @if (Auth::id() == $user->id)
    
    <div class="form-group">
       
        {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
        {!! Form::file('file') !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!}
    </div>
    @endif
    {!! Form::close() !!}
    
  
    </div>
     </div>
     <div class="col-sm-offset-1 col-sm-5">
         <div class = "info">
             <div class="namae">{{ $user->username}}</div>
             <h2><i class="fa fa-venus-mars">:{{ $user->gender }}</i></h2>
             <h2 class="col-sm-8"><span class="glyphicon glyphicon-book">:</span>{{ $user->intro }}</p></h2>
         </div>
     </div>
     <div id="editbtn" class="col-sm-offset-1 col-sm-2">
      @if (Auth::id() == $user->id)
    
     <a href="{{ URL::route('users.edit', ['username' => $user->id]) }}" class="cp_btn" > Edit My Profile </a>
      @endif
     </div>
    </div>
    
    <div class="midashi"> 
        <center><h3>My Host</h3></center>
        </div>
        <div class="row">
            @foreach($events as $event)
            @if ($event->genre === 'Drink&Food')
            <div class="col-md-4" id="shortevent">
                <div style="background:#ff4d52;">
                    <div class="shortevent">
                         <h3 style="background-color:#ff4d52">{{ $event->event_name }}</h3><br>
                         <h4>{{ $event->genre }}</h4>
                         <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="drink_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
             @elseif ($event->genre === 'Sports&Fitness')
            <div class="col-md-4" id="shortevent">
                <div style="background:#3498db;">
                    <div class="shortevent">
                         <h3 style="background-color:#3498db">{{ $event->event_name }}</h3><br>
                         <h4>{{ $event->genre }}</h4>
                         <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="sports_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif ($event->genre === 'Entertainment')
            <div class="col-md-4" id="shortevent">
                <div style="background:#a52faa;">
                    <div class="shortevent">
                         <h3 style="background-color:#a52faa">{{ $event->event_name }}</h3><br>
                         <h4>{{ $event->genre }}</h4>
                         <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="entertainment_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
             @elseif ($event->genre === 'Learning')
            <div class="col-md-4" id="shortevent">
                <div style="background:#5321a7;">
                    <div class="shortevent">
                         <h3 style="background-color:#5321a7">{{ $event->event_name }}</h3><br>
                         <h4>{{ $event->genre }}</h4>
                         <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="learning_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif ($event->genre === 'Hobby')
            <div class="col-md-4" id="shortevent">
                <div style="background:#f2c200;">
                    <div class="shortevent">
                         <h3 style="background-color:#f2c200">{{ $event->event_name }}</h3><br>
                         <h4>{{ $event->genre }}</h4>
                         <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="hobby_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif ($event->genre === 'Outdoor')
            <div class="col-md-4" id="shortevent">
                <div style="background:#1bc1a0;">
                    <div class="shortevent">
                         <h3 style="background-color:#1bc1a0">{{ $event->event_name }}</h3><br>
                         <h4>{{ $event->genre }}</h4>
                         <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="outdoor_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif ($event->genre === 'Social')
            <div class="col-md-4" id="shortevent">
                <div style="background:#3ecf7a;">
                    <div class="shortevent">
                         <h3 style="background-color:#3ecf7a">{{ $event->event_name }}</h3><br>
                         <h4>{{ $event->genre }}</h4>
                         <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="social_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif ($event->genre === 'Shopping')
            <div class="col-md-4" id="shortevent">
                <div style="background:#f02475;">
                    <div class="shortevent">
                         <h3 style="background-color:#f02475">{{ $event->event_name }}</h3><br>
                         <h4>{{ $event->genre }}</h4>
                         <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="shopping_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @else ($event->genre === 'Career')
            <div class="col-md-4" id="shortevent">
                <div style="background:#808080;">
                    <div class="shortevent">
                         <h3 style="background-color:#808080">{{ $event->event_name }}</h3><br>
                         <h4>{{ $event->genre }}</h4>
                         <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="career_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @endif
            @endforeach
        {!! $events->render() !!}</div>
        
    <div class="midashi"> 
        <center><h3>My Join</h3></center>
        </div>
        <div class="row">
            @foreach($joinnings as $joinning)
            @if ($joinning->genre === 'Drink&Food')
            
             <div class="col-md-4" id="shortevent">
                <div style="background:#ff4d52;">
                    <div class="shortevent">
                         <h3 style="background-color:#ff4d52">{{ $joinning->event_name }}</h3><br>
                         <h4>{{ $joinning->genre }}</h4>
                         <h3>{{ $joinning->date }}</h3><h3>{{ $joinning->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $joinning->id]) }}" class="drink_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
             @elseif ($joinning->genre === 'Sports&Fitness')
            <div class="col-md-4" id="shortevent">
                <div style="background:#3498db;">
                    <div class="shortevent">
                         <h3 style="background-color:#3498db">{{ $joinning->event_name }}</h3><br>
                         <h4>{{ $joinning->genre }}</h4>
                         <h3>{{ $joinning->date }}</h3><h3>{{ $joinning->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $joinning->id]) }}" class="sports_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif ($joinning->genre === 'Entertainment')
            <div class="col-md-4" id="shortevent">
                <div style="background:#a52faa;">
                    <div class="shortevent">
                         <h3 style="background-color:#a52faa">{{ $joinning->event_name }}</h3><br>
                         <h4>{{ $joinning->genre }}</h4>
                         <h3>{{ $joinning->date }}</h3><h3>{{ $joinning->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $joinning->id]) }}" class="entertainment_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
             @elseif ($joinning->genre === 'Learning')
            <div class="col-md-4" id="shortevent">
                <div style="background:#5321a7;">
                    <div class="shortevent">
                         <h3 style="background-color:#5321a7">{{ $joinning->event_name }}</h3><br>
                         <h4>{{ $joinning->genre }}</h4>
                         <h3>{{ $joinning->date }}</h3><h3>{{ $joinning->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $joinning->id]) }}" class="learning_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif ($joinning->genre === 'Hobby')
            <div class="col-md-4" id="shortevent">
                <div style="background:#f2c200;">
                    <div class="shortevent">
                         <h3 style="background-color:#f2c200">{{ $joinning->event_name }}</h3><br>
                         <h4>{{ $joinning->genre }}</h4>
                         <h3>{{ $joinning->date }}</h3><h3>{{ $joinning->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $joinning->id]) }}" class="hobby_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif ($joinning->genre === 'Outdoor')
            <div class="col-md-4" id="shortevent">
                <div style="background:#1bc1a0;">
                    <div class="shortevent">
                         <h3 style="background-color:#1bc1a0">{{ $joinning->event_name }}</h3><br>
                         <h4>{{ $joinning->genre }}</h4>
                         <h3>{{ $joinning->date }}</h3><h3>{{ $joinning->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $joinning->id]) }}" class="outdoor_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif ($joinning->genre === 'Social')
            <div class="col-md-4" id="shortevent">
                <div style="background:#3ecf7a;">
                    <div class="shortevent">
                         <h3 style="background-color:#3ecf7a">{{ $joinning->event_name }}</h3><br>
                         <h4>{{ $joinning->genre }}</h4>
                         <h3>{{ $joinning->date }}</h3><h3>{{ $joinning->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $joinning->id]) }}" class="social_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif ($joinning->genre === 'Shopping')
            <div class="col-md-4" id="shortevent">
                <div style="background:#f02475;">
                    <div class="shortevent">
                         <h3 style="background-color:#f02475">{{ $joinning->event_name }}</h3><br>
                         <h4>{{ $joinning->genre }}</h4>
                         <h3>{{ $joinning->date }}</h3><h3>{{ $joinning->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $joinning->id]) }}" class="shopping_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
            @elseif($joinning->genre === 'Career')
            <div class="col-md-4" id="shortevent">
                <div style="background:#808080;">
                    <div class="shortevent">
                         <h3 style="background-color:#808080">{{ $joinning->event_name }}</h3><br>
                         <h4>{{ $joinning->genre }}</h4>
                         <h3>{{ $joinning->date }}</h3><h3>{{ $joinning->time }}</h3><br>
                         <a href="{{ URL::route('events.show', ['event_name' => $joinning->id]) }}" class="career_btn" id="btn"> Detail </a>
                    </div>
                </div>
             </div>
         {!! $events->render() !!}</div>
            @endif     
            @endforeach
        </div>
      
    @endif  
@endsection
