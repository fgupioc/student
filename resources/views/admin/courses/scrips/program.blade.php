<script>
    const saveProgram = () => {
        let _input = $("#program");
        let _select = $("#program_id");
        let _modal = $("#modal_program");
        let _url = "{{route('program.store')}}";

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
    };

    $("#form-course #program_id").change(function () {
        const _url = "{{route('getProgramLevels')}}";
        $.ajax({
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'JSON',
            url: _url,
            data: {id:$(this).val()},
            beforeSend: function () {
                //btn.prop('disabled', true);
            },
            success: function (response) {
                $("#level_id").empty().selectpicker("refresh");
                 if(!$.isEmptyObject(response.levels)){
                     $.each(response.levels, function (index, dato) {
                         $("#level_id").append($("<option/>",{
                             value: dato.id,
                             text : dato.level
                         }));
                     });
                     $("#level_id").selectpicker("refresh");
                 }
            },
            complete: function () {
                //btn.prop('disabled', false);
            }
        });
    });
</script>