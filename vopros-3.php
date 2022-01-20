<div id="qus_3">
           <p> <b>Предпочитаемые дни недели в качестве выходных?</b></p>
                <div class="form-group">
                    <label>
                        <input name="quest_3[]" class="qust_3" value="ПН" type="checkbox" id="two_qu_1">
                            <span>ПН</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input name="quest_3[]" class="qust_3" value="ВТ" type="checkbox" id="two_qu_2">
                            <span>ВТ</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input name="quest_3[]" class="qust_3" value="СР" type="checkbox" id="two_qu_3">
                            <span>СР</span>
                    <label>
                </div>
                <div style="display: inline-block">
                <div class="form-group">
                    <label>
                        <input name="quest_3[]" class="qust_3" value="ЧТ" type="checkbox" id="two_qu_4">
                            <span>ЧТ</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input name="quest_3[]" class="qust_3" value="ПТ" type="checkbox" id="two_qu_5">
                            <span>ПТ</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input name="quest_3[]" class="qust_3" value="СБ" type="checkbox" checked id="two_qu_6">
                            <span>СБ</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input name="quest_3[]" class="qust_3" value="ВС" type="checkbox" checked id="two_qu_7">
                            <span>ВС</span>
                    <label>
                </div>
              </div>
</div>

<script>
    $('input.qust_3').change(function(e){
        if ($('input.qust_3:checked').length > 2) {
            $(this).prop('checked', false)
            alert("Выходных может быть только 2");
        }
    })
</script>