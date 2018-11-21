<form action="{{ route('polymorphicMember.store') }}" method="POST">
    @csrf
    @include('polymorphic.member.ownerleft')        
    @include('polymorphic.member.allfields')        
    @include('polymorphic.member.ownerright')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
