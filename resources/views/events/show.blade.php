<style>

 .cp_btn3 {
  display: block;
  position: relative;
  width: 160px;
  padding: 0.8em;
  text-align: center;
  text-decoration: none;
  color: #fff;
  border:1px solid #ff1493;
  background: #ff1493;
  overflow: hidden;
  z-index: 1 !important;
  margin: 0px;
  }
  .cp_btn3:after {
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
  .cp_btn3:hover {
  color: #da3c41;
  }
  .cp_btn3:hover:after {
  height: 250%;
  opacity: 1;
  }
  .cp_btn3:active:after {
  height: 350%;
  opacity: 1;
  }
.cp_iptxt {
font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
position: relative;
width: 80%;
margin: 0 auto;
}
.cp_iptxt input[type='text'] {
    
font: 15px/24px sans-serif;
font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
box-sizing: border-box;
width: 100%;
letter-spacing: 1px;
padding-left: 6em;
}
.cp_iptxt input[type='text']:focus {
outline: none;
}
.ef {
padding: 4px 0;

border-bottom: 1px solid #1b2538;
margin-top: 20px;
}
.ef ~ .focus_line {
position: absolute;
bottom: 0;
left: 0;
width: 0;
height: 2px;
transition: 0.5s;
background-color: #da3c41;
}
.ef:focus ~ .focus_line,
.cp_iptxt.ef ~ .focus_line {
width: 100%;
transition: 0.5s;
}
.ef ~ label {
position: absolute;
z-index: -1;
top: 4px;
left: 0;
width: 100%;
transition: 0.4s;
letter-spacing: 0.5px;
color: #aaaaaa;
}
.ef:focus ~ label, .cp_iptxt.ef ~ label {
font-size: 12px;
top: -16px;
transition: 0.4s;
color: #da3c41;
}
          
html {
 font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
 
}

body {
  font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
  padding-top: 0px;
  
}
           
.item_active img {
  width: 100%;
}
      
.content {
  text-align: center;
}
          
.content img {
  margin-top: 20px;
}

.event_content {
  background-color: #fafad2;
  font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
  color: #ff1493;
  
  width: 100%;
}

.btn_area {
  text-align: center;
}

.join_btn {
  display: inline-block;
  font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
  padding: 15px 45px;
  text-decoration: none;
  color: #FFF;
  border-bottom: solid 4px #627295;
  border-radius: 3px;
  font-size: 35px;
  background: #f2c200;
}

placeholder{
    font-size:40;
}
h1 {
  text-align: center;
  font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
}
h3 {
    text-align: center;
    font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
}
          
table, th, td {
  border: 1px solid #ff1493;
  margin: 0 auto;
  text-align:center;
  margin-top: 50px;
  margin-bottom: 50px;
  font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
}

td {
  font-size: larger;
  color: #ff1493;
}
th {
    color: #ff1493;
    text-align: center;
}

.chat-face span {
    font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
  width: 90px;
  height: 90px;
}

.chat-box {
    width: 100%;
    font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
    height: auto;
    overflow: hidden; /*floatの解除*/
    margin-bottom: 20px;
}

.chat-face {
    float: left;
    margin-right: -120px;
}

.chat-face img{
    border-radius: 30px;
    border: 1px solid #ccc;
    box-shadow: 0 0 4px #ddd;
}

.chat-area {
    width: 100%;
    float: right;
    font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
    background-color: #fafad2;;
    ;
    padding-left: 120px;
    
}

.chat-hukidashi {
    display: inline-block; /*コメントの文字数に合わせて可変*/
    padding: 15px 20px;
    margin-left: 30px;
    margin-top: 8px;
    /* border: 1px solid gray; ←削除 */
    border-radius: 10px;
    position: relative; /*追記*/
    background-color: #D9F0FF; /*追記*/
    font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
}

/* ↓追記↓ */
.chat-hukidashi:after {
    content: "";
    position: absolute;
    top: 50%; left: -10px;
    margin-top: -10px;
    display: block;
    width: 0px;
    height: 0px;
    border-style: solid;
    border-width: 10px 10px 10px 0;
    border-color: transparent #D9F0FF transparent transparent;
    font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
}

.someone {
    background-color: #BCF5A9;
}

.someone:after {
    border-color: transparent #BCF5A9 transparent transparent;
    font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
}  
.joinners li {
    font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
  display: inline-block;
  position: relative;
  list-style-type: none!important;/*ポチ消す*/
  padding: 0.5em 0.5em 0.5em 0.5em;
  margin-bottom: 5px;
  line-height: 1.5;
  background: #dbebf8;
  vertical-align: middle;
  color: #505050;
  border-radius: 15px 15px 15px 15px;/*左側の角丸く*/
  width: 10em;
}

.joinners li:before{ /*疑似要素*/
font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
  display:inline-block; 
  vertical-align: middle;
  /*以下白丸つくる*/
  content:'';
  width:1em;
  height: 1em;
  background: #fff;
  border-radius: 50%;
  margin-right: 8px;
}　


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
              
              font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
               margin-bottom: -20px;
               margin-top:60px;
       
   }
          .comment1{
              text-align:left;
          }
  .row {
      margin-top: -15px;
  }
  .chat-area2{
      margin-top: -20px;
  }
  
