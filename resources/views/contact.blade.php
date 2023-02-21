@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/contact" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="content">Message:</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Send Message</button>
</form>