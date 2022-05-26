@extends('layout')
@section('title') {{ __('Orders') }} @endsection
@section('content')
<div class="container">
 	<div class="row bildiris" id="bildiris">
 		<div class="col-md-12">
 			 	<div style="margin: 60px 0">

 <br><br>
{!! $notice->content !!}
 <br><br>


 	<button class="btn btn-success" id="ok">{{__('Check out')}}</button>
 	</div>
 		</div>
 	</div>

<style>
.form_radio_btn {
	display: inline-block;
	margin-right: 10px;
}
.form_radio_btn input[type=radio] {
	display: none;
}
.form_radio_btn label {
	display: inline-block;
	cursor: pointer;
	padding: 0px 15px;
	line-height: 34px;
	border: 1px solid #999;
	border-radius: 6px;
	user-select: none;
}
 
/* Checked */
.form_radio_btn input[type=radio]:checked + label {
	background: #ffe0a6;
}
 
/* Hover */
.form_radio_btn label:hover {
	color: #666;
}
</style>
 	<div class="row" id="form" style="display: none;margin: 60px 0">
 		<h2 class="text-uppercase decorated"><span>{{__('Orders')}}</span></h2>
 		<br><br>
 		<form action="{{url('/order/role')}}" class="text-center" method="GET">
 			 {!! csrf_field() !!}


<div class="form_radio_btn">
	<input id="radio-1" type="radio" name="roles" required="" value="fiziki">
	<label for="radio-1">{{__('Individual')}}</label>
</div>
 
<div class="form_radio_btn">
	<input id="radio-2" type="radio" name="roles" value="legal">
	<label for="radio-2">{{__('Entity')}}</label>
</div>
<div class="col-12" style="margin-top: 30px">
<button type="submit" class="btn btn-success">{{__('Send')}}</button>
</div>

 		</form>
 	</div>


 </div>
 <script>


let bildiris = document.getElementById("bildiris"),
  bildirisStyle = bildiris.style;
let form = document.getElementById("form"),
  formStyle = form.style;
 
bildiris.addEventListener("click", bildirisClick);
 
function bildirisClick() {
  bildirisStyle.display = "none";
  formStyle.display = "block";
}
 
 </script>
 @endsection