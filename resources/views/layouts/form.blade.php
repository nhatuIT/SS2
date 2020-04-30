@csrf
<div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ $shop->name }}"/>
</div>

<div>
    <label for="address">Address</label>
    <textarea name="address" id="address">
        {{ $shop->address }}
    </textarea>
</div>