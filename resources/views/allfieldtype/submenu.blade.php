<a class="btn btn-primary info" href="/allFieldType" role="button">Show All</a>
<a class="btn btn-primary info" href="/allFieldType/create" role="button"> New</a>
@if ($allFieldType->id > 0)
    <a class="btn btn-primary info" href="/allFieldType/{{ $allFieldType->id }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="/allFieldType/{{ $allFieldType->id }}/edit" role=" button"> Edit</a>
    <a class="btn btn-primary danger" href="/allFieldType/{{ $allFieldType->id }}/delete" role=" button"> Delete</a>
@endif