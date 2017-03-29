<br />

<div class="container">
    <h1>Add Address</h1>     
    
    <form action="#" method="post">
        
       Full Name: <input name="fullname" value="<?php echo $fullname; ?>" /> <br />
       Email: <input name="email" value="<?php echo $email; ?>" /> <br />       
       Address : <input name="addressline1" value="<?php echo $addressline1; ?>" /> <br />
       city: <input name="city" value="<?php echo $city; ?>" /> <br />
       <select name="state">
            <?php foreach ($states as $key => $value): ?> 
              <option value="<?php echo $key; ?>" <?php if ( $selectedState == $key ): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
            <?php endforeach; ?>
       </select>
       Zip: <input name="zip" value="<?php echo $zip; ?>" /> <br />
       Birthday: <input name="birthday" value="<?php echo $birthday; ?>" /> <br />
       
       <input type="submit" value="submit" class="btn btn-primary" />
    </form>
</div>