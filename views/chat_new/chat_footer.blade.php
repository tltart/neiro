{{--<div class="chat__footer__notification">
    <i class="writting-state writting-state--active">
        <i class="icon-pencil"></i>
        Печатает...</i>
</div>--}}

<div class="quick-answers js-quick-answers">
    <button type="button"
            class="btn dropdown__button quick-answers__button js-quick-answers-button">
        Быстрые ответы
    </button>
    <div class="quick-answers__wrapper">
        <div class="quick-answers__holder">
            @foreach($fasts as $fast)<button class="btn quick-answers__item">{{$fast->name}}</button>@endforeach

         <a href="https://cloud.neiros.ru/widgets" target="_blank" class="btn text-link">+ Добавить</a>
        </div>
    </div>
</div>

<form action="" class="form-send"  id="forma-chat">
    <div class="form-send__wrap">
        <button class="btn form-send__smile" type="button"><i class="icon-smile"></i></button>
        <textarea  class="form-send__input form-field enter-message" name="enter-message"
               placeholder="Введите сообщение"
                   autocomplete="off"></textarea>

        <label class="btn form-send__attach">
            <i class="icon-attach"></i>
            <input type="file" class="sr-only">
        </label>
    </div>
    <button class="form-send__submit" type="button" onclick="sendmess();return false;"><i class="icon-forward"></i></button>
</form>


<style>
.form-send__smile{
	display:none;
	}
	
.emojionearea-button{
	left: 7px;
    top: 12px !important;
	}

 .focused{
outline: 0!important;
outline-color: transparent!important;
outline-width: 0!important;
outline-style: none!important;
box-shadow: 0 0 0 0 rgba(0,123,255,0)!important;
border:0px;
border-color:inherit;
background:inherit;
 }








.emojionearea .emojionearea-editor{
	display: block;
    height: auto;
    max-width: 774px;
    white-space: normal;
    overflow: auto;
    resize: none;
    padding-top: 17px;
    letter-spacing: 0px;
    font-size: 13px;
    font: 400 13.3333px Arial;
    background: #f5f6fa;
    border-radius: 25px;
    padding: 17px 34px;
    padding-right: 45px;
	max-height: 106px;
    overflow: auto;
	min-height: auto;
	}



.emojionearea{
	border: 0px;
    max-height: 106px;
    border-radius: 0px;
	-webkit-box-shadow:none;
	box-shadow:none;
	overflow: initial;
	}

.emojionearea-scroll-area::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 1px rgba(209,209,209,0.3);
    background-color: #F5F5F5;
}

.emojionearea-scroll-area::-webkit-scrollbar-thumb {
    background-color: #00b9ee;
}

.emojionearea-scroll-area::-webkit-scrollbar {
    width: 10px;
    background-color: rgba(209,209,209,0.3);
}





.emojionearea .emojionearea-editor::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 1px #ccc;
    background-color: #F5F5F5;
}

.emojionearea .emojionearea-editor::-webkit-scrollbar-thumb {
    background-color: #00b9ee;
}

.emojionearea .emojionearea-editor::-webkit-scrollbar {
    width: 6px;
    background-color: rgba(209,209,209,0.3);
}



.emojionearea .emojionearea-picker.emojionearea-picker-position-top{
	left:0px !important;
	}

.icon-attach{
    margin-right: 7px;
	cursor:pointer;
	}


.emojionearea-wrapper:after{
      right:auto;
	  left:5px;	
}




@media (max-width: 768px) {
.emojionearea .emojionearea-editor {
	width:320px;
	max-width:320px;
	}

.form-send__attach{
	right:20px !important;
	}
}





	
	
</style>



<script>
  $(document).ready(function() {
    $(".form-send__input").emojioneArea();
  });

</script>






















