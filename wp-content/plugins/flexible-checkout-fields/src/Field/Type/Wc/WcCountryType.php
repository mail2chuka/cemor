<?php

namespace WPDesk\FCF\Free\Field\Type\Wc;

use WPDesk\FCF\Free\Field\Type\TypeAbstract;
use WPDesk\FCF\Free\Settings\Option\CssOption;
use WPDesk\FCF\Free\Settings\Option\DisplayOnOption;
use WPDesk\FCF\Free\Settings\Option\EnabledOption;
use WPDesk\FCF\Free\Settings\Option\FormattingWcOption;
use WPDesk\FCF\Free\Settings\Option\LabelOption;
use WPDesk\FCF\Free\Settings\Option\LogicAdvOption;
use WPDesk\FCF\Free\Settings\Option\NameOption;
use WPDesk\FCF\Free\Settings\Option\OptionInterface;
use WPDesk\FCF\Free\Settings\Option\PriorityOption;
use WPDesk\FCF\Free\Settings\Option\RequiredWcHiddenOption;
use WPDesk\FCF\Free\Settings\Option\ValidationInfoOption;
use WPDesk\FCF\Free\Settings\Option\ValidationOption;
use WPDesk\FCF\Free\Settings\Tab\AdvancedTab;
use WPDesk\FCF\Free\Settings\Tab\AppearanceTab;
use WPDesk\FCF\Free\Settings\Tab\DisplayTab;
use WPDesk\FCF\Free\Settings\Tab\GeneralTab;
use WPDesk\FCF\Free\Settings\Tab\LogicTab;

/**
 * {@inheritdoc}
 */
class WcCountryType extends TypeAbstract {

	const FIELD_TYPE = 'wc_country';

	/**
	 * {@inheritdoc}
	 */
	public function get_field_type(): string {
		return self::FIELD_TYPE;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_field_type_label(): string {
		return __( 'WooCommerce Default Field', 'flexible-checkout-fields' );
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_reserved_field_names(): array {
		return [
			'billing_country',
			'shipping_country',
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function is_hidden(): bool {
		return true;
	}

	/**
	 * {@inheritdoc}
	 */
	public function is_available(): bool {
		return true;
	}

	/**
	 * Returns list of options for field settings.
	 *
	 * @return OptionInterface[] List of option fields.
	 */
	public function get_options_objects(): array {
		return [
			GeneralTab::TAB_NAME    => [
				PriorityOption::FIELD_NAME         => new PriorityOption(),
				EnabledOption::FIELD_NAME          => new EnabledOption(),
				RequiredWcHiddenOption::FIELD_NAME => new RequiredWcHiddenOption(),
				LabelOption::FIELD_NAME            => new LabelOption(),
				NameOption::FIELD_NAME             => new NameOption(),
			],
			AdvancedTab::TAB_NAME   => [
				ValidationOption::FIELD_NAME     => new ValidationOption(),
				ValidationInfoOption::FIELD_NAME => new ValidationInfoOption(),
			],
			AppearanceTab::TAB_NAME => [
				CssOption::FIELD_NAME => new CssOption(),
			],
			DisplayTab::TAB_NAME    => [
				DisplayOnOption::FIELD_NAME    => new DisplayOnOption(),
				FormattingWcOption::FIELD_NAME => new FormattingWcOption(),
			],
			LogicTab::TAB_NAME      => [
				LogicAdvOption::FIELD_NAME => new LogicAdvOption(),
			],
		];
	}
}
