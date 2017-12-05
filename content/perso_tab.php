<?php // personal tab  ?>
<li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
             <!-- <img src="<?php echo get_gravatar($client_info["email"]); ?>" class="user-image" alt="User Image"> -->

              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo get_gravatar($client_info["email"]); ?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $client["uUsername"]; ?>
                  <small>Member since <?php echo date('d/m/Y', strtotime($client["uCreated"])); ?></small>
                </p>
              </li>

              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/user_profile.php?userId=<?php echo $client["userId"];?>&token=<?php echo generateToken($sessionid."user", $client["userId"]);?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="_root/logout.php" class="btn btn-default btn-flat" id="_btn_logout" >Sign out</a>
                </div>
              </li>
            </ul>
</li>

