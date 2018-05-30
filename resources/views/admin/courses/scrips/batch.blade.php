<script>
    const saveBatch = () => {
        let _input = $("#batch");
        let _select = $("#batch_id");
        let _modal = $("#modal_batch");
        let _url = "{{route('batch.store')}}";

        $.ajax({
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'JSON',
            url: _url,
            data: {text: _input.val()},
            beforeSend: function () {
                //btn.prop('disabled', true);
            },
            success: function (response) {
                _select.empty().selectpicker("refresh");
                $.each(response.data, function (index, dato) {
                    _select.append($("<option/>",{
                        value: index,
                        text : dato
                    }));
                });
                _select.selectpicker("refresh");
                _select.val(response.id).selectpicker('render');
                _input.val("");
                _modal.modal('hide');
            },

            complete: function () {
                //btn.prop('disabled', false);
            }
        });
    };
</script>