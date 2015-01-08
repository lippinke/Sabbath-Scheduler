<?php include 'views/header.php' ?>
			<form>
				Event Name:
				<input type="text" name="eventname"><br>
				<!-- Congregations:
				<select name="congregation">
					<option value="salem">Salem</option>
					<option value="eugene">Eugene</option>
				</select><br> -->
				Location:
				<select name="location">
					<option value="salem">Salem</option>
					<option value="eugene">Eugene</option>
				</select><br>
				Date:
				<input type="date" name="eventdate"><br>
				Start Time:
				<input type="datetime-local" name="eventstarttime"><br>
				End Time:
				<input type="time" name="eventendtime"><br>
			</form>
<?php include 'views/footer.php' ?>