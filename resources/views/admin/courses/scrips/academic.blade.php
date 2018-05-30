<script>
    const saveAcademic = () => {
        let _input = $("#academic");
        let _select = $("#academic_id");
        let _modal = $("#modal_academic");
        let _url = "{{route('academic.store')}}";

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
                let html = "";
                $.each(response.data, function (index, value) {
                    html += `<option value="${index}">${value}</option>`;
                });

                _select.html(html).selectpicker("refresh");
                _select.val(response.id).selectpicker('render');
                _input.val("");
                _modal.modal('hide');
            },

            complete: function () {
                //btn.prop('disabled', false);
            }
        });
    }
</script>