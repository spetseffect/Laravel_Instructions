<form id="search-form" action="" method="get">
    <div class="row">
        <div class="col-6">
            <h1>Инструкции</h1>
        </div>
        <div class="col-4">
            <label for="search">&nbsp;</label>
            <input type="text"
                   name="text"
                   class="form-control"
                   id="search"
                   value="{{!empty($_GET['text'])?$_GET['text']:''}}"
                   placeholder="Поиск по названию или устройству...">
        </div>
        <div class="col-2">
            <label for="searchbtn">&nbsp;</label>
            <input type="button" class="btn btn-success" id="searchbtn" value="Найти">
        </div>
    </div>
</form>
<script>
    $(function (){
        $('#search-form').submit(function (e){
            e.preventDefault();
            let text=$('#search').val();
            location='/search/'+text;
        });
    });
</script>
