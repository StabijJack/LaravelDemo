<a class="btn btn-primary info" href="/allFieldTypes" role="button">Show All</a>
<a class="btn btn-primary info" href="/allFieldTypes/create" role="button"> New</a>
@if ($allFieldTypes->id > 0)
    <a class="btn btn-primary info" href="/allFieldTypes/{{ $allFieldTypes->id }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="/allFieldTypes/{{ $allFieldTypes->id }}/edit" role=" button"> Edit</a>
    <a class="btn btn-primary danger" href="/allFieldTypes/{{ $allFieldTypes->id }}/delete" role=" button"> Delete</a>
@endif