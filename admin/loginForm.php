<?php include( $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php" ) ?>
	
	<div id="boxContain">
      <form action="admin.php?action=login" method="post" style="width: 50%;">
        <input type="hidden" name="login" value="true" />
 
        <ul>
 
          <li>
            <label for="username">Username</label>
            <input id="loginForm" type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />
          </li>
 
          <li>
            <label for="password">Password</label>
            <input id="loginForm" type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
          </li>
 
        </ul>
 
        <div class="buttons">
          <input type="submit" name="login" value="Login" />
        </div>
 
      </form>
	</div>
<?php include( $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ) ?>