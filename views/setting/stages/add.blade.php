 <form class="form-horizontal" action="#" method="post">
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />


                    <input name="projectId" type="hidden"  id="stageId" value="0" />



                            <div class="form-group">
                                    <label class="col-lg-3 control-label">Название:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="name" id="name"   required>
                                    </div>
                                </div>
							<input type="hidden" class="form-control" name="color" value="#98cbff" id="color"   >
                            <div class="form-group">
                             <label class="col-lg-3 control-label">Цвет этапа:</label>
                            <div class="col-lg-6 ">
                            	<div class="color-voronk-block">
                                <div class="color-voronka" style="background:#fffeb2;"></div>
                                <div class="color-voronka" style="background:#fffd7f;"></div>
                                <div class="color-voronka" style="background:#fff000;"></div>
                                <div class="color-voronka" style="background:#ffeab2;"></div>
                                <div class="color-voronka" style="background:#ffdc7f;"></div>
                                <div class="color-voronka" style="background:#ffce5a;"></div>
                                <div class="color-voronka" style="background:#ffdbdb;"></div>
                                <div class="color-voronka" style="background:#ffc8c8;"></div>
                                <div class="color-voronka" style="background:#ff8f92;"></div>
                                <div class="color-voronka" style="background:#d6eaff;"></div>
                                <div class="color-voronka" style="background:#c1e0ff;"></div>
                                <div class="color-voronka" style="background:#98cbff;"></div>
                                <div class="color-voronka" style="background:#ebffb1;"></div>
                                <div class="color-voronka" style="background:#deff81;"></div>
                                <div class="color-voronka" style="background:#87f2c0;"></div>
                                <div class="color-voronka" style="background:#f9deff;"></div>
                                <div class="color-voronka" style="background:#f3beff;"></div>
                                <div class="color-voronka" style="background:#ccc8f9;"></div>
                                <div class="color-voronka" style="background:#eb93ff;"></div>
                                <div class="color-voronka" style="background:#f2f3f4;"></div>
                                <div class="color-voronka" style="background:#e6e8ea;"></div>
                                </div>
                                </div>
                             
                             <div class="col-lg-3 text-center">
                             <p><b>Выбраный цвет</b></p>
                             	<div class="color-voronka-big" style="background:#98cbff;">
                                
                                </div>
                             </div>   



<script>
$('.color-voronka').on('click', function(){
	$('.color-voronka').removeClass('active');
	$(this).addClass('active');
	style = $(this).attr('style');
	style = style.split(':');
	style = style[1].split(';');
	$('#color').val(style);
	$('.color-voronka-big').css('background', style[0])
	
	})

</script>





                                <button type="button" class="btn btn-primary edit_stage">Создать<i class="icon-arrow-right14 position-right"></i></button>
        </form>


