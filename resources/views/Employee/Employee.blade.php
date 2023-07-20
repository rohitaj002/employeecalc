

<form action="{{ route('add') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="number" name="amount" placeholder="Amount">
    <select name="type">
        <option value="earning">Earning</option>
        <option value="deduction">Deduction</option>
    </select>
    <button type="submit">Add</button>
</form>

<ul>
@if(isset($earningsDeductions))
    @foreach($earningsDeductions as $earningDeduction)
    
        <li>
            {{ $earningDeduction->name }} - {{ $earningDeduction->amount }} - {{ $earningDeduction->type }}
            <a href="{{ route('remove', ['id' => $earningDeduction->id])??'' }}">Remove</a>
        </li>

    @endforeach
@endif
</ul>

<a href="{{ route('calculateTotal') }}">Calculate Total</a>
