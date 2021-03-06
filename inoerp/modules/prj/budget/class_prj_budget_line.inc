<?php

/**
 * inoERP
 *
 * @copyright   2014 Nishit R. Das
 * @license     https://www.mozilla.org/MPL/2.0/
 * @link        http://inoideas.org
 * @source code https://github.com/inoerp/inoERP
 */

/**
 * prj_budget_line
 *
 */
class prj_budget_line extends dbObject {

 public static $table_name = "prj_budget_line";
 public static $primary_column = "prj_budget_line_id";
 public static $parent_primary_column = "prj_budget_header_id";
 public static $key_column = "prj_project_line_id";
 public static $module = "prj";
 public $field_a = [
  'prj_budget_line_id',
  'prj_budget_header_id',
//  'prj_project_header_id',
  'description',
  'prj_project_line_id',
  'prj_resource_line_id',
  'uom_id',
  'quantity',
  'raw_cost',
  'burden_cost',
  'revenue_quantity',
  'revenue_amount',
  'created_by',
  'creation_date',
  'last_update_by',
  'last_update_date',
 ];
 public $initial_search = [
  'resource_type',
 ];
 public $requiredField = [
  'prj_budget_header_id',
  'prj_project_line_id',
 ];
 public $search = [
  '_show_update_path' => 1,
  '_show_view_path' => 1,
 ];
 public $fields_inForm_notInDataBase = [
  "employee_name",
  'task_number'
 ];
 public $pageTitle = " Budget Line"; //page Title
 public $prj_budget_line_id;
 public $prj_budget_header_id;
 public $prj_project_header_id;
 public $description;
 public $prj_project_line_id;
 public $prj_resource_line_id;
 public $uom_id;
 public $quantity;
 public $raw_cost;
 public $burden_cost;
 public $revenue_quantity;
 public $revenue_amount;
 public $average_rate;
 public $created_by;
 public $creation_date;
 public $last_update_by;
 public $last_update_date;
 public $employee_name;
 public $task_number;

 Public static function validation_types() {
  $header = option_line::find_by_keyColumn('SYS_VALIDATION_TYPE');
  $option_line = new option_line();
  $lines = $option_line->findBy_parentId($header->option_line_id);
  return $lines;
 }

}

//end of path class
?>
