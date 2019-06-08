<div class="container subamos">
    <div class="row">
        <div class="col-12">
            <?php echo $error;?>    
            <?php echo form_open_multipart('upload/do_upload');?>
                <input type="file" name="userfile" size="20" />
                <br /><br />
                <input type="submit" value="upload" />
            </form>
        </div>
    </div>
</div>