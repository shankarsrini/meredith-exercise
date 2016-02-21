<div class="customer-listing-page">
  <?php if(isset($data['name']) && !empty($data['name'])) : ?>
    <div class="customer-listing-label">Customer Name<span>:</span> </div>
	<div class="customer-listing-content"><?php print $data['name']; ?></div>
  <?php endif; ?>
  <?php if(isset($data['dob']) && !empty($data['dob'])) : ?>
    <div class="customer-listing-label">Date Of Birth<span>:</span> </div>
	<div class="customer-listing-content"><?php print $data['dob']; ?></div>
  <?php endif; ?>
  <?php if(isset($data['email']) && !empty($data['email'])) : ?>
    <div class="customer-listing-label">Email ID<span>:</span> </div>
	<div class="customer-listing-content"><?php print $data['email']; ?></div>
  <?php endif; ?>
  <?php if(isset($data['address']) && !empty($data['address'])) : ?>
    <div class="customer-listing-label">Address<span>:</span> </div>
	<div class="customer-listing-content"><?php print $data['address']; ?></div>
  <?php endif; ?>
  <?php if(isset($data['phone_number']) && !empty($data['phone_number'])) : ?>
    <div class="customer-listing-label">Phone Number<span>:</span> </div>
	<div class="customer-listing-content"><?php print $data['phone_number']; ?></div>
  <?php endif; ?>
</div>