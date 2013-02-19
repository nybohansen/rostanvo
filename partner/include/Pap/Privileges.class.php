<?php
/**
 *   @copyright Copyright (c) 2007 Quality Unit s.r.o.
 *   @author Michal Bebjak
 *   @package PostAffiliatePro
 *   @since Version 1.0.0
 *   $Id: Paths.class.php 20126 2008-08-25 13:20:39Z vzeman $
 *
 *   Licensed under the Quality Unit, s.r.o. Dual License Agreement,
 *   Version 1.0 (the "License"); you may not use this file except in compliance
 *   with the License. You may obtain a copy of the License at
 *   http://www.qualityunit.com/licenses/gpf
 *
 */

/**
 * This class can be generated using parsePrivileges.php script in applications scripts folder
 *
 * @package PostAffiliatePro
 */
abstract class Pap_Privileges extends Gpf_Privileges {

    //All after start tag is autogenerated !
    //Don't delete following line !!!!!
    //<PRIVILEGES_START>

	// Privilege types
	const P_READ = "read";
	const P_READ_OWN = "read_own";
	const P_WRITE = "write";
	const P_EXPORT = "export";
	const P_DELETE = "delete";
	const P_ADD = "add";
	const P_ADD_OWN = "add_own";
	const P_EXPORT_OWN = "export_own";
	const P_WRITE_OWN = "write_own";
	const P_IMPORT = "import";
	const P_LOAD = "load";
	const P_ANALYZE = "analyze";
	const P_OPTIMIZE = "optimize";
	const P_REPAIR = "repair";
	const P_APPROVE_PENDING = "approve_pending";
	const P_DECLINE_PENDING = "decline_pending";
	const P_REFUND = "refund";

