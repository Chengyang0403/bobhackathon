<style>

/* header */
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
  
  /* header*/
  
  
.col-sm-4{
    
    margin-bottom: 100px;
    
}
#band{
    background-color: white;
}
.title{
    margin-top: 30px;
    margin-bottom: 30px;
}

 body {
      font: 400 20px/1.8 Lato, sans-serif;
      color: black;
    }
   


  

  
  
  
  h3 {
      margin: 10px 0 30px 0;
      letter-spacing: 15px;      
      font-size: 50px;
      color: #111;
  }
  
   h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  
  .person {
      border: 10px solid transparent;
      margin-bottom: 79px;
      width: 67%;
      height: 24%;
      opacity: 0.7;
  }
  .person1 {
      border: 10px solid transparent;
      margin-bottom: 65px;
      width: 70%;
      height: 25%;
      opacity: 0.7;
  }
  .person2 {
      border: 10px solid transparent;
      margin-bottom: 50px;
      width: 80%;
      height: 27%;
      opacity: 0.7;}

/*p1 {
-ms-writing-mode: tb-rl;
writing-mode: vertical-rl;
column-count:1;
height:250px;
color:pink;
} */



          .midashi{
              padding: .5em;
              border: 3px solid #7ED1E6;
              border-radius: 5em .7em 2em .7em/.7em 2em .7em 3em;
              font-family: 'Josefin Sans', sans-serif;
               margin-bottom: 56px;
          }

            h3 {
               color: white;
            }
            h4 {
                color: white;
            }
            #shortevent {
                padding: 5px;
            }
            .shortevent {
              
            font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
              padding: 40px 10px 10px 10px;
              text-align: center;
              height: 400px;
                }
                
            .shortevent h1{
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
              box-shadow: 16px 16px 16px 16px gray;
                
            }
            #btn {
                display: inline-block;
                padding: 0.8em 1.3em;
                text-decoration: none;
                color: #FFF;
                border-bottom: solid 4px #627295;
                border-radius: 3px;
                font-size: larger;
                
            }
            #btn:active {
                -ms-transform: translateY(4px);
                -webkit-transform: translateY(4px);
                transform: translateY(4px);/*下に動く*/
                border-bottom: none;/*線を消す*/
            }
            .drink_btn, a.social {
                background: #3ecf7a;
            }
            .sports_btn, a.hobby {
                background-color: #f2c200;
            }
            .shopping_btn, a.sports {
                background-color: #3498db;
            }
            .entertainment_btn, a.drink {
                background-color: #ff4d52;
            }
            .hobby_btn, a.entertainment {
                background-color: #a52faa;
            }
            .outdoor_btn, a.career {
                background-color: #808080;
            }
            .learning_btn, a.shopping {
                background-color: #f02475;
            }
            .social_btn, a.outdoor {
                background-color: #1bc1a0;
            }
            .career_btn, a.learning {
                background-color: #5321a7;
            }
            .nav-tabs a {
                color: black;
            }
            #zentai{
               font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
               font-size:20px;
           }
           
           #yookie p {
               font-size: 15px;
               margin-top: 10px;margin-bottom: -10px;
           }
           #rina p {
               margin-top: 10px;font-size: 15px;margin-bottom: -10px;
           }
           #yui p {
               font-size: 15px;margin-top: 10px;margin-bottom: -10px;
           }
           #buzz p {
               font-size: 15px;margin-top: 10px;margin-bottom: -10px;
           }
           #shiori p {
               font-size: 15px;margin-top: 10px;margin-bottom: -10px;
           }
           #nari p {
               font-size: 15px;margin-top: 10px;margin-bottom: -10px;
           }
           #shashin img{
               width:100%;
               
           }
           .col-sm-2{
               margin-bottom: 20px;
           }
           
</style>
@extends('layouts.app')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="{{ secure_asset('header1.jpg') }}"length = 50 , width = 100>
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="{{ secure_asset('header2.jpg') }}"length = 100 , width = 100>
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    
      <div class="item">
         <img src="{{ secure_asset('header3.jpg') }}"length = 100 , width = 100>
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


@section('content')


    @if (Auth::check())
        <?php $user = Auth::user(); ?>

<div class="container text-center">
 <div class="title">
     <h3><strong>D・O・U・K・I・Sとは</h3>
     <h3><strong>同期の 同期のための 同期による</p>
