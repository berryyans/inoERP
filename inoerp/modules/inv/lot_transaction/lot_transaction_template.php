<div id ="form_header">
 <span class="heading">Lot Number Details </span>
 <div id="tabsHeader">
  <ul class="tabMain">
   <li><a href="#tabsHeader-1">Basic Info</a></li>
   <li><a href="#tabsHeader-2">lot Details</a></li>
  </ul>
  <div class="tabContainer">
   <div id="tabsHeader-1" class="tabContent">
    <div class="large_shadow_box"> 
     <ul class="column header_field">
      <li><label><i class="inv_lot_transaction_header_id select_popup clickable fa fa-search"></i>
        Lot Number Id </label><?php echo $f->text_field('inv_lot_number_id', $inv_lot_number_id_h, '', 'inv_lot_number_id') ?>
       <a name="show" href="form.php?class_name=inv_lot_transaction_v&<?php echo "mode=$mode"; ?>" class="show document_id inv_lot_transaction_header_id">
        <i class='fa fa-refresh'></i></a> 
      </li>
      <li><label>Lot Number</label><?php echo $f->text_field('lot_number', $lot_number_h, '', 'lot_number') ?>
      <li><label>Generation</label><?php echo $f->text_field_dr('generation'); ?></li>
      <li><label>Origination</label><?php echo $f->text_field_dr('origination_type'); ?></li>
      <li><label>Origination Date</label><?php echo $f->text_field_dr('origination_date'); ?></li>
      <li><label>Activation Date</label><?php echo $f->text_field_dr('activation_date'); ?></li>
     </ul>
    </div>
   </div>
   <div id="tabsHeader-2" class="tabContent">
    <div class="large_shadow_box"> 
     <ul class="column five_column">
      <li><label>Current Org Id : </label> <?php echo $f->text_field_dr('current_org_id'); ?></li>
      <li><label>Current Sub Inventory Id : </label> <?php echo $f->text_field_dr('current_org_id'); ?></li>
      <li><label>Current Locator Id : </label> <?php echo $f->text_field_dr('current_org_id'); ?></li>
     </ul>
    </div>
   </div>
  </div>
 </div>

</div>

<div id ="form_line" class="form_line"><span class="heading">Lot Transactions </span>
 <div id="tabsLine">
  <ul class="tabMain">
   <li><a href="#tabsLine-1">Info-1 </a></li>
   <li><a href="#tabsLine-2">Info-2 </a></li>
  </ul>
  <div class="tabContainer"> 
   <form action=""  method="post" id="inv_lot_transaction_entries_line"  name="inv_lot_transaction_entries_line">
    <div id="tabsLine-1" class="tabContent">
     <table class="form_table">
      <thead> 
       <tr>
        <th>lot Number</th>
        <th>Item Number</th>
        <th>Item Description</th>
        <th>Org Id</th>
        <th>Transaction Type</th>
        <th>From Sub Inventory </th>
        <th>From Locator </th>
        <th>Item Id M </th>
       </tr>
      </thead>
      <tbody class="form_data_line_tbody inv_lot_transaction_entries_values" >
       <?php
       $count = 0;
       foreach ($inv_lot_transaction_object as $inv_lot_transaction_v) {
        ?>         
        <tr class="inv_lot_transaction_entries<?php echo $count ?>">
         <td><?php $f->text_field_widr('lot_number'); ?></td>
         <td><?php $f->text_field_widr('item_number'); ?></td>
         <td><?php $f->text_field_widr('item_description'); ?></td>
         <td><?php $f->text_field_widsr('org_id'); ?></td>
         <td><?php $f->text_field_widr('transaction_type'); ?></td>
         <td><?php $f->text_field_widr('from_subinventory'); ?></td>
         <td><?php $f->text_field_widr('from_locator'); ?></td>
         <td><?php $f->text_field_widr('item_id_m'); ?></td>
        </tr>
        <?php
        $count = $count + 1;
       }
       ?>
      </tbody>
     </table>
    </div>
    <div id="tabsLine-2" class="tabContent">
     <table class="form_table">
      <thead> 
       <tr>
        <th>To Sub Inventory </th>
        <th>To Locator </th>
        <th>Transaction Id</th>
        <th>Transaction Type Id</th>
        <th>From Sub Inventory Id</th>
        <th>From Locator Id</th>
        <th>To Sub Inventory Id</th>
        <th>To Locator Id</th>
       </tr>
      </thead>
      <tbody class="form_data_line_tbody inv_lot_transaction_entries_values" >
       <?php
       $count = 0;
       foreach ($inv_lot_transaction_object as $inv_lot_transaction_v) {
        ?>         
        <tr class="inv_lot_transaction_entries<?php echo $count ?>">
         <td><?php $f->text_field_widr('to_subinventory'); ?></td>
         <td><?php $f->text_field_widr('to_locator'); ?></td>
         <td><?php $f->text_field_widsr('inv_transaction_id'); ?></td>
         <td><?php $f->text_field_widsr('transaction_type_id'); ?></td>

         <td><?php $f->text_field_widr('from_subinventory_id'); ?></td>
         <td><?php $f->text_field_widr('from_locator_id'); ?></td>
         <td><?php $f->text_field_widr('to_subinventory_id'); ?></td>
         <td><?php $f->text_field_widr('to_locator_id'); ?></td>
        </tr>
        <?php
        $count = $count + 1;
       }
       ?>
      </tbody>
     </table>
    </div>
   </form>
  </div>

 </div>
</div> 

<div id="pagination" style="clear: both;">
 <?php echo $pagination->show_pagination(); ?>
</div>

<div id="js_data">
 <ul id="js_contextMenu_data">
  <li class="docHedaderId" data-docHedaderId="inv_lot_transaction_id" ></li>
  <li class="btn1DivId" data-btn1DivId="inv_lot_transaction" ></li>
  <li class="btn2DivId" data-btn2DivId="form_line" ></li>
  <li class="tbodyClass" data-tbodyClass="form_data_line_tbody" ></li>
  <li class="noOfTabbs" data-noOfTabbs="3" ></li>
 </ul>
</div>