<script>
    $(document).on('change','#travel_destination', function (e) {
        let value = $(this).val();
        $.get('/get-fields?type='+value, function(data){
            $('#for-destination').html('');
            $('#for-destination').html(data.rendered_view);
        });
    });

    $(document).on('change','#from', function (e) {
        let value     = $(this).val();
        let id        = '#to';
        disableSelector(value,id);
    });

     $(document).on('change','#to', function (e) {
        let value     = $(this).val();
        let id        = '#from';
        disableSelector(value,id);
    });

    function disableSelector(value,id){
        $(id+' option').prop('disabled', false);
        $(id+' option[value="' + value + '"]').prop('disabled', true);
    }

    $(document).on('click','#book-flight', function (e) {
        e.preventDefault();
        $('#bookFlightModal').modal('toggle');
    });


</script>
