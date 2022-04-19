<div class="main-window p-2">
    <div class="wrap">
        <div class="controls py-2">
            <div class="controls-form">
                <form action="" method="">
                    <div class="lead-list">
                        <select class="form-control form-select" id="selectedVertical" name="vertical" aria-label="Default select example">
                            <option selected>Select Verticals</option>
                            <option value="1">FTV Concept</option>
                            <option value="1">FTV Media</option>
                            <option value="1">FTV Franchise</option>
                            <option value="1">FTV Events</option>
                        </select>
                    </div>
                    <div class="calendar-widget">
                        <label for="dateFrom">Date from: </label><input class="form-control" type="date" name="datefrom" id="dateFrom" max="<?php echo date('Y-m-d');?>">
                    </div>
                    <div class="calendar-widget">
                        <label for="dateTo">Date to: </label><input class="form-control" type="date" name="dateto" id="dateTo" max="<?php echo date('Y-m-d');?>">
                    </div>
                    <div class="buttons">
                        <input class="btn btn-primary" type="submit" value="Filter Data">
                    </div>
                </form>
            </div>
        </div>
        <div class="table-content p-3">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/api/api.php"; ?>
        </div>
    </div>
</div>