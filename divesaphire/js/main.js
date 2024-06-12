jQuery(document).ready(function ($) {

    $(document).on('change', '.input-wrap-radio input', function(){
        var val = $(this).val();

        $('#intr').val(val);
    })


});