	// Privilege objects
	const ACCOUNT = "account"; // P_ADD, P_DELETE, P_READ, P_READ_OWN, P_WRITE, P_WRITE_OWN
	const ACCOUNT_NAME = "account_name"; // P_READ
	const ACCOUNT_NOTIFICATION = "account_notification"; // P_READ, P_WRITE
	const ACCOUNT_SIGNUP_SETTING = "account_signup_setting"; // P_READ, P_WRITE
	const ACCOUNTING_STATS = "accounting_stats"; // P_READ, P_READ_OWN
	const ADVANCED_FUNCTIONALITY = "advanced_functionality"; // P_READ
	const AFFIILIATE_SCREEN = "affiiliate_screen"; // P_READ
	const AFFILIATE = "affiliate"; // P_ADD, P_DELETE, P_EXPORT, P_READ, P_WRITE
	const AFFILIATE_EMAIL_NOTIFICATION = "affiliate_email_notification"; // P_READ, P_WRITE
	const AFFILIATE_INVOICE = "affiliate_invoice"; // P_READ, P_READ_OWN
	const AFFILIATE_LOGIN_FORM = "affiliate_login_form"; // P_READ
	const AFFILIATE_PANEL_SETTINGS = "affiliate_panel_settings"; // P_ADD, P_DELETE, P_READ, P_WRITE
	const AFFILIATE_SETTINGS = "affiliate_settings"; // P_READ, P_WRITE
	const AFFILIATE_SIGNUP_FORM = "affiliate_signup_form"; // P_READ
	const AFFILIATE_SIGNUP_SETTING = "affiliate_signup_setting"; // P_READ, P_WRITE
	const AFFILIATE_STATS = "affiliate_stats"; // P_READ
	const AFFILIATE_TRACKING_CODE = "affiliate_tracking_code"; // P_DELETE, P_READ, P_READ_OWN, P_WRITE, P_WRITE_OWN
	const AFFILIATE_TREE = "affiliate_tree"; // P_READ
	const AFFILIATES_OVERVIEW = "affiliates_overview"; // P_READ
	const BANNER = "banner"; // P_ADD, P_DELETE, P_EXPORT, P_READ, P_WRITE
	const BANNER_FORMAT_SETTING = "banner_format_setting"; // P_READ, P_WRITE
	const BANNER_STATS = "banner_stats"; // P_READ
	const BANNERS_CATEGORIES = "banners_categories"; // P_ADD, P_READ, P_WRITE
	const BANNERS_OVERVIEW = "banners_overview"; // P_READ
	const BRANDING = "branding"; // P_READ, P_WRITE
	const CAMPAIGN = "campaign"; // P_ADD, P_DELETE, P_EXPORT, P_READ, P_WRITE
	const CAMPAIGN_STATS = "campaign_stats"; // P_READ
	const CAMPAIGNS_CATEGORIES = "campaigns_categories"; // P_ADD, P_READ, P_WRITE
	const CAMPAIGNS_OVERVIEW = "campaigns_overview"; // P_READ
	const CCBILL_SETTINGS = "ccbill_settings"; // P_READ, P_WRITE
	const CHANNEL = "channel"; // P_ADD, P_DELETE, P_EXPORT, P_READ, P_WRITE
	const CLICK = "click"; // P_DELETE, P_EXPORT, P_EXPORT_OWN, P_READ, P_READ_OWN
	const CLICK_INTEGRATION = "click_integration"; // P_READ
	const COMMISSION = "commission"; // P_READ, P_WRITE
	const COMMISSION_GROUP = "commission_group"; // P_ADD, P_DELETE, P_READ, P_WRITE
	const COMMUNICATION_OVERVIEW = "communication_overview"; // P_READ
	const COMPRESSED_COMMISSION_PLACEMENT_MODEL = "compressed_commission_placement_model"; // P_READ, P_WRITE
	const CONFIGURATION_OVERVIEW = "configuration_overview"; // P_READ
	const CONTACT_US = "contact_us"; // P_WRITE
	const COOKIES_SETTING = "cookies_setting"; // P_READ, P_WRITE
	const COUNTRY = "country"; // P_READ
	const COUPON = "coupon"; // P_ADD, P_DELETE, P_EXPORT, P_IMPORT, P_READ, P_WRITE
	const COUPON_SALE = "coupon_sale"; // P_ADD
	const CRONJOB = "cronjob"; // P_READ, P_WRITE
	const CURRENCY = "currency"; // P_ADD, P_DELETE, P_EXPORT, P_READ, P_WRITE
	const CUSTOM_FIELD_ID = "custom_field_id"; // P_READ, P_WRITE
	const CUSTOM_REFID_SETTINGS = "custom_refid_settings"; // P_READ, P_WRITE
	const CUSTOM_SEPARATOR = "custom_separator"; // P_READ, P_WRITE
	const DAILY_REPORT = "daily_report"; // P_READ
	const DATABASE = "database"; // P_ANALYZE, P_EXPORT, P_OPTIMIZE, P_READ, P_REPAIR
	const DB_FILE = "db_file"; // P_WRITE
	const DIRECT_LINK = "direct_link"; // P_ADD, P_ADD_OWN, P_DELETE, P_EXPORT, P_READ, P_READ_OWN, P_WRITE
	const FINANCIAL_OVERVIEW = "financial_overview"; // P_READ
	const FORM_FIELD = "form_field"; // P_READ, P_WRITE
	const FRAUD_PROTECTION = "fraud_protection"; // P_READ, P_WRITE
	const GENERAL_LINK = "general_link"; // P_READ
	const GENERAL_SETTING = "general_setting"; // P_READ, P_WRITE
	const GETTING_STARTED = "getting_started"; // P_READ, P_WRITE
	const GRID_VIEW = "grid_view"; // P_WRITE
	const IMPORT_EXPORT = "import_export"; // P_IMPORT
	const INTEGRATION_METHODS = "integration_methods"; // P_READ
	const INTEGRATION_OVERVIEW = "integration_overview"; // P_READ
	const INVOICE = "invoice"; // P_ADD, P_DELETE, P_READ, P_READ_OWN, P_WRITE
	const INVOICE_FORMAT = "invoice_format"; // P_READ, P_WRITE
	const LIFETIME_COMM_SETTINGS = "lifetime_comm_settings"; // P_READ, P_WRITE
	const LINK_CLOAKER = "link_cloaker"; // P_READ
	const LOGGING_SETTING = "logging_setting"; // P_READ, P_WRITE
	const MAIL_TEMPLATE = "mail_template"; // P_READ
	const MAPOVERLAY = "mapoverlay"; // P_EXPORT, P_READ
	const MASS_EMAIL = "mass_email"; // P_WRITE
	const MERCH_EMAIL_NOTIFICATION = "merch_email_notification"; // P_READ, P_WRITE
	const MERCHANT = "merchant"; // P_ADD, P_DELETE, P_READ, P_READ_OWN, P_WRITE
	const NETWORK_INVOICE_FORMAT = "network_invoice_format"; // P_READ, P_WRITE
	const ONLINE_USER = "online_user"; // P_EXPORT, P_READ
	const PARAMETER_NAMES = "parameter_names"; // P_READ, P_WRITE
	const PAY_AFFILIATE = "pay_affiliate"; // P_EXPORT, P_READ, P_WRITE
	const PAY_AFFILIATE_STATS = "pay_affiliate_stats"; // P_READ
	const PAYOUT = "payout"; // P_EXPORT, P_EXPORT_OWN, P_READ, P_READ_OWN
	const PAYOUT_HISTORY = "payout_history"; // P_DELETE, P_EXPORT, P_READ, P_WRITE
	const PAYOUT_OPTION = "payout_option"; // P_ADD, P_DELETE, P_EXPORT, P_READ, P_WRITE
	const PAYOUTS_OVERVIEW = "payouts_overview"; // P_READ
	const PDF = "pdf"; // P_READ, P_WRITE
	const PENDING_TASK = "pending_task"; // P_READ
	const PERIOD_STATS = "period_stats"; // P_READ
	const PROMOTION_OVERVIEW = "promotion_overview"; // P_READ
	const QUICK_STATS = "quick_stats"; // P_READ
	const RECURRING_COMMISSIONS_CONFIG = "recurring_commissions_config"; // P_READ, P_WRITE
	const RECURRING_TRANSACTION = "recurring_transaction"; // P_ADD, P_DELETE, P_EXPORT, P_READ, P_WRITE
	const REFIDLENGTH = "refidlength"; // P_READ, P_WRITE
	const REPORT_PROBLEM = "report_problem"; // P_WRITE
	const REPORTS_OVERVIEW = "reports_overview"; // P_READ
	const RESEND_URL = "resend_url"; // P_READ, P_WRITE
	const ROLE = "role"; // P_READ, P_READ_OWN, P_WRITE
	const ROLE_NAME = "role_name"; // P_READ, P_READ_OWN
	const RULE = "rule"; // P_ADD, P_DELETE, P_READ, P_WRITE
	const SPLIT_COMMISSIONS_FORM = "split_commissions_form"; // P_LOAD, P_WRITE
	const SUB_AFF_SALE = "sub_aff_sale"; // P_EXPORT, P_READ
	const SUB_AFF_STATS = "sub_aff_stats"; // P_READ
	const SUBID_TRACKING = "subid_tracking"; // P_READ
	const THEME = "theme"; // P_READ, P_WRITE
	const TOOLS_OVERVIEW = "tools_overview"; // P_READ
	const TRACKING_MOD_REWRITE = "tracking_mod_rewrite"; // P_READ, P_WRITE
	const TRACKING_SETTING = "tracking_setting"; // P_READ, P_WRITE
	const TRAFFIC_STATS = "traffic_stats"; // P_READ
	const TRANSACTION = "transaction"; // P_ADD, P_APPROVE_PENDING, P_DECLINE_PENDING, P_DELETE, P_EXPORT, P_EXPORT_OWN, P_READ, P_READ_OWN, P_REFUND, P_WRITE
	const TRANSACTION_STATS = "transaction_stats"; // P_READ
	const TRANSACTIONS_OVERVIEW = "transactions_overview"; // P_READ
	const TREND_STATS = "trend_stats"; // P_READ
	const TROUBLESHOOTING = "troubleshooting"; // P_READ
	const URL_SETTING = "url_setting"; // P_READ, P_WRITE
	const USER_COMM_GROUP = "user_comm_group"; // P_ADD, P_DELETE, P_EXPORT, P_READ, P_WRITE
	const USER_IN_COMMISSION_GROUP = "user_in_commission_group"; // P_ADD, P_DELETE, P_READ, P_WRITE
	const USERIDSEQUENCE = "useridsequence"; // P_READ, P_WRITE
	const VAT_SETTING = "vat_setting"; // P_READ, P_WRITE
	const VIEWS = "views"; // P_READ, P_WRITE
	const VISITOR_AFFILIATES = "visitor_affiliates"; // P_READ
	

