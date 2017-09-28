var Datepicker = function () {

    return {
        
        //Datepickers
        initDatepicker: function () {
	        // Regular datepicker
            $('#date').datepicker({
                locale: 'vi',
	            dateFormat: 'dd/mm/yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>'
	        });
	        
	        // Date range
	        $('#ContentPlace_start').datepicker({
	            locale: 'vi',
	            dateFormat: 'dd/mm/yy',
	            prevText: '<i class="fa fa-angle-left color-blue"></i>',
	            nextText: '<i class="fa fa-angle-right color-blue"></i>',
	            onSelect: function( selectedDate )
	            {
	                $('#ContentPlace_finish').datepicker('option', 'minDate', selectedDate);
	            }
	        });
	        $('#ContentPlace_finish').datepicker({
	            locale: 'vi',
	            dateFormat: 'dd/mm/yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>',
	            onSelect: function( selectedDate )
	            {
	                $('#ContentPlace_start').datepicker('option', 'maxDate', selectedDate);
	            }
	        });
	        
	        // Inline datepicker
	        $('#inline').datepicker({
	            dateFormat: 'dd.mm.yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>'
	        });
	        
	        // Inline date range
	        $('#inline-start').datepicker({
	            dateFormat: 'dd.mm.yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>',
	            onSelect: function( selectedDate )
	            {
	                $('#inline-finish').datepicker('option', 'minDate', selectedDate);
	            }
	        });
	        $('#inline-finish').datepicker({
	            dateFormat: 'dd.mm.yy',
	            prevText: '<i class="fa fa-angle-left"></i>',
	            nextText: '<i class="fa fa-angle-right"></i>',
	            onSelect: function( selectedDate )
	            {
	                $('#inline-start').datepicker('option', 'maxDate', selectedDate);
	            }
	        });
        }

    };
}();
