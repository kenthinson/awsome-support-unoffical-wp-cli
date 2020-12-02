# Awsome Support Unoffical WP-CLI

On my wordpress site I disabled wordperss loopback and run all schdules actions using WP-CLI and cron.

This works well for most plugins. However it was not working for Awsome Support mail piping.

So I tracked down the function call to get new mails. I added it to a simple plugin that can be called from cron.

That is all this plugin does at this time.

# Example of usage
`wp uas getNewSupportEmails`


# Warning

No checking is done to make sure Awsome Support or it's required email piping plugin are installed. Use at your own risk. MIT license.
