<form id="qus_3">
           <p> <b>Предпочитаемые дни недели в качестве выходных?</b></p>
                <div class="form-group">
                    <label>
                        <input class="qust_3" type="checkbox" id="two_qu_1">
                            <span>ПН</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input class="qust_3" type="checkbox" id="two_qu_2">
                            <span>ВТ</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input class="qust_3" type="checkbox" id="two_qu_3">
                            <span>СР</span>
                    <label>
                </div>
                <div style="display: inline-block">
                <div class="form-group">
                    <label>
                        <input class="qust_3" type="checkbox" id="two_qu_4">
                            <span>ЧТ</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input class="qust_3" type="checkbox" id="two_qu_5">
                            <span>ПТ</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input class="qust_3" type="checkbox" checked id="two_qu_6">
                            <span>СБ</span>
                    <label>
                </div>
                <div class="form-group">
                    <label>
                        <input class="qust_3" type="checkbox" checked id="two_qu_7">
                            <span>ВС</span>
                    <label>
                </div>
              </div>
       </form>

<script>
    $('input.qust_3').change(function(e){
        if ($('input.qust_3:checked').length > 2) {
            $(this).prop('checked', false)
            alert("Выходных может быть только 2");
        }
    })
</script>