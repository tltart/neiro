<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                <div class="col-md-12">
                    <form action="" method="get">
                        <div class="col-md-3">

                            <div class="form-group">
                                <label>Проект</label>
                                <select name="site_id" class="form-control site_id">
                                    <option value=""></option>
                                    @foreach($sites as $user)
                                        <option value="{{$user->id}}"
                                                @if(request()->get('site_id')==$user->id) selected @endif>{{$user->id}}
                                            / {{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <button type="submit" class="sledit">Следить</button>
                        </div>

                    </form>
                </div>
                <div class="row ">
<table class="table table-bordered kkkl">


</table>

                </div>

            </div>
        </div>
    </div>
</div>

    @if(request()->has('site_id'))
<script>
    var admin_site='{{request()->get('site_id')}}';

</script>
<script src="/js/admin_socket.js"></script>

@endif


