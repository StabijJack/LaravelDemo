<form action="{{ route('manyToManyOwnerRight.store') }}" method="POST">
    @csrf
    @include('manytomany.right.allfields')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
