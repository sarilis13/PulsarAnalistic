@if(session("mensaje"))
<div class="alert alert-success alert-dismissible" data-auto-dismiss="3000">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <ul>
        <li>{{ session("mensaje") }}</li>
    </ul>
</div>
@endif