<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"E:\phpStudy\WWW\tp5.0\public/../application/admin\view\Liqi\edit.html";i:1524709123;s:73:"E:\phpStudy\WWW\tp5.0\public/../application/admin\view\public\header.html";i:1512561465;s:73:"E:\phpStudy\WWW\tp5.0\public/../application/admin\view\public\footer.html";i:1472804942;}*/ ?>

<form action="<?php echo url('liqi/edit_ok','id='.$data['id']); ?>" method="post" class="form-x">
<div class="form-group">
    <div class="label">
        <label></label>
    </div>
    <div class="field">
        <input type="text" name="name" class="input" value="<?php echo $data['name']; ?>">
    </div>
</div>
<div class="form-button">
    <input type="submit" value="提交" class="button bg-main">
</div>
</form>
<?php if((! \think\Request::instance()->isPjax())): ?>
        </div>
    </div>
</body>
</html>
<?php endif; ?>