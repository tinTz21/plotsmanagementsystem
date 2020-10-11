<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update">
 Update Customer Details
</button>

<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="updateLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentsLabel">Update Customer Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{route('customer.update',$customer->id)}}">
        @csrf
          <div class="row">
            <div class="col-md-6">
              <label>Name</label>
              <input type="text" value="{{$customer->name}}" name="name" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Email</label>
              <input type="text" name="email" value="{{$customer->email}}" placeholder="e.g.somebody@email.com" class="form-control">
            </div>
          </div>

             <div class="row">
            <div class="col-md-6">
              <label>Phone</label>
              <input type="number" value="{{$customer->phone}}" name="phone" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Country</label>
              <input type="text" value="{{$customer->country}}" name="country" class="form-control" placeholder="e.g. Tanzania">
            </div>
          </div>

             <div class="row">
            <div class="col-md-6">
              <label>Region</label>
              <input type="text" name="region" value="{{$customer->region}}" class="form-control">
            </div>
            <div class="col-md-6">
              <label>District</label>
              <input type="text" value="{{$customer->district}}" name="district" class="form-control">
            </div>
          </div>

             <div class="row">
            <div class="col-md-6">
              <label>Street</label>
              <input type="text" name="street" value="{{$customer->street}}" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Sex</label>
              <input type="text" value="{{$customer->sex}}" name="sex" class="form-control">
            </div>
          </div>

             <div class="row">
            <div class="col-md-6">
              <label>Date Of Birth</label>
              <input type="date" name="yob" value="{{$customer->yob}}" class="form-control">
            </div>
            <div class="col-md-6">
              <label>ID TYPE</label>
              <input type="text" name="identification" value="{{$customer->identification}}" class="form-control">
            </div>
          </div>

            <div class="row">
            <div class="col-md-6">
              <label>ID Number</label>
              <input type="text" name="identification_number" value="{{$customer->identification_number}}" class="form-control">
            </div>
          </div>

         

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>