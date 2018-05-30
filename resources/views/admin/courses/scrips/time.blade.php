<script>
    const saveTime = () => {
        let _input = $("#time");
        let _select = $("#time_id");
        let _modal = $("#modal_time");
        let _url = "{{route('time.store')}}";

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