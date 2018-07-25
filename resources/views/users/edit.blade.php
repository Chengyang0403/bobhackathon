<style>
.cp_btn {
display: block;
position: relative;
width: 160px;
padding: 0.8em;
text-align: center;
text-decoration: none;
color: #fff;
border:1px solid #da3c41;
background: #da3c41;
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


#placeholder{
    
    color: red; 
    
}
.cp_iptxt {
position: relative;
width: 80%;
margin: 40px 3%;
}
.cp_iptxt input[type='text'] {
font: 15px/24px sans-serif;
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
border: 0;
border-bottom: 1px solid #1b2538;
background-color: transparent;
width:1500px;
}
.cp_iptxt textarea[type='textarea'] {
font: 15px/24px sans-serif;
box-sizing: border-box;
width: 100%;
letter-spacing: 1px;
padding-left: 6em;
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
</style>

@extends('layouts.app')

<div class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="{{ secure_asset('header4.jpg') }}"length = 50 , width = 100>
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
</div>

@section('content')

<div class="col-md-8 col-md-offset-2">
<center><h1>{{ $user->username }}の編集ページ</h1></center>


{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}

                <div class="cp_iptxt" style="margin: 0px;width: 654px;">
                    <textarea  class="ef" name="comment" type="textarea"   autocomplete="off">{{old('comment')}}</textarea>
                    {!! Form::label('edit', 'Intro') !!}
                    <span class="focus_line"></span>
                </div>
                
               <div class="col-sm-6 col-md-offset-3"> 
                <center><button type = "sumbit" class="cp_btn">更新
                 </button></center>
                 </div>
                 
{!! Form::close() !!}
</div>
@endsection