@extends('app')
@section('title')
    Дополнительные поля

@endsection
@section('content')
<div id="neiros-cont-chat" style="    margin: -16px -20px -20px -20px;
margin-top:55px">



            <iframe src="/chatneirosru?from=cloud&apikey={{auth()->user()->user_hash}}" width="100%" height="100vh" frameborder="0">


            </iframe>
</div>
<style>.content{

	    padding: 0 20px 0px 20px;
	}</style>

    <!-- /task manager table -->

<script>
iframe_height = $(document).height()-60;
$("#neiros-cont-chat iframe").attr('height', iframe_height+'px')

</script>




@endsection
