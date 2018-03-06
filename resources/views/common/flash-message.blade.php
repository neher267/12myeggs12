@if(session()->has('success'))
    <div class="alert alert-success flash" style="margin-top: 20px;">
        {{ session()->get('success') }}
    </div>
@endif