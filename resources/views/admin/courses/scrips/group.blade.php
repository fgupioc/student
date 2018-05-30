<script>
    const saveGroup = () => {
        let _input = $("#group");
        let _select = $("#group_id");
        let _modal = $("#modal_group");
        let _url = "{{route('group.store')}}";

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