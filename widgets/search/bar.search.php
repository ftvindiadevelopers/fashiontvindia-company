<section class="search-section">
  <div class="section-content">
    <div class="search-bar">
      <div class="search">
        <form action="search" method="get">
          <div class="form-input">
            <input type="search" name="q" autocomplete="off">
            <input type="submit" value="Search">
            <div class="suggestions">

            </div>
          </div>
          <div class="filters">
            <button type="button">Advanced Filters</button>
            <div class="filters-window">
              <div class="duration-fromto">
                <label for="dateFrom">From:&nbsp;</label>
                <input type="datetime-local" name="date['from']" id="">
                <label for="dateTo">To:&nbsp;</label>
                <input type="datetime-local" name="date['to']" id="">
              </div>
              <div class="verticals">
                <h4>Select Verticals</h4>
                <div class="checkbox-group">
                  <?php
                  for ($i = 0; $i < 12; $i++) {
                  ?>
                    <div class="vertical">
                      <input type="checkbox" name="verticals[]" value="Vertical <?php echo $i; ?>">
                      <label for="">Vertical <?php echo $i; ?></label>
                    </div>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </form>
        <script>
          document.querySelector("input[type='search']").addEventListener("focusin", () => {
            document.querySelector(".suggestions").classList.add("expand");
          });
          document.querySelector("input[type='search']").addEventListener("focusout", () => {
            document.querySelector(".suggestions").classList.remove("expand");
          });
          document.querySelector(".filters button").addEventListener("click", () => {
            document.querySelector(".filters .filters-window").classList.toggle("expand");
          });
        </script>
      </div>
      <div class="filters">

      </div>
    </div>
  </div>
</section>