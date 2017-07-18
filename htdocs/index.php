<div style='height:15%'>
	<h1>Reports</h1>
	<table style='text-align: left; padding: 4px; border-collapse: collapse; width: 100%;'>
		<tr style="border: 1px solid black;">
			<td><a href="/weekly_coverage_schedule.php">Weekly Coverage Schedule</a></td>
			<td><a href="/daily_master_schedule.php">Daily Master Schedule</a></td>
			<td><a href="/individual_practitioner_schedule.php">Individual Practitioner's Daily Schedule</a></td>
		</tr>
		<tr style="border: 1px solid black;">
			<td><a href="/physician_statement.php">Physician's Statement for Insurance Forms</a></td>
			<td><a href="/patient_monthly.php">Patient Monthly Statement</a></td>
			<td><a href="/prescription_label.php">Prescription Label and Receipt</a></td>
		</tr>
		<tr style="border: 1px solid black;">
			<td><a href="/lab_log.php">Daily Laboratory Log</a></td>
			<td><a href="/operating_room_schedule.php">Operating Room Schedule</a></td>
			<td><a href="/operating_room_log.php">Operating Room Log</a></td>
		</tr>
		<tr style="border: 1px solid black;">
			<td><a href="/monthly_activity.php">Monthly Activity Report</a></td>
			<td></td>
			<td></td>
		</tr>
	</table>
</div>
<br>
<div style='height:50%'>
	<h1>Custom Query</h1>
	<form id='customQuery' method="post" action="/query.php">
		<textarea name="query" rows="24" style='width:100%'></textarea><br>
		<input type="submit" value="Run Query">
	</form>
</div>
<br>
<div style='height:15%'>
	<h1>Insert/Update/Dete</h1>
	<table style='text-align: left; padding: 4px; border-collapse: collapse; width: 100%;'>
		<tr style="border: 1px solid black;">
			<td><a href='/add_to_patient.php'>Add an entry to Patient table</a></td>
			<td><a href='/update_patient.php'>Update an entry in Patient</a></td>
			<td><a href='/delete_patient.php'>Delete an entry from Patient</a></td>
		</tr>
	</table>
</div>