<form action="{{ route('manyToManyOwnerLeft.store') }}" method="POST">
    @csrf
    @include('manytomany.left.allfields')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
