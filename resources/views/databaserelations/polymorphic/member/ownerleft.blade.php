<div class="form-group">
  <label for="polymorphicOwnerLeft">polymorphicOwnerLeft</label>
      <select class="form-control" name="polymorphic_owner_left_id" id="polymorphicOwnerLeft" aria-describedby="polymorphicOwnerLefthelp">
        <option value=0 >Mag ook leeg zijn</option>
        @foreach ($polymorphicOwnerLefts as $polymorphicOwnerLeft)
          @if($polymorphicMember->id == 0)
            <option value="{{ $polymorphicOwnerLeft->id }}" >{{ $polymorphicOwnerLeft->leftname }}</option>
          @else
            <option value="{{ $polymorphicOwnerLeft->id }}" 
              @if ($polymorphicMember->owner_id == $polymorphicOwnerLeft->id
              and $polymorphicMember->owner_type == 'polymorphic_owner_left') 
              selected @endif 
              >{{ $polymorphicOwnerLeft->leftname }}</option>
          @endif 
        @endforeach
      </select>
  </div>
  <small id="polymorphicOwnerLefthelp" class="text-muted">polymorphicOwnerLeft</small>
  