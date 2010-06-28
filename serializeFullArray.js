jQuery.fn.serializeFullArray = function () {
	var set = $(this).serializeArray();
	var output = {};
	for (field in set)
	{
	    var parts = set[field].name
	    	.split(/\]|\[/)
	    	.filter(function(part) {
		    	return !(part == '');
		   	});

	    var ref = output;

	    for (var segment in parts)
	    {
	        var key = parts[segment];
	        var value = {};

	        if (key == parts[parts.length - 1])
	        {
	            var value = set[field].value;
	        }

	        var objNew = {};
	        objNew[key] = value;

	        $.extend(true, ref, objNew);
	        ref = ref[key];
	    }
	}

    return output;
}