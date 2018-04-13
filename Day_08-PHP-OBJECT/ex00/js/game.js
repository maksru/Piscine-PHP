
	function render_ship(item, index) {
		var start = parseInt(item.position[0] + (item.position[1] * 100));
		for (var y = 0; y < item.size[1]; y++) {
			for (var x = 0; x < item.size[0]; x++) {
				var eval = parseInt(start + x + (y * 100));
				eval = "#case" + eval;
				$(eval).css("background-color", item.owner);
				$(eval).click(function () {
					alert("ship " + item.name + " of player " + item.owner + " clicked");
				});
			}
		}
	}


	$.get("/api/map.php", function(data, status) {
		if (data) {
			data.forEach(render_ship);
		}
		else {
			alert("Cannot receive map information from server.")
		}
	});
