<?php 
namespace view\login;

function index() {
?>
<h1 class="sr-only">ログイン</h1>
<div class="mt-5">
    <div class="text-center mb-4">
        <img width="65" src="images/logo.svg" alt="みんなのアンケート　サイトロゴ">
    </div>
    <div class="login-form bg-white p-4 shadow-sm mx-auto rounded">
        <form action="<?php echo CURRENT_URI; ?>" method="POST">
            <div class="form-group">
                <label for="id">ユーザーID</label>
                <input id="id" type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="pwd">パスワード</label>
                <input id="pwd" type="password" name="pwd" class="form-control">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <a href="<?php the_url('register'); ?>">アカウント登録</a>
                </div>
                <div>
                    <input type="submit" value="ログイン" class="btn btn-primary shadow-sm">
                </div>
            </div>
        </form>
    </div>
</div>
<?php } ?>