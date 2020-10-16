

<div class="modal fade" id="positionForm" tabindex="-1" role="dialog" aria-labelledby="positionForm" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title overview-heading" id="positionForm">Apply Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="resumeForm" action="/careers" class="primary-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <input required autocomplete="off" type="text" id="name" name="name" placeholder="Name">
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <input required autocomplete="off" type="email" id="email" name="email" placeholder="Email Address">
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <input required autocomplete="off" type="text" id="phone" name="phone" placeholder="Phone Number">
                </div>
                <div class="col-12">
                    <input required autocomplete="off" type="file" id="resume" name="resume" placeholder="Resume">
                </div>
                <div class="col-12">
                    <button type="submit" class="primary-button button-sm full-width semi-rounded">
                        Apply!
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>