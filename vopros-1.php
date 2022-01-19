<form id="group">
           <p> <b>Предпочитаемый тип работы</b> </p>
                <div class="form-group">
                    <label>
                        <input type="checkbox" value="Люблю работать с фронтендом" id="one_qu_1">
                            <span>Люблю работать с фронтендом</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" value="Люблю работать с бэкендом" id="one_qu_2">
                            <span>Люблю работать с бэкендом</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" value="Другое" id="one_qu_3">
                            <span>Другое</span>
                    <label>
                </div>
          
        </form>
<script>
    $('#group input:checkbox').click(function(){
        if ($(this).is(':checked')) {
            value_type = $(this).val();
            $('#group input:checkbox').not(this).prop('checked', false);
        }
    });
</script>