</style>

@extends('layouts.app1')
<div id ="myCarousel" class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="{{ secure_asset('header4.jpg') }}"length = 50 , width = 100>
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
</div>

@section('content')
<html>
    <body>
    @if (Auth::check()) 

    <div class="event_content text-center">
          <h1 class="col-sm-12">EVENT INFO</h1>
           @if (Auth::id() == $event->user->id)
        <!--<div class="col-sm-offset-8 col-sm-1">-->
            <a href="{{ URL::route('events.edit', ['id' => $event->id ]) }}" class="cp_btn3 col-sm-offset-7 col-sm-2" > Edit </a>
        <!--</div>-->
        <!--<div class="col-sm-offset-1 col-sm-1">-->
        {!! Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
         <button type="submit"class="cp_btn3 col-sm-2" style="margin-left:5px;">Delete</button>
        {!! Form::close() !!}
        <!--</div>-->
       @endif
       
       <div class="row">
          <table class="col-sm-offset-1 col-sm-10">
            <tr>
                <th><h3>Event</h3></th>
                <td><h2>{{ $event->event_name }}</h2></td>
             </tr>
            <tr>
                <th><h3>Comment</h3></th>
                <td>{{$event->comment}}</td> 
             </tr>
             <tr>
                <th><h3>Genre</h3></th>
                 <td>{{ $event->genre }}</td>
              </tr>
            </tr>
            <tr>
                <th><h3>Host</h3></th>
                <td>{!! link_to_route('users.profile', $event->user->username, ['username' => $event->user->id]) !!}</td>
            </tr>
            <tr>
              <th><h3>Place</h3></th>
              <td> {{$event->place}} </td>
            </tr>
            <tr>
              <th><h3>Date</h3></th>
              <td>{{$event->date}}</td>
            </tr>
            <tr>
              <th><h3>Time</h3></th>
              <td>{{$event->time}}</td>
            </tr>
            <tr>
              <th><h3>Capacity</h3></th>
              <td>{{$event->capacity}}人</td>
            </tr>
            <tr>
              <th><h3>Due Date</h3></tj>
               <td>{{$event->due}}</td>
            </tr>
            <tr>
                <th><h3>Remaining Seats</h3></th>
                <td><?php echo ($event->capacity - $count_joinning);?>人</td>
            </tr>
         </table>
        
        </div>
        <center>@include('button.join_button', ['event' => $event])</center>
            
        <h1>JOINNERS' LIST</h1>
        @foreach($joinners as $joinner)
        <span class="joinners">
            <li>{!! link_to_route('users.profile', $joinner->username, ['username' => $joinner->id]) !!}</li>
        </span>
        @endforeach
    <div class="comment1">
    <div class="midashi">
        <h1>COMMENT</h1>
    </div>
        <div class="bulletin">
        {!! Form::open(['route' => 'bulletins.store']) !!}
                <div class="cp_iptxt">
                 <input type="text" class="ef" name="bulletin" autocomplete="off" >
                 
                 {!! Form::hidden('event_id', $event->id) !!}
                 {!! Form::hidden('user_id', Auth::id()) !!}
                 
                 <center><button type = "sumbit" class="cp_btn3">Post</button></center>
                </div>
            
        {!! Form::close() !!}
        </div>
       @foreach($bulletins as $bulletin)
       <div class="chat-area2">
        <div class="chat-area">
                {{ $bulletin->user->username}}
                <div class="chat-hukidashi">
                    <p>{{ $bulletin->bulletin }}</p>
                </div>
                @if (Auth::id() == $bulletin->user_id)
                
                    {!! Form::open(['route' => ['bulletins.destroy', $bulletin->id], 'method' => 'delete']) !!}
                        <button class="btn"><i class="glyphicon glyphicon-remove"></i></button>
                    {!! Form::close() !!}
                @endif
            </div>
            </div>
                
        
        @endforeach
        {!! $bulletins->render() !!}
        
    </div>
  </div>
     

    
  
   


   @endif
   
  
  
    
    
@endsection