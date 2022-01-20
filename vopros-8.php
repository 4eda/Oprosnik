<script>

    $(document).ready(function() {
        $('#question1').on('rating.change',(event, value) => console.log(value));
        $('#question1').on('rating.clear', e => console.log(e));

        $('#question1').on('click', function (){
            $(this).parent().append($('<input class="form-control" value="'+ value +'" name="quest_8">'));
        });
    });
</script>


<div>
    <p> <b>Оценка данного задания</b> </p>
    <div id="fld">
        <input name="star" id="question1" class="rating rating-loading">
    </div>
</div>

