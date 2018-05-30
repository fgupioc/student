<script>

    $('#modal_level').on('show.bs.modal', function (e) {
        let cursos = $("#form-course #program_id option");
        let _cursos = $("#form-level").find('#program_id');

        $(_cursos).empty().selectpicker("refresh");
        $.each(cursos, function (key, dato) {
            $(_cursos).append($("<option/>",{
                value : $(dato).val(),
                text: $(dato).text()
            }));
            $(_cursos).selectpicker("refresh");
        });
    });

    const saveLevel = () => {
        let _input = $("#level");
        let _select = $("#level_id");
        let _modal = $("#modal_level");
        let _url = "{{route('level.store')}}";
        let datos = $('#form-level').serialize();

        $.ajax({
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'JSON',
            url: _url,
            data: datos,
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