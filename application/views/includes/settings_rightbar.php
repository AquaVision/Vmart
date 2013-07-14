<aside class="db-sidebar">
    <div class="db-sidebar-inner">
        <nav class="db-nav">
            <?php
            if (isset($rightbar)) {
                if ($rightbar == "GENERALSETTINGS") {
                    ?>
                    <h5 class="muted" style="margin-left:0px; margin-top: 20px; margin-bottom: 4px;">Settings</h5>
                    <hr style="margin-left:0px; margin-top: 1px; margin-bottom: 8px;"/>
                    <ul>
                        <li  class="rightbarx"><a href="<?php echo site_url('settings/generalSettings') ?>"  >Account Settings</a></li>
                        <li  class="rightbarx"><a href="<?php echo site_url('settings/generalSettings') ?>"  >Shop Settings</a></li>
                    </ul>
                    <h5 class="muted" style="margin-left:0px; margin-top: 20px; margin-bottom: 4px;">Features and Upgrades</h5>
                    <hr style="margin-left:0px; margin-top: 1px; margin-bottom: 8px;"/>
                    <ul>
                        <li class="rightbarx"><a href="public_profile_settings.php" fsource="loggedin_Profile_Settings" >Upgrades</a></li>

                    </ul>
                    <?php
                }
            } else {
                ?>

                <ul>
                    <h5 class="muted">Account Settings</h5>
                    <li class="rightbarx"><a href="public_profile_settings.php" fsource="loggedin_Profile_Settings" > Settings</a></li>

                </ul>
            <?php } ?>
        </nav>
    </div>
</aside>