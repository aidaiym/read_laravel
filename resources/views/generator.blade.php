<script>
    jQuery(document).ready(function () {
        jQuery('#generate_button').click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var purpose_of_processing_array = new Array();
            var collected_datas_array = new Array();
            var legal_grounds_array = new Array();
            var subject_of_personal_datas_array = new Array();
            var other_subject_of_personal_datas_array = new Array();
            var other_collected_datas_array = new Array();
            var other_transfer_collected_data_array = new Array();
            var other_purpose_of_processing_array = new Array();
            var other_legal_grounds_array = new Array();
            var project_name = $('#project_name').val();
            var full_name = $('#full_name').val();
            var link_personal_data = $('#link_personal_data').val();
            var link_processing_policy = $('#link_processing_policy').val();
            var processing_methods = $('input[name=processing_methods]:checked').val();
            $("input:checkbox[name=purpose_of_processings]:checked").each(function () {
                purpose_of_processing_array.push($(this).val());
            });
            $("input:checkbox[name=collected_datas]:checked").each(function () {
                collected_datas_array.push($(this).val());
            });
            $("input:checkbox[name=legal_grounds]:checked").each(function () {
                legal_grounds_array.push($(this).val());
            });
            $("input:checkbox[name=subject_of_personal_datas]:checked").each(function () {
                subject_of_personal_datas_array.push($(this).val());
            });
            $("input:checkbox[name=other_subject_of_personal_datas]:checked").each(function () {
                other_subject_of_personal_datas_array.push($(this).val());
            });
            $("input:checkbox[name=other_collected_datas]:checked").each(function () {
                other_collected_datas_array.push($(this).val());
            });
            $("input:checkbox[name=other_purpose_of_processing]:checked").each(function () {
                other_purpose_of_processing_array.push($(this).val());
            });

            $("input:checkbox[name=other_legal_grounds]:checked").each(function () {
                other_legal_grounds_array.push($(this).val());
            });

            // $("#form").validate({
            //     rules: {
            //         full_name: "required",
            //         subject_of_personal_datas: "required",
            //         collected_datas: "required",
            //         purpose_of_processings:"required",
            //         legal_grounds: "required",
            //     },
            //     messages: {
            //         full_name: "Please enter your full_name",
            //         subject_of_personal_datas: "Please enter your subject_of_personal_datas",
            //         collected_datas:  "Please provide a password",
            //         purpose_of_processings:"required",
            //         legal_grounds: "required",
            //     },
            //     submitHandler: 
            // });


            // if (purpose_of_processing_array.length == 0 || full_name.length == 0 || full_name.length >= 80 || legal_grounds_array.length == 0 || processing_methods.length == 0 || subject_of_personal_datas_array.length == 0 || collected_datas_array.length == 0) {
            //     return alert('Поле не должно быть пустым!');
            // } else {
            $.ajax({
                url: "{{ url('/document') }}",
                method: 'post',
                data: {
                    full_name: full_name,
                    link_personal_data: link_personal_data,
                    link_processing_policy: link_processing_policy,
                    other_subject_of_personal_datas: other_subject_of_personal_datas_array,
                    other_collected_datas: other_collected_datas_array,
                    other_purpose_of_processings: other_purpose_of_processing_array,
                    other_transfer_collected_datas: other_transfer_collected_data_array,
                    purpose_of_processings: purpose_of_processing_array,
                    collected_datas: collected_datas_array,
                    legal_grounds: legal_grounds_array,
                    other_legal_grounds: other_legal_grounds_array,
                    subject_of_personal_datas: subject_of_personal_datas_array,
                    processing_method: processing_methods,
                    transfer_of_data: data,
                },
                success: function (data) {
                    window.location = data.url;
                }
            });
            // }
        });
    });

</script>
