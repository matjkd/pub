<div  id="sidebox">
<img  id="opener" src="<?=base_url()?>images/template/flyerdirect/quotebutton.png" />

<a href="<?=base_url()?>design"><img src="<?=base_url()?>images/template/flyerdirect/design.png" /></a>
<a href="<?=base_url()?>print"><img src="<?=base_url()?>images/template/flyerdirect/print.png" /></a>
</div>

<div id="dialog" title="Get a Free Quote" style="display:none; ">
    
    
    <div id="contact_form">
	<?=form_open('email/quote');?>
	<br/>
	<p class="form_email">
            <?=form_label('Email')?><br/>
	<?=form_input('email', set_value('email'))?>
	</p>
        <?=form_label('Subject')?>
	<p class="form_subject">
	<?=form_input('subject', set_value('subject'))?>
	</p>
	
	<p class="form_message">
	<?=form_textarea('message', set_value('message'))?>
	</p>
	
Enter the word you see below<br/>



<input type="text" name="captcha" value="" /><?=form_label($captcha['image'])?>
</div>
	<?=form_hidden('ip_address', $this->input->ip_address())?>
	<?=form_hidden('time', $captcha['time'])?>
<div id="contact_submit"><?=form_submit('submit', 'Submit')?></div><br/>
	<?=form_close()?>
    
    
</div>