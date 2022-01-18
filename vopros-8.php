<script>

    $(document).ready(function() {
        $('#question1').on('rating.change',(event, value) => console.log(value));
        $('#question1').on('rating.clear', e => console.log("rating:clear"));
    });
</script>


<form>
    <p> <b>Оценка данного задания</b> </p>
    <form id="fld">
        <input id="question1" class="rating rating-loading">
    </form>
</form>

