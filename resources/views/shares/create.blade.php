<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <p>
        <label for="share_name">Share Name</label><br>
        <input type="text" name="share_name" id="">
    </p>

    <p>
        <label for="share_name">Share Price</label><br>
        <input type="text" name="share_price" id="">
    </p>

    <p>
        <label for="share_name">Share Quantity</label><br>
        <input type="text" name="share_qty" id="">
    </p>
    
    <p>
        <button type="submit">Add</button>
    </p>
</form>