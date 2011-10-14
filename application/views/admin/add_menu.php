



<?=form_open("admin/add_new_menu")?>
Title:<br/>
 <?=form_input('title')?>
<br/>

Start Date:<br/>
 <input type="text" id="datepicker" name="startdate"/>
<input type="hidden" id="alternate" name="startdate_unix"/>
<br/>
End Date<br/>
<input type="text" id="datepicker2" name="enddate"/>
<input type="hidden" id="alternate2" name="enddate_unix"/>

<textarea cols=65 rows=20 name="content" id="content" class='wymeditor'></textarea>
Published:<br/>
<input type="checkbox" name="published" id="published" value="accept"  style="margin:10px" />
<br/>




<input type="submit" class="wymupdate" />
<?=form_close()?>
