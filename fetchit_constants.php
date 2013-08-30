<?php
define("F2_D7_NODE_TBLNAME","node");
define("F2_D7_NODE_NID_FLDNAME","nid");
define("F2_D7_NODE_TYPE_FLDNAME","type");

// CTYPENAMEs (field instance bundle names)
define("F2_D7_SETTINGS_CTYPE_NAME","fetchit2_settings");
define("F2_D7_CTYPES_CTYPE_NAME","fetchit2_content_types");
define("F2_D7_HTMLTBLS_CTYPE_NAME","fetchit2_html_tables");  // type 0

// F2_D7_SETTINGS_CTYPE_NAME (fetchit2_settings) field names (CTYPEFIELDNAME)
// define("F2_D7_SETTINGS_CTYPE_NAME", "fetchit2_settings");
   define("F2_D7_SETTINGS_MNAME","root_menu_name");
   define("F2_D7_SETTINGS_MNAME_DEF","fetchit_menu");
   define("F2_D7_SETTINGS_MTITL","root_menu_title");
   define("F2_D7_SETTINGS_MTITL_DEF","fetchit");
   define("F2_D7_SETTINGS_DRCMX","data_records_max");
   define("F2_D7_SETTINGS_DRCMX_DEF",20);
   define("F2_D7_SETTINGS_CTYPE_MNAME","field_fetchit2_root_menu_name");
   define("F2_D7_SETTINGS_CTYPE_MTITL","field_fetchit2_root_menu_title");
   define("F2_D7_SETTINGS_CTYPE_DRCMX","field_fetchit2_data_records_max");

// F2_D7_CTYPES_CTYPE_NAME (fetchit2_content_types) field names (CTYPEFIELDNAME)
// define("F2_D7_CTYPES_CTYPE_NAME", "fetchit2_content_types");
   define("F2_D7_CTYPES_CTYPE_INDEX","field_fetchit2_content_type");
   define("F2_D7_CTYPES_CTYPE_ENABL","field_fetchit2_type_enabled");

// Drupal 7 core custom content (fields) naming conventions
define("F2_D7_FIELD_TBL_PREFIX","field_data_");
// define("F2_D7_FIELD_TBLNAME",F2_D7_FIELD_TBL_PREFIX.CTYPEFIELDNAME);
define("F2_D7_FIELD_VAL_SUFFIX","_value");
define("F2_D7_FIELD_TYPE_FLDNAME","entity_type");
define("F2_D7_FIELD_SUBTYPE_FLDNAME","bundle");
define("F2_D7_FIELD_TYPEID_FLDNAME","entity_id");

// common fields for all fetchit ctypes
   define("F2_D7_CTYPE_ENABLE","field_fetchit2_content_enabled");
   define("F2_D7_CTYPE_ENABLE_TBL",F2_D7_FIELD_TBL_PREFIX.F2_D7_CTYPE_ENABLE);
   define("F2_D7_CTYPE_ENABLE_FLD",F2_D7_CTYPE_ENABLE.F2_D7_FIELD_VAL_SUFFIX);
   define("F2_D7_CTYPE_DBHOST","field_fetch_it_db_host");
   define("F2_D7_CTYPE_DBHOST_TBL",F2_D7_FIELD_TBL_PREFIX.F2_D7_CTYPE_DBHOST);
   define("F2_D7_CTYPE_DBHOST_FLD",F2_D7_CTYPE_DBHOST.F2_D7_FIELD_VAL_SUFFIX);
   define("F2_D7_CTYPE_DBTYPE","field_fetch_it_db_type");
   define("F2_D7_CTYPE_DBPORT","field_fetch_it_db_port");
   define("F2_D7_CTYPE_DBNAME","field_fetch_it_db_name");
   define("F2_D7_CTYPE_DBUSER","field_fetch_it_db_login");
   define("F2_D7_CTYPE_DBPW","field_fetch_it_db_password");
   define("F2_D7_CTYPE_VIEWNM","field_fetch_it_view_name");
   define("F2_D7_CTYPE_UIDFLD","field_fetchit2_user_uid_field");
   define("F2_D7_CTYPE_KEYFLD","field_fetchit2_key_field");
   define("F2_D7_CTYPE_RECSEL","field_fetchit2_record_select");
   define("F2_D7_CTYPE_RECTBL","field_fetchit2_record_select_tbl");
   define("F2_D7_CTYPE_SUBLBL","field_fetchit2_submit_label");
   define("F2_D7_CTYPE_POSTFN","field_fetchit2_post_function");
   define("F2_D7_CTYPE_REDIR","field_fetchit2_redirect");
   define("F2_D7_CTYPE_VALID","field_fetchit2_validate");
   define("F2_D7_CTYPE_SUBMIT","field_fetchit2_submit");
   define("F2_D7_CTYPE_CTITLE","field_fetchit2_content_title");
   define("F2_D7_CTYPE_CDESC","field_fetchit2_content_desc");
   define("F2_D7_CTYPE_ABOVE","field_fetchit2_custom_above");
   define("F2_D7_CTYPE_BELOW","field_fetchit2_custom_below");

