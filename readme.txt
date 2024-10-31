=== Profile Change Alerts ===

Contributors: littlebizzy
Tags: profile, user, change, update, emails, alerts
Requires at least: 4.4
Tested up to: 4.8
Requires PHP: 7.0
Stable tag: 1.0
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Sends an email both to the WordPress admin and relevant user whenever that user updates any field on their profile (also works with WooCommerce).

== Description ==

Sends an email both to the WordPress admin and relevant user whenever that user updates any field on their profile (also works with WooCommerce).

There are two contexts where this plugin works: the admin profile page (both for your own user or editing other user) and, if enabled, the WC account address edit pages (front-end).

From the classic WP user profile, the plugin aims to detect the changes in the following fields:

- Password
- Nicename
- User email
- User URL
- User status (Multisite behaviour)
- Display name
- Roles
- Nickname
- First name
- Last name
- Biographical Info
- Visual Editor
- Keyboard shortcuts
- Admin Color Scheme
- Show front Toolbar

It is not possible to detect the avatar URL changes because it depends of the online gravatar service.

The Woocommerce fields supported are (both from admin profile page and WC frontend account pages):

- Billing First name
- Billing Last name
- Billing Company
- Billing Address line 1
- Billing Address line 2
- Billing City
- Billing Postcode / ZIP
- Billing Country
- Billing State / County
- Billing Phone
- Billing Email address

- Shipping First name
- Shipping Last name
- Shipping Company
- Shipping Address line 1
- Shipping Address line 2
- Shipping City
- Shipping Postcode / ZIP
- Shipping Country
- Shipping State / County

In future versions we may support more popupar WP or Woo plugins (let us know what you want).

The email is composed from the core/email.php file, I suppose you will modify these labels. I have added different subjects for each email sended. The email message includes the user login name, a link to the admin user profile, and of course the list of changes detected.

== Installation ==

1. Upload to `/wp-content/plugins/` directory
2. Activate the plugin in WP Admin

== Changelog ==

= 1.0.0 =
* initial release