<p>仲間集めサービスです。</p></strong></h3>
  </div> 
  
  
  <!--全体の入れ物2-->
  <div class="row">
    
   <div class="col-sm-4">
      <p class="text-center"><strong>まずはサインアップから<br><br></strong></p><br>
      
        <img src="{{ secure_asset('setsume3.jpg') }}" class="img person" alt="Random Name" width="255" height="255">
        
      
      
        <br><p1>名前、写真、イントロを登録するだけ。</p>
        <p1>さあ！始めよう！</p1>
      
    </div>
    
    <!--小さな入れ物　Create-->
    <div class="col-sm-4">
      <p class="text-center"><strong>かんたん！イベント作成！<br><br></strong></p><br>
      
        <img src="{{ secure_asset('setsume1.jpg') }}" class="img person1" alt="Random Name" width="255" height="255">
      
      
        <br><p1>やりたいイベントを作成して仲間を集めよう！</p>
            <p1>263人全員がホストになれます。</p1>
      
     </div>
    
    <!--小さな入れ物 Join-->
  <div class="col-sm-4">
      <p class="text-center"><strong>だれでも参加できる<br><br></strong></p><br>
     
        <img src="{{ secure_asset('setsume2.jpg') }}" class="img person2" alt="Random Name" width="255" height="255">
     
      
        <br><p1>ボタン１つで気軽にJoin!!</p1>
            <br><p1>気になるイベントには質問もできます。</p1>
      
    </div>
  
  </div>
</div>






<div class="midashi">
<center><h1>ALL EVENTS</h1></center>
</div>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#top" class="top">TOP</a></li>
    <li><a data-toggle="tab" href="#drink" class="drink">Drink&Food</a></li>
    <li><a data-toggle="tab" href="#sports" class="sports">Sports&Fitness</a></li>
    <li><a data-toggle="tab" href="#entertainment" class="entertainment">Entertainment</a></li>
    <li><a data-toggle="tab" href="#learning" class="learning">Learning</a></li>
    <li><a data-toggle="tab" href="#hobby" class="hobby">Hobby</a></li>
    <li><a data-toggle="tab" href="#outdoor" class="outdoor">Outdoor</a></li>
    <li><a data-toggle="tab" href="#social" class="social">Social</a></li>
    <li><a data-toggle="tab" href="#shopping" class="shopping">Shopping</a></li>
    <li><a data-toggle="tab" href="#career" class="career">Career</a></li>
  </ul>

