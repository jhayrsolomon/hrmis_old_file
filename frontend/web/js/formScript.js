$(document).ready(function(){
    function section(){
        var divisions_id = $('#incomingdocument-from_division_id').val();
        //console.log(divisions_id);
        $.ajax({
            url: 'loadsections',
            type: 'post',
            data: {divisions_id: divisions_id},
            success: function(data){
                //console.log(data);
                $('#incomingdocument-from_section_id selected').val(data['id']);
            },
        });
    }

   /* $('#incomingdocument-date_received').on('click', function(){
        $('#incomingdocument-date_received').datepicker({
            dateFormat: 'dd/mm/yy',
            minDate: +1,
            maxDate: '+90D',
        });
    });*/
    

    $('#incomingdocument-responsibility_division_id').on('change', function(){
        var divisions_id = $('#incomingdocument-responsibility_division_id').val();
        //alert(division_id);
        $.ajax({
             url: 'loadsections',
             type: 'post',
             data: {divisions_id: divisions_id},
             success: function (data) {
                 //console.log(data);
                 $('#incomingdocument-responsibility_section_id option').each(function(){
                     $(this).remove();
                 });
                 if(data.length == 0){
                    $('#incomingdocument-responsibility_section_id').attr('disabled', true);
                    $('#incomingdocument-responsibility_section_id').append('<option value="">Select Division First</option>');
                 } else {
                    $('#incomingdocument-responsibility_section_id').attr('disabled', false);
                     $('#incomingdocument-responsibility_section_id').append('<option value="">Select Section</option>');
                     $.each(data, function(key, value){
                         //console.log(value['province_id'] + " : " + value['description']);
                         $('#incomingdocument-responsibility_section_id').append('<option value="' + value['id'] + '">' + value['section_name'] + '</option>');
                     });
                 }
             }

        });
    });

	$('#incomingdocument-from_division_id').on('change', function(){
        var divisions_id = $('#incomingdocument-from_division_id').val();
        //alert(division_id);
        $.ajax({
             url: 'loadsections',
             type: 'post',
             data: {divisions_id: divisions_id},
             success: function (data) {
                 //console.log(data);
                 $('#incomingdocument-from_section_id option').each(function(){
                     $(this).remove();
                 });
                 if(data.length == 0){
                 	$('#incomingdocument-from_section_id').attr('disabled', true);
                 	$('#incomingdocument-from_section_id').append('<option value="">Select Division First</option>');
                 } else {
                 	$('#incomingdocument-from_section_id').attr('disabled', false);
	                 $('#incomingdocument-from_section_id').append('<option value="">Select Section</option>');
	                 $.each(data, function(key, value){
	                     //console.log(value['province_id'] + " : " + value['description']);
	                     $('#incomingdocument-from_section_id').append('<option value="' + value['id'] + '">' + value['section_name'] + '</option>');
	                 });
                 }
             }

        });
    });

    $('#incomingdocument-payee').on('change', function(){
        var payee = $('input[name="IncomingDocument[payee]"]:checked').val();
        $('.field-payeeexternal-name').removeClass('has-error');
        $('.field-payeeexternal-tin_number').removeClass('has-error');
        $('.field-payeeemployee-employee_id').removeClass('has-error');
        $('.field-payeeemployee-employee_number').removeClass('has-error');
        if(payee == 1){
            $('#payeeemployee-employee_id').attr('disabled', false);
            $('#payeeemployee-employee_id').attr('hidden', false);
            $('#payeeemployee-employee_id').val();
            $('#payeeemployee-employee_number').attr('disabled', false);
            $('#payeeemployee-employee_number').attr('readonly', true);
            $('#payeeemployee-employee_number').attr('hidden', false);
            //$('#payeeemployee-employee_number').val('');
            $('#payeeexternal-name').attr('disabled', true);
            $('#payeeexternal-name').attr('hidden', true);
            $('#payeeexternal-name').val('blank');
            $('#payeeexternal-tin_number').attr('disabled', true);
            $('#payeeexternal-tin_number').attr('hidden', true);
            $('#payeeexternal-tin_number').val('blank');
            $('#payeeexternal-address').val('***').attr('readonly', true);

        } else {
            $('#payeeexternal-name').attr('disabled', false);
            $('#payeeexternal-name').attr('hidden', false);
            $('#payeeexternal-name').val('');
            $('#payeeexternal-tin_number').attr('disabled', false);
            $('#payeeexternal-tin_number').attr('hidden', false);
            $('#payeeexternal-tin_number').val('');
            $('#payeeemployee-employee_id').attr('disabled', true);
            $('#payeeemployee-employee_id').attr('hidden', true);
            //$('#payeeemployee-employee_id').val(1);
            $('#payeeemployee-employee_number').attr('disabled', true);
            $('#payeeemployee-employee_number').attr('hidden', true);
            $('#payeeemployee-employee_number').val('blank');
            $('#payeeexternal-address').val('').attr('readonly', false);
        }
    });

    $('#payeeemployee-employee_id').on('change', function(){
        var employee_id = $('#payeeemployee-employee_id').val();
        //alert(employee_id);
        $.ajax({
            url: 'loadidnumber',
            type: 'post',
            data: {employee_id: employee_id},
            success: function(data){
                console.log(data);
                $('#payeeemployee-employee_number').val(data['id_number']);
            },
        });
    });

    /*$('#incomingdocument-from_section_id').on('change', function(){
        var section_id = $('#incomingdocument-from_section_id').val();
        //alert(section_id);
        $.ajax({
            url: 'loademployees',
            type: 'post',
            data: {section_id: section_id},
            success: function(data){
                //console.log(data);
                $('#incomingdocument-received_by').attr('disabled', false);
                $('#incomingdocument-received_by option').each(function(){
                    $(this).remove();
                });

                $('#incomingdocument-received_by').append('<option value="">-----Select Name-----</option>');
                $.each(data, function(key, value){
                    $('#incomingdocument-received_by').append('<option value="' + value['id'] + '">' + value['staff_first_name'] + ' ' + value['staff_last_name'] + '</option>');
                });
            },
        });
    });*/

   /* $('#payee_name_id').on('change', function(){
    	var payee = $('input[name="IncomingDocument[payee]"]:checked').val();
    	//console.log(payee);
    	$('#payeeexternal-name').parent().remove();
    	$('#payeeemployee-employee_id').parent().remove();
    	if(payee == 1){
            $('#payeeexternal-tin_number').attr('disabled', false);
            $('#payeeexternal-tin_number').attr('readonly', true);
            $('#payeeexternal-address').attr('readonly', true);
    		//$('#incomingdocument-payee').append('<div class="form-group field-payeeemployee-employee_id required has-success"><select id="payeeemployee-employee_id" class="form-control form-control-sm" name="PayeeEmployee[employee_id]" aria-required="true" aria-invalid="false"><option value="0">-----Select Employee-----</option></select><div class="help-block"></div></div>')
    		$.ajax({
    			url: 'loadstaffs',
    			type: 'post',
    			data: {},
    			success: function(data){
    				$('#incomingdocument-payee').append('<div class="form-group field-payeeemployee-employee_id required has-success"><select id="payeeemployee-employee_id" class="form-control form-control-sm" name="PayeeEmployee[employee_id]" aria-required="true" aria-invalid="false" onchange="findemployee();"><option value="0">-----Select Employee-----</option></select><div class="help-block"></div></div>');
    				$('#payeeemployee-employee_id option').each(function(){
						$(this).remove();
					});
					$('#payeeemployee-employee_id').append('<option value="">-----Select Employee-----</option>');
					$.each(data, function(key, value){
	                     $('#payeeemployee-employee_id').append('<option value="' + value['id'] + '">' + value['staff_first_name'] +' '+ value['staff_last_name'] + '</option>');
	                 });
    			},
    		});
    	} else {
            $('#payeeexternal-tin_number').attr('disabled', false);
            $('#payeeexternal-tin_number').attr('readonly', false);
            $('#payeeexternal-address').attr('readonly', false);
    		$('#incomingdocument-payee').append('<div class="form-group field-payeeexternal-name required"><input type="text" id="payeeexternal-name" class="form-control" name="PayeeExternal[name]" aria-required="true"><div class="help-block"></div></div>');
    		$('#tin_employee_number').remove();
    		$('#tin_employee_number').append('<div class="form-group field-payeeexternal-tin_number required"><label class="control-label" for="payeeexternal-tin_number">TIN/Employee Number</label><input type="text" id="payeeexternal-tin_number" class="form-control" name="PayeeExternal[tin_number]" maxlength="255" aria-required="true"><div class="help-block"></div></div>');
    	}
    });*/
        section();
});


/*function findemployee(){
    var staff_id = $('#payeeemployee-employee_id').val();
    console.log(staff_id);
    $.ajax({
        url: 'searchemployee',
        type: 'post',
        data: {staff_id: staff_id},
        success: function(data){
            console.log(data);
            $('#payeeexternal-tin_number').attr('disabled', false);
            $('#payeeexternal-tin_number').attr('readonly', true);
            $('#payeeexternal-tin_number').val(data[0]['id_number']);
            $('#payeeexternal-address').val('***')
        },
    });
}*/

