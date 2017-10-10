<form method="POST" action="/customers">
    {!! csrf_field() !!}
    <label>Customer First Name</label><input type="text" name="customerFirstName"/><br />
    <label>Customer Last Name</label><input type="text" name="customerLastName"/><br />
    <label>Active - Yes or No?</label><input type="text" name="customerStatus"/><br />
    <label>Customer Email</label><input type="text" name="customerEmail"/><br />
    <label>Last Active Date</label><input type="date" name="lastActive"/><br />
    <input type="submit" value="Create"/>
</form>