<div class="tab-content">
    <div id="top" class="tab-pane fade in active">
        
      @foreach ($events as $event)   
    @if ($event->genre === 'Drink&Food')
    <div class="col-md-4" id="shortevent">
        <div style="background:#ff4d52;">
            <div class="shortevent">
                 <h3 style="background-color:#ff4d52">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="drink_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
     @elseif ($event->genre === 'Sports&Fitness')
    <div class="col-md-4" id="shortevent">
        <div style="background:#3498db;">
            <div class="shortevent">
                 <h3 style="background-color:#3498db">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="sports_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
    @elseif ($event->genre === 'Entertainment')
    <div class="col-md-4" id="shortevent">
        <div style="background:#a52faa;">
            <div class="shortevent">
                 <h3 style="background-color:#a52faa">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="entertainment_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
     @elseif ($event->genre === 'Learning')
    <div class="col-md-4" id="shortevent">
        <div style="background:#5321a7;">
            <div class="shortevent">
                 <h3 style="background-color:#5321a7">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="learning_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
    @elseif ($event->genre === 'Hobby')
    <div class="col-md-4" id="shortevent">
        <div style="background:#f2c200;">
            <div class="shortevent">
                 <h3 style="background-color:#f2c200">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="hobby_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
    @elseif ($event->genre === 'Outdoor')
    <div class="col-md-4" id="shortevent">
        <div style="background:#1bc1a0;">
            <div class="shortevent">
                 <h3 style="background-color:#1bc1a0">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="outdoor_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
    @elseif ($event->genre === 'Social')
    <div class="col-md-4" id="shortevent">
        <div style="background:#3ecf7a;">
            <div class="shortevent">
                 <h3 style="background-color:#3ecf7a">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="social_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
    @elseif ($event->genre === 'Shopping')
    <div class="col-md-4" id="shortevent">
        <div style="background:#f02475;">
            <div class="shortevent">
                 <h3 style="background-color:#f02475">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="shopping_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
    @else ($event->genre === 'Career')
    <div class="col-md-4" id="shortevent">
        <div style="background:#808080;">
            <div class="shortevent">
                 <h3 style="background-color:#808080">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="career_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
    @endif
    @endforeach
    {!! $events->render() !!}</div>
    <div id="drink" class="tab-pane fade">
    @foreach ($events as $event)   
    @if ($event->genre === 'Drink&Food')
    <div class="col-md-4" id="shortevent">
        <div style="background:#ff4d52;">
            <div class="shortevent">
                 <h3 style="background-color:#ff4d52">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="drink_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @endif
     @endforeach
    {!! $events->render() !!}</div>
    <div id="sports" class="tab-pane fade">
    @foreach ($events as $event)   
    @if ($event->genre === 'Sports&Fitness')
    <div class="col-md-4" id="shortevent">
        <div style="background:#3498db;">
            <div class="shortevent">
                 <h3 style="background-color:#3498db">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="sports_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @endif
     @endforeach
    {!! $events->render() !!}</div>
    <div id="entertainment" class="tab-pane fade">
    @foreach ($events as $event)   
    @if ($event->genre === 'Entertainment')
    <div class="col-md-4" id="shortevent">
        <div style="background:#a52faa;">
            <div class="shortevent">
                 <h3 style="background-color:#a52faa">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="entertainment_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
     @endif
     @endforeach
    </div>
    <div id="learning" class="tab-pane fade">
     @foreach ($events as $event)
     @if ($event->genre === 'Learning')
    <div class="col-md-4" id="shortevent">
        <div style="background:#5321a7;">
            <div class="shortevent">
                 <h3 style="background-color:#5321a7">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="learning_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @endif
     @endforeach
    {!! $events->render() !!}{!! $events->render() !!}</div>
    <div id="hobby" class="tab-pane fade">
      @foreach ($events as $event)
      @if ($event->genre === 'Hobby')
    <div class="col-md-4" id="shortevent">
        <div style="background:#f2c200;">
            <div class="shortevent">
                 <h3 style="background-color:#f2c200">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="hobby_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
      @endif
      @endforeach
    {!! $events->render() !!}</div>
    <div id="outdoor" class="tab-pane fade">
      @foreach ($events as $event)
      @if ($event->genre === 'Outdoor')
    <div class="col-md-4" id="shortevent">
        <div style="background:#1bc1a0;">
            <div class="shortevent">
                 <h3 style="background-color:#1bc1a0">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="outdoor_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
      @endif
      @endforeach
    {!! $events->render() !!}</div>
    <div id="social" class="tab-pane fade">
      @foreach ($events as $event)
      @if ($event->genre === 'Social')
    <div class="col-md-4" id="shortevent">
        <div style="background:#3ecf7a;">
            <div class="shortevent">
                 <h3 style="background-color:#3ecf7a">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="social_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
      @endif
      @endforeach
    {!! $events->render() !!}</div>
    <div id="shopping" class="tab-pane fade">
      @foreach ($events as $event)
      @if ($event->genre === 'Shopping')
    <div class="col-md-4" id="shortevent">
        <div style="background:#f02475;">
            <div class="shortevent">
                 <h3 style="background-color:#f02475">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="shopping_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
      @endif
      @endforeach
    {!! $events->render() !!}</div>
    <div id="career" class="tab-pane fade">
      @foreach ($events as $event)
      @if ($event->genre === 'Career')
    <div class="col-md-4" id="shortevent">
        <div style="background:#808080;">
            <div class="shortevent">
                 <h3 style="background-color:#808080">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="career_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
      @endif
      @endforeach
      
    {!! $events->render() !!}</div>
  </div>     
     
    @else
<div class="container text-center">
 <div class="title">
     <h3><strong>D・O・U・K・I・Sとは</h3>
     <h3><strong>同期の 同期のための 同期による</p>
<p>仲間集めサービスです。</p></strong></h3>
  </div> 
  
  
  <!--全体の入れ物2-->
  <div class="row">
    
   <div class="col-sm-4">
      <p class="text-center"><strong>まずはサインアップから<br><br></strong></p><br>
      
        <img src="{{ secure_asset('setsume3.jpg') }}" class="img person" alt="Random Name" width="255" height="255">
        
      
      
        <br><p1>名前、写真、イントロを登録するだけ。</p>
        <p1>さあ！始めよう！</p1>
      
    </div>
    
    <!--小さな入れ物　Create-->
    <div class="col-sm-4">
      <p class="text-center"><strong>かんたん！イベント作成！<br><br></strong></p><br>
      
        <img src="{{ secure_asset('setsume1.jpg') }}" class="img person1" alt="Random Name" width="255" height="255">
      
      
        <br><p1>やりたいイベントを作成して仲間を集めよう！</p>
            <p1>263人全員がホストになれます。</p1>
      
     </div>
    
    <!--小さな入れ物 Join-->
  <div class="col-sm-4">
      <p class="text-center"><strong>だれでも参加できる<br><br></strong></p><br>
     
        <img src="{{ secure_asset('setsume2.jpg') }}" class="img person2" alt="Random Name" width="255" height="255">
     
      
        <br><p1>ボタン１つで気軽にJoin!!</p1>
            <br><p1>気になるイベントには質問もできます。</p1>
      
    </div>
  
  </div>
