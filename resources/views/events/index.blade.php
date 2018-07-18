<style>


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
  p1 {
      font-size: 20px;
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
      margin-bottom: 94px;
      width: 57%;
      height: 25%;
      opacity: 0.7;
  }
  .person2 {
      border: 10px solid transparent;
      margin-bottom: 80px;
      width: 100%;
      height: 27%;
      opacity: 0.7;}

/*p1 {
-ms-writing-mode: tb-rl;
writing-mode: vertical-rl;
column-count:1;
height:250px;
color:pink;
} */





            h3 {
               color: white;
            }
            h4 {
                color: white;
            }
            #shortevent {
                padding: 0;
            }
            .shortevent {
              border-top: solid white;
              border-right: solid white;
              
              padding: 40px 70px 70px 70px;
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
            #shortevent:hover{ border-color: #f1f1f1;
              transform: scale(1.05);
              transition: 1.5s;
              box-shadow: 6px 6px 6px 6px gray;
                
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
</style>
@extends('layouts.app')


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
      <a href="#demo" data-toggle="collapse">
        <img src="{{ secure_asset('setsumei1.jpg') }}" class="img person" alt="Random Name" width="255" height="255">
        
      </a>
      <div id="demo" class="collapse">
        <br><p1>あなたの「やりたいこと」を、想いに乗せて発信するだけ。想いを共にする同期と、最高の体験を。</p1>
      </div>
    </div>
    
    <!--小さな入れ物　Create-->
    <div class="col-sm-4">
      <p class="text-center"><strong>いつでも、すぐに<br><br></strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="{{ secure_asset('setsumei2.jpg') }}" class="img person1" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p1>同期とやるからこそ、価値がある。思い立ったらすぐにイベントを作成して、仲間を集めよう！まだ見ぬ仲間が、263人の中にきっといるはず。</p1>
      </div>
    </div>
    
    <!--小さな入れ物 Join-->
    <div class="col-sm-4">
      <p class="text-center"><strong>さぁ、始めよう<br><br></strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="{{ secure_asset('setsumei3.jpg') }}" class="img person2" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p1>まずはプロフィールを作ろう。イベントをホストしたりイベントに参加したりすることで、あなたの想いに最適なコミュニティを見つけよう！</p1>
      </div>
    </div>
  
  </div>
</div>








@foreach ($events as $event)   
    @if ($event->genre === 'Drink&Food')
    <div class="col-md-4" id="shortevent">
        <div style="background:#ff4d52;">
            <div class="shortevent">
                 <h1 style="background-color:#ff4d52">{{ $event->event_name }}</h1><br>
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
                 <h1 style="background-color:#3498db">{{ $event->event_name }}</h1><br>
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
                 <h1 style="background-color:#a52faa">{{ $event->event_name }}</h1><br>
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
                 <h1 style="background-color:#5321a7">{{ $event->event_name }}</h1><br>
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
                 <h1 style="background-color:#f2c200">{{ $event->event_name }}</h1><br>
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
                 <h1 style="background-color:#1bc1a0">{{ $event->event_name }}</h1><br>
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
                 <h1 style="background-color:#3ecf7a">{{ $event->event_name }}</h1><br>
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
                 <h1 style="background-color:#f02475">{{ $event->event_name }}</h1><br>
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
                 <h1 style="background-color:#808080">{{ $event->event_name }}</h1><br>
                 <h4>{{ $event->genre }}</h4>
                 <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                 <a href="{{ URL::route('events.show', ['event_name' => $event->id]) }}" class="career_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @endif
       
         
        
        
        
    @endforeach 
     
     
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
      <a href="#demo" data-toggle="collapse">
        <img src="{{ secure_asset('setsumei1.jpg') }}" class="img person" alt="Random Name" width="255" height="255">
        
      </a>
      <div id="demo" class="collapse">
        <br><p1>あなたの「やりたいこと」を、想いに乗せて発信するだけ。想いを共にする同期と、最高の体験を。</p1>
      </div>
    </div>
    
    <!--小さな入れ物　Create-->
    <div class="col-sm-4">
      <p class="text-center"><strong>いつでも、すぐに<br><br></strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="{{ secure_asset('setsumei2.jpg') }}" class="img person1" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p1>同期とやるからこそ、価値がある。思い立ったらすぐにイベントを作成して、仲間を集めよう！まだ見ぬ仲間が、263人の中にきっといるはず。</p1>
      </div>
    </div>
    
    <!--小さな入れ物 Join-->
    <div class="col-sm-4">
      <p class="text-center"><strong>さぁ、始めよう<br><br></strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="{{ secure_asset('setsumei3.jpg') }}" class="img person2" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p1>まずはプロフィールを作ろう。イベントをホストしたりイベントに参加したりすることで、あなたの想いに最適なコミュニティを見つけよう！</p1>
      </div>
    </div>
  
  </div>
</div>








@foreach ($events as $event)   
    @if ($event->genre === 'Drink&Food')
    <div class="col-md-4" id="shortevent">
        <div style="background:#ff4d52;">
            <div class="shortevent">
                 <h1 style="background-color:#ff4d52">{{ $event->event_name }}</h1><br>
                 <h4>{{ $event->genre }}</h4>
                 <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                 <a data-toggle="modal" data-target="#login" class="drink_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @elseif ($event->genre === 'Sports&Fitness')
    <div class="col-md-4" id="shortevent">
        <div style="background:#3498db;">
            <div class="shortevent">
                 <h1 style="background-color:#3498db">{{ $event->event_name }}</h1><br>
                 <h4>{{ $event->genre }}</h4>
                 <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                 <li><a data-toggle="modal" data-target="#login">Login</a></li>
                 <a data-toggle="modal" data-target="#login" class="sports_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @elseif ($event->genre === 'Entertainment')
    <div class="col-md-4" id="shortevent">
        <div style="background:#a52faa;">
            <div class="shortevent">
                 <h1 style="background-color:#a52faa">{{ $event->event_name }}</h1><br>
                 <h4>{{ $event->genre }}</h4>
                 <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                <a data-toggle="modal" data-target="#login" class="entertainment_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
     @elseif ($event->genre === 'Learning')
    <div class="col-md-4" id="shortevent">
        <div style="background:#5321a7;">
            <div class="shortevent">
                 <h1 style="background-color:#5321a7">{{ $event->event_name }}</h1><br>
                 <h4>{{ $event->genre }}</h4>
                 <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                 <a data-toggle="modal" data-target="#login" class="learning_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @elseif ($event->genre === 'Hobby')
    <div class="col-md-4" id="shortevent">
        <div style="background:#f2c200;">
            <div class="shortevent">
                 <h1 style="background-color:#f2c200">{{ $event->event_name }}</h1><br>
                 <h4>{{ $event->genre }}</h4>
                 <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                <a data-toggle="modal" data-target="#login" class="hobby_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @elseif ($event->genre === 'Outdoor')
    <div class="col-md-4" id="shortevent">
        <div style="background:#1bc1a0;">
            <div class="shortevent">
                 <h1 style="background-color:#1bc1a0">{{ $event->event_name }}</h1><br>
                 <h4>{{ $event->genre }}</h4>
                 <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                 <a data-toggle="modal" data-target="#login" class="outdoor_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @elseif ($event->genre === 'Social')
    <div class="col-md-4" id="shortevent">
        <div style="background:#3ecf7a;">
            <div class="shortevent">
                 <h1 style="background-color:#3ecf7a">{{ $event->event_name }}</h1><br>
                 <h4>{{ $event->genre }}</h4>
                 <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                 <a data-toggle="modal" data-target="#login" class="social_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @elseif ($event->genre === 'Shopping')
    <div class="col-md-4" id="shortevent">
        <div style="background:#f02475;">
            <div class="shortevent">
                 <h1 style="background-color:#f02475">{{ $event->event_name }}</h1><br>
                 <h4>{{ $event->genre }}</h4>
                 <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                 <a data-toggle="modal" data-target="#login" class="shopping_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @else ($event->genre === 'Career')
    <div class="col-md-4" id="shortevent">
        <div style="background:#808080;">
            <div class="shortevent">
                 <h1 style="background-color:#808080">{{ $event->event_name }}</h1><br>
                 <h4>{{ $event->genre }}</h4>
                 <h3>{{ $event->date }}</h3><h3>{{ $event->time }}</h3><br>
                 <a data-toggle="modal" data-target="#login" class="career_btn" id="btn"> Detail </a>
            </div>
        </div>
     </div>
    @endif
    @endforeach
    



@endif


@endsection
