<form method="POST" action="https://cloud.neiros.ru/tickets/create" accept-charset="UTF-8" class="form-horizontal" id="t_form_ticket">
    @csrf

    <div class="form-group">
        <label for="t_subject" class="col-lg-2 control-label">Тема: </label>
        <div class="col-lg-10">
            <input class="form-control" required="required" name="subject" type="text" id="t_subject">
        </div>
    </div>
    <div class="form-group">
        <label for="t_content" class="col-lg-2 control-label">Описание: </label>
        <div class="col-lg-10">
            <textarea class="form-control summernote-editor" rows="10" required="required" name="content" cols="50" id="t_content" style="margin: 0px -35.3438px 0px 0px;width: 100%;/"></textarea>
 
        </div>
    </div>
    <div class="form-inline row">
        <div class="form-group col-lg-4" style="display: none">
            <label for="priority" class="col-lg-6 control-label">Приоритет: </label>
            <div class="col-lg-6">
                <select class="form-control" required="required" name="priority_id"><option value="1">Важно</option></select>
            </div>
        </div>
        <div class="form-group col-lg-4">
            <label for="category" class="col-lg-6 control-label">Категория: </label>
            <div class="col-lg-6">
                <select class="form-control" required="required" name="category_id">
                  @foreach($categoryes as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <input name="agent_id" type="hidden" value="auto">
    </div>
    <br>
    {{--<div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">

            <input class="btn btn-primary add_ticket" type="button" value="Отправить">
        </div>
    </div>--}}
    <div class="form-group footer-button">
        <div class="col-xs-12">

            <button type="button" class="btn btn-primary  add_ticket ">Отправить</button>
            <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>

    </div>
</form>
