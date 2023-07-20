<form action="{{ route('calculateDifference') }}" method="post">
    @csrf
    <label for="date1">Date 1:</label>
    <input type="date" name="date1" id="date1">
    <br>
    <label for="date2">Date 2:</label>
    <input type="date" name="date2" id="date2">
    <br>
    <button type="submit">Calculate Difference</button>
</form>
