<div class="content-wrapper">
    <div class="col-sm-4">
        <button id="btnExport" onclick="fnExcelReport();" class='btn btn-success'>Export</button>
    </div>

    <table id="myTable" class="row-border table-responsive" style="width:100%">
    <div class="col-sm-4" >
        <thead>
            <tr>
                <th scope="col">CCO registration Number</th>
                <th scope="col">Establishment Name</th>
                <th scope="col">Address</th>
                <th scope="col">Contact Person</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Contact Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach($region_db as $rg) : ?>
                <tr class="table-active"> 
                    <td><?php echo $rg['cco_registration_no']; ?></td>
                    <td><?php echo $rg['name_of_establishment']; ?></td>
                    <td><?php echo $rg['location_of_establishment']; ?></td>
                    <td><?php echo $rg['name_managing_head']; ?></td>
                    <td><?php echo $rg['contact_details']; ?></td>
                    <td><?php echo $rg['pco_email']; ?></td>
                    <td>
                        <a href="inventory/<?php echo $rg['pcb_inventoryID'] ?>" data-toggle="tooltip" title="Inventory"><i class="fa fa-list" style="font-size:24px"></i></a> | 
                        <a href="plan/<?php echo $rg['pcb_inventoryID'] ?>" data-toggle="tooltip" title="PCB Management Plan"><i class="fa fa-tasks" style="font-size:24px"></i></a>
                    </td>
                </tr>   
            <?php endforeach; ?>
        </tbody>
    </table>
   
</div>