	protected function initObjectRelation() {
		$objectRelation = array_merge_recursive(parent::initObjectRelation(), array(
		self::ACCOUNT=>array(self::P_ADD, self::P_DELETE, self::P_READ, self::P_READ_OWN, self::P_WRITE, self::P_WRITE_OWN),
		self::ACCOUNT_NAME=>array(self::P_READ),
		self::ACCOUNT_NOTIFICATION=>array(self::P_READ, self::P_WRITE),
		self::ACCOUNT_SIGNUP_SETTING=>array(self::P_READ, self::P_WRITE),
		self::ACCOUNTING_STATS=>array(self::P_READ, self::P_READ_OWN),
		self::ADVANCED_FUNCTIONALITY=>array(self::P_READ),
		self::AFFIILIATE_SCREEN=>array(self::P_READ),
		self::AFFILIATE=>array(self::P_ADD, self::P_DELETE, self::P_EXPORT, self::P_READ, self::P_WRITE),
		self::AFFILIATE_EMAIL_NOTIFICATION=>array(self::P_READ, self::P_WRITE),
		self::AFFILIATE_INVOICE=>array(self::P_READ, self::P_READ_OWN),
		self::AFFILIATE_LOGIN_FORM=>array(self::P_READ),
		self::AFFILIATE_PANEL_SETTINGS=>array(self::P_ADD, self::P_DELETE, self::P_READ, self::P_WRITE),
		self::AFFILIATE_SETTINGS=>array(self::P_READ, self::P_WRITE),
		self::AFFILIATE_SIGNUP_FORM=>array(self::P_READ),
		self::AFFILIATE_SIGNUP_SETTING=>array(self::P_READ, self::P_WRITE),
		self::AFFILIATE_STATS=>array(self::P_READ),
		self::AFFILIATE_TRACKING_CODE=>array(self::P_DELETE, self::P_READ, self::P_READ_OWN, self::P_WRITE, self::P_WRITE_OWN),
		self::AFFILIATE_TREE=>array(self::P_READ),
		self::AFFILIATES_OVERVIEW=>array(self::P_READ),
		self::BANNER=>array(self::P_ADD, self::P_DELETE, self::P_EXPORT, self::P_READ, self::P_WRITE),
		self::BANNER_FORMAT_SETTING=>array(self::P_READ, self::P_WRITE),
		self::BANNER_STATS=>array(self::P_READ),
		self::BANNERS_CATEGORIES=>array(self::P_ADD, self::P_READ, self::P_WRITE),
		self::BANNERS_OVERVIEW=>array(self::P_READ),
		self::BRANDING=>array(self::P_READ, self::P_WRITE),
		self::CAMPAIGN=>array(self::P_ADD, self::P_DELETE, self::P_EXPORT, self::P_READ, self::P_WRITE),
		self::CAMPAIGN_STATS=>array(self::P_READ),
		self::CAMPAIGNS_CATEGORIES=>array(self::P_ADD, self::P_READ, self::P_WRITE),
		self::CAMPAIGNS_OVERVIEW=>array(self::P_READ),
		self::CCBILL_SETTINGS=>array(self::P_READ, self::P_WRITE),
		self::CHANNEL=>array(self::P_ADD, self::P_DELETE, self::P_EXPORT, self::P_READ, self::P_WRITE),
		self::CLICK=>array(self::P_DELETE, self::P_EXPORT, self::P_EXPORT_OWN, self::P_READ, self::P_READ_OWN),
		self::CLICK_INTEGRATION=>array(self::P_READ),
		self::COMMISSION=>array(self::P_READ, self::P_WRITE),
		self::COMMISSION_GROUP=>array(self::P_ADD, self::P_DELETE, self::P_READ, self::P_WRITE),
		self::COMMUNICATION_OVERVIEW=>array(self::P_READ),
		self::COMPRESSED_COMMISSION_PLACEMENT_MODEL=>array(self::P_READ, self::P_WRITE),
		self::CONFIGURATION_OVERVIEW=>array(self::P_READ),
		self::CONTACT_US=>array(self::P_WRITE),
		self::COOKIES_SETTING=>array(self::P_READ, self::P_WRITE),
		self::COUNTRY=>array(self::P_READ),
		self::COUPON=>array(self::P_ADD, self::P_DELETE, self::P_EXPORT, self::P_IMPORT, self::P_READ, self::P_WRITE),
		self::COUPON_SALE=>array(self::P_ADD),
		self::CRONJOB=>array(self::P_READ, self::P_WRITE),
		self::CURRENCY=>array(self::P_ADD, self::P_DELETE, self::P_EXPORT, self::P_READ, self::P_WRITE),
		self::CUSTOM_FIELD_ID=>array(self::P_READ, self::P_WRITE),
		self::CUSTOM_REFID_SETTINGS=>array(self::P_READ, self::P_WRITE),
		self::CUSTOM_SEPARATOR=>array(self::P_READ, self::P_WRITE),
		self::DAILY_REPORT=>array(self::P_READ),
		self::DATABASE=>array(self::P_ANALYZE, self::P_EXPORT, self::P_OPTIMIZE, self::P_READ, self::P_REPAIR),
		self::DB_FILE=>array(self::P_WRITE),
		self::DIRECT_LINK=>array(self::P_ADD, self::P_ADD_OWN, self::P_DELETE, self::P_EXPORT, self::P_READ, self::P_READ_OWN, self::P_WRITE),
		self::FINANCIAL_OVERVIEW=>array(self::P_READ),
		self::FORM_FIELD=>array(self::P_READ, self::P_WRITE),
		self::FRAUD_PROTECTION=>array(self::P_READ, self::P_WRITE),
		self::GENERAL_LINK=>array(self::P_READ),
		self::GENERAL_SETTING=>array(self::P_READ, self::P_WRITE),
		self::GETTING_STARTED=>array(self::P_READ, self::P_WRITE),
		self::GRID_VIEW=>array(self::P_WRITE),
		self::IMPORT_EXPORT=>array(self::P_IMPORT),
		self::INTEGRATION_METHODS=>array(self::P_READ),
		self::INTEGRATION_OVERVIEW=>array(self::P_READ),
		self::INVOICE=>array(self::P_ADD, self::P_DELETE, self::P_READ, self::P_READ_OWN, self::P_WRITE),
		self::INVOICE_FORMAT=>array(self::P_READ, self::P_WRITE),
		self::LIFETIME_COMM_SETTINGS=>array(self::P_READ, self::P_WRITE),
		self::LINK_CLOAKER=>array(self::P_READ),
		self::LOGGING_SETTING=>array(self::P_READ, self::P_WRITE),
		self::MAIL_TEMPLATE=>array(self::P_READ),
		self::MAPOVERLAY=>array(self::P_EXPORT, self::P_READ),
		self::MASS_EMAIL=>array(self::P_WRITE),
		self::MERCH_EMAIL_NOTIFICATION=>array(self::P_READ, self::P_WRITE),
		self::MERCHANT=>array(self::P_ADD, self::P_DELETE, self::P_READ, self::P_READ_OWN, self::P_WRITE),
		self::NETWORK_INVOICE_FORMAT=>array(self::P_READ, self::P_WRITE),
		self::ONLINE_USER=>array(self::P_EXPORT, self::P_READ),
		self::PARAMETER_NAMES=>array(self::P_READ, self::P_WRITE),
		self::PAY_AFFILIATE=>array(self::P_EXPORT, self::P_READ, self::P_WRITE),
		self::PAY_AFFILIATE_STATS=>array(self::P_READ),
		self::PAYOUT=>array(self::P_EXPORT, self::P_EXPORT_OWN, self::P_READ, self::P_READ_OWN),
		self::PAYOUT_HISTORY=>array(self::P_DELETE, self::P_EXPORT, self::P_READ, self::P_WRITE),
		self::PAYOUT_OPTION=>array(self::P_ADD, self::P_DELETE, self::P_EXPORT, self::P_READ, self::P_WRITE),
		self::PAYOUTS_OVERVIEW=>array(self::P_READ),
		self::PDF=>array(self::P_READ, self::P_WRITE),
		self::PENDING_TASK=>array(self::P_READ),
		self::PERIOD_STATS=>array(self::P_READ),
		self::PROMOTION_OVERVIEW=>array(self::P_READ),
		self::QUICK_STATS=>array(self::P_READ),
		self::RECURRING_COMMISSIONS_CONFIG=>array(self::P_READ, self::P_WRITE),
		self::RECURRING_TRANSACTION=>array(self::P_ADD, self::P_DELETE, self::P_EXPORT, self::P_READ, self::P_WRITE),
		self::REFIDLENGTH=>array(self::P_READ, self::P_WRITE),
		self::REPORT_PROBLEM=>array(self::P_WRITE),
		self::REPORTS_OVERVIEW=>array(self::P_READ),
		self::RESEND_URL=>array(self::P_READ, self::P_WRITE),
		self::ROLE=>array(self::P_READ, self::P_READ_OWN, self::P_WRITE),
		self::ROLE_NAME=>array(self::P_READ, self::P_READ_OWN),
		self::RULE=>array(self::P_ADD, self::P_DELETE, self::P_READ, self::P_WRITE),
		self::SPLIT_COMMISSIONS_FORM=>array(self::P_LOAD, self::P_WRITE),
		self::SUB_AFF_SALE=>array(self::P_EXPORT, self::P_READ),
		self::SUB_AFF_STATS=>array(self::P_READ),
		self::SUBID_TRACKING=>array(self::P_READ),
		self::THEME=>array(self::P_READ, self::P_WRITE),
		self::TOOLS_OVERVIEW=>array(self::P_READ),
		self::TRACKING_MOD_REWRITE=>array(self::P_READ, self::P_WRITE),
		self::TRACKING_SETTING=>array(self::P_READ, self::P_WRITE),
		self::TRAFFIC_STATS=>array(self::P_READ),
		self::TRANSACTION=>array(self::P_ADD, self::P_APPROVE_PENDING, self::P_DECLINE_PENDING, self::P_DELETE, self::P_EXPORT, self::P_EXPORT_OWN, self::P_READ, self::P_READ_OWN, self::P_REFUND, self::P_WRITE),
		self::TRANSACTION_STATS=>array(self::P_READ),
		self::TRANSACTIONS_OVERVIEW=>array(self::P_READ),
		self::TREND_STATS=>array(self::P_READ),
		self::TROUBLESHOOTING=>array(self::P_READ),
		self::URL_SETTING=>array(self::P_READ, self::P_WRITE),
		self::USER_COMM_GROUP=>array(self::P_ADD, self::P_DELETE, self::P_EXPORT, self::P_READ, self::P_WRITE),
		self::USER_IN_COMMISSION_GROUP=>array(self::P_ADD, self::P_DELETE, self::P_READ, self::P_WRITE),
		self::USERIDSEQUENCE=>array(self::P_READ, self::P_WRITE),
		self::VAT_SETTING=>array(self::P_READ, self::P_WRITE),
		self::VIEWS=>array(self::P_READ, self::P_WRITE),
		self::VISITOR_AFFILIATES=>array(self::P_READ)
		));

		foreach ($objectRelation as $key => $value) {
			$objectRelation[$key] = array_unique($value);
		}
		return $objectRelation;
	}

}
?>