</div>








<div class="midashi">
<center><h1>ALL EVENTS</h1></center>
</div>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#top" class="top">TOP</a></li>
    <li><a data-toggle="tab" href="#drink" class="drink">Drink&Food</a></li>
    <li><a data-toggle="tab" href="#sports" class="sports">Sports&Fitness</a></li>
    <li><a data-toggle="tab" href="#entertainment" class="entertainment">Entertainment</a></li>
    <li><a data-toggle="tab" href="#learning" class="learning">Learning</a></li>
    <li><a data-toggle="tab" href="#hobby" class="hobby">Hobby</a></li>
    <li><a data-toggle="tab" href="#outdoor" class="outdoor">Outdoor</a></li>
    <li><a data-toggle="tab" href="#social" class="social">Social</a></li>
    <li><a data-toggle="tab" href="#shopping" class="shopping">Shopping</a></li>
    <li><a data-toggle="tab" href="#career" class="career">Career</a></li>
  </ul>

  <div class="tab-content">
    <div id="top" class="tab-pane fade in active">
      @foreach ($events as $event)   
    @if ($event->genre === 'Drink&Food')
    <div class="col-md-4" id="shortevent">
        <div style="background:#ff4d52;">
            <div class="shortevent">
                 <h3 style="background-color:#ff4d52">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="drink_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @elseif ($event->genre === 'Sports&Fitness')
    <div class="col-md-4" id="shortevent">
        <div style="background:#3498db;">
            <div class="shortevent">
                 <h3 style="background-color:#3498db">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="sports_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @elseif ($event->genre === 'Entertainment')
    <div class="col-md-4" id="shortevent">
        <div style="background:#a52faa;">
            <div class="shortevent">
                 <h3 style="background-color:#a52faa">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="entertainment_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @elseif ($event->genre === 'Learning')
    <div class="col-md-4" id="shortevent">
        <div style="background:#5321a7;">
            <div class="shortevent">
                 <h3 style="background-color:#5321a7">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="learning_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @elseif ($event->genre === 'Hobby')
    <div class="col-md-4" id="shortevent">
        <div style="background:#f2c200;">
            <div class="shortevent">
                 <h3 style="background-color:#f2c200">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="hobby_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @elseif ($event->genre === 'Outdoor')
    <div class="col-md-4" id="shortevent">
        <div style="background:#1bc1a0;">
            <div class="shortevent">
                 <h3 style="background-color:#1bc1a0">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="outdoor_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @elseif ($event->genre === 'Social')
    <div class="col-md-4" id="shortevent">
        <div style="background:#3ecf7a;">
            <div class="shortevent">
                 <h3 style="background-color:#3ecf7a">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="social_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @elseif ($event->genre === 'Shopping')
    <div class="col-md-4" id="shortevent">
        <div style="background:#f02475;">
            <div class="shortevent">
                 <h3 style="background-color:#f02475">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="shopping_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @else ($event->genre === 'Career')
    <div class="col-md-4" id="shortevent">
        <div style="background:#808080;">
            <div class="shortevent">
                 <h3 style="background-color:#808080">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="career_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @endif
    @endforeach
    {!! $events->render() !!}</div>
    <div id="drink" class="tab-pane fade">
    @foreach ($events as $event)   
    @if ($event->genre === 'Drink&Food')
    <div class="col-md-4" id="shortevent">
        <div style="background:#ff4d52;">
            <div class="shortevent">
                 <h3 style="background-color:#ff4d52">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="drink_btn" id="btn"> Detail </a>
            </div>
        </div>
     {!! $events->render() !!}</div>
     @endif
     @endforeach
    </div>
    <div id="sports" class="tab-pane fade">
    @foreach ($events as $event)   
    @if ($event->genre === 'Sports&Fitness')
    <div class="col-md-4" id="shortevent">
        <div style="background:#3498db;">
            <div class="shortevent">
                 <h3 style="background-color:#3498db">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="sports_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @endif
     @endforeach
    {!! $events->render() !!}</div>
    <div id="entertainment" class="tab-pane fade">
    @foreach ($events as $event)   
    @if ($event->genre === 'Entertainment')
    <div class="col-md-4" id="shortevent">
        <div style="background:#a52faa;">
            <div class="shortevent">
                 <h3 style="background-color:#a52faa">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="entertainment_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @endif
     @endforeach
    {!! $events->render() !!}</div>
    <div id="learning" class="tab-pane fade">
     @foreach ($events as $event)
     @if ($event->genre === 'Learning')
    <div class="col-md-4" id="shortevent">
        <div style="background:#5321a7;">
            <div class="shortevent">
                 <h3 style="background-color:#5321a7">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="learning_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @endif
     @endforeach
    {!! $events->render() !!}</div>
    <div id="hobby" class="tab-pane fade">
      @foreach ($events as $event)
      @if ($event->genre === 'Hobby')
    <div class="col-md-4" id="shortevent">
        <div style="background:#f2c200;">
            <div class="shortevent">
                 <h3 style="background-color:#f2c200">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="hobby_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
      @endif
      @endforeach
    {!! $events->render() !!}</div>
    <div id="outdoor" class="tab-pane fade">
      @foreach ($events as $event)
      @if ($event->genre === 'Outdoor')
    <div class="col-md-4" id="shortevent">
        <div style="background:#1bc1a0;">
            <div class="shortevent">
                 <h3 style="background-color:#1bc1a0">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="outdoor_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
      @endif
      @endforeach
    {!! $events->render() !!}</div>
    <div id="social" class="tab-pane fade">
      @foreach ($events as $event)
      @if ($event->genre === 'Social')
    <div class="col-md-4" id="shortevent">
        <div style="background:#3ecf7a;">
            <div class="shortevent">
                 <h3 style="background-color:#3ecf7a">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="social_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
      @endif
      @endforeach
    {!! $events->render() !!}</div>
    <div id="shopping" class="tab-pane fade">
      @foreach ($events as $event)
      @if ($event->genre === 'Shopping')
    <div class="col-md-4" id="shortevent">
        <div style="background:#f02475;">
            <div class="shortevent">
                 <h3 style="background-color:#f02475">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="shopping_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
      @endif
      @endforeach
    {!! $events->render() !!}</div>
    <div id="career" class="tab-pane fade">
      @foreach ($events as $event)
      @if ($event->genre === 'Career')
    <div class="col-md-4" id="shortevent">
        <div style="background:#808080;">
            <div class="shortevent">
                 <h3 style="background-color:#808080">{{ $event->event_name }}</h3><br>
                 <h4>{{ $event->genre }}</h4>
                 <h4>Date：{{ $event->date }}</h4><h4>Time：{{ $event->time }}</h4><br>
                 <a data-toggle="modal" data-target="#login" class="career_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
      @endif
      @endforeach
      {!! $events->render() !!}
    {!! $events->render() !!}</div>
  </div>
    



