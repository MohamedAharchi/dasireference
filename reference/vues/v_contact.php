<div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="index.php?uc=contact&action=validMessage" method="POST" class="form-horizontal">
                <div class="modal-header">
                    <h4>Contact</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="contact-name" class="col-lg-2 control-label">Your name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="contact-name" name="contact-name" placeholder="Name" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact-mail" class="col-lg-2 control-label">Your e-mail</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="contact-mail" name="contact-mail" placeholder="you@example.com" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact-message" class="col-lg-2 control-label">Your message</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="contact-message" rows="8" required ></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Send</button>
                    <a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>                            
                </div>
            </form>
        </div>
    </div>
</div>