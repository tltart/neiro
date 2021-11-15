 <form action="" >
    <div class="form-group">
        <label>Дата начало</label>
        <input type="date" class="form-control" name="date_start">
    </div>

       <div class="form-group">
        <label>Дата конец</label>
        <input type="date" class="form-control" name="date_end">
    </div>

    <button type="submit" class="btn btn-info">Сформировать</button>
<a href="/admin/artes_call">Очистить</a>
</form>
 <table class="table">

     <tr>
         <td>Секунд</td>
         <td>Минут</td>
         <td>Сумма</td>
     </tr>
     <tr>
         <td>{{$sec}}</td>
         <td>{{$min}}</td>
         <td>{{$itogo}}</td>
     </tr>
 </table>