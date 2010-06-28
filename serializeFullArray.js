jQuery.fn.serializeFullArray = function () {
	var set = $(this).serializeArray();
	var output = {};
	for (field in set)
	{
	    var parts = set[field].name.split(/\]|\[/).filter(function(part) {
	        if (part == '')
	        {
	            return false;
	        }
	        return true;
	    });

	    var ref = output;

	    for (segment in parts)
	    {
	        var key = parts[segment];

	        if (key == parts[parts.length - 1])
	        {
	            var value = set[field].value;
	        }
	        else
	        {
	            var value = {};
	        }
	        var objNew = new Object();
	        objNew[key] = value;

	        $.extend(true, ref, objNew);
	        ref = ref[key];
	    }
	}

    return output;
}