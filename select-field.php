<select id="<?php echo $id; ?>" name="<?php echo $id; ?>" data-label-value="<?php echo $title; ?>">

  <option disabled value=""><?php echo $title; ?></option>
  
  <?php foreach ($items as $item): ?>
    <option value="<?php echo $item['value']; ?>"><?php echo $item['title'] ?></option>
  <?php endforeach; ?>

</select>
