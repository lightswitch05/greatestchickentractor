<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact | World's Greatest Chicken Tractor</title>
        <meta name="description" content="Contact information for the World's Greatest Chicken Tractor. Have questions? We have answers, just send us an email and we'll get back to you.">
        <?php include './partials/_head_includes.php'; ?>
  </head>

<?php include './partials/_toolbar.php'; ?>

<? if(strcasecmp($_GET['sent'], 'true') == 0) { ?>
    <div class="flash">
        <div class="alert alert-success">Message sent, please be patient and we will get back with you soon!
          <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    </div>
<? } ?>

<div class="container">
    <h1>Contact Us</h1>
    <p>Have questions or comments? We would love to hear them! Simply fill out this little form and we will get right back to you. Don't worry about spam, we will never use your email address for anything other than answering your questions.</p>
    <form class="form-horizontal" action="/webformmailer.php" method="post"> 
        <input type="hidden" name="redirect" value="contact.php?sent=true" />
        
        <div class="control-group">
            <label class="control-label" for="full-name"><i class="icon-user"></i> Full Name</label>
            <div class="controls">
              <input id="full-name" class="span6" type="text" name="FirstName" placeholder="Full Name"/>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="subject"><i class="icon-question-sign"></i> Subject</label>
            <div class="controls">
              <input id="subject" class="span6" type="text" name="subject" placeholder="Subject"/>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="email"><i class="icon-envelope"></i> Email</label>
            <div class="controls">
              <input id="email" class="span6" type="email" name="email" placeholder="Email" required="required"/>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="comments"><i class="icon-pencil"></i> Comments</label>
            <div class="controls">
              <textarea id="comments" class="span6" name="comments" rows="10" required="required" placeholder="Comments"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <input class="btn btn-primary" type="submit" name="submit" value="Send Message"/>
        </div>
        <input type="hidden" name="form_order" value="alpha"/>
        <input type="hidden" name="form_delivery" value="digest"/>
        <input type="hidden" name="form_format" value="html"/>
    </form>
</div>


<?php include './partials/footer.php'; ?>