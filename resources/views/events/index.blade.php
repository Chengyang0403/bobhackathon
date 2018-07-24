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
   
  p {
      font-size: 30px;
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
      margin-bottom: 101px;
      width: 67%;
      height: 24%;
      opacity: 0.7;
  }
  .person1 {
      border: 10px solid transparent;
      margin-bottom: 94px;
      width: 57%;
      height: 25%;
      opacity: 0.7;
  }
  .person2 {
      border: 10px solid transparent;
      margin-bottom: 80px;
      width: 68%;
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
            .nav{
                margin-top:-20px;
                margin-bottom:30px;
            }
           #zentai{
               font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
               font-size:20px;
           }
           
           #yookie p {
               font-size: 20px;
           }
           #rina p {
               font-size: 20px;
           }
           #yui p {
               font-size: 20px;
           }
           #buzz p {
               font-size: 20px;
           }
           #shiori p {
               font-size: 20px;
           }
           #nari p {
               font-size: 20px;
           }
           #shashin img{
               width:100%;
               
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

<div id="band" class="container text-center">
 <div class="title">
     <h3><strong>使い方</strong></h3>
  </div> 
  
  
  <!--全体の入れ物2-->
  <div class="row">
    
    <!--小さな入れ物　Register-->
    <div class="col-sm-4">
      <p class="text-center"><strong>使い方は簡単<br><br></strong></p><br>
      
        <img src="{{ secure_asset('setsume1.jpg') }}" class="img person" alt="Random Name" width="255" height="255">
        
      
      
        <br><p1>あなたの「やりたいこと」を、想いに乗せて発信するだけ。想いを共にする同期と、最高の体験を。</p1>
      
    </div>
    
    <!--小さな入れ物　Create-->
    <div class="col-sm-4">
      <p class="text-center"><strong>いつでも、すぐに<br><br></strong></p><br>
      
        <img src="{{ secure_asset('setsume2.jpg') }}" class="img person1" alt="Random Name" width="255" height="255">
      
      
         <br><p1>同期とやるからこそ、価値がある。思い立ったらすぐにイベントを作成して、仲間を集めよう！まだ見ぬ仲間が、263人の中にきっといるはず。</p1>
      </div>
    
    <!--小さな入れ物 Join-->
    <div class="col-sm-4">
      <p class="text-center"><strong>さぁ、始めよう<br><br></strong></p><br>
      
        <img src="{{ secure_asset('setsume3.jpg') }}" class="img person2" alt="Random Name" width="255" height="255">
      
      
        <br> <p1>まずはプロフィールを作ろう。イベントをホストしたりイベントに参加したりすることで、あなたの想いに最適なコミュニティを見つけよう！</p1>
      
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
     </div>
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
     </div>
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
     </div>
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
     </div>
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
     </div>
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
     </div>
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
     </div>
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
     </div>
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
     </div>
    @endif
    @endforeach
    </div>
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
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="sports_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @endif
     @endforeach
    </div>
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
     </div>
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
    </div>
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
    </div>
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
    </div>
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
    </div>
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
    </div>
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
    </div>
  </div>
  
  
 
     
    @else
    <div id="band" class="container text-center">
 <div class="title">
     <h3><strong>使い方</strong></h3>
  </div> 
  
  
  <!--全体の入れ物2-->
  <div class="row">
    
    <!--小さな入れ物　Register-->
    <div class="col-sm-4">
      <p class="text-center"><strong>使い方は簡単<br><br></strong></p><br>
      
        <img src="{{ secure_asset('setsume1.jpg') }}" class="img person" alt="Random Name" width="255" height="255">
        
      
      
        <br><p1>あなたの「やりたいこと」を、想いに乗せて発信するだけ。想いを共にする同期と、最高の体験を。</p1>
      
    </div>
    
    <!--小さな入れ物　Create-->
    <div class="col-sm-4">
      <p class="text-center"><strong>いつでも、すぐに<br><br></strong></p><br>
      
        <img src="{{ secure_asset('setsume2.jpg') }}" class="img person1" alt="Random Name" width="255" height="255">
      
      
        <br><p1>同期とやるからこそ、価値がある。思い立ったらすぐにイベントを作成して、仲間を集めよう！まだ見ぬ仲間が、263人の中にきっといるはず。</p1>
      
    </div>
    
    <!--小さな入れ物 Join-->
  <div class="col-sm-4">
      <p class="text-center"><strong>さぁ、始めよう<br><br></strong></p><br>
     
        <img src="{{ secure_asset('setsume3.jpg') }}" class="img person2" alt="Random Name" width="255" height="255">
     
      
        <br><p1>まずはプロフィールを作ろう。イベントをホストしたりイベントに参加したりすることで、あなたの想いに最適なコミュニティを見つけよう！</p1>
      
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
    </div>
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
     </div>
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
    </div>
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
                 <a data-toggle="modal" data-target="#login" class="learning_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @endif
     @endforeach
    </div>
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
    </div>
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
    </div>
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
    </div>
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
    </div>
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
    </div>
  </div>

@endif

<div id="zentai">
    <div id ="myCarousel1" class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="{{ secure_asset('doukis.jpg') }}"length = 50 , width = 100>
        <div class="carousel-caption">
         
          <p><em>TEAM MEMBERS</em></p>
        </div>      
      </div>
</div>
 
 
 <div class="col-sm-2" id="yookie">
   <p class="text-center"><strong>Yookie</strong></p><br>
   <div id="yookie1">
    <p>髪の毛から靴下までおしゃれに気を抜かない！文言の鬼！</p>
   </div>
 </div>
  
 <div class="col-sm-2" id="rina">
   <p class="text-center"><strong>Rina</strong></p><br>
   <div id="rina1">
    <p>ファンクションの鬼！実はシャレオツで、髪のインナーカラーが素敵</p>
   </div>
 </div>
  
 <div class="col-sm-2" id="shiori">
   <p class="text-center"><strong>Shiori</strong></p><br>
   <div id="shiori1">
    <p>画像挿入のお姫様。画像アップロード機能は譲れない！</p>
   </div>
 </div>
  
 <div class="col-sm-2" id="buzz">
   <p class="text-center"><strong>Buzz</strong></p><br>
   <div id="buzz1">
    <p>イラストレーターの鬼！個性的なかわいい絵を誕生させた。楽天の蛭子能収。</p>
   </div>
 </div>
  
 <div class="col-sm-2" id="yui">
   <p class="text-center"><strong>Yui</strong></p><br>
   <div id="yui1">
    <p>抜群のスタイルを活かして、バレリーナとして活躍中！</p>
    <p>議事録とタスク処理コントロールの鬼！</p>
   </div>
 </div>
  
 <div class="col-sm-2" id="nari">
   <p class="text-center"><strong>Nari</strong></p><br>
   <div id="nari1">
    <p>デザイン担当でCSSの鬼！日本語、英語、中国語の３つを操る言葉の魔術師</p>
   </div>
 </div>
 
</div>  
@endsection


