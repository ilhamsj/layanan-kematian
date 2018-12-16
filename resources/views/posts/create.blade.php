

    <form action="{{'posts.store'}}" method="POST" >
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body Content</label>
            <input type="text" class="form-control" name="body">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form> 
