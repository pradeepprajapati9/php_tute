<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

         <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value=" " />
            <input type="text" name="sname" value=" " />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="semail" value="<?php   ?>"/>
      </div>
      <div class="form-group">
          <label>Password</label>
          <input type="password" name="spsd" value="<?php   ?>"/>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="number" name="sphone" value="<?php ?>"/>
      </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    
</div>
</div>
</body>
</html>
