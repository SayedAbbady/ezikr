<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit section background</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="mt-3" enctype="multipart/form-data" accept-charset="utf-8" method="POST" id="chooseusBgEdit">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="modal-body">
          <img src="{{asset('assets/images/chooseus/'.$chooseFirst->w_image)}}" alt="">
          <div class="form-group input-File-Custom">
            <label for="">Select Image</label>
            <input type="file" name="newFile" id="file" class="input-file sliderUpload-main">
              <label for="file" class="btn btn-tertiary js-labelFile">
                <i class="icon fa fa-check"></i>
                <span class="js-fileName ">{{$chooseFirst->w_image??'Choose a file'}}</span>
              </label>
              <small class="text-danger errorClass font-weight-bold" id="newFileErrors"></small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary closeModelDamiy" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>