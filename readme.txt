=== Worcade ===
Contributors: worcade
Tags: worcade, contact form, form, conversation, shortcode, page, post, widget
License: GPLv2 or later
Requires at least: 4.0
Tested up to: 5.1.1
Stable tag: 1.1.1

Adds the shortcode <code>[worcade]</code> to WordPress so you can insert a <a href="https://www.worcade.com/integrations/widget/?utm_source=wordpress&utm_medium=referral&utm_campaign=wordpress-widget">Worcade</a> contact form in any page, post or widget.

== Description ==

Worcade is a communication platform for service professionals. It allows customers and suppliers to collaborate more easily, joyfully and efficiently.

Worcade provides a contact form widget you can add to your web site so people can start a conversation with you. This plugin makes it easy to add the contact form to your WordPress web site, using a shortcode.

The contact form requires visitors to enter a message to start the conversation. The form also requires an email address so you can get back to your visitor. Entering a name is optional.

If your visitors are already using Worcade and logged in, they're recognised and don't have to enter their email address. If the email address of your visitor is recognised by Worcade but the user is not logged in, they can login immediately.

All participants to the conversation receive a link to the Worcade conversation via email. The link opens a web page where they can easily exchange information.

You can <a href="https://www.worcade.com/?utm_source=wordpress&utm_medium=referral&utm_campaign=homepage">learn more about Worcade</a> via our web site.

== Installation ==

1. Upload the folder worcade to the /wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Add [worcade] to the page, post or widget that should show your contact form.

By default, the widget just prints "Please provide an id for a targetuser OR targetgroup.". This means the plugin is working!

Next, you need to add at least one parameter to the shortcode to tell Worcade who should receive the message.

<ul>
<li>To receive the message as a Worcade group, use [worcade targetgroup="worcade-group-id"]</li>
<li>To receive the message as a Worcade user, use [worcade targetuser="worcade-user-id"]</li>
</ul>

You can create the shortcode, including Worcade id, via Worcade profile settings.

You can then customise the widget even further by adding more parameters. The following are supported:

* width (widget width, defaults to "500px")
* height (widget height defaults to "575px")
* language (widget language, defaults to "en")
* subject (conversation subject in Worcade, defaults to "Worcade widget conversation")

== Screenshots ==

1. Empty Worcade contact form.
2. Visitor entered a message and email address and can send the message.
3. Visitor entered a message. The email address used is recognised by Worcade but the visitor is not logged in yet.
4. The recognised visitor is logged in and can send the message.
5. The message is sent. All participants receive an email message with a link to the conversation.
6. Message in the overview of messages in Worcade

== Changelog ==

= 1.1.1 =

* Default widget height to 575px to accommodate long usernames.

= 1.1 =

* Renamed parameter "title" to "subject".
* Added parameter "targetgroup" as the contact form can now reach either a user (targetuser) or a group (targetgroup).
* Updated plugin instructions to reflect these changes.
* Removed our hardcoded targetuser id.
* Tested against WordPress 4.6.

Tip: You can easily create a WordPress shortcode from your Worcade profile settings.

= 1.0 =

* Shortcode with parameters width, height, targetuser, title and language

== Frequently Asked Questions ==

= How can I see the plugin is working? =

If you add [worcade] to a page, post or widget via WordPress and it still displays in (pre)view, the plugin is not working. Have you activated the plugin?

= The shortcode prints "Please provide an id for a targetuser OR targetgroup." instead of a contact form =

You need to add at least one parameter to the widget, like this:

[worcade targetuser="your-worcade-id"]

You can the shortcode including "your-worcade-id" in your Worcade profile settings.

= I changed the language parameter but the widget still prints in English =

Worcade only supports a few languages. At widget launch, "nl" and "en" are supported.

= What is Worcade? =

Worcade is a communication platform for service professionals. It allows customers and suppliers to collaborate more easily, joyfully and efficiently.

<a href="https://www.worcade.com/?utm_source=wordpress&utm_medium=referral&utm_campaign=homepage">Visit our web site to learn more about Worcade</a>.

= Can I see the plugin in action? =

Of course! We have it running as a contact form on the <a href="https://www.worcade.com/about/?utm_source=wordpress&utm_medium=referral&utm_campaign=wordpress-widget">Worcade web site</a>.