<?php if (!isset($_SESSION['user_id'])) {
    header('Location: /pellag/index.php?controller=User&action=logIn', true, 302);
} ?>

<div class="form-container" style="width: 70%; margin: 0 auto">
    <div class="dashboardcard">
        <h5 style="text-align: center">Update your Bio</h5>

        <form id="editBio" method="post" action="">
            <div class="form-group">
                <label for="bio"> New Bio:</label>
                <textarea rows="3" maxlength="255" class="md-textarea form-control" id="bio" name="bio"
                          placeholder="Please update bio here"></textarea>
                <small class="form-text text-muted">255 characters</small>
            </div>

            <input id="editBio" type="submit" name="editBio" value="Update"> <br>
        </form>
    </div>
</div>