// define("F2_D7_FIELD_VALUE_FLDNAME",CTYPEFIELDNAME.F2_D7_FIELD_VAL_SUFFIX);

define("F_DR_NID_FLD","nid");
define("F_DR_TBLNAME_PREFIX","content_type_");
define("F_DR_TBLNAME_F2_PREFIX",F_DR_TBLNAME_PREFIX."fetchit_");
define("F_DR_TBLNAME_FLD_PREFIX","content_field_");
define("F_DR_TBLNAME_FLD_F2_PREFIX",F_DR_TBLNAME_FLD_PREFIX."fetchit_");
define("F_DR_TBLNAME_FLD_F2_PREFIX_OLD",F_DR_TBLNAME_FLD_PREFIX."fetch_it_");
define("F_DR_FLDNAME_PREFIX","field_fetchit_");
define("F_DR_FLDNAME_PREFIX_OLD","field_fetch_it_");
define("F_DR_FLDNAME_SUFFIX","_value");
define("F_DR_NODE_BODY_TBL","node_revisions");
define("F_DR_NODE_BODY_FLD","body");
define("F_DR_PAGE_CONTENT_TBL","fetchit_page_content");
define("F_DR_PAGE_CONTENT_PAGE_FLD","page_index");
define("F_DR_PAGE_CONTENT_TYPE_FLD","fetchit_page_type");
define("F_DR_PAGE_CONTENT_NID_FLD","fetchit_page_nid");
define("F_DR_BLOCK_CONTENT_TBL","fetchit_block_content");
define("F_DR_BLOCK_CONTENT_DELTA_FLD","delta");
define("F_DR_BLOCK_CONTENT_TYPE_FLD","fetchit_block_type");
define("F_DR_BLOCK_CONTENT_NID_FLD","fetchit_block_nid");
define("F_DR_TYPES_TBL",F_DR_TBLNAME_F2_PREFIX."content_types");
define("F_DR_TYPES_FLD","field_fetchit_content_type_value");
define("F_DR_TYPES_FLD_ENABLED","field_fetchit_type_enabled_value");
define("F_DR_TYPE_0_TBL",F_DR_TBLNAME_F2_PREFIX."html_tables");
define("F_DR_TYPE_HTML_TABLE_NDX",0);
//define("F_DR_TYPE_1_TBL",F_DR_TBLNAME_F2_PREFIX."html_params");
define("F_DR_TYPE_2_TBL",F_DR_TBLNAME_F2_PREFIX."gviz");
define("F_DR_TYPE_GVIZ_NDX",2);
//define("F_DR_TYPE_3_TBL",F_DR_TBLNAME_F2_PREFIX."gviz_params");
define("F_DR_TYPE_4_TBL",F_DR_TBLNAME_F2_PREFIX."parameters");
define("F_DR_TYPE_PARAMETER_NDX",4);
//define("F_DR_TYPE_5_TBL",F_DR_TBLNAME_F2_PREFIX."html_append");
//define("F_DR_TYPE_6_TBL",F_DR_TBLNAME_F2_PREFIX."gviz_append");
define("F_DR_TYPE_7_TBL",F_DR_TBLNAME_F2_PREFIX."append_record");
define("F_DR_TYPE_APPEND_RECORD_NDX",7);
define("F_DR_TYPE_8_TBL",F_DR_TBLNAME_F2_PREFIX."editable_grid");
define("F_DR_TYPE_EDITABLE_GRID_NDX",8);
define("F_DR_TYPE_9_TBL","unused");
define("F_DR_TYPE_10_TBL",F_DR_TBLNAME_F2_PREFIX."ol_map");
define("F_DR_TYPE_OL_MAP_NDX",10);
define("F_DR_CONTENT_ENABLED_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."content_enabled");
define("F_DR_CONTENT_ENABLED_FLD",F_DR_FLDNAME_PREFIX."content_enabled".F_DR_FLDNAME_SUFFIX);
define("F_DR_PREQRY_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."pre_function");
define("F_DR_PREQRY_FLD",F_DR_FLDNAME_PREFIX."pre_function".F_DR_FLDNAME_SUFFIX);
define("F_DR_POSTQRY_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."post_function");
define("F_DR_POSTQRY_FLD",F_DR_FLDNAME_PREFIX."post_function".F_DR_FLDNAME_SUFFIX);
define("F_DR_REDIRECT_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."redirect");
define("F_DR_REDIRECT_FLD",F_DR_FLDNAME_PREFIX."redirect".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_ABOVE_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."custom_above");
define("F_DR_CONTENT_ABOVE_FLD",F_DR_FLDNAME_PREFIX."custom_above".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_BELOW_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."custom_below");
define("F_DR_CONTENT_BELOW_FLD",F_DR_FLDNAME_PREFIX."custom_below".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_BETWN_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."custom_between");
define("F_DR_CONTENT_BETWN_FLD",F_DR_FLDNAME_PREFIX."custom_between".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_TITLE_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."content_title");
define("F_DR_CONTENT_TITLE_FLD",F_DR_FLDNAME_PREFIX."content_title".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_DESC_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."content_desc");
define("F_DR_CONTENT_DESC_FLD",F_DR_FLDNAME_PREFIX."content_desc".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_CLLPSBL_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."collapsible");
define("F_DR_CONTENT_CLLPSBL_FLD",F_DR_FLDNAME_PREFIX."collapsible".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_CLLPSD_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."collapsed");
define("F_DR_CONTENT_CLLPSD_FLD",F_DR_FLDNAME_PREFIX."collapsed".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_VIEW_TBL",F_DR_TBLNAME_FLD_F2_PREFIX_OLD."view_name");
define("F_DR_CONTENT_VIEW_FLD",F_DR_FLDNAME_PREFIX_OLD."view_name".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_UID_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."user_uid_field");
define("F_DR_CONTENT_UID_FLD",F_DR_FLDNAME_PREFIX."user_uid_field".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_FLDLST_TBL",F_DR_TBLNAME_F2_PREFIX."html_tables");
define("F_DR_CONTENT_FLDLST_FLD",F_DR_FLDNAME_PREFIX."field_list".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_MAXROWS_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."table_size");
define("F_DR_CONTENT_MAXROWS_FLD",F_DR_FLDNAME_PREFIX."table_size".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_APPEND_TABLE_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."append_table");
define("F_DR_CONTENT_APPEND_TABLE_FLD",F_DR_FLDNAME_PREFIX."append_table".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_APPEND_SHOWASROW_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."append_row");
define("F_DR_CONTENT_APPEND_SHOWASROW_FLD",F_DR_FLDNAME_PREFIX."append_row".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_SUBMIT_LABEL_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."submit_label");
define("F_DR_CONTENT_SUBMIT_LABEL_FLD",F_DR_FLDNAME_PREFIX."submit_label".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_SUBMIT_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."submit");
define("F_DR_CONTENT_SUBMIT_FLD",F_DR_FLDNAME_PREFIX."submit".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_SHOWTITLES_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."showtitles");
define("F_DR_CONTENT_SHOWTITLES_FLD",F_DR_FLDNAME_PREFIX."showtitles".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_SHOWHEADERS_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."showheaders");
define("F_DR_CONTENT_SHOWHEADERS_FLD",F_DR_FLDNAME_PREFIX."showheaders".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_DEFAULTS_TABLE_TBL",F_DR_TBLNAME_F2_PREFIX."append_record");
define("F_DR_CONTENT_DEFAULTS_TABLE_FLD",F_DR_FLDNAME_PREFIX."defaults_table".F_DR_FLDNAME_SUFFIX);
define("F_DR_RECORD_SELECT_TBL",F_DR_TBLNAME_F2_PREFIX."html_tables");
define("F_DR_RECORD_SELECT_FLD",F_DR_FLDNAME_PREFIX."record_select".F_DR_FLDNAME_SUFFIX);
define("F_DR_RECORD_SELECT_TABLE_TBL",F_DR_TBLNAME_F2_PREFIX."html_tables");
define("F_DR_RECORD_SELECT_TABLE_FLD",F_DR_FLDNAME_PREFIX."record_select_tbl".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTENT_KEYFLD_TBL",F_DR_TBLNAME_FLD_F2_PREFIX."key_field");
define("F_DR_CONTENT_KEYFLD_FLD",F_DR_FLDNAME_PREFIX."key_field".F_DR_FLDNAME_SUFFIX);
define("F_DR_ADD_NEW_ROW_TBL",F_DR_TBLNAME_F2_PREFIX."editable_grid");
define("F_DR_ADD_NEW_ROW_FLD",F_DR_FLDNAME_PREFIX."add_new_row".F_DR_FLDNAME_SUFFIX);
define("F_DR_HTML_BASENAME","fetchit_html_form_");
define("F_DR_APPEND_BASENAME","fetchit_append_form_");
define("F_DR_EDITABLE_GRID_BASENAME","fetchit_editable_grid_form_");
define("F_DR_DB_HOST_TBL",F_DR_TBLNAME_FLD_F2_PREFIX_OLD."db_host");
define("F_DR_DB_HOST_FLD",F_DR_FLDNAME_PREFIX_OLD."db_host".F_DR_FLDNAME_SUFFIX);
define("F_DR_DB_TYPE_TBL",F_DR_TBLNAME_FLD_F2_PREFIX_OLD."db_type");
define("F_DR_DB_TYPE_FLD",F_DR_FLDNAME_PREFIX_OLD."db_type".F_DR_FLDNAME_SUFFIX);
define("F_DR_DB_PORT_TBL",F_DR_TBLNAME_FLD_F2_PREFIX_OLD."db_port");
define("F_DR_DB_PORT_FLD",F_DR_FLDNAME_PREFIX_OLD."db_port".F_DR_FLDNAME_SUFFIX);
define("F_DR_DB_NAME_TBL",F_DR_TBLNAME_FLD_F2_PREFIX_OLD."db_name");
define("F_DR_DB_NAME_FLD",F_DR_FLDNAME_PREFIX_OLD."db_name".F_DR_FLDNAME_SUFFIX);
define("F_DR_DB_USER_TBL",F_DR_TBLNAME_FLD_F2_PREFIX_OLD."db_user");
define("F_DR_DB_USER_FLD",F_DR_FLDNAME_PREFIX_OLD."db_user".F_DR_FLDNAME_SUFFIX);
define("F_DR_DB_PWRD_TBL",F_DR_TBLNAME_FLD_F2_PREFIX_OLD."db_password");
define("F_DR_DB_PWRD_FLD",F_DR_FLDNAME_PREFIX_OLD."db_password".F_DR_FLDNAME_SUFFIX);
define("F_DR_CONTROL_TEXTBOX",0);
define("F_DR_CONTROL_DATESEL",1);
define("F_DR_CONTROL_DROPDOWN_SINGLE",2);
define("F_DR_CONTROL_RADIOBTN",3);
define("F_DR_CONTROL_CHECKBOXES",4);
define("F_DR_CONTROL_DROPDOWN_MULTI",5);
define("F_DR_CONTROL_CHECKBOX",6);
define("F_DR_CONTROL_DATETIMESEL",7);
define("F_DR_CONTROL_POPUPDATE",8);
define("F_DR_TEXTBOX_TEXT",0);
define("F_DR_TEXTBOX_NUMBER",1);
define("F_DR_TEXTBOX_DATE",2);
define("F_DR_LIST_TBL_SPECIAL_CHAR","#");
define("F_DR_LIST_TBL_NDX_FLD","stored");
define("F_DR_LIST_TBL_DSP_FLD","displayed");
define("F_DR_LIST_TBL_UID_FLD","drupal_userid");
define("F_DR_DATA_TBL_NDX_FLD","stored");
define("F_DR_DATA_TBL_UID_FLD","drupal_userid");
define("F_DR_FORM_ELE_DEF","default");
define("F_DR_FORM_ERROR_DEF","<br><b>Error: Form could not be created.</b><br>");
//define("F_DR_NID_FLD","nid");
define("F_DR_DBTYPE_MYSQL","MySQL");
define("F_DR_DBTYPE_PGSQL","PostgreSQL");
define("F_DR_DBTYPE_MSSQL","SQLServer");
define("F_DR_PARAM_FIELD_LIST_COUNT",7);
define("F_DR_APPEND_FIELD_LIST_COUNT",7);
define("F_DR_GRID_FIELD_LIST_COUNT",7);
define("F_DR_USER_FIELD_LIST_COUNT",7);
define("F_DR_FIELD_TBLNAME_PREFIX",F_DR_TBLNAME_FLD_F2_PREFIX."field");
define("F_DR_FIELD_FLDNAME_PREFIX",F_DR_FLDNAME_PREFIX."field");
define("F_DR_FIELD_FLDNAME_SUFFIX",F_DR_FLDNAME_SUFFIX);
define("F_DR_FIELD_NAME_STR","name");
define("F_DR_FIELD_TITLE_STR","title");
define("F_DR_FIELD_DESC_STR","desc");
define("F_DR_FIELD_INPUT_TYPE_STR","input_type");
define("F_DR_FIELD_LIST_TBL_STR","list_tbl");
define("F_DR_FIELD_LIST_UID_STR","list_uid");
define("F_DR_FIELD_DATA_TBL_STR","data_tbl");
define("F_DR_FIELD_DATA_UID_STR","data_uid");
define("F_DR_FIELD_DEFAULT_STR","default");
define("F_DR_FIELD_DISABLED_STR","disabled");
define("F_DR_FIELD_REQUIRED_STR","required");
define("F_DR_FIELD_VALIDATE_STR","validate");
define("F_DR_FIELD_SUBMIT_STR","submit");
define("F_DR_FIELD_PARAMETER_STR","input_parm");
define("F_DR_CONTENT_ERR_1","Missing database type. Please check the database connection configuration.");
define("F_DR_CONTENT_ERR_2","Missing database host. Please check the database connection configuration.");
define("F_DR_CONTENT_ERR_3","Missing database port. Please check the database connection configuration.");
define("F_DR_CONTENT_ERR_4","Missing database name. Please check the database connection configuration.");
define("F_DR_CONTENT_ERR_5","Missing database login. Please check the database connection configuration.");
define("F_DR_CONTENT_ERR_6","Missing database password. Please check the database connection configuration.");
define("F_DR_CONTENT_ERR_7","Unable to connect to database server with given settings. Please check the database connection configuration or contact the database administrator.");
define("F_DR_CONTENT_ERR_8","Missing view/table name. Please check the database content configuration.");
define("F_DR_CONTENT_ERR_9","Unable to create content from the database view/table.  Please check the database connection configuration or contact the database administrator.");
define("F_DR_CONTENT_ERR_10","MySQL databases are currently not supported.");
define("F_DR_CONTENT_ERR_11","SQL Server databases are currently not supported.");
define("F_DR_CONTENT_ERR_12","An unsupported database type was specified.");
define("F_DR_CONTENT_ERR_13","Unable to find fields in the database view/table.  Please check the database connection configuration or contact the database administrator.");
define("F_DR_CONTENT_ERR_14","error 14");
define("F_DR_CONTENT_ERR_15","error 15");
define("F_DR_CONTENT_ERR_16","error 16");
define("F_DR_CONTENT_ERR_17","error 17");
?>