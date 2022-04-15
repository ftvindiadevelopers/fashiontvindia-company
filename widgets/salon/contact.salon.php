<?php
function hasMap()
{
  return true;
}
function hasTimeSlots()
{
  return true;
}
function hasContact()
{
  return true;
}
function hasNote()
{
  return true;
}
function getMap()
{
  if (hasMap()) {
?>
    <embed src="" type="">
<?php
  }
}
?>
<?php
function getContactSlots()
{
?>
  <article class="contact-timeslots">
    <div class="article-content">
      <div class="article-title">
        <span>Contact & Business Hours</span>
      </div>
      <div class="article-body">
        <?php
        if (hasContact()) {
        ?>
          <div class="call">
            <label for="">+91 9999887766</label>
            <a href="">Call</a>
          </div>
        <?php
        }
        ?>
        <?php
        if (hasTimeSlots()) {
          $slots = array(
            "Sunday" => "Closed",
            "Monday" => ["from"=>"9:00 AM","to"=>"9:00 PM"],
            "Tuesday" => ["from"=>"9:00 AM","to"=>"9:00 PM"],
            "Wednesday" => ["from"=>"9:00 AM","to"=>"9:00 PM"],
            "Thursday" => ["from"=>"9:00 AM","to"=>"9:00 PM"],
            "Friday" => ["from"=>"9:00 AM","to"=>"9:00 PM"],
            "Saturday" => ["from"=>"9:00 AM","to"=>"9:00 PM"],
          );
        ?>
          <div class="timeslots">
            <table>
              <?php foreach ($slots as $key => $value) { ?>
                <tr>
                  <td><?php echo $key ?></td>
                  <td><?php echo (gettype($value) == "array")? $value["from"] . " - " . $value["to"] : $value ;?></td>
                  <!-- <td><?php echo gettype($value);?></td> -->
                </tr>
              <?php } ?>
            </table>
          </div>
        <?php
        }
        if (hasNote()){
        ?>
        <div class="note">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis nisi voluptate, ex ipsa eius dicta eaque officia necessitatibus voluptates nulla?
          </p>
        </div>
        <?php }?>
      </div>
    </div>
  </article>
<?php
}
?>