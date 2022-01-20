<div class="mb-5">
    <p><b>Ожидаемый уровень зарплаты</b> </p>
    <div class="polzunok-container-5">
        <input name="price_start" type="text" class="polzunok-input-5-left" />
        <input name="price_end" type="text" class="polzunok-input-5-right "/>
        <div class="polzunok-5"></div>
    </div>
</div>

<script>
    $(".polzunok-5").slider({
        min: 30000,
        max: 250000,
        values: [100000, 200000],
        range: true,
        animate: "fast",
        slide : function(event, ui) {
            $(".polzunok-input-5-left").val(ui.values[ 0 ]);
            $(".polzunok-input-5-right").val(ui.values[ 1 ]);
        }
    });
    $(".polzunok-input-5-left").val($(".polzunok-5").slider("values", 0));
    $(".polzunok-input-5-right").val($(".polzunok-5").slider("values", 1));
    $(".polzunok-container-5 input").change(function() {
        var input_left = $(".polzunok-input-5-left").val().replace(/[^0-9]/g, ''),
            opt_left = $(".polzunok-5").slider("option", "min"),
            where_right = $(".polzunok-5").slider("values", 1),
            input_right = $(".polzunok-input-5-right").val().replace(/[^0-9]/g, ''),
            opt_right = $(".polzunok-5").slider("option", "max"),
            where_left = $(".polzunok-5").slider("values", 0);
        if (input_left > where_right) {
            input_left = where_right;
        }
        if (input_left < opt_left) {
            input_left = opt_left;
        }
        if (input_left == "") {
            input_left = 0;
        }
        if (input_right < where_left) {
            input_right = where_left;
        }
        if (input_right > opt_right) {
            input_right = opt_right;
        }
        if (input_right == "") {
            input_right = 0;
        }
        $(".polzunok-input-5-left").val(input_left);
        $(".polzunok-input-5-right").val(input_right);
        if (input_left != where_left) {
            $(".polzunok-5").slider("values", 0, input_left);
        }
        if (input_right != where_right) {
            $(".polzunok-5").slider("values", 1, input_right);
        }
    });
</script>