@endif
<div id="zentai">
    <div id ="myCarousel1" class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="{{ secure_asset('doukis.jpg') }}"length = 50 , width = 100>
        <div class="carousel-caption">
         
          <h2><em>TEAM MEMBERS</em></h2>
        </div>      
      </div>
</div>
 
 
 <div class="col-sm-2" id="yookie">
   <p class="text-center"><strong>Yookie</strong></p><br>
   <div id="yookie1">
    <p>見た目はおしゃれパリピだが、実は誰よりも夢にアツいパッションをもっている。</p>
   </div>
 </div>
  
 <div class="col-sm-2" id="rina">
   <p class="text-center"><strong>Rina</strong></p><br>
   <div id="rina1">
    <p>No.1秀才で頼れるリーダー。毒舌でアネゴ肌だが、時折見せるかわいい発言がとっても女の子。</p>
   </div>
 </div>
  
 <div class="col-sm-2" id="shiori">
   <p class="text-center"><strong>Shiori</strong></p><br>
   <div id="shiori1">
    <p>しっかり者で働きまくりな我らのお母さん。しおりママのクッキーがみんな大好きでした。</p>
   </div>
 </div>
  
 <div class="col-sm-2" id="buzz">
   <p class="text-center"><strong>Buzz</strong></p><br>
   <div id="buzz1">
    <p>チームにハッピーを運ぶムードメーカー。デブ活を始めた結果、プログラミング技術とともに体も成長中。</p>
   </div>
 </div>
  
 <div class="col-sm-2" id="yui">
   <p class="text-center"><strong>Yui</strong></p><br>
   <div id="yui1">
    <p>同期一のわがまま娘。気は強いが常にみんなを気遣って声をかけてくれる優しいお姉さんな一面も。</p>
    
   </div>
 </div>
  
 <div class="col-sm-2" id="nari">
   <p class="text-center"><strong>Nari</strong></p><br>
   <div id="nari1">
    <p>英語、日本語、中国語を操るトリリンガル。デザインは死ぬまで凝りつづけます。</p>
   </div>
 </div>
 
</div> 

@endsection
