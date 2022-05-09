<section class="data-table">
  <div class="section-content">
    <div class="table-div">
      <table id="entryTable">
        <thead>
          <tr>
            <?php for ($j = 0; $j < 5; $j++) { ?>
              <th>Cell <?php echo $j; ?></th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 0; $i < 20; $i++) { ?>
            <tr>
              <?php for ($j = 0; $j < 5; $j++) { ?>
                <td>Cell <?php echo $i . "&nbsp;" . $j; ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          
        </tfoot>
      </table>
    </div>
  </div>
</section>