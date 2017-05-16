<?php if ( is_array($addressess) && count($addressess) > 0 ) : ?>
<h1>Address List</h1>
<table>
<?php foreach( $addressess as $row ) : ?>
    <li><?php echo $row['fullname']; ?> </li>
    <li><?php echo $row['email']; ?> </li>
    <li><?php echo $row['addressline1']; ?> </li>
    <li><?php echo $row['city']; ?> </li>
    <li><?php echo $row['state']; ?> </li>
    <li><?php echo $row['zip']; ?> </li>
    <li><?php echo $row['birthday']; ?> </li>
    
<?php endforeach; ?>
</table>

<?php endif; ?>
