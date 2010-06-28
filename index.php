<html>
	<head>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="serializeFullArray.js"></script>


		<script type="text/javascript">
		$(document).ready(function() {
			console.dir($('#example input[name^=array]').serializeFullArray());
			console.dir($('#example').serializeFullArray());
			console.dir($('form').serializeFullArray());
		});
		</script>

	</head>

	<body>

		<form id="example">
			<input name="this" />
			<input name="that" />
			<input name="other" />
			<br />
			<input name="mini[arr1]" />
			<input name="mini[arr2]" />
			<input name="mini[arr3]" />
			<br />
			<input name="array[1][name]" />
			<input name="array[1][email]" />
			<input name="array[2][name]" />
			<input name="array[2][email]" />
			<input name="array[3][name]" />
			<input name="array[3][email]" />
			<input name="array[4][name]" />
			<input name="array[4][email]" />
			<input name="array[5][name]" />
			<input name="array[5][email]" />
			<input name="array[6][name]" />
			<input name="array[6][email]" />
			<input name="array[7][name]" />
			<input name="array[7][email]" />
			<br />
			<input type="hidden" name="chkbox[1]" value="0" />
			<input type="checkbox" name="chkbox[1]" value="1" />
			<input type="hidden" name="chkbox[2]" value="0" />
			<input type="checkbox" name="chkbox[2]" value="1" />
			<input type="hidden" name="chkbox[3]" value="0" />
			<input type="checkbox" name="chkbox[3]" value="1" />
			<input type="hidden" name="chkbox[4]" value="0" />
			<input type="checkbox" name="chkbox[4]" value="1" />
			<br />
			<input type="hidden" name="radiobox" value="0" />
			<input type="radio" name="radiobox" value="1"/>
			<input type="radio" name="radiobox" value="2"/>
			<input type="radio" name="radiobox" value="3"/>
			<input type="radio" name="radiobox" value="4"/>
			<br />
			<select name="select">
				<option>Value1</option>
				<option>Value2</option>
				<option>Value3</option>
				<option>Value4</option>
				<option>Value5</option>
			</select>
		</form>

		<form id="example-two">
			<input name="this" />
			<input name="that" />
			<input name="other" />
			<br />
			<input name="mini[arr1]" />
			<input name="mini[arr2]" />
			<input name="mini[arr3]" />
			<br />
			<input name="set[1][name]" />
			<input name="set[1][email]" />
			<input name="set[2][name]" />
			<input name="set[2][email]" />
			<input name="set[3][name]" />
			<input name="set[3][email]" />
			<input name="set[4][name]" />
			<input name="set[4][email]" />
			<input name="set[5][name]" />
			<input name="set[5][email]" />
			<input name="set[6][name]" />
			<input name="set[6][email]" />
			<input name="set[7][name]" />
			<input name="set[7][email]" />
			<br />
			<input type="checkbox" name="chkbox[1]" />
			<input type="checkbox" name="chkbox[2]" />
			<input type="checkbox" name="chkbox[3]" />
			<input type="checkbox" name="chkbox[4]" />
			<br />
			<input type="radio" name="radiobox" value="1"/>
			<input type="radio" name="radiobox" value="2"/>
			<input type="radio" name="radiobox" value="3"/>
			<input type="radio" name="radiobox" value="4"/>
			<br />
			<select name="select">
				<option>Value1</option>
				<option>Value2</option>
				<option>Value3</option>
				<option>Value4</option>
				<option>Value5</option>
			</select>
		</form>
	</body>
</html>