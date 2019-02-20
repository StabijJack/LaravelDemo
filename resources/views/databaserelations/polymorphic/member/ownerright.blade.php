<div class="form-group">
  <label for="polymorphicOwnerRight">polymorphicOwnerRight</label>
      <select class="form-control" name="polymorphic_owner_right_id" id="polymorphicOwnerRight" aria-describedby="polymorphicOwnerRighthelp">
        <option value=0 >Mag ook leeg zijn</option>
        @foreach ($polymorphicOwnerRights as $polymorphicOwnerRight)
          @if($polymorphicMember->id == 0)
            <option value="{{ $polymorphicOwnerRight->id }}" >{{ $polymorphicOwnerRight->rightname }}</option>
          @else
            <option value="{{ $polymorphicOwnerRight->id }}" 
              @if ($polymorphicMember->owner_id == $polymorphicOwnerRight->id
              and $polymorphicMember->owner_type == 'polymorphic_owner_right') 
              selected @endif 
              >{{ $polymorphicOwnerRight->rightname }}</option>
          @endif 
        @endforeach
      </select>
  </div>
  <small id="polymorphicOwnerRighthelp" class="text-muted">polymorphicOwnerRight</small>